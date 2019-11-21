<?php

namespace app\home\model;

use think\Model;

class Knowledgeinfo extends Model
{
    //健康知识查询前六条数据
    public function selectlist()
    {
        // 健康知识查询前六条数据
        $data=Knowledgeinfo::field('id,title,content,pic_name')
            ->paginate(6);
        return $data;
    }
    // 查询所有的数据
    public function selectall()
    {
        $data=Knowledgeinfo::field('id,title,content,pic_name,create_time')
            -> paginate(6);
        return $data;
    }
    //查询三条条数据
    public function selectone($id)
    {
        $data0=Knowledgeinfo::where("id",$id-1)->field('id,title')->find();
        $data1=Knowledgeinfo::where("id",$id)->find();
        $data2=Knowledgeinfo::where("id",$id+1)->field('id,title')->find();
        $list=[];
        array_push($list, $data0);
        array_push($list, $data1);
        array_push($list, $data2);
        return $list;
    }
}
