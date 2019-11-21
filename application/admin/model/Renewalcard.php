<?php

namespace app\admin\model;

use think\Model;

class Renewalcard extends Model
{
    //页面加载时动态显示数据
    public function selectlist($page)
    {
        $totalNum=Renewalcard::count();
        $pageSize=5;
        $totalPage=ceil($totalNum/$pageSize);
        $pageStart=($page-1)*$pageSize;
        //数组--空数组
        $data=Renewalcard::limit($pageStart,$pageSize)->order('id','asc')->select();
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
        $res=Renewalcard::save($data);
        return $res;
    }
    //删除操作
    public function deletelist($id)
    {
        $res=Renewalcard::where('id',$id)->delete();
        //0--记录数
        return $res;
    }
    //批量删除操作
    public function deletesomelist($ids)
    {
        //0--被影响的条数  把数组以逗号分隔转换为字符串
        $data=implode(",",$ids);
        $res=Renewalcard::where("id in ($data)")->delete();
        return $res;
    }
    //搜索操作
    public function searchlist($data)
    {
        //数组--空数组
        $datalist=Renewalcard::where('member_name','like',"%".$data."%")
            ->select();
        return $datalist;
    }
}
