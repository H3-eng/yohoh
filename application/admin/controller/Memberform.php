<?php

namespace app\admin\controller;

use app\admin\model\Membercard;
use app\admin\model\Memberinfo;
use app\admin\model\Provinceinfo;
use app\admin\model\Renewalcard;
use think\Controller;
use think\Request;

class Memberform extends Base
{
    //会员基本信息显示页面
    public function memberform()
    {
        $membercard=new Membercard();
        $data=$membercard->selectall();
        $provinceinfo=new Provinceinfo();
        $list=$provinceinfo->selectall();
        return view("Memberform/memberform",compact('data','list'));
    }
    //会员基本信息页面加载时动态显示数据
    public function memberformshow(Request $request)
    {
        if (request()->isAjax()) {
            $page = $request->page;
            $memberinfo = new Memberinfo();
            $data = $memberinfo->selectlist($page);
            if(count($data)){
                return $data;
            }else{
                return 0;
            }
        }
    }
    //会员添加操作
    public function add(Request $request)
    {
        $data=[
            'member_card'=>$request->member_card,
            'end_time'=>$request->end_time,
            'member_name'=>$request->member_name,
            'sex'=>$request->sex,
            'phone'=>$request->phone,
            'money'=>$request->money,
            'pay'=>$request->pay,
            'provinceid'=>$request->provinceid,
            'card_type'=>$request->card_type,
            'consultant'=>$request->consultant,
            'identity_card'=>$request->identity_card,
            'operator'=>$request->operator
        ];
        $memberinfo=new Memberinfo();
        $res=$memberinfo->addlist($data);
        if($res){
            $this->success('添加成功');
        }else{
            $this->error('添加失败');
        }
    }
    //会员修改操作显示信息
    public function updateshow(Request $request)
    {
        $id=(int)$request->id;
        $memberinfo=new Memberinfo();
        $res=$memberinfo->selectone($id);
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
            'member_name'=>$request->member_name,
            'sex'=>$request->sex,
            'phone'=>$request->phone,
            'money'=>$request->money,
            'pay'=>$request->pay,
            'provinceid'=>$request->provinceid,
            'consultant'=>$request->consultant,
            'identity_card'=>$request->identity_card,
            'operator'=>$request->operator
        ];
        $memberinfo=new Memberinfo();
        $res=$memberinfo->updatelist($data);
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
        $memberinfo=new Memberinfo();
        $res=$memberinfo->deletelist($id);
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
        $memberinfo=new Memberinfo();
        $res=$memberinfo->deletesomelist($ids);
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
        $memberinfo=new Memberinfo();
        $res=$memberinfo->searchlist($data);
        if($res->isEmpty()){
            return 0;
        }else{
            return $res;
        }
    }

    //会员卡列表显示页面
    public function membercard()
    {
        return view('Memberform/membercard');
    }
    //页面加载时动态显示数据
    public function membercardshow(Request $request)
    {
        if (request()->isAjax()) {
            $page = $request->page;
            $membercard = new Membercard();
            $data = $membercard->selectlist($page);
            if(count($data)){
                return $data;
            }else{
                return 0;
            }
        }
    }
    //添加操作
    public function cardadd(Request $request)
    {
        $data=[
            'card_type'=>$request->card_type,
            'card_money'=>$request->card_money,
            'start_card'=>$request->start_card,
            'end_card'=>$request->end_card,
            'operator'=>$request->operator
        ];
        $membercard=new Membercard();
        $res=$membercard->addlist($data);
        if($res){
            $this->success('添加成功');
        }else{
            $this->error('添加失败');
        }
    }
    //修改操作显示页面
    public function cardupdateshow(Request $request)
    {
        $id=(int)$request->id;
        $membercard=new Membercard();
        $res=$membercard->selectone($id);
        if($res){
            return $res;
        }else{
            return 0;
        }
    }
    //修改操作
    public function cardupdate(Request $request)
    {
        $data=[
            'id'=>(int)$request->id,
            'card_type'=>$request->card_type,
            'card_money'=>$request->card_money,
            'start_card'=>$request->start_card,
            'end_card'=>$request->end_card,
            'operator'=>$request->operator
        ];
        $membercard=new Membercard();
        $res=$membercard->updatelist($data);
        if(count($res)){
            $this->success("修改成功");
        }else{
            $this->error("修改失败");
        }
    }
    //删除操作
    public function carddelete(Request $request)
    {
        $id=(int)$request->id;
        $membercard=new Membercard();
        $res=$membercard->deletelist($id);
        if($res){
            $this->success("删除成功!");
        }else{
            $this->error("删除失败!");
        }
    }


    //会员卡管理基本信息显示页面
    public function mcardmsg()
    {
        $membercard=new Membercard();
        $data=$membercard->selectall();
        $provinceinfo=new Provinceinfo();
        $list=$provinceinfo->selectall();
        return view("Memberform/mcardmsg",compact('data','list'));
    }
    //会员卡管理查询显示页面
    public function showdata(Request $request)
    {
        $member_card=$request->member_card;
        $memberinfo=new Memberinfo();
        $res=$memberinfo->searchcard($member_card);
        if(count($res)){
            return $res;
        }else{
            return 0;
        }
    }
    //挂失
    public function loss(Request $request)
    {
        $data=[
            'id'=>$request->id,
            'issue'=>"停用"
        ];
        $memberinfo=new Memberinfo();
        $res=$memberinfo->updateissue($data);
        if(count($res)){
            return $res;
        }else{
            return 0;
        }
    }
    //换卡
    public function replen(Request $request)
    {
        $datalist=[
            'id'=>$request->id,
            'member_card'=>$request->member_card,
        ];
        $memberinfo=new Memberinfo();
        $res=$memberinfo->updatecard($datalist);
        if(count($res)){
            $this->success("换卡成功");
        }else{
            $this->error("换卡失败");
        }
    }
    //续卡操作
    public function renewal(Request $request)
    {
        $data=[
            'member_name'=>$request->member_name,
            'member_card'=>$request->member_card,
            'card_type'=>$request->card_type,
            'e_time'=>$request->e_time,
            'money'=>$request->money,
            'pay'=>$request->pay,
            'end_time'=>$request->end_time,
            'operator'=>$request->operator,
        ];
        $renewalcard=new Renewalcard();
        $res=$renewalcard->addlist($data);
        if($res){
            $datalist=[
                'id'=>$request->id,
                'end_time'=>$request->end_time,
            ];
            $memberinfo=new Memberinfo();
            $res1=$memberinfo->updatetime($datalist);
            if(count($res1)){
                $this->success("续卡成功");
            }else{
                $this->error("续卡失败");
            }
        }else{
            $this->error("续卡失败");
        }
    }
    //会员卡管理验证密码是否正确
    public function checkpw(Request $request)
    {
        $data=[
            'id'=>(int)$request->id,
            'pwd'=>$request->pwd,
        ];
        $memberinfo=new Memberinfo();
        $res=$memberinfo->checkpwd($data);
        if($res){
            return 1;
        }else{
            return 0;
        }
    }

    //续卡显示页面
    public function renewalcard()
    {
        return view('Memberform/renewalcard');
    }
    //续卡信息页面加载时动态显示数据
    public function renewalcardshow(Request $request)
    {
        if (request()->isAjax()) {
            $page = $request->page;
            $renewalcard = new Renewalcard();
            $data = $renewalcard->selectlist($page);
            if(count($data)){
                return $data;
            }else{
                return 0;
            }
        }
    }
    //删除操作
    public function redelete(Request $request)
    {
        $id=(int)$request->id;
        $renewalcard=new Renewalcard();
        $res=$renewalcard->deletelist($id);
        if($res){
            $this->success("删除成功!");
        }else{
            $this->error("删除失败!");
        }
    }
    //续卡记录批量删除操作
    public function redeletesome(Request $request)
    {
        $ids=$request->ids;
        $renewalcard=new Renewalcard();
        $res=$renewalcard->deletesomelist($ids);
        if($res){
            $this->success("删除成功!");
        }else{
            $this->error("删除失败!");
        }
    }
    //搜索框自动补全
    public function research(Request $request)
    {
        $data=$request->data;
        $renewalcard=new Renewalcard();
        $res=$renewalcard->searchlist($data);
        if($res->isEmpty()){
            return 0;
        }else{
            return $res;
        }
    }
}
