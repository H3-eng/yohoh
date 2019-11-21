<?php

namespace app\home\controller;

use app\home\model\Activityinfo;
use think\Controller;
use think\Request;

class Activity extends Controller
{
    //显示会员活动文章
    public function article(Request $request)
    {
        $id=(int)$request->id;
        $activityinfo=new Activityinfo();
        $data=$activityinfo->selectone($id);
        $type='activity';
        return view('Common/article',compact('data','type'));
    }
    //显示会员专区页面
    public function customers()
    {
        $activityinfo=new Activityinfo();
        $data=$activityinfo->selectall();
        return view('Activity/customers',compact('data'));
    }
}
