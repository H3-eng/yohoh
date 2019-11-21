<?php

namespace app\home\model;

use think\Model;

class Courseinfo extends Model
{
    public function selectname()
    {
        $data=Courseinfo::select();
        return $data;
    }
    public function searchcourse($name){
         $relname=Courseinfo::where('course_name','like',"%".$name."%")->select();
        return $relname;

    }
}
