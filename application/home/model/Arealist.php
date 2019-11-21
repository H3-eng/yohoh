<?php

namespace app\home\model;

use think\Model;

class Arealist extends Model
{
    public function selectlist()
    {
        $data=Arealist::select();
        return $data;
    }
}
