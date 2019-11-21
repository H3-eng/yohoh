<?php

namespace app\admin\model;

use think\Model;

class Courseweek extends Model
{
    //页面加载时动态显示数据
    public function selectlist($page)
    {
        $totalNum=Courseweek::count();
        $pageSize=5;
        $totalPage=ceil($totalNum/$pageSize);
        $pageStart=($page-1)*$pageSize;
        //数组--空数组
        $data=Courseweek::alias("a")
            ->leftJoin("areainfo b",'a.area_id=b.id')
            ->leftJoin("courseinfo c","a.course_id=c.id")
            ->leftJoin("coachinfo d","a.coach_id=d.id")
            ->field("a.*,c.course_name,b.areaname,c.course_name,d.coachname")
            ->limit($pageStart,$pageSize)
            ->order('id','asc')
            ->select();
        $array=[];
        $arr=array(
            'totalNum'=>$totalNum,//总记录数
            'totalPage'=>$totalPage,//总页数
            'pageSize'=>$pageSize  //每页数量
        );
        array_push($array, $arr);
        foreach($data as $k=>$v){
            array_push($array,$v);
        }
        return $array;
    }
    //查找所有数据
    public function selectall()
    {
        $data=Courseweek::select();
        return $data;
    }
    //添加操作
    public function addlist($data)
    {
        //true--false
        $res=Courseweek::save($data);
        return $res;
    }
    //修改操作显示页面
    public function selectone($id)
    {
        //数组--null
        $res=Courseweek::where('id',$id)->find();
        return $res;
    }
    //修改操作
    public function updatelist($data)
    {
        //数组--空数组
        $res=Courseweek::update($data)->toArray();
        return $res;
    }
    //删除操作
    public function deletelist($id)
    {
        $res=Courseweek::where('id',$id)->delete();
        //0--记录数
        return $res;
    }
    //批量删除操作
    public function deletesomelist($ids)
    {
        //0--被影响的条数  把数组以逗号分隔转换为字符串
        $data=implode(",",$ids);
        $res=Courseweek::where("id in ($data)")->delete();
        return $res;
    }
    //查找十点的课程
    public function select1()
    {
        $res=Courseweek::alias("a")
            ->where("course_time",'10:00-11:30')
            ->join("courseinfo c","a.course_id=c.id")
            ->field("a.course_week,c.course_name")
            ->select();
        return $res;
    }
    //查找14点的课程
    public function select2()
    {
        $res=Courseweek::alias("a")
            ->where("course_time",'14:00-15:30')
            ->join("courseinfo c","a.course_id=c.id")
            ->field("a.course_week,c.course_name")
            ->select();
        return $res;
    }
    //查找16点的课程
    public function select3()
    {
        $res=Courseweek::alias("a")
        -> where("course_time",'16:00-17:30')
        ->join("courseinfo c","a.course_id=c.id")
        ->field("a.course_week,c.course_name")
        ->select();
        return $res;
    }
    //查找19点的课程
    public function select4()
    {
        $res=Courseweek::alias("a")
        ->where("course_time",'19:00-20:30')
        ->join("courseinfo c","a.course_id=c.id")
        ->field("a.course_week,c.course_name")
        ->select();
        return $res;
    }
}
