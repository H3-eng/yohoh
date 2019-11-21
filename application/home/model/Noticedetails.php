<?php

namespace app\home\model;

use think\Model;

class Noticedetails extends Model
{
    //添加数据
    public function addlist($data)
    {
        $res=Noticedetails::insertAll($data);
        return $res;
    }
}
