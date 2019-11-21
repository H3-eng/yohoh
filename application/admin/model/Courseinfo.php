<?php

namespace app\admin\model;

use think\Model;

class Courseinfo extends Model
{
    //页面加载时动态显示数据
    public function selectlist($page)
    {
        $totalNum=Courseinfo::count();
        $pageSize=5;
        $totalPage=ceil($totalNum/$pageSize);
        $pageStart=($page-1)*$pageSize;
        //数组--空数组
        $data=Courseinfo::limit($pageStart,$pageSize)
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
    //添加操作
    public function addlist($data)
    {
        //true--false
        $res=Courseinfo::save($data);
        return $res;
    }
    //修改操作显示页面
    public function selectone($id)
    {
        //数组--null
        $res=Courseinfo::where('id',$id)->find();
        return $res;
    }
    //修改操作
    public function updatelist($data)
    {
        //数组--空数组
        $res=Courseinfo::update($data)->toArray();
        return $res;
    }
    //删除操作
    public function deletelist($id)
    {
        $res=Courseinfo::where('id',$id)->delete();
        //0--记录数
        return $res;
    }
    //搜索操作
    public function searchlist($data)
    {
        //数组--空数组
        $datalist=Courseinfo::where('course_name','like',"%".$data."%")
            ->select();
        return $datalist;
    }
    //查找课程的名称
    public function searchareaname()
    {
        //数组--空数组
        $datalist=Courseinfo::select();
        return $datalist;
    }
    //每周显示课表查找课程名称
    public function selectname($id)
    {
        //数组--空数组
        $datalist=Courseinfo::where('id',$id)->field("course_name")->select();
        return $datalist;
    }
}
