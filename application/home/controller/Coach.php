<?php

namespace app\home\controller;

use app\home\model\Coachinfo;
use app\home\model\Pcoachinfo;
use think\Controller;
use think\Request;

class Coach extends Controller
{
    //显示页面
    public function coach()
    {
        $coachinfo=new Coachinfo();
        //团操教练
        $data1=$coachinfo->selectlist1();
        $pcoachinfo=new Pcoachinfo();
        //私人教练
        $data2=$pcoachinfo->selecta();
        $data3=$pcoachinfo->selectb();
        $data4=$pcoachinfo->selectc();
        return view('Coach/coach',compact('data1','data2','data3','data4'));
    }
    //搜索框自动补全
    public function search(Request $request)
    {
        $data=$request->data;
        $coachinfo=new Coachinfo();
        $res=$coachinfo->searchlist($data);
        if($res->isEmpty()){
           $pcoachinfo=new Pcoachinfo();
            $res2=$pcoachinfo->searchlist($data);
            if(count($res2)){
                return $res2;
            }else{
                return 0;
            }
        }else{
            return $res;
        }
    }
    //搜索功能
    public function searchbtn(Request $request)
    {
        $data=$request->data;
        $coachinfo=new Coachinfo();
        $res=$coachinfo->searchlist($data);
        if($res->isEmpty()){
            $pcoachinfo=new Pcoachinfo();
            $res2=$pcoachinfo->searchlist($data);
            if(count($res2)){
                return $res2;
            }else{
                return 0;
            }
        }else{
            $coachinfo=new Coachinfo();
            $re=$coachinfo->selectone($res[0]['id']);
            $num=$re[0]['search_num']+1;
            $da=[
                'id'=>$res[0]['id'],
                'search_num'=>$num
            ];
            $r=$coachinfo->updataone($da);
            if($r){
                return $res;
            }
        }
    }
    //热门教练
    public function searchhot()
    {
        $coachinfo=new Coachinfo();
        $res=$coachinfo->selecthot();
        return $res;
    }
}
