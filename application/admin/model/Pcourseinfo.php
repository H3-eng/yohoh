<?php

namespace app\admin\model;

use think\Model;

class Pcourseinfo extends Model
{
    //页面加载时动态显示数据
    public function selectlist($page)
    {
        $totalNum=Pcourseinfo::count();
        $pageSize=5;
        $totalPage=ceil($totalNum/$pageSize);
        $pageStart=($page-1)*$pageSize;
        //数组--空数组
        $data=Pcourseinfo::limit($pageStart,$pageSize)->order('id','asc')->select();
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
        $res=Pcourseinfo::save($data);
        return $res;
    }
    //修改操作显示页面
    public function selectone($id)
    {
        //数组--null
        $res=Pcourseinfo::where('id',$id)->find();
        return $res;
    }
    //修改操作
    public function updatelist($data)
    {
        //数组--空数组
        $res=Pcourseinfo::update($data)->toArray();
        return $res;
    }
    //删除操作
    public function deletelist($id)
    {
        $res=Pcourseinfo::where('id',$id)->delete();
        //0--记录数
        return $res;
    }
    //搜索操作
    public function searchlist($data)
    {
        //数组--空数组
        $datalist=Pcourseinfo::where('course_name','like',"%".$data."%")
            ->select();
        return $datalist;
    }
    //添加报名人数
    public function addnum($id)
    {
        //数组--空数组
        $datalist=Pcourseinfo::where('id',$id)->update();
        return $datalist;
    }
    //查找课程的名称
    public function searchareaname()
    {
        //数组--空数组
        $datalist=Pcourseinfo::select();
        return $datalist;
    }
    //查找课程的现有人数
    public function selectnum($id)
    {
        //数组--空数组
        $datalist=Pcourseinfo::where('id',$id)->field('member_num')->select();
        return $datalist;
    }
}
