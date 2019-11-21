<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;

class Base extends Controller
{
    public function initialize()
    {
        //判断用户没有登录时不能访问其他文件
        if(!session('?admin.id')){
            $this->redirect("admin/Login/login");
        }
    }
}
