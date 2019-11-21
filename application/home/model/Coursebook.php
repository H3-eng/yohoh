<?php

namespace app\home\model;

use think\Model;

class Coursebook extends Model
{
    public function selectlist()
    {
        $res=Coursebook::paginate(10);
        return $res;
    }
}
