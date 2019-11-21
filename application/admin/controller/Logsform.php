<?php

namespace app\admin\controller;

use app\admin\model\Logsinfo;
use app\admin\model\Mlogsinfo;
use think\Controller;
use think\Request;

class Logsform extends Base
{
    //后台登录日志页面
    public function logsform()
    {
        return view('Logsform/logsform');
    }
    //页面加载时动态显示数据
    public function logsformshow(Request $request)
    {
        if(request()->isAjax()){
            $page=$request->page;
            $logsinfo=new Logsinfo();
            $data=$logsinfo->selectlist($page);
            if(count($data)){
                return $data;
            }else{
                return 0;
            }
        }
    }
    //删除操作
    public function delete(Request $request)
    {
        $id=(int)$request->id;
        $logsinfo=new Logsinfo();
        $res=$logsinfo->deletelist($id);
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
       $logsinfo=new Logsinfo();
        $res=$logsinfo->deletesomelist($ids);
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
        $logsinfo=new Logsinfo();
        $res=$logsinfo->searchlist($data);
        if($res->isEmpty()){
            return 0;
        }else{
           return $res;
        }
    }
    //前台登录日志页面
    public function mlogsform()
    {
        return view('Logsform/mlogsform');
    }
    //页面加载时动态显示数据
    public function mlogsformshow(Request $request)
    {
        if(request()->isAjax()){
            $page=$request->page;
            $mlogsinfo=new Mlogsinfo();
            $data=$mlogsinfo->selectlist($page);
            if(count($data)){
                return $data;
            }else{
                return 0;
            }
        }
    }
    //删除操作
    public function mdelete(Request $request)
    {
        $id=(int)$request->id;
        $mlogsinfo=new Mlogsinfo();
        $res=$mlogsinfo->deletelist($id);
        if($res){
            $this->success("删除成功!");
        }else{
            $this->error("删除失败!");
        }
    }
    //批量删除操作
    public function mdeletesome(Request $request)
    {
        $ids=$request->ids;
        $mlogsinfo=new Mlogsinfo();
        $res=$mlogsinfo->deletesomelist($ids);
        if($res){
            $this->success("删除成功!");
        }else{
            $this->error("删除失败!");
        }
    }
    //搜索框自动补全
    public function msearch(Request $request)
    {
        $data=$request->data;
        $mlogsinfo=new Mlogsinfo();
        $res=$mlogsinfo->searchlist($data);
        if($res->isEmpty()){
            return 0;
        }else{
            return $res;
        }
    }
}
