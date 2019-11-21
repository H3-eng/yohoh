<?php

namespace app\home\model;

use think\Model;

class Mlogsinfo extends Model
{
    public function addlogs($data)
    {
        $res=Mlogsinfo::save($data);
        return $res;
    }
    //查找一条数据
    public function selectlist($member_id)
    {
        $res=Mlogsinfo::where("member_id",$member_id)->order("create_time desc")->find();
        return $res;
   }
    //查找全部数据
    public function selectall($member_id)
    {
        $res=Mlogsinfo::where("member_id",$member_id)->order("create_time desc")->paginate(10);
        return $res;
    }
    //查找四条数据
    public function selectfour($member_id)
    {
        $res=Mlogsinfo::where("member_id",$member_id)->order("create_time desc")->limit(0,4)->select();
        return $res;
    }
}
