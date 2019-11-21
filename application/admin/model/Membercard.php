<?php

namespace app\admin\model;

use think\Model;

class Membercard extends Model
{
    //页面加载时动态显示数据
    public function selectlist($page)
    {
        $totalNum=Membercard::count();
        $pageSize=5;
        $totalPage=ceil($totalNum/$pageSize);
        $pageStart=($page-1)*$pageSize;
        //数组--空数组
        $data=Membercard::limit($pageStart,$pageSize)->select();
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
    public function addlist($data)
    {
        //true--false
        $res=Membercard::save($data);
        return $res;
    }
    //修改操作显示页面
    public function selectone($id)
    {
        //数组--null
        $res=Membercard::where('id',$id)->find();
        return $res;
    }
    //修改操作
    public function updatelist($data)
    {
        //数组--空数组
        $res=Membercard::update($data)->toArray();
        return $res;
    }
    //删除操作
    public function deletelist($id)
    {
        $res=Membercard::where('id',$id)->delete();
        //0--记录数
        return $res;
    }
    //显示所有数据
    public function selectall(){
        //数组--空数组
        $res=Membercard::select();
        return $res;
    }
}
