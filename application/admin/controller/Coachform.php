<?php

namespace app\admin\controller;

use app\admin\model\Coachinfo;
use app\admin\model\Pcoachinfo;
use app\admin\model\Pcourseinfo;
use app\admin\model\Provinceinfo;
use think\Controller;
use think\Request;

class Coachform extends Base
{
    //团操教练页面
    public function coachform()
    {
        $provinceinfo=new Provinceinfo();
        $list=$provinceinfo->selectall();
        return view("Coachform/coachform",compact('list'));
    }
    //基本信息页面加载时动态显示数据
    public function coachformshow(Request $request)
    {
        if (request()->isAjax()) {
            $page = $request->page;
            $coachinfo = new Coachinfo();
            $data = $coachinfo->selectlist($page);
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
        $pic_name= $request->pic_name;
        $pic=parse_url($pic_name)['path'];
        $data=[
            'jobnum'=>$request->jobnum,
            'coachname'=>$request->coachname,
            'sex'=>$request->sex,
            'phone'=>$request->phone,
            'provinceid'=>$request->provinceid,
            'goodat'=>$request->goodat,
            'pic_name'=>$pic,
            'described'=>$request->described,
            'operator'=>$request->operator
        ];
        $coachinfo=new Coachinfo();
        $res=$coachinfo->addlist($data);
        if($res){
            $this->success('添加成功');
        }else{
            $this->error('添加失败');
        }
    }
    //上传图片显示
    public function picpro()
    {
        $file = request()->file('picname');
        $info = $file->move( './static/admin/images/coach');
        if($info){
            return  json(['status'=>0,'name'=>'/static/admin/images/coach/'.$info->getSaveName()]);
        }else{
            return  json(['status'=>1,'name'=>$file->getError()]);
        }
    }
    //修改操作显示信息
    public function updateshow(Request $request)
    {
        $id=(int)$request->id;
        $coachinfo=new Coachinfo();
        $res=$coachinfo->selectone($id);
        if($res){
            return $res;
        }else{
            return 0;
        }
    }
    //修改操作
    public function update(Request $request)
    {
        $pic_name= $request->pic_name;
        $pic=parse_url($pic_name)['path'];
        $data=[
            'id'=>$request->id,
            'jobnum'=>$request->jobnum,
            'coachname'=>$request->coachname,
            'sex'=>$request->sex,
            'phone'=>$request->phone,
            'provinceid'=>$request->provinceid,
            'goodat'=>$request->goodat,
            'pic_name'=>$pic,
            'described'=>$request->described,
            'operator'=>$request->operator
        ];
        $coachinfo=new Coachinfo();
        $res=$coachinfo->updatelist($data);
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
        $coachinfo=new Coachinfo();
        $res=$coachinfo->deletelist($id);
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
        $coachinfo=new Coachinfo();
        $res=$coachinfo->deletesomelist($ids);
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
        $coachinfo=new Coachinfo();
        $res=$coachinfo->searchlist($data);
        if($res->isEmpty()){
            return 0;
        }else{
            return $res;
        }
    }
    //私教页面
    public function pcoachform()
    {
        $provinceinfo=new Provinceinfo();
        $list=$provinceinfo->selectall();
        $pcourseinfo=new Pcourseinfo();
        $data=$pcourseinfo->searchareaname();
        return view("Coachform/pcoachform",compact('list','data'));
    }
    //基本信息页面加载时动态显示数据
    public function pcoachformshow(Request $request)
    {
        if (request()->isAjax()) {
            $page = $request->page;
            $pcoachinfo = new Pcoachinfo();
            $data = $pcoachinfo->selectlist($page);
            if(count($data)){
                return $data;
            }else{
                return 0;
            }
        }
    }
    //私教添加操作
    public function padd(Request $request)
    {
        $pic_name= $request->pic_name;
        $pic=parse_url($pic_name)['path'];
        $data=[
            'jobnum'=>$request->jobnum,
            'coachname'=>$request->coachname,
            'sex'=>$request->sex,
            'phone'=>$request->phone,
            'provinceid'=>$request->provinceid,
            'goodat'=>$request->goodat,
            'pic_name'=>$pic,
            'role'=>$request->role,
            'operator'=>$request->operator,
            'described'=>$request->described
        ];
        $pcoachinfo=new Pcoachinfo();
        $res=$pcoachinfo->addlist($data);
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
        $pcoachinfo=new Pcoachinfo();
        $res=$pcoachinfo->selectone($id);
        if($res){
            return $res;
        }else{
            return 0;
        }
    }
    //修改操作
    public function pupdate(Request $request)
    {
        $pic_name= $request->pic_name;
        $pic=parse_url($pic_name)['path'];
        $data=[
            'id'=>$request->id,
            'jobnum'=>$request->jobnum,
            'coachname'=>$request->coachname,
            'sex'=>$request->sex,
            'phone'=>$request->phone,
            'provinceid'=>$request->provinceid,
            'goodat'=>$request->goodat,
            'pic_name'=>$pic,
            'role'=>$request->role,
            'operator'=>$request->operator,
            'described'=>$request->described
        ];
        $pcoachinfo=new Pcoachinfo();
        $res=$pcoachinfo->updatelist($data);
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
        $pcoachinfo=new Pcoachinfo();
        $res=$pcoachinfo->deletelist($id);
        if($res){
            $this->success("删除成功!");
        }else{
            $this->error("删除失败!");
        }
    }
    //批量删除操作
    public function pdeletesome(Request $request)
    {
        $ids=$request->ids;
        $pcoachinfo=new Pcoachinfo();
        $res=$pcoachinfo->deletesomelist($ids);
        if($res){
            $this->success("删除成功!");
        }else{
            $this->error("删除失败!");
        }
    }
    //搜索操作
    public function psearch(Request $request)
    {
        $data=$request->data;
        $pcoachinfo=new Pcoachinfo();
        $res=$pcoachinfo->searchlist($data);
        if($res->isEmpty()){
            return 0;
        }else{
            return $res;
        }
    }
}
