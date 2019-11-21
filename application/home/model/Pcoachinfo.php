<?php

namespace app\home\model;

use think\Model;

class Pcoachinfo extends Model
{
    //查找初级私人教练
    public function selecta()
    {
        $data=Pcoachinfo::where("role","初级私人教练")->field('id,coachname,pic_name,described,goodat,role')
            -> paginate(6);
        return $data;
    }
    //查找中级私人教练
    public function selectb()
    {
        $data=Pcoachinfo::where("role","中级私人教练")->field('id,coachname,pic_name,described,goodat,role')
            -> paginate(6);
        return $data;
    }
    //查找高级私人教练
    public function selectc()
    {
        $data=Pcoachinfo::where("role","高级私人教练")->field('id,coachname,pic_name,described,goodat,role')
            -> paginate(6);
        return $data;
    }
    public function selectlist1()
    {
        $data=Pcoachinfo::where("role","初级私人教练")->field('id,sex,coachname,role,goodat')->paginate(3);
        return $data;
    }
    public function count1()
    {
        $data=Pcoachinfo::where("role","初级私人教练")->count();
        return $data;
    }
    public function selectlist2()
    {
        $data=Pcoachinfo::where("role","中级私人教练")->field('id,sex,coachname,role,goodat')->paginate(3);
        return $data;
    }
    public function count2()
    {
        $data=Pcoachinfo::where("role","中级私人教练")->count();
        return $data;
    }
    public function selectlist3()
    {
        $data=Pcoachinfo::where("role","高级私人教练")->field('id,sex,coachname,role,goodat')->paginate(3);
        return $data;
    }
    public function count3()
    {
        $data=Pcoachinfo::where("role","高级私人教练")->count();
        return $data;
    }
    //搜索操作
    public function searchlist($data)
    {
        //数组--空数组
        $datalist=Pcoachinfo::where('coachname','like',"%".$data."%")
            ->field('id,coachname,pic_name,described,goodat,role')
            ->select();
        return $datalist;
    }
}
