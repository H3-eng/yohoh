<?php

namespace app\admin\controller;

use app\admin\model\Admininfo;
use think\Controller;
use think\Request;

class Login extends Controller
{
    //重复登录过滤，已经登录过的用户无须再次登录
    public function initialize()
    {
        if(session('?admin.id')){
            $this->redirect('admin/Index/index');
        }
    }
    //显示登录页面
    public function login()
    {
        return view('Login/login');
    }
    //登录信息验证
    public function logincheck(Request $request)
    {
        $data=[
            'adminpname'=>$request->adminpname,
            'password'=>$request->password
        ];
        $admininfo=new Admininfo();
        $res=$admininfo->login($data);
        if($res==1){
            $this->success('登录成功!','admin/index/index');
        }else{
            $this->error($res);
        }
    }
}
