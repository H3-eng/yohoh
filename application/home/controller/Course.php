<?php

namespace app\home\controller;

use app\home\model\Courseinfo;
use app\home\model\Courseweek;
use app\home\model\Pcoachinfo;
use app\home\model\Pcoursebook;
use app\home\model\Pcourseinfo;
use think\Controller;
use think\Request;

class Course extends Controller
{
    //显示团操页面
    public function course()
    {
        $courseinfo=new Courseinfo();
        $courselist=$courseinfo->selectname();
        /*显示每周课程*/
        $courseweek=new Courseweek();
        $data=[];
        foreach ($courselist as $k=>$v){
             $id=$v['id'];
             $week=$courseweek->selectweek($id);
             array_push($data,$week);
        }
        // /*显示私教课程0-9页*/
        $pcourseinfo=new Pcourseinfo();
        $count=$pcourseinfo->selectcount();
        $pdata=$pcourseinfo->selectlist();
        $pdata2=$pcourseinfo->selectlist2();
        $pdata3=$pcourseinfo->selectlist3();
         return view('Course/course',compact('courselist','data','pdata','pdata2','pdata3','count'));
    }
    //显示私教页面
    public function pcourse()
    {
        $pcourseinfo=new Pcourseinfo();
        $data=$pcourseinfo->selectlall();
        return view('Course/pcourse',compact('data'));
    }
    public function padd(Request $request)
    {
        $data=[
            'username'=>$request->username,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'course_name'=>$request->course_name,
            'course_id'=>$request->course_id,
            'member_id'=>$request->member_id
        ];
        $pcoursebook=new Pcoursebook();
        $res=$pcoursebook->addlist($data);
        if($res){
            $this->success('提交成功');
        }else{
            $this->error('提交失败');
        }
    }
}
