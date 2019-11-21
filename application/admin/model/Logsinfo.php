<?php

namespace app\admin\model;

use think\Model;

class Logsinfo extends Model
{
    public function addlogs($data)
    {
        //true--false
        $res=Logsinfo::save($data);
        return $res;
    }
    //页面加载时动态显示数据
    public function selectlist($page)
    {
        $totalNum=Logsinfo::count();
        $pageSize=5;
        $totalPage=ceil($totalNum/$pageSize);
        $pageStart=($page-1)*$pageSize;
        //数组--空数组
        $data=Logsinfo::limit($pageStart,$pageSize)
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
    //删除操作
    public function deletelist($id){
        //0--1(只传了一个id值，并不是数组)
        $res=Logsinfo::where('id',$id)->delete();
        return $res;
    }
    //批量删除操作
    public function deletesomelist($ids)
    {
        //被影响的条数  把数组以逗号分隔转换为字符串
        $data=implode(",",$ids);
        $res=Logsinfo::where("id in ($data)")->delete();
        return $res;
    }
    //搜索操作
    public function searchlist($data)
    {
        //数组--空数组
        $datalist=Logsinfo::where('name','like',"%".$data."%")
            ->select();
        return $datalist;
    }
    //查找当前账户的信息
    public function selectone($name)
    {
        $datalist=Logsinfo::where('name',$name)
            ->order("create_time desc")
            ->paginate(10);
        return $datalist;
    }
}
















