<?php

namespace app\admin\controller;

use app\admin\model\Coursebook;
use app\admin\model\Messageinfo;
use app\admin\model\Noticebook;
use app\admin\model\Noticedetails;
use app\admin\model\Pcoursebook;
use think\Controller;
use think\Request;

class Noticeform extends Base
{

    public function noticeform()
    {
        $noticebook=new Noticebook();
        $data=$noticebook->selectall();
        $noticedetails=new Noticedetails();
        $datalist=$noticedetails->selectall();
        return view('Noticeform/noticeform',compact('data','datalist'));
    }
    //动态显示页面
    public function noticeformshow(Request $request)
    {
        if (request()->isAjax()) {
            $page = $request->page;
            $noticebook = new Noticebook();
            $data = $noticebook->selectlist($page);
            if(count($data)){
                return $data;
            }else{
                return 0;
            }
        }
    }
    //审核预订信息
    public function check(Request $request)
    {
        $noticebook=new Noticebook();
        $data=[
            'issue'=>$request->issue,
            'id'=>$request->id,
            'operator'=>session("admin.adminname")
        ];
        $res=$noticebook->updatelist($data);
        if($res){
            $this->success('审核成功！');
        }else{
            $this->error('审核失败！');
        }
    }

    public function pnoticeform()
    {
        $pcoursebook=new Pcoursebook();
        $data=$pcoursebook->selectall();
        return view('Noticeform/pnoticeform',compact('data'));
    }

    public function pcheck(Request $request)
    {
        $id=$request->id;
        $chargename=$request->chargename;
        $data=[
            'id'=>$id,
            'chargename'=>$chargename,
            'issue'=>"已读"
        ];
        $pcoursebook=new Pcoursebook();
        $res=$pcoursebook->updateissue($data);
        if(count($res)){
            return $res;
        }else{
            return 0;
        }
    }
}
