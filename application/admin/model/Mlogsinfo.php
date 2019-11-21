<?php

namespace app\admin\model;

use think\Model;

class Mlogsinfo extends Model
{
    //页面加载时动态显示数据
    public function selectlist($page)
    {
        $totalNum=Mlogsinfo::count();
        $pageSize=5;
        $totalPage=ceil($totalNum/$pageSize);
        $pageStart=($page-1)*$pageSize;
        //数组--空数组
        $data=Mlogsinfo::limit($pageStart,$pageSize)
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
        $res=Mlogsinfo::where('id',$id)->delete();
        return $res;
    }
    //批量删除操作
    public function deletesomelist($ids)
    {
        //被影响的条数  把数组以逗号分隔转换为字符串
        $data=implode(",",$ids);
        $res=Mlogsinfo::where("id in ($data)")->delete();
        return $res;
    }
    //搜索操作
    public function searchlist($data)
    {
        //数组--空数组
        $datalist=Mlogsinfo::where('name','like',"%".$data."%")
            ->select();
        return $datalist;
    }
}
