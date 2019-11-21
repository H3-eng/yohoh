<?php

namespace app\home\model;
use app\common\validate\Adminv;
use think\Model;

class Memberinfo extends Model
{
    //登录验证
    public function login($data)
    {
        //验证账号密码是否为空
        $validate = new Adminv();
        if (!$validate->scene('hlogin')->check($data)) {
            return $validate->getError();
        }else{
            $res = Memberinfo::where('member_name', $data['member_name'])->find();
//            //数组--null
            if ($res) {
                if ($res['pwd'] == $data['pwd']) {
                    //判断用户状态
                    if ($res['issue'] == '已停用') {
                        return "此用户已停用";
                    }else {
                        //记录日志信息
                        $logsmsg=[
                            'name' => $res['member_name'],
                            'pwd' => $res['pwd'],
                            'issue'=>'正常登录',
                            'member_id'=>$res['id'],
                            'loginip'=>request()->ip()
                        ];
                        $mlogsinfo=new Mlogsinfo();
                        $logsres=$mlogsinfo->addlogs($logsmsg);
                        if($logsres){
                            //设置session
                            $sessionData = [
                                'id' => $res['id'],
                                'member_name' => $res['member_name'],
                                'pic_name'=>$res['pic_name'],
                                'pet_name'=>$res['pet_name'],
                                'member_card'=>$res['member_card']
                            ];
                            session('member', $sessionData);
                            return 1;
                        }else{
                            return "记录登录日志失败";
                        }
                    }
                }else{
                    return "用户账号或密码错误";
                }
            }else {
                return "用户不存在";
            }
        }
    }
    public function selectbook($id)
    {
        $data=Memberinfo::where('id',$id)->field("member_name,member_card")->select();
        return $data;
    }
    public function savepic($data){
        $res=Memberinfo::update($data);
        return $res;
    }

    public function selectone($id)
    {
        $res=Memberinfo::where('id',$id)->find();
        return $res;
    }

    public function updatepwd($data)
    {
        $res=Memberinfo::update($data);
        return $res;
    }
}
