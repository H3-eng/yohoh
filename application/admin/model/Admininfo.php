<?php

namespace app\admin\model;

use app\common\validate\Adminv;
use think\Model;

class Admininfo extends Model
{
    //登录验证
    public function login($data)
    {
        //验证账号密码是否为空
        $validate = new Adminv();
        if (!$validate->scene('login')->check($data)) {
            return $validate->getError();
        }else{
            $res = Admininfo::where('adminpname', $data['adminpname'])->find();
            $roleinfo=new Roleinfo();
            $datarole=$roleinfo->selectrole($res['roleid']);
            $rolename=$datarole['rolename'];
            //数组--null
            if ($res) {
                $ip = request()->ip();
                $url='http://ip.taobao.com/service/getIpInfo.php?ip='.$ip;
                $result = file_get_contents($url);
                $result = json_decode($result,true);
                $area=$result['data']['region'].$result['data']['city'] ;
                if ($res['password'] == $data['password']) {
                    //判断用户状态
                    if ($res['issue'] == '已停用') {
                        return "此用户已停用";
                    } else {
                        //记录日志信息
                        $logsmsg=[
                            'name' => $res['adminpname'],
                            'password' => $res['password'],
                            'role' => $rolename,
                            'issue'=>'正常登录',
                            'loginip'=>$ip,
                            'area'=>$area
                        ];
                        $logsinfo=new Logsinfo();
                        $logsres=$logsinfo->addlogs($logsmsg);
                        if($logsres){
                            //设置session
                            $sessionData = [
                                'id' => $res['id'],
                                'adminname' => $res['adminpname'],
                                'role' => $rolename,
                                'pic_name'=>$res['pic_name']
                            ];
                            session('admin', $sessionData);
                            return 1;
                        }else{
                            return "记录登录日志失败";
                        }
                    }
                }else{
                    //记录日志信息
                    $logsmsg=[
                        'name' => $res['adminpname'],
                        'password' => $data['password'],
                        'role' => $rolename,
                        'issue'=>'密码错误',
                        'loginip'=>$ip,
                        'area'=>$area
                    ];
                    $logsinfo=new Logsinfo();
                    $logsres=$logsinfo->addlogs($logsmsg);
                    if($logsres){
                        return "用户账号或密码错误";
                    }else {
                        return "记录登录日志失败";
                    }
                }
            }else {
                return "用户不存在";
            }
        }

    }
    //页面加载时动态显示数据
    public function selectlist($page)
    {
        $totalNum=Admininfo::count();
        $pageSize=5;
        $totalPage=ceil($totalNum/$pageSize);
        $pageStart=($page-1)*$pageSize;
        //数组--空数组
        $data=Admininfo::alias("a")
            ->leftJoin("Roleinfo b","a.roleid=b.id")
            ->field("a.*,b.rolename")
            ->limit($pageStart,$pageSize)
            ->select();
        $array=[];
        $arr=array(
            'totalNum'=>$totalNum,//总记录数
            'totalPage'=>$totalPage,//总页数
            'pageSize'=>$pageSize  //每页数量
        );
        array_push($array, $arr);
        foreach($data as $k=>$v){
            array_push($array,$v);
        }
        return $array;
    }
    //添加操作
    public function addlist($data)
    {
        //true--false
        $res=Admininfo::save($data);
        return $res;
    }
    //修改操作显示页面
    public function selectone($id)
    {
        //数组--null
        $res=Admininfo::where('id',$id)->find();
        return $res;
    }
    //修改操作
    public function updatelist($data)
    {
        //数组--空数组
        $res=Admininfo::update($data)->toArray();
        return $res;
    }
    //删除操作
    public function deletelist($id)
    {
        $res=Admininfo::where('id',$id)->delete();
        //0--记录数
        return $res;
    }
    //批量删除操作
    public function deletesomelist($ids)
    {
        //0--被影响的条数  把数组以逗号分隔转换为字符串
        $data=implode(",",$ids);
        $res=Admininfo::where("id in ($data)")->delete();
        return $res;
    }
    //搜索操作
    public function searchlist($data)
    {
        //数组--空数组
        $datalist=Admininfo::alias("a")
            ->where('adminname','like',"%".$data."%")
            ->join("Roleinfo b","a.roleid=b.id")
            ->field("a.*,b.rolename")
            ->select();
        return $datalist;
    }
    //验证账户是否重复
    public function checknamelist($name)
    {
        $res=Admininfo::where('adminpname',$name)->select();
        if(count($res)){
            return 0;
        }else{
            return 1;
        }
    }
    //修改头像
    public function updatepic($data)
    {
        $res=Admininfo::update($data);
        return $res;
    }
}
