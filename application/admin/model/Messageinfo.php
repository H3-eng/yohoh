<?php

namespace app\admin\model;

use think\Model;

class Messageinfo extends Model
{
    public function savelist($data)
    {
        $res=Messageinfo::save($data);
        return $res;
   }
}
