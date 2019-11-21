<?php

namespace app\admin\controller;

use app\admin\model\Admininfo;
use app\admin\model\Powerinfo;
use app\admin\model\Roleinfo;
use think\Controller;
use think\Request;

class Adminerform extends Base
{
    //权限管理页面
    public function powerform()
    {
        return view('Adminerform/powerform');
    }
    //页面加载时动态显示数据
    public function powerformshow(Request $request)
    {
        if(request()->isAjax()){
            $page=$request->page;
            $powerinfo=new Powerinfo();
            $data=$powerinfo->selectlist($page);
            if(count($data)){
                return $data;
            }else{
                return 0;
            }
        }
    }
    //添加操作
    public function poweradd(Request $request)
    {
        $data = [
            'powername' => $request->powername,
            'described' => $request->described,
            'operator' => $request->operator
        ];
        $powerinfo = new Powerinfo();
        $res = $powerinfo->addlist($data);
        if ($res) {
            $this->success('添加成功');
        } else {
            $this->error('添加失败');
        }
    }
    //修改操作显示信息
    public function powerupdateshow(Request $request)
    {
        $id=(int)$request->id;
        $powerinfo=new Powerinfo();
        $res=$powerinfo->selectone($id);
        if($res){
            return $res;
        }else{
            return 0;
        }
    }
    //修改操作
    public function powerupdate(Request $request)
    {
        $data=[
            'id'=>(int)$request->id,
            'powername' => $request->powername,
            'described' => $request->described,
            'operator' => $request->operator
        ];
        $powerinfo=new Powerinfo();
        $res=$powerinfo->updatelist($data);
        if(count($res)){
            $this->success("修改成功");
        }else{
            $this->error("修改失败");
        }
    }
    //删除操作
    public function powerdelete(Request $request)
    {
        $id=(int)$request->id;
        $powerinfo=new Powerinfo();
        $res=$powerinfo->deletelist($id);
        if($res){
            $this->success("删除成功!");
        }else{
            $this->error("删除失败!");
        }
    }
    //批量删除操作
    public function powerdeletesome(Request $request)
    {
        $ids=$request->ids;
        $powerinfo=new Powerinfo();
        $res=$powerinfo->deletesomelist($ids);
        if($res){
            $this->success("删除成功!");
        }else{
            $this->error("删除失败!");
        }
    }
    //搜索操作
    public function powersearch(Request $request)
    {
        $data=$request->data;
        $powerinfo=new Powerinfo();
        $res=$powerinfo->searchlist($data);
        if($res->isEmpty()){
            return 0;
        }else{
            return $res;
        }
    }
    //角色管理页面
    public function roleform()
    {
        $powerinfo=new Powerinfo();
        $data=$powerinfo->selectname();
        return view('Adminerform/roleform',compact('data'));
    }
    //页面加载时动态显示数据
    public function roleformshow(Request $request)
    {
        if(request()->isAjax()){
            $page=$request->page;
            $roleinfo=new Roleinfo();
            $data=$roleinfo->selectlist($page);
            if(count($data)){
                return $data;
            }else{
                return 0;
            }
        }
    }
    //添加操作
    public function roleadd(Request $request)
    {
        $data=[
            'rolename'=>$request->rolename,
            'powerid'=>$request->powerid,
            'operator'=>$request->operator
        ];
        $roleinfo=new Roleinfo();
        $res=$roleinfo->addlist($data);
        if($res){
            $this->success('添加成功');
        }else{
            $this->error('添加失败');
        }
    }
    //修改操作显示信息
    public function roleupdateshow(Request $request)
    {
        $id=(int)$request->id;
        $roleinfo=new Roleinfo();
        $res=$roleinfo->selectone($id);
        if($res){
            return $res;
        }else{
            return 0;
        }
    }
    //修改操作
    public function roleupdate(Request $request)
    {
        $data=[
            'id'=>(int)$request->id,
            'rolename'=>$request->rolename,
            'powerid'=>$request->powerid,
            'operator'=>$request->operator
        ];
        $roleinfo=new Roleinfo();
        $res=$roleinfo->updatelist($data);
        if(count($res)){
            $this->success("修改成功");
        }else{
            $this->error("修改失败");
        }
    }
    //删除操作
    public function roledelete(Request $request)
    {
        $id=(int)$request->id;
        $roleinfo=new Roleinfo();
        $res=$roleinfo->deletelist($id);
        if($res){
            $this->success("删除成功!");
        }else{
            $this->error("删除失败!");
        }
    }
    //批量删除操作
    public function roledeletesome(Request $request)
    {
        $ids=$request->ids;
        $roleinfo=new Roleinfo();
        $res=$roleinfo->deletesomelist($ids);
        if($res){
            $this->success("删除成功!");
        }else{
            $this->error("删除失败!");
        }
    }
    //搜索操作
    public function rolesearch(Request $request)
    {
        $data=$request->data;
        $roleinfo=new Roleinfo();
        $res=$roleinfo->searchlist($data);
        if($res->isEmpty()){
            return 0;
        }else{
            return $res;
        }
    }
    //管理员列表显示页面
    public function adminerform()
    {
        $roleinfo=new Roleinfo();
        $data=$roleinfo->selectname();
        return view('Adminerform/adminerform',compact('data'));
    }
    //页面加载时动态显示数据
    public function adminerformshow(Request $request)
    {
        if(request()->isAjax()){
            $page=$request->page;
            $admininfo=new Admininfo();
            $data=$admininfo->selectlist($page);
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
            'adminname'=>$request->adminname,
            'adminpname'=>$request->adminpname,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'sex'=>$request->sex,
            'password'=>$request->password,
            'roleid'=>$request->roleid,
            'operator'=>$request->operator,
        ];
        $admininfo=new Admininfo();
        $res=$admininfo->addlist($data);
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
        $admininfo=new Admininfo();
        $res=$admininfo->selectone($id);
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
            'id'=>(int)$request->id,
            'adminname'=>$request->adminname,
            'adminpname'=>$request->adminpname,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'sex'=>$request->sex,
            'password'=>$request->password,
            'roleid'=>$request->roleid,
            'operator'=>$request->operator,
        ];
        $admininfo=new Admininfo();
        $res=$admininfo->updatelist($data);
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
        $admininfo=new Admininfo();
        $res=$admininfo->deletelist($id);
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
        $admininfo=new Admininfo();
        $res=$admininfo->deletesomelist($ids);
        if($res){
            $this->success("删除成功!");
        }else{
            $this->error("删除失败!");
        }
    }
    //搜索操作
    public function search(Request $request)
    {
        $data=$request->data;
        $admininfo=new Admininfo();
        $res=$admininfo->searchlist($data);
        if($res->isEmpty()){
            return 0;
        }else{
            return $res;
        }
    }
    /*管理员管理验证账户是否重复*/
    public function checkname(Request $request)
    {
        $adminpname=$request->adminpname;
        $admininfo=new Admininfo();
        $res=$admininfo->checknamelist($adminpname);
        return $res;
    }
}
