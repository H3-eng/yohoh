<?php

namespace app\admin\model;

use think\Model;

class Noticebook extends Model
{
    //显示数据
    public function selectall()
    {
       $data=Noticebook::where("issue","待审核")->select();
        return $data;
    }
    //审核信息
    public function updatelist($data)
    {
        $res=Noticebook::update($data);
        return $res;
    }

    //预约列表
    public function selectlist($page)
        {
            $totalNum=Noticebook::count();
            $pageSize=5;
            $totalPage=ceil($totalNum/$pageSize);
            $pageStart=($page-1)*$pageSize;
            //数组--空数组
            $data=Noticebook::alias('a')
                ->where("issue","通过")
                ->whereor("issue","不通过")
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
    //搜索操作
    public function searchlist($data)
    {
        //数组--空数组
        $datalist= Noticebook::where('member_name','like',"%".$data."%")
            ->order('id','asc')
            ->select();
        return $datalist;
    }

    public function selectone($id)
    {
        $data=Noticebook::where('id',$id)->select();
        return $data;
    }
    //删除数据
    public function dellist($id)
    {
        $res=Noticebook::where('id',$id)->delete();
        return $res;
    }
    //统计待审核数量
    public function countlist()
    {
        $data=Noticebook::where('issue',"待审核")->count();
        return $data;
    }
}
