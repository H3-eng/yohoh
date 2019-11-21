<?php

namespace app\home\model;

use think\Model;

class Pcoursebook extends Model
{
    //添加数据
    public function addlist($data)
    {
        $res=Pcoursebook::save($data);
        return $res;
    }
}
