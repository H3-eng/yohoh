<?php

namespace app\admin\model;

use think\Model;

class Coursebook extends Model
{

    //添加操作
    public function addlist($data)
    {
        //true--false
        $res=Coursebook::save($data);
        return $res;
    }
    public function issuelist($data)
    {
        //数组--空数组
        $res=Coursebook::update($data)->toArray();
        return $res;
    }

    //统计数量
    public function countlist()
    {
        $data=Coursebook::count();
        return $data;
    }

}
