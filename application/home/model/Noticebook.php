<?php

namespace app\home\model;

use think\Model;

class Noticebook extends Model
{
    //添加数据
    public function addlist($data)
    {
        $res=Noticebook::save($data);
        return $res;
    }
}
