<?php

namespace app\admin\model;

use think\Model;

class Roleinfo extends Model
{
    //显示页面
    public function selectlist($page)
    {
        $totalNum=Roleinfo::count();
        $pageSize=5;
        $totalPage=ceil($totalNum/$pageSize);
        $pageStart=($page-1)*$pageSize;
        //数组--空数组
        $data=Roleinfo::alias("a")
            ->leftJoin("Powerinfo b","a.powerid=b.id")
            ->field("a.*,b.powername,b.described")
            ->limit($pageStart,$pageSize)->select();
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
        $res=Roleinfo::save($data);
        return $res;
    }
    //修改操作显示页面
    public function selectone($id)
    {
        //数组--null
        $res=Roleinfo::where('id',$id)->find();
        return $res;
    }
    //修改操作
    public function updatelist($data)
    {
        //数组--空数组
        $res=Roleinfo::update($data)->toArray();
        return $res;
    }
    //删除操作
    public function deletelist($id)
    {
        $res=Roleinfo::where('id',$id)->delete();
        //0--记录数
        return $res;
    }
    //批量删除操作
    public function deletesomelist($ids)
    {
        //0--被影响的条数  把数组以逗号分隔转换为字符串
        $data=implode(",",$ids);
        $res=Roleinfo::where("id in ($data)")->delete();
        return $res;
    }
    //搜索操作
    public function searchlist($data)
    {
        //数组--空数组
        $datalist=Roleinfo::alias("a")
            ->join("Powerinfo b","a.powerid=b.id")
            ->where('a.rolename','like',"%".$data."%")
            ->field("a.*,b.powername,b.described")
            ->select();
        return $datalist;
    }
    //查找角色名称
    public function selectname()
    {
        $data=Roleinfo::select();
        return $data;
    }

    public function selectrole($id)
    {
        $res=Roleinfo::where('id',$id)->field('rolename')->find();
        return $res;
    }
}
