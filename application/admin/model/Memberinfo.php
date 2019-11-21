<?php

namespace app\admin\model;

use think\Model;

class Memberinfo extends Model
{
    //页面加载时动态显示数据
    public function selectlist($page)
    {
        $totalNum=Memberinfo::count();
        $pageSize=5;
        $totalPage=ceil($totalNum/$pageSize);
        $pageStart=($page-1)*$pageSize;
        //数组--空数组
        $data=Memberinfo::alias("a")
            ->leftJoin("Membercard b","a.card_type=b.id")
            ->leftJoin("Provinceinfo c","a.provinceid=c.id")
            ->field("a.*,b.card_type,c.province")
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
    //添加操作
    public function addlist($data)
    {
        //true--false
        $res=Memberinfo::save($data);
        return $res;
    }
    //修改操作显示页面
    public function selectone($id)
    {
        //数组--null
        $res=Memberinfo::where('id',$id)->find();
        return $res;
    }
    //修改操作
    public function updatelist($data)
    {
        //数组--空数组
        $res=Memberinfo::update($data)->toArray();
        return $res;
    }
    //删除操作
    public function deletelist($id)
    {
        $res=Memberinfo::where('id',$id)->delete();
        //0--记录数
        return $res;
    }
    //批量删除操作
    public function deletesomelist($ids)
    {
        //0--被影响的条数  把数组以逗号分隔转换为字符串
        $data=implode(",",$ids);
        $res=Memberinfo::where("id in ($data)")->delete();
        return $res;
    }
    //搜索操作
    public function searchlist($data)
    {
        //数组--空数组
        $datalist=Memberinfo::alias("a")
            ->where('member_name','like',"%".$data."%")
            ->join("Membercard b","a.card_type=b.id")
            ->join("Provinceinfo c","a.provinceid=c.id")
            ->field("a.*,b.card_type,c.province")
            ->select();
        return $datalist;
    }

    //会员信息查找
    public function searchcard($data)
    {
        //数组--空数组
        $datalist=Memberinfo::where('member_card',$data)->find();
        return $datalist;
    }
    //会员卡挂失
    public function updateissue($data)
    {
        //数组--空数组
        $datalist=Memberinfo::update($data);
        return $datalist;
    }
    //会员卡换卡
    public function checkpwd($data)
    {
        //数组--空数组
        $res = Memberinfo::where('id', $data['id'])->find();
        if ($res) {
            if ($res['pwd'] == $data['pwd']) {
                return 1;
            }else{
                return 0;
            }
        }
    }
    public function updatecard($data)
    {
        //数组--空数组
        $datalist=Memberinfo::update($data);
        return $datalist;
    }
    public function updatetime($data)
    {
        //数组--空数组
        $datalist=Memberinfo::update($data);
        return $datalist;
    }

    public function countlist()
    {
        $datalist=Memberinfo::count();
        return $datalist;
    }
}
