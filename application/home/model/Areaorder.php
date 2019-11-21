<?php

namespace app\home\model;

use think\Model;

class Areaorder extends Model
{
    public function savelist($data)
    {
        $res=Areaorder::save($data);
        return $res;
    }
    public function selectid($m_id)
    {
        $res=Areaorder::where('member_id',$m_id)->order('create_time desc')->paginate(5);
        return $res;
    }
    public function selectfix()
    {

        $res=Areaorder::paginate(1);
        return $res;
    }
}
