<?php

namespace app\admin\model;

use think\Model;

class Provinceinfo extends Model
{
    public function selectall(){
        //数组--空数组
        $res=Provinceinfo::select();
        return $res;
    }
}
