<?php

namespace app\admin\model;

use think\Model;

class Arealist extends Model
{
//页面加载时动态显示数据
    public function selectlist($page)
    {
        $totalNum=Arealist::count();
        $pageSize=5;
        $totalPage=ceil($totalNum/$pageSize);
        $pageStart=($page-1)*$pageSize;
//数组--空数组
        $data=Arealist::limit($pageStart,$pageSize)
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
        $res=Arealist::save($data);
        return $res;
    }
//修改操作显示页面
    public function selectone($id)
    {
//数组--null
        $res=Arealist::where('id',$id)->find();
        return $res;
    }
//修改操作
    public function updatelist($data)
    {
//数组--空数组
        $res=Arealist::update($data);
        return $res;
    }
//删除操作
    public function deletelist($id)
    {
        $res=Arealist::where('id',$id)->delete();
//0--记录数
        return $res;
    }
//批量删除操作
    public function deletesomelist($ids)
    {
//0--被影响的条数  把数组以逗号分隔转换为字符串
        $data=implode(",",$ids);
        $res=Arealist::where("id in ($data)")->delete();
        return $res;
    }
//搜索操作
    public function searchlist($data)
    {
//数组--空数组
        $datalist=Arealist::where('areaname','like',"%".$data."%")
            ->select();
        return $datalist;
    }
}