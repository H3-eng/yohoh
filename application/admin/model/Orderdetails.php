<?php

namespace app\admin\model;

use think\Model;

class Orderdetails extends Model
{
    public function selectone($id)
    {
        $data=Orderdetails::where("order_id",$id)->paginate(6);
        return $data;
    }
}
