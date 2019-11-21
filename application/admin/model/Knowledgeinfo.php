<?php

namespace app\admin\model;

use think\Model;

class Knowledgeinfo extends Model
{
    //页面加载时动态显示数据
    public function selectlist($page)
    {
        $totalNum=Knowledgeinfo::count();
        $pageSize=5;
        $totalPage=ceil($totalNum/$pageSize);
        $pageStart=($page-1)*$pageSize;
        //数组--空数组
        $data=Knowledgeinfo::limit($pageStart,$pageSize)->order('id','asc')->select();
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
    //查找一条数据
    public function selectone($id)
    {
        $res=Knowledgeinfo::where('id',$id)->find();
        return $res;
    }
    //添加数据
    public function savelist($data)
    {
        $res=Knowledgeinfo::save($data);
        return $res;
    }
    //修改数据
    public function updatelist($data)
    {
        $res=Knowledgeinfo::update($data);
        return $res;
    }
    //删除一条数据
    public function deletelist($id)
    {
        $res=Knowledgeinfo::where('id',$id)->delete();
        return $res;
    }
    //批量删除操作
    public function deletesomelist($ids)
    {
        //0--被影响的条数  把数组以逗号分隔转换为字符串
        $data=implode(",",$ids);
        $res=Knowledgeinfo::where("id in ($data)")->delete();
        return $res;
    }
    //搜索操作
    public function searchlist($data)
    {
        //数组--空数组
        $datalist=Knowledgeinfo::where('author|keyword','like',"%".$data."%")
            ->select();
        return $datalist;
    }
//    计算数据表的数据总数
    public function countlist(){
        $res=Knowledgeinfo::count();
        return $res;
    }
}
