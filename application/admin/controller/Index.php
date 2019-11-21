<?php

namespace app\admin\controller;

use app\admin\model\Admininfo;
use app\admin\model\Areaorder;
use app\admin\model\Coursebook;
use app\admin\model\Logsinfo;
use app\admin\model\Memberinfo;
use app\admin\model\Noticebook;
use app\admin\model\Pcoursebook;
use think\Controller;
use think\Request;

class Index extends Base
{
    public function index()
    {
        $noticebook=new Noticebook();
        $count=$noticebook->countlist();
        $pcoursebook=new Pcoursebook();
        $pcount=$pcoursebook->countlistb();
        $total=$count+$pcount;
        return view('Index/index',compact('count','pcount','total'));
   }
    //退出登录
    public function loginout()
    {
        //清空session
        session(null);
        if(session('?admin.id')){
            return '退出失败';
        }else{
            $this->redirect('admin/Login/login');
        }
    }
    //显示首页
    public function indexform()
    {
        $memberinfo=new Memberinfo();
        $mcount=$memberinfo->countlist();
        $areaorder=new Areaorder();
        $acount=$areaorder->countlist();
        $pcoursebook=new Pcoursebook();
        $pcount=$pcoursebook->countlist();
        $coursebook=new Coursebook();
        $ccount=$coursebook->countlist();
        return view('Index/indexform',compact('mcount','acount','pcount','ccount'));
    }
    //修改头像
    public function avatarform()
    {
        return view('Index/avatarform');
    }
    //显示上传图片
    public function picpro()
    {
        $file = request()->file('picname');
        $info = $file->move( './static/admin/images/avatarform');
        if($info){
            return  json(['status'=>0,'name'=>'/static/admin/images/avatarform/'.$info->getSaveName()]);
        }else{
            return  json(['status'=>1,'name'=>$file->getError()]);
        }
    }
    public function avatar(Request $request)
    {
        $picname= $request->picname;
        $pic_name=parse_url($picname)['path'];
        $id=session("admin.id");
        $data=[
            'id'=>$id,
            'pic_name'=>$pic_name
        ];
        $admininfo=new Admininfo();
        $res=$admininfo->updatepic($data);
        if(count($res)){
            $this->success("修改成功");
        }else{
            $this->error("修改失败");
        }
    }
    //个人信息
    public function profile()
    {
        $name=session("admin.adminname");
        $logsinfo=new Logsinfo();
        $data=$logsinfo->selectone($name);
//        $datalist=$logsinfo->selecttwo($name);
        return view('Index/profile',compact('data'));
    }
}
