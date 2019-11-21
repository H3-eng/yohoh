<?php

namespace app\admin\model;

use think\Model;

class Areainfo extends Model
{
    //页面加载时动态显示数据
    public function selectlist($page)
    {
        $totalNum=Areainfo::count();
        $pageSize=5;
        $totalPage=ceil($totalNum/$pageSize);
        $pageStart=($page-1)*$pageSize;
        //数组--空数组
        $data=Areainfo::limit($pageStart,$pageSize)
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
        $res=Areainfo::save($data);
        return $res;
    }
    //修改操作显示页面
    public function selectone($id)
    {
        //数组--null
        $res=Areainfo::where('id',$id)->find();
        return $res;
    }
    //修改操作
    public function updatelist($data)
    {
        //数组--空数组
        $res=Areainfo::update($data);
        return $res;
    }
    //删除操作
    public function deletelist($id)
    {
        $res=Areainfo::where('id',$id)->delete();
        //0--记录数
        return $res;
    }
    //批量删除操作
    public function deletesomelist($ids)
    {
        //0--被影响的条数  把数组以逗号分隔转换为字符串
        $data=implode(",",$ids);
        $res=Areainfo::where("id in ($data)")->delete();
        return $res;
    }
    //搜索操作
    public function searchlist($data)
    {
        //数组--空数组
        $datalist=Areainfo::where('areaname','like',"%".$data."%")
            ->select();
        return $datalist;
    }
    //查找场地的名称
    public function searchareaname()
    {
        //数组--空数组
        $datalist=Areainfo::select();
        return $datalist;
    }
}
