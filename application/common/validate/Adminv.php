<?php

namespace app\common\validate;

use think\Validate;

class Adminv extends Validate
{
    //验证规则
    protected $rule = [
        'adminpname|管理员账户' => 'require',
        'password|管理员密码' => 'require',
        'member_name|用户账户' => 'require',
        'pwd|用户密码' => 'require',
    ];
    //后台登录验证场景
    public function sceneLogin()
    {
        return $this->only(['adminpname', 'password']);
    }
    //前台登录验证场景
    public function sceneHlogin()
    {
        return $this->only(['member_name', 'pwd']);
    }
}