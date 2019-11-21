<?php

namespace app\home\model;

use think\Model;

class Messageinfo extends Model
{

    public function selectlist($page)
    {
        $totalNum=Messageinfo::where('issue','未读')->count();
        $pageSize=5;
        $totalPage=ceil($totalNum/$pageSize);
        $pageStart=($page-1)*$pageSize;
        //数组--空数组
        $data=Messageinfo::where('issue','未读')->limit($pageStart,$pageSize)->order('id','asc')->select();
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
    public function selectall($page)
    {
        $totalNum=Messageinfo::count();
        $pageSize=5;
        $totalPage=ceil($totalNum/$pageSize);
        $pageStart=($page-1)*$pageSize;
        //数组--空数组
        $data=Messageinfo::limit($pageStart,$pageSize)->order('id','asc')->select();
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
    public function issueupdata($id)
    {
        $data=Messageinfo::where('id',$id)->update(['issue' => '已读']);
        return $data;
    }
    //批量删除操作
    public function deletesomelist($ids)
    {
        //0--被影响的条数  把数组以逗号分隔转换为字符串
        $data=implode(",",$ids);
        $res=Messageinfo::where("id in ($data)")->delete();
        return $res;
    }
//查找一条数据
    public function selectone($id)
    {
        $res=Messageinfo::where("id",$id)->select();
        return $res;
    }
}
