<?php

namespace app\admin\model;

use think\Model;

class Noticedetails extends Model
{
    public function selectall()
    {
        $data=Noticedetails::select();
        return $data;
    }
    public function selectone($id)
    {
        $data=Noticedetails::where('order_id',$id)->select();
        return $data;
    }
}
