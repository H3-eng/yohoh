<?php

namespace app\admin\controller;

use app\admin\model\Areainfo;
use app\admin\model\Arealist;
use app\admin\model\Areaorder;
use app\admin\model\Orderdetails;
use think\Controller;
use think\Request;

class Areaform extends Base
{
    //私有场地显示页面
    public function areaform()
    {
        return view('Areaform/areaform');
    }
    //页面加载时动态显示数据
    public function areaformshow(Request $request)
    {
        if (request()->isAjax()) {
            $page = $request->page;
            $areainfo = new Areainfo();
            $data = $areainfo->selectlist($page);
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
        $data = [
            'area_id' => $request->area_id,
            'areaname' => $request->areaname
        ];
        $areainfo = new Areainfo();
        $res = $areainfo->addlist($data);
        if ($res) {
            $this->success('添加成功');
        } else {
            $this->error('添加失败');
        }
    }
    //修改操作显示信息
    public function updateshow(Request $request)
    {
        $id = (int)$request->id;
        $areainfo = new Areainfo();
        $res = $areainfo->selectone($id);
        if($res){
            return $res;
        }else{
            return 0;
        }
    }
    //修改操作
    public function update(Request $request)
    {
        $data = [
            'id' => (int)$request->id,
            'area_id' => $request->area_id,
            'areaname' => $request->areaname
        ];
        $areainfo = new Areainfo();
        $res = $areainfo->updatelist($data);
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
        $areainfo=new Areainfo();
        $res=$areainfo->deletelist($id);
        if($res){
            $this->success("删除成功!");
        }else{
            $this->error("删除失败!");
        }
    }
    //批量删除操作
    public function deletesome(Request $request)
    {
        $ids=$request->ids;
        $areainfo=new Areainfo();
        $res=$areainfo->deletesomelist($ids);
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
        $areainfo=new Areainfo();
        $res=$areainfo->searchlist($data);
        if($res->isEmpty()){
            return 0;
        }else{
            return $res;
        }
    }
    //公有场地显示页面
    public function arealist()
    {
        return view('Areaform/arealist');
    }
    //页面加载时动态显示数据
    public function arealistshow(Request $request)
    {
        if (request()->isAjax()) {
            $page = $request->page;
            $arealist = new Arealist();
            $data = $arealist->selectlist($page);
            if(count($data)){
                return $data;
            }else{
                return 0;
            }
        }
    }
    //添加操作
    public function listadd(Request $request)
    {
        $data = [
            'areaname' => $request->areaname,
            'areaitem'=> $request->areaitem,
            'money'=> $request->money,
            'operator'=> $request->operator
        ];
        $arealist = new Arealist();
        $res = $arealist->addlist($data);
        if ($res) {
            $this->success('添加成功');
        } else {
            $this->error('添加失败');
        }
    }
    //修改操作显示信息
    public function listupdateshow(Request $request)
    {
        $id = (int)$request->id;
        $arealist = new Arealist();
        $res = $arealist->selectone($id);
        if($res){
            return $res;
        }else{
            return 0;
        }
    }
    //修改操作
    public function listupdate(Request $request)
    {
        $data = [
            'id' => (int)$request->id,
            'areaname' => $request->areaname,
            'areaitem'=> $request->areaitem,
            'money'=> $request->money,
            'operator'=> $request->operator
        ];
        $arealist = new Arealist();
        $res = $arealist->updatelist($data);
        if(count($res)){
            $this->success("修改成功");
        }else{
            $this->error("修改失败");
        }
    }
    //删除操作
    public function listdelete(Request $request)
    {
        $id=(int)$request->id;
        $arealist=new Arealist();
        $res=$arealist->deletelist($id);
        if($res){
            $this->success("删除成功!");
        }else{
            $this->error("删除失败!");
        }
    }
    //批量删除操作
    public function listdeletesome(Request $request)
    {
        $ids=$request->ids;
        $arealist=new Arealist();
        $res=$arealist->deletesomelist($ids);
        if($res){
            $this->success("删除成功!");
        }else{
            $this->error("删除失败!");
        }
    }
    //搜索框自动补全
    public function listsearch(Request $request)
    {
        $data=$request->data;
        $arealist=new Arealist();
        $res=$arealist->searchlist($data);
        if($res->isEmpty()){
            return 0;
        }else{
            return $res;
        }
    }
    //场地预约记录显示页面
    public function areaorder()
    {
        return view('Areaform/areaorder');
    }
    //显示场地订单详情页面
    public function areaordershow(Request $request)
    {
        if (request()->isAjax()) {
            $page = $request->page;
            $areaorder = new Areaorder();
            $data = $areaorder->selectlist($page);
            if(count($data)){
                return $data;
            }else{
                return 0;
            }
        }
    }
    //搜索框自动补全
    public function ordersearch(Request $request)
    {
        $data=$request->data;
        $areaorder=new Areaorder();
        $res=$areaorder->searchlist($data);
        if($res->isEmpty()){
            return 0;
        }else{
            return $res;
        }
    }
    //订单详情
    public function showorder(Request $request)
    {
        $id=$request->id;
        $orderdetails=new Orderdetails();
        $data=$orderdetails->selectone($id);
        return view('Areaform/showorder',compact('data'));
    }
}

