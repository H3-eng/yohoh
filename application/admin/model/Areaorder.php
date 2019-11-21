<?php

namespace app\admin\model;

use think\Model;

class Areaorder extends Model
{
    public function selectlist($page)
    {
        $totalNum=Areaorder::count();
        $pageSize=5;
        $totalPage=ceil($totalNum/$pageSize);
        $pageStart=($page-1)*$pageSize;
        //数组--空数组
        $data=Areaorder::limit($pageStart,$pageSize)
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
    //搜索操作
    public function searchlist($data)
    {
        //数组--空数组
        $datalist=Areaorder::where('username','like',"%".$data."%")
            ->select();
        return $datalist;
    }
    //统计数量
    public function countlist()
    {
        $data=Areaorder::count();
        return $data;
    }
}
