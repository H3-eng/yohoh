<?php

namespace app\admin\model;

use think\Model;

class Coursebuy extends Model
{
    //页面加载时动态显示数据
    public function selectlist($page)
    {
        $totalNum=Coursebuy::count();
        $pageSize=5;
        $totalPage=ceil($totalNum/$pageSize);
        $pageStart=($page-1)*$pageSize;
        //数组--空数组
        $data=Coursebuy::alias("a")
            ->leftJoin("Pcourseinfo b","a.course_id=b.id")
            ->field("a.*,b.course_name,b.coachname")
            ->limit($pageStart,$pageSize)
            ->order('id','asc')
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
    //添加订单
    public function addlist($data)
    {
        //true--false
        $res=Coursebuy::save($data);
        if($res){
            //修改课程的现有人数
            $pcourseinfo=new Pcourseinfo();
            $numdata=$pcourseinfo->selectnum($data['course_id']);
            $num=$numdata[0]['member_num']+1;
            $datalist=[
               'id'=> $data['course_id'],
                'member_num'=>$num
            ];
            $res=$pcourseinfo->updatelist($datalist);
            if(count($res)){
               return 1;
            }else{
                return 0;
            }
        }else{
            return 0;
        }
    }
    //删除操作
    public function deletelist($id)
    {
        //0--记录数
        $res=Coursebuy::where('id',$id)->delete();
       return $res;
    }
    //搜索操作
    public function searchlist($data)
    {
        //数组--空数组
        $datalist=Coursebuy::where('member_name','like',"%".$data."%")
            ->select();
        return $datalist;
    }
}
