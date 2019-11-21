<?php
namespace app\home\controller;
use app\home\model\Memberinfo;
use think\Controller;
use think\Request;
class Login extends Controller
{
    //重复登录过滤，已经登录过的用户无须再次登录
    public function initialize()
    {
        if(session('?member.id')){
            $this->redirect('home/Index/index');
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
        if (request()->isAjax()) {
            $data = [
                'member_name'=>$request->member_name,
                'pwd'=>$request->pwd
            ];
            $memberinfo=new Memberinfo();
            $res=$memberinfo->login($data);
            if($res==1){
                $this->success('登录成功!','home/Index/index');
            }else{
                $this->error($res);
            }
        }
    }
}