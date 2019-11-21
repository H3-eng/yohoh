<?php

namespace app\home\model;

use think\Model;

class Coachinfo extends Model
{
    public function selectlist()
    {
        //教练团队查询前4条数据
        $data=Coachinfo::field('id,coachname,pic_name,described,goodat')
            -> limit(0,4)
            ->select();
        return $data;
    }
    //查找团操教练
    public function selectlist1()
    {
        $data=Coachinfo::field('id,coachname,pic_name,described,goodat')
            -> paginate(6);
        return $data;
    }
    //搜索操作
    public function searchlist($data)
    {
        //数组--空数组
        $datalist=Coachinfo::where('coachname','like',"%".$data."%")
            ->field('id,coachname,pic_name,described,goodat')
            ->select();
        return $datalist;
    }
    public function selectone($id)
    {
        $data=Coachinfo::where('id',$id)->select();
        return $data;
    }
    public function updataone($da)
    {
        $data=Coachinfo::update($da);
        return $data;
    }
    public function selecthot()
    {
        $data=Coachinfo::limit(5)->order("search_num desc")->select();
        return $data;
    }
}
