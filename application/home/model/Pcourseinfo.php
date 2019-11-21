<?php

namespace app\home\model;

use think\Model;

class Pcourseinfo extends Model
{
    //查找数据
    public function selectlall()
    {
        $res=Pcourseinfo::paginate(9);
        return $res;
    }
    //统计数据条数
    public function selectcount()
    {
        $res=Pcourseinfo::count();
        return $res;
    }
    //查找0-3条数据
    public function selectlist()
    {
        $res=Pcourseinfo::limit(0,3)->select();
        return $res;
    }
    //查找3-6条数据
    public function selectlist2()
    {
        $res=Pcourseinfo::limit(3,3)->select();
        return $res;
    }
    //查找6-9条数据
    public function selectlist3()
    {
        $res=Pcourseinfo::limit(6,3)->select();
        return $res;
    }
}
