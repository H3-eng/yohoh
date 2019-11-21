<?php

namespace app\home\model;

use think\Model;

class Orderdetails extends Model
{
    public function savelist($data)
    {
        $res = Orderdetails::insertAll($data);
        return $res;

    }
    public function selectlist()
    {
        $res = Orderdetails::select();
        return $res;
    }
    public function selectdate($date,$areaname)
    {
        $res = Orderdetails::where(['date'=>$date,'areaname'=>$areaname])->select();
        return $res;
    }
    public function selectall()
    {
        $res=Orderdetails::select();
        return $res;
    }
}
