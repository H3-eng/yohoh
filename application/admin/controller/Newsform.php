<?php

namespace app\admin\controller;

use app\admin\model\Knowledgeinfo;
use app\admin\model\Activityinfo;
use think\Controller;
use think\Request;

class Newsform extends Base
{
    //健康知识页面操作
    public function knowledge()
    {
        return view('Newsform/knowledge');
    }
    //基本信息页面加载时动态显示数据
    public function knowledgeshow(Request $request)
    {
        if (request()->isAjax()) {
            $page = $request->page;
            $knowledgeinfo = new Knowledgeinfo();
            $data = $knowledgeinfo->selectlist($page);
            if(count($data)){
                return $data;
            }else{
                return 0;
            }
        }
    }
    //添加显示页面
    public function knowledgeAdd()
    {
        return view('Newsform/knowledgea');
    }
    //添加数据操作
    public function knowledgeAddpro(Request $request)
    {
        $pic_name= $request->pic_name;
        $pic=parse_url($pic_name)['path'];
        $data = [
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'keyword' => $request->keyword,
            'content' => $request->content,
            'pic_name'=>$pic,
            'author'=>$request->author
        ];
        $knowledgeinfo = new Knowledgeinfo();
        $res = $knowledgeinfo->savelist($data);
        if ($res) {
            $this->redirect("admin/newsform/knowledge");
        } else {
            return "添加失败";
        }
    }
    //添加显示上传图片
    public function picpro()
    {
        $file = request()->file('picname');
        $info = $file->move( './static/admin/images/knowledge');
        if($info){
            return  json(['status'=>0,'name'=>'../../../static/admin/images/knowledge/'.$info->getSaveName()]);
        }else{
            return  json(['status'=>1,'name'=>$file->getError()]);
        }
    }
    //修改显示上传图片
    public function ppicpro()
    {
        $file = request()->file('picname');
        $info = $file->move( './static/admin/images/knowledge');
        if($info){
            return  json(['status'=>0,'name'=>'../../../../../static/admin/images/knowledge/'.$info->getSaveName()]);
        }else{
            return  json(['status'=>1,'name'=>$file->getError()]);
        }
    }
    //修改操作显示数据
    public function knowledgeUpdate(Request $request)
    {
        $id=$request->id;
        $knowledgeinfo=new Knowledgeinfo();
        $data=$knowledgeinfo->selectone($id);
        return view('Newsform/knowledgeu',compact('data'));
    }
    //修改操作
    public function knowledgeUpdatepro(Request $request)
    {
        $pic_name= $request->pic_name;
        $pic=parse_url($pic_name)['path'];
        $data = [
            'id'=>$request->id,
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'keyword' => $request->keyword,
            'content' => $request->content,
            'pic_name'=>$pic,
            'updatename'=>$request->updatename
        ];
        $knowledgeinfo = new Knowledgeinfo();
        $res = $knowledgeinfo->updatelist($data);
        if(count($res)){
            $this->redirect("admin/newsform/knowledge");
        }else{
            return "修改失败";
        }
    }
    //删除操作
    public function delete(Request $request)
    {
        $id=(int)$request->id;
        $knowledgeinfo=new Knowledgeinfo();
        $res=$knowledgeinfo->deletelist($id);
        if($res){
            $this->success("删除成功!");
        }else{
            $this->error("删除失败!");
        }
    }
    //批量删除操作
    public function kdeletesome(Request $request)
    {
        $ids=$request->ids;
        $knowledgeinfo=new Knowledgeinfo();
        $res=$knowledgeinfo->deletesomelist($ids);
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
        $knowledgeinfo=new Knowledgeinfo();
        $res=$knowledgeinfo->searchlist($data);
        if($res->isEmpty()){
            return 0;
        }else{
            return $res;
        }
    }

    //会员活动页面操作
    public function activity()
    {
        return view('Newsform/activity');
    }
    //基本信息页面加载时动态显示数据
    public function activityshow(Request $request)
    {
        if (request()->isAjax()) {
            $page = $request->page;
            $activityinfo = new Activityinfo();
            $data = $activityinfo->selectlist($page);
            if(count($data)){
                return $data;
            }else{
                return 0;
            }
        }
    }
    //会员活动添加显示页面
    public function activityAdd()
    {
        return view('Newsform/activitya');
    }
    //处理添加的数据
    public function activityAddpro(Request $request)
    {
        $pic_name= $request->pic_name;
        $pic=parse_url($pic_name)['path'];
        $data = [
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'keyword' => $request->keyword,
            'content' => $request->content,
            'pic_name'=>$pic,
             'author'=>$request->author
        ];
        $activityinfo = new Activityinfo();
        $res = $activityinfo->savelist($data);
        if ($res) {
            $this->redirect("admin/newsform/activity");
        } else {
            return "添加失败";
        }
    }
    //显示上传图片--路径为改动
    public function apicpro()
    {
        $file = request()->file('picname');
        $info = $file->move( './static/admin/images/activity');
        if($info){
            return  json(['status'=>0,'name'=>'../../../static/admin/images/activity/'.$info->getSaveName()]);
        }else{
            return  json(['status'=>1,'name'=>$file->getError()]);
        }
    }
    //修改显示上传图片
    public function appicpro()
    {
        $file = request()->file('picname');
        $info = $file->move( './static/admin/images/activity');
        if($info){
            return  json(['status'=>0,'name'=>'../../../../../static/admin/images/activity/'.$info->getSaveName()]);
        }else{
            return  json(['status'=>1,'name'=>$file->getError()]);
        }
    }
    //修改操作显示数据
    public function activityUpdate(Request $request)
    {
        $id=$request->id;
        $activityinfo=new Activityinfo();
        $data=$activityinfo->selectone($id);
        return view('Newsform/activityu',compact('data'));
    }
    //修改操作
    public function activityUpdatepro(Request $request)
    {
        $pic_name= $request->pic_name;
        $pic=parse_url($pic_name)['path'];
        $data = [
            'id'=>$request->id,
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'keyword' => $request->keyword,
            'content' => $request->content,
            'pic_name'=>$pic,
            'updatename'=>$request->updatename
        ];
        $activityinfo = new Activityinfo();
        $res = $activityinfo->updatelist($data);
        if(count($res)){
            $this->redirect("admin/newsform/activity");
        }else{
            return "修改失败";
        }
    }
    //删除操作
    public function adelete(Request $request)
    {
        $id=(int)$request->id;
        $activityinfo=new Activityinfo();
        $res=$activityinfo->deletelist($id);
        if($res){
            $this->success("删除成功!");
        }else{
            $this->error("删除失败!");
        }
    }
    //批量删除
    public function adeletesome(Request $request)
    {
        $ids=$request->ids;
        $activityinfo=new Activityinfo();
        $res=$activityinfo->deletesomelist($ids);
        if($res){
            $this->success("删除成功!");
        }else{
            $this->error("删除失败!");
        }
    }
    //搜索框自动补全
    public function asearch(Request $request)
    {
        $data=$request->data;
        $activityinfo=new Activityinfo();
        $res=$activityinfo->searchlist($data);
        if($res->isEmpty()){
            return 0;
        }else{
            return $res;
        }
    }
}
