<?php

namespace app\home\controller;

use app\home\model\Courseinfo;
use app\home\model\Courseweek;
use app\home\model\Memberinfo;
use app\home\model\Noticebook;
use app\home\model\Noticedetails;
use think\Controller;
use think\Request;

class Notice extends Controller
{
    public function add(Request $request)
    {
        $noticebook=new Noticebook();
        $datalist=[
            'member_id'=>Session('member.id'),
            'member_name'=>Session('member.member_name'),
            'member_card'=>Session('member.member_card'),
            'order_id'=>$request->order_id
        ];
        $res=$noticebook->addlist($datalist);
        if($res){
            $ids=$request->ids;
            $courseweek=new Courseweek();
            $data2=$courseweek->selectbook($ids);
            $data=[];
            foreach($data2 as $k=>$v){
                $res=[
                    'order_id'=>$request->order_id,
                    'course_name'=>$v['coursename'],
                    'course_coach'=>$v['coursecoach'],
                    'course_time'=>$v['course_time'],
                    'course_week'=>$v['course_week'],
                ];
                array_push($data, $res);
            }
            $noticedetails=new Noticedetails();
            $ret=$noticedetails->addlist($data);
            if ($ret) {
                $this->success('申请预订成功！');
            } else {
                $this->error('申请预订失败！');
            }
        }
    }
}
