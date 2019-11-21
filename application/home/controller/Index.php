<?php
namespace app\home\controller;
use app\common\validate\Admin;
use app\home\model\Activityinfo;
use app\home\model\Activitypic;
use app\home\model\Arealist;
use app\home\model\Areaorder;
use app\home\model\Coachinfo;
use app\home\model\Coachpic;
use app\home\model\Coursebook;
use app\home\model\Courseweek;
use app\home\model\Courseinfo;
use app\home\model\Knowledgeinfo;
use app\home\model\Knowledgepic;
use app\home\model\Memberinfo;
use app\home\model\Messageinfo;
use app\home\model\Mlogsinfo;
use app\home\model\Orderdetails;
use app\home\model\Userinfo;
use think\Controller;
use think\Request;
use think\Session;

class Index extends Controller
{
    //显示页面
    public function index()
    {
        $coachinfo=new Coachinfo();
        $coachlist=$coachinfo->selectlist();
        $activityinfo=new Activityinfo();
        $activitylist=$activityinfo->selectlist();
        $knowledgeinfo=new Knowledgeinfo();
        $knowledgelist=$knowledgeinfo->selectlist();
        return view('Index/index',compact('coachlist','knowledgelist','activitylist'));
    }
    //退出登录
    public function loginout()
    {
        //清空session
        session(null);
        if(session('?member.id')){
            return '退出失败';
        }else{
            $this->redirect('home/Login/login');
        }
    }
    //显示关于我们页面
    public function aboutus()
    {
        return view('Index/aboutus');
    }
    //显示消息中心页面
    public function message()
    {
        return view('Index/message');
    }
    public function messageshow(Request $request)
    {
        if (request()->isAjax()) {
            $page = $request->page;
            $messageinfo = new Messageinfo();
            $data = $messageinfo->selectlist($page);
            if (count($data)) {
                return $data;
            } else {
                return 0;
            }
        }
    }
    public function messageall(Request $request)
    {
        if (request()->isAjax()) {
            $page = $request->page;
            $messageinfo = new Messageinfo();
            $data = $messageinfo->selectall($page);
            if (count($data)) {
                return $data;
            } else {
                return 0;
            }
        }
    }
    public function messageissue(Request $request)
    {
        $id=$request->id;
        $messageinfo=new Messageinfo();
        $data=$messageinfo->issueupdata($id);
        if($data){
            return 1;
        }else{
            return 0;
        }
    }
    public function msg(Request $request)
    {
        $ids=$request->ids;
        $messageinfo=new Messageinfo();
        $res=$messageinfo->deletesomelist($ids);
        if($res){
            $this->success("删除成功!");
        }else{
            $this->error("删除失败!");
        }
    }
    public function showcoursemsg(Request $request)
    {
        if (request()->isAjax()) {
            $id = $request->id;
            $messageinfo = new Messageinfo();
            $data = $messageinfo->selectone($id);
            if (count($data)) {
                return $data;
            } else {
                return 0;
            }
        }
    }
    //显示场地预约页面
    public function areabook()
    {
        $arealist=new Arealist();
        $data=$arealist->selectlist();
        $orderdetails=new Orderdetails();
        $ret=$orderdetails->selectlist();
        return view('Index/areabook',compact('data','ret'));
    }
    public function bookarea(Request $request)
    {
        $data=[
            'username'=>$request->name,
            'money'=>$request->totalmoney,
            'member_id'=>$request->member_id,
            'order_id'=>$request->order_id,
        ];
        $areaorder=new Areaorder();
        $res=$areaorder->savelist($data);
       if($res){
           $orderdetails=new Orderdetails();
           $datalist=$request->str;
           $data=[];
           foreach($datalist as $v){
               $res=[
                   'order_id'=>$request->order_id,
                   'areaname'=>$v["areaname"],
                   'time'=>$v["time"],
                   'money'=>$v["money"],
                   'areanum'=>$v["areanum"],
                   'date'=>$request->date,
               ];
               array_push($data, $res);
           }
           $re=$orderdetails->savelist($data);
           return $re;
       }else{
           return 0;
       }
    }
    public function checkbox()
    {
        $orderdetails=new Orderdetails();
        $ret=$orderdetails->selectlist();
        if($ret){
            return $ret;
        }

    }
    public function searchdate(Request $request)
    {
        $date=$request->date;
        $areaname=$request->areaname;
        $orderdetails=new Orderdetails();
        $ret=$orderdetails->selectdate($date,$areaname);
        if(count($ret)) {
            return $ret;
        }else{
            return 0;
        }
    }
    //显示预约记录页面
    public function areadetails()
    {
        $member_id=Session('member.id');
        $areaorder=new Areaorder();
        $res=$areaorder->selectid($member_id);
        $orderdetails=new Orderdetails();
        $ret=$orderdetails->selectall();
        return view("Index/areadetails",compact('res','ret'));
    }
    //显示个人资料
    public function homedata()
    {
        $member_id=Session('member.id');
        $mlogsinfo=new Mlogsinfo();
        $res=$mlogsinfo->selectfour($member_id);
        return view("Index/homedata",compact('res'));
    }
    public function memberdata()
    {
        $member_id=Session('member.id');
        $memberinfo=new Memberinfo();
        $res=$memberinfo->selectone($member_id);
        if($res){
            return $res;
        }else{
            return 0;
        }
    }
    //修改密码
    public function updatep(Request $request)
    {
        $data=[
          'id'=>Session('member.id'),
            'pwd'=>$request->pwd
        ];
        $memberinfo=new Memberinfo();
        $res=$memberinfo->updatepwd($data);
        if(count($res)){
          $this->success("修改成功！");
        }else{
            $this->error("修改失败！");
        }
    }
    //修改资料
    public function updatedata(Request $request)
    {
        $data=[
            'id'=>Session('member.id'),
            'pet_name'=>$request->pet_name,
            'sex'=>$request->sex,
            'email'=>$request->email,
            'phone'=>$request->phone,
        ];
        $memberinfo=new Memberinfo();
        $res=$memberinfo->updatepwd($data);
        if(count($res)){
            $this->success("修改成功！");
        }else{
            $this->error("修改失败！");
        }
    }
    public function logsdata()
    {
        $member_id=Session('member.id');
        $mlogsinfo=new Mlogsinfo();
        $res=$mlogsinfo->selectlist($member_id);
        if($res){
            return $res;
        }else{
            return 0;
        }
    }
    public function logsmsg()
    {
        $member_id=Session('member.id');
        $mlogsinfo=new Mlogsinfo();
        $res=$mlogsinfo->selectall($member_id);
        return view("Index/logsmsg",compact('res'));
    }
    //上传头像
    public function homephoto()
    {
        return view('Index/homephoto');
    }
    //显示上传图片
    public function picpro()
    {
        $file = request()->file('picname');
        $info = $file->move( './static/home/images/homedata');
        if($info){
            return  json(['status'=>0,'name'=>'/static/home/images/homedata/'.$info->getSaveName()]);
        }else{
            return  json(['status'=>1,'name'=>$file->getError()]);
        }
    }
    public function savepicname(Request $request){
        $pic_name= $request->picname;
        $pic=parse_url($pic_name)['path'];
        $memberinfo=new Memberinfo();
        $data=[
            'id'=>Session('member.id'),
            'pic_name'=>$pic
        ];
        $res=$memberinfo->savepic($data);
        if($res){
            return 1;
        }else{
            return 0;
        }
    }
    //显示课程预约记录页面
    public function coursedetails()
    {
        $coursebook=new Coursebook();
        $res=$coursebook->selectlist();
        return view('Index/coursedetails',compact('res'));
    }
    //显示帮助中心页面
    public function help()
    {
        return view('Index/help');
    }
    //显示成为会员页面
    public function becomeus()
    {
        return view('Index/becomeus');
    }
     //显示搜索页面
    public function search()
    {
        return view('Index/search');
    }
    public function searchcon(Request $request)
    {
        $coursename=$request->coursename;
        $courseinfo=new Courseinfo();
        $res=$courseinfo->searchcourse($coursename);
        if(count($res)){
            $courseid=$res[0]["id"];
            $courseweek=new Courseweek();
            $data=$courseweek->searchmsg($courseid);
            return $data;
        }else{
            return 0;
        }
    }
}
