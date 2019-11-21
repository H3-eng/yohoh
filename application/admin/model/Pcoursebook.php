<?php

namespace app\admin\model;

use think\Model;

class Pcoursebook extends Model
{
    //页面加载时动态显示数据
    public function selectlist($page)
    {
        $totalNum=Pcoursebook::count();
        $pageSize=5;
        $totalPage=ceil($totalNum/$pageSize);
        $pageStart=($page-1)*$pageSize;
        //数组--空数组
        $data=Pcoursebook::where('issue',"已读")->limit($pageStart,$pageSize)->order('id','asc')->select();
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
    //修改操作显示页面
    public function selectone($id)
    {
        //数组--null
        $res=Pcoursebook::where('id',$id)->find();
        return $res;
    }
    //修改操作
    public function updatelist($data)
    {
        //数组--空数组
        $res=Pcoursebook::update($data)->toArray();
        return $res;
    }
    //删除操作
    public function deletelist($id)
    {
        $res=Pcoursebook::where('id',$id)->delete();
        //0--记录数
        return $res;
    }
    //搜索操作
    public function searchlist($data)
    {
        //数组--空数组
        $datalist=Pcoursebook::where('username','like',"%".$data."%")
            ->select();
        return $datalist;
    }
    //统计数量
    public function countlist()
    {
        $data=Pcoursebook::count();
        return $data;
    }
    public function countlistb(){
        $data=Pcoursebook::where('issue',"未读")->count();
        return $data;
    }
    public function selectall(){
        $data=Pcoursebook::where('issue',"未读")->select();
        return $data;
    }

    public function updateissue($data)
    {
        $res=Pcoursebook::update($data);
        return $res;
    }
}
