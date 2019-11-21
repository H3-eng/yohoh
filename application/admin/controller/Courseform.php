<?php

namespace app\admin\controller;

use app\admin\model\Areainfo;
use app\admin\model\Coachinfo;
use app\admin\model\Coursebook;
use app\admin\model\Coursebuy;
use app\admin\model\Courseinfo;
use app\admin\model\Courseweek;
use app\admin\model\Memberinfo;
use app\admin\model\Noticebook;
use app\admin\model\Noticedetails;
use app\admin\model\Pcoachinfo;
use app\admin\model\Pcoursebook;
use app\admin\model\Pcourseinfo;
use think\Controller;
use think\Request;

class Courseform extends Base
{
    //团操课程列表
    public function courseform()
    {
        $areainfo=new Areainfo();
        $data=$areainfo->searchareaname();
        return view('Courseform/courseform',compact('data'));
    }
    //基本信息页面加载时动态显示数据
    public function courseformshow(Request $request)
    {
        if (request()->isAjax()) {
            $page = $request->page;
            $courseinfo = new Courseinfo();
            $data = $courseinfo->selectlist($page);
            if(count($data)){
                return $data;
            }else{
                return 0;
            }
        }
    }
    //添加操作
    public function add(Request $request)
    {
        $data=[
            'course_name'=>$request->course_name,
            'course_area'=>$request->course_area,
            'course_project'=>$request->course_project,
            'course_money'=>$request->course_money,
            'course_num'=>$request->course_num,
            'course_integral'=>$request->course_integral,
            'operator'=>$request->operator
        ];
        $courseinfo=new Courseinfo();
        $res=$courseinfo->addlist($data);
        if($res){
            $this->success('添加成功');
        }else{
            $this->error('添加失败');
        }
    }
    //修改操作显示信息
    public function updateshow(Request $request)
    {
        $id=(int)$request->id;
        $courseinfo=new Courseinfo();
        $res=$courseinfo->selectone($id);
        if($res){
            return $res;
        }else{
            return 0;
        }
    }
    //修改操作
    public function update(Request $request)
    {
        $data=[
            'id'=>$request->id,
            'course_name'=>$request->course_name,
            'course_area'=>$request->course_area,
            'course_project'=>$request->course_project,
            'course_money'=>$request->course_money,
            'course_num'=>$request->course_num,
            'course_integral'=>$request->course_integral,
            'operator'=>$request->operator
        ];
        $courseinfo=new Courseinfo();
        $res=$courseinfo->updatelist($data);
        if(count($res)){
            $this->success("修改成功");
        }else{
            $this->error("修改失败");
        }
    }
    //删除操作
    public function delete(Request $request)
    {
        $id=(int)$request->id;
        $courseinfo=new Courseinfo();
        $res=$courseinfo->deletelist($id);
        if($res){
            $this->success("删除成功!");
        }else{
            $this->error("删除失败!");
        }
    }
    //搜索框自动补全
    public function search(Request $request)
    {
        $data=$request->data;
        $courseinfo=new Courseinfo();
        $res=$courseinfo->searchlist($data);
        if($res->isEmpty()){
            return 0;
        }else{
            return $res;
        }
    }

    //私教课程列表
    public function pcourseform()
    {
        $areainfo=new Areainfo();
        $data=$areainfo->searchareaname();
        $coachinfo=new Pcoachinfo();
        $res=$coachinfo->searchname();
        return view('Courseform/pcourseform',compact('data','res'));
    }
    //基本信息页面加载时动态显示数据
    public function pcourseformshow(Request $request)
    {
        if (request()->isAjax()) {
            $page = $request->page;
            $pcourseinfo = new Pcourseinfo();
            $data = $pcourseinfo->selectlist($page);
            if(count($data)){
                return $data;
            }else{
                return 0;
            }
        }
    }
    //添加操作
    public function padd(Request $request)
    {
        $data=[
            'course_name'=>$request->course_name,
            'course_money'=>$request->course_money,
            'course_num'=>$request->course_num,
            'course_hour'=>$request->course_hour,
            'course_integral'=>$request->course_integral,
            'described'=>$request->described,
            'role'=>$request->role,
            'coachname'=>$request->coachname,
            'operator'=>$request->operator
        ];
        $pcourseinfo=new Pcourseinfo();
        $res=$pcourseinfo->addlist($data);
        if($res){
            $this->success('添加成功');
        }else{
            $this->error('添加失败');
        }
    }
    //修改操作显示信息
    public function pupdateshow(Request $request)
    {
        $id=(int)$request->id;
        $pcourseinfo=new Pcourseinfo();
        $res=$pcourseinfo->selectone($id);
        if($res){
            return $res;
        }else{
            return 0;
        }
    }
    //修改操作
    public function pupdate(Request $request)
    {
        $data=[
            'id'=>$request->id,
            'course_name'=>$request->course_name,
            'course_money'=>$request->course_money,
            'course_num'=>$request->course_num,
            'course_hour'=>$request->course_hour,
            'course_integral'=>$request->course_integral,
            'described'=>$request->described,
            'role'=>$request->role,
            'coachname'=>$request->coachname,
            'operator'=>$request->operator
        ];
        $pcourseinfo=new Pcourseinfo();
        $res=$pcourseinfo->updatelist($data);
        if(count($res)){
            $this->success("修改成功");
        }else{
            $this->error("修改失败");
        }
    }
    //删除操作
    public function pdelete(Request $request)
    {
        $id=(int)$request->id;
        $pcourseinfo=new Pcourseinfo();
        $res=$pcourseinfo->deletelist($id);
        if($res){
            $this->success("删除成功!");
        }else{
            $this->error("删除失败!");
        }
    }
    //搜索框自动补全
    public function psearch(Request $request)
    {
        $data=$request->data;
        $pcourseinfo=new Pcourseinfo();
        $res=$pcourseinfo->searchlist($data);
        if($res->isEmpty()){
            return 0;
        }else{
            return $res;
        }
    }
    /*团操课程预订列表*/
    public function coursebook()
    {
        return view('Courseform/coursebook');
    }
    public function coursebookshow(Request $request)
    {
        if (request()->isAjax()) {
            $page = $request->page;
            $noticebook = new Noticebook();
            $data = $noticebook->selectlist($page);
            if(count($data)){
                return $data;
            }else{
                return 0;
            }
        }
    }
    //搜索框自动补全
    public function booksearch(Request $request)
    {
        $data=$request->data;
        $noticebook=new Noticebook();
        $res=$noticebook->searchlist($data);
        if($res->isEmpty()){
            return 0;
        }else{
            return $res;
        }
    }
    /*每周课程表*/
    public function courseweek()
    {
        $areainfo=new Areainfo();
        $data=$areainfo->searchareaname();
        $courseinfo=new Courseinfo();
        $data2=$courseinfo->searchareaname();
        $coachinfo=new Coachinfo();
        $data3=$coachinfo->searchareaname();
        return view('Courseform/courseweek',compact('data','data2','data3'));
    }
    //基本信息页面加载时动态显示数据
    public function courseweekshow(Request $request)
    {
        if (request()->isAjax()) {
            $page = $request->page;
            $courseweek = new Courseweek();
            $data = $courseweek->selectlist($page);
            if(count($data)){
                return $data;
            }else{
                return 0;
            }
        }
    }
    //添加操作
    public function weekadd(Request $request)
    {
        $data=[
            'course_id'=>$request->course_name,
            'area_id'=>$request->course_area,
            'coach_id'=>$request->course_coach,
            'course_time'=>$request->course_time,
            'course_hour'=>$request->course_hour,
            'course_week'=>$request->course_week,
            'course_num'=>$request->course_num,
            'operator'=>$request->operator
        ];
        $courseweek=new Courseweek();
        $res=$courseweek->addlist($data);
        if($res){
            $this->success('添加成功');
        }else{
            $this->error('添加失败');
        }
    }
    //修改操作显示信息
    public function weekupdateshow(Request $request)
    {
        $id=(int)$request->id;
        $courseweek=new Courseweek();
        $res=$courseweek->selectone($id);
        if($res){
            return $res;
        }else{
            return 0;
        }
    }
    //修改操作
    public function weekupdate(Request $request)
    {
        $data=[
            'id'=>$request->id,
             'course_id'=>$request->course_name,
            'area_id'=>$request->course_area,
            'coach_id'=>$request->course_coach,
            'course_time'=>$request->course_time,
            'course_hour'=>$request->course_hour,
            'course_week'=>$request->course_week,
            'course_num'=>$request->course_num,
            'operator'=>$request->operator
        ];
        $courseweek=new Courseweek();
        $res=$courseweek->updatelist($data);
        if(count($res)){
            $this->success("修改成功");
        }else{
            $this->error("修改失败");
        }
    }
    //删除操作
    public function weekdelete(Request $request)
    {
        $id=(int)$request->id;
        $courseweek=new Courseweek();
        $res=$courseweek->deletelist($id);
        if($res){
            $this->success("删除成功!");
        }else{
            $this->error("删除失败!");
        }
    }
    //批量删除操作
    public function weekdeletesome(Request $request)
    {
        $ids=$request->ids;
        $courseweek=new Courseweek();
        $res=$courseweek->deletesomelist($ids);
        if($res){
            $this->success("删除成功!");
        }else{
            $this->error("删除失败!");
        }
    }

    /*私教课程预订列表*/
    public function pcoursebook()
    {
        return view('Courseform/pcoursebook');
    }
    //基本信息页面加载时动态显示数据
    public function pcoursebookshow(Request $request)
    {
        if (request()->isAjax()) {
            $page = $request->page;
            $pcoursebook = new Pcoursebook();
            $data = $pcoursebook->selectlist($page);
            if(count($data)){
                return $data;
            }else{
                return 0;
            }
        }
    }
    //修改操作显示信息
    public function pbookupdateshow(Request $request)
    {
        $id=(int)$request->id;
        $pcoursebook=new Pcoursebook();
        $res=$pcoursebook->selectone($id);
        if($res){
            return $res;
        }else{
            return 0;
        }
    }
    //修改操作
    public function pbookupdate(Request $request)
    {
        $data=[
            'id'=>$request->id,
            'chargename'=>$request->chargename,
            'operator'=>$request->operator
        ];
        $pcoursebook=new Pcoursebook();
        $res=$pcoursebook->updatelist($data);
        if(count($res)){
            $this->success("修改成功");
        }else{
            $this->error("修改失败");
        }
    }
    //删除操作
    public function pbookdelete(Request $request)
    {
        $id=(int)$request->id;
        $pcoursebook=new Pcoursebook();
        $res=$pcoursebook->deletelist($id);
        if($res){
            $this->success("删除成功!");
        }else{
            $this->error("删除失败!");
        }
    }
    //搜索框自动补全
    public function pbooksearch(Request $request)
    {
        $data=$request->data;
        $pcoursebook=new Pcoursebook();
        $res=$pcoursebook->searchlist($data);
        if($res->isEmpty()){
            return 0;
        }else{
            return $res;
        }
    }

    /*课程购买操作*/
    public function coursebuy()
    {
        $pcourseinfo=new Pcourseinfo();
        $data=$pcourseinfo->searchareaname();
        return view('Courseform/coursebuy',compact('data'));
    }
    //基本信息页面加载时动态显示数据
    public function coursebuyshow(Request $request)
    {
        if (request()->isAjax()) {
            $page = $request->page;
            $coursebuy = new Coursebuy();
            $data = $coursebuy->selectlist($page);
            if(count($data)){
                return $data;
            }else{
                return 0;
            }
        }
    }
    //添加操作
    public function buyadd(Request $request)
    {
        $data=[
            'member_name'=>$request->member_name,
            'course_id'=>$request->course_id,
            'pay'=>$request->pay,
            'money'=>$request->money,
            'member_card'=>$request->member_card,
            'operator'=>$request->operator
        ];
        $coursebuy=new Coursebuy();
        $res=$coursebuy->addlist($data);
        if($res){
            $this->success('操作成功');
        }else{
            $this->error('操作失败');
        }
    }
    //删除操作
    public function buydelete(Request $request)
    {
        $id=(int)$request->id;
        $coursebuy=new Coursebuy();
        $res=$coursebuy->deletelist($id);
        if($res){
            $this->success("删除成功!");
        }else{
            $this->error("删除失败!");
        }
    }
    //搜索框自动补全
    public function buysearch(Request $request)
    {
        $data=$request->data;
        $coursebuy=new Coursebuy();
        $res=$coursebuy->searchlist($data);
        if($res->isEmpty()){
            return 0;
        }else{
            return $res;
        }
    }

    //显示每周课表
    public function courseshow()
    {
        $courseweek=new Courseweek();
        $data1=$courseweek->select1();
        $data2=$courseweek->select2();
        $data3=$courseweek->select3();
        $data4=$courseweek->select4();
        return view('Courseform/courseshow',compact('data1','data2','data3','data4'));
    }
    //显示详情页面
    public function courseshoworder(Request $request)
    {
        $order_id=$request->id;
        $noticdetails=new Noticedetails();
        $data=$noticdetails->selectone($order_id);
        return view('Courseform/courseshoworder',compact('data'));
    }
}
