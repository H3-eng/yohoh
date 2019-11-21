<?php

namespace app\home\model;

use think\Model;

class Courseweek extends Model
{
    public function selectweek($id){
        $data=Courseweek::where('course_id',$id)->field("id,course_week,course_time")->select();
        return $data;
    }
    public function selectbook($ids)
    {
        //0--被影响的条数  把数组以逗号分隔转换为字符串
        $data=implode(",",$ids);
        $res=Courseweek::alias("a")
        ->where("a.id in ($data)")
        ->leftJoin("Courseinfo b","a.course_id=b.id")
        ->leftJoin("Coachinfo c","a.coach_id=c.id")
        ->field("a.*,b.course_name as coursename,c.coachname as coursecoach")
        ->select();
        return $res;
    }
    public function searchmsg($id){
        $data=Courseweek::alias("a")
        ->where("course_id",$id)  
        ->leftJoin("courseinfo b","a.course_id=b.id")
        ->leftJoin("areainfo c","a.area_id=c.id")
        ->leftJoin("coachinfo d","a.coach_id=d.id")
        ->field("a.*,b.course_name,c.areaname,d.coachname")
        ->select();
        return $data;
    }
}
