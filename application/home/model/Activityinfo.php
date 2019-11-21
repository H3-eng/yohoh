<?php

namespace app\home\model;

use think\Model;

class Activityinfo extends Model
{
    public function selectlist()
    {
       // 会员活动查询前六条数据
        $data=Activityinfo::field('id,title,content,pic_name')
            ->paginate(6);
        return $data;
    }
    // 查询所有的数据
    public function selectall()
    {
        $data=Activityinfo::field('id,title,content,pic_name,create_time')
            -> paginate(6);
        return $data;
    }
    //查询三条条数据
    public function selectone($id)
    {
        $data0=Activityinfo::where("id",$id-1)->field('id,title')->find();
        $data1=Activityinfo::where("id",$id)->find();
        $data2=Activityinfo::where("id",$id+1)->field('id,title')->find();
        $list=[];
        array_push($list, $data0);
        array_push($list, $data1);
        array_push($list, $data2);
        return $list;
    }
}
