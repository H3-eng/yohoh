<?php /*a:2:{s:71:"/www/users/HA630745/WEB/yahoh/application/home/view/Index/homedata.html";i:1571635263;s:73:"/www/users/HA630745/WEB/yahoh/application/home/view/Index/jshomedata.html";i:1571635660;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>健身俱乐部</title>
    <!-- 引入bootstrap样式表 -->
    <link href="../../../static/common/hplus/css/bootstrap.min14ed.css?v=3.3.6" rel="stylesheet">
    <!-- 引入自定义样式表 -->
    <link rel="stylesheet" href="../../../static/home/css/base.css">
    <link rel="stylesheet" type="text/css" href="../../../static/home/css/commond.css">
    <link rel="stylesheet" type="text/css" href="../../../static/home/css/homedata.css">
</head>
<body>
    <div class="header" id="header">
        <nav class="nav inner clearfix">
            <div class="logo fl">
                <img src="../../../static/home/images/index_img/logo.png">
            </div>
            <ul class="navbar-nav fr clearfix">
                <li>
                    <a href="<?php echo url('home/Index/index'); ?>" class="effect active">首页</a>
                </li>
                <li>
                    <a href="<?php echo url('home/Index/aboutus'); ?>" class="effect">关于我们</a>
                </li>
                <li>
                    <a href="<?php echo url('home/Coach/coach'); ?>" class="effect">教练团队</a>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle"  id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">健身课程</a>
                    <ul class="dropdown-menu"  aria-labelledby="dropdownMenu3">
                        <li><a href="<?php echo url('home/Course/course'); ?>" class="effect">团操课程</a></li>
                        <li><a href="<?php echo url('home/Course/pcourse'); ?>" class="effect">私教课程</a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo url('home/Activity/customers'); ?>" class="effect">会员专区</a>
                </li>
                <li>
                    <a href="<?php echo url('home/Knowledge/knowledge'); ?>" class="effect">健身知识</a>
                </li>
                <?php if(app('request')->session('member')): ?>
                <li class="dropdown">
                    <a class="dropdown-toggle"  id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">个人中心</a>
                    <ul class="dropdown-menu"  aria-labelledby="dropdownMenu2">
                        <li><a class="J_menuItem" href="<?php echo url('home/Index/areabook'); ?>">场地预约</a></li>
                        <li><a class="J_menuItem" href="<?php echo url('home/Index/homedata'); ?>">个人资料</a></li>
                        <li><a class="J_menuItem" href="<?php echo url('home/Index/message'); ?>">消息中心</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="<?php echo url('home/Index/loginout'); ?>">安全退出</a></li>
                    </ul>
                </li>
                <?php else: ?>
                <li>
                    <a href="<?php echo url('home/Login/login'); ?>" class="effect">会员登录</a>
                </li>
                <li class="nav-btn">
                    <a href="<?php echo url('home/Index/becomeus'); ?>" class="effect">成为会员</a>
                </li>
                <?php endif; ?>
            </ul>
        </nav>
    </div>
    <div class="bg">
        <img src="../../../static/home/images/index_img/bg4.jpg">
    </div>
    <div class="home">
        <div class="home-con inner clearfix">
            <div class="aside col-md-3">
                <div class="aside-top">
                    <div class="m_data clearfix">
                        <div class="m_img fl">
                            <img src="../../..<?php echo htmlentities(app('request')->session('member.pic_name')); ?>">
                        </div>
                        <div class="m_msg fl">
                            <p id="name"><?php echo htmlentities(app('request')->session('member.pet_name')); ?></p>
                            <a href="<?php echo url('home/Index/homephoto'); ?>">修改头像</a>
                        </div>
                    </div>
                    <div class="recent">
                        <p>最近一次操作：</p>
                        <span id="logindata">0</span>
                        <div class="lookmore">
                            <a href="<?php echo url('home/Index/logsmsg'); ?>">查看更多</a>
                        </div>
                    </div>
                </div>
                <div class="quick">
                   <h3>快速通道</h3>
                    <ul>
                        <li><i class="glyphicon glyphicon-lock"></i><a id="updatepwd">修改密码</a></li>
                        <li><i class="glyphicon glyphicon-folder-close"></i><a href="<?php echo url('home/Index/coursedetails'); ?>">课程预约记录</a></li>
                        <li><i class="glyphicon glyphicon-book"></i><a href="<?php echo url('home/Index/areadetails'); ?>">场地预约记录</a></li>
                        <li><i class="glyphicon glyphicon-question-sign"></i><a href="<?php echo url('home/Index/help'); ?>">帮助中心</a></li>
                    </ul>
                </div>
            </div>
            <div class="home-right col-md-9">
                <div class="updatedata">
                    <h3>修改资料 <span id="edit">编辑</span></h3>
                    <div class="datagroup">
                        <form class="clearfix" id="formdata">
                            <div class="form-group">
                                <label for="pet_name" class="col-md-2">昵称：</label>
                                <input type="text" id="pet_name" name="pet_name" class="inputdata" disabled>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2">性别：</label>
                                <label for="sex0">保密：</label>
                                <i class="input-img check_bg">
                                    <input type="radio" name="sex" value="保密" class="sex time inputdata el" id="sex0" code="保密" disabled>
                                </i>
                                <label for="sex1">男：</label>
                                <i class="input-img check_bg">
                                    <input  type="radio" name="sex" value="男" class="sex time inputdata el" id="sex1" code="男" disabled>
                                </i>
                                <label for="sex2">女：</label>
                                <i class="input-img check_bg">
                                    <input  type="radio" name="sex" value="女" class="sex time inputdata el" id="sex2" code="女" disabled>
                                </i>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-md-2">邮箱：</label>
                                <input type="text" id="email" name="email" class="inputdata" disabled>
                            </div>
                            <div class="form-group">
                                <label for="phone" class="col-md-2">电话号码：</label>
                                <input type="text" id="phone" name="phone" class="inputdata" disabled>
                            </div>
                            <div class="btngroup">
                                <button type="button" class="btn btn-danger col-md-2" id="updatedata">修改</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="loginhistory">
                    <h3>登录历史</h3>
                    <p>以下为您最近4次登录记录，若存在异常情况，请在核实后尽快 <a id="updateptwo">修改密码</a></p>
                    <div class="logdetails ">
                        <table class="tablelist">
                            <tr>
                                <th>时间</th>
                                <th>IP地址</th>
                                <th>状态</th>
                            </tr>
                            <?php foreach($res as $k=>$v): ?>
                            <tr>
                                <td><?php echo htmlentities($v['create_time']); ?></td>
                                <td><?php echo htmlentities($v['loginip']); ?></td>
                                <td><?php echo htmlentities($v['issue']); ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                </div>
            </div>
            <div class="pop-up" id="pop-up">
                <div class="addbox">
                    <div class="ibox-title">
                        <h3>修改密码</h3>
                    </div>
                    <form accept-charset="utf-8" id="formlist">
                        <input type="hidden" name="id" class="updateid">
                        <div class="form-group clearfix">
                            <label class="col-sm-4 control-label">账户</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="pet_name" id="petname" disabled>
                            </div>
                        </div>
                        <div class="form-group clearfix">
                            <label class="col-sm-4 control-label">新密码</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="newpwd" id="newpwd">
                            </div>
                        </div>
                        <div class="form-group clearfix">
                            <div class="col-sm-6 col-sm-offset-3 fr">
                                <button class="btn btn-primary ccancel" type="button" id="cancel">取消</button>
                                <button class="btn btn-danger addbtn updatebtn" type="button" id="send">提交</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
            <div class="result" id="result">
                <p id="result-msg"></p>
                <button type="button" class="btn btn-primary" id="resbtn">确定</button>
            </div>
        </div>
    </div>
    <div class="contactus section" id="contactus">
        <div class="inner">
            <div class="content clearfix">
                <div class="contactus-msg col-md-4">
                   <dl>
                        <dt>联系我们</dt>
                        <dd>地址：广东省广州市白云区永泰红璞公寓B区</dd>
                        <dd>电话：400-820-888</dd>
                        <dd>手机：123-4567-8910</dd>
                        <dd>传真：123-45678910</dd>
                        <dd>邮箱：123456789@qq.com</dd>
                    </dl>
                </div>
                <div class="service col-md-5">
                    <span class="glyphicon glyphicon-earphone fl"></span>
                    <div class="kefu fl">
                       <p>全球客服热线</p>
                       <p>7*24咨询帮助</p>
                    </div>
                    <div class="customers fl">
                        <h1>4006-999-999</h1>
                    </div>
                </div>
                <div class="barcode col-md-3 clearfix">
                    <div class="leftcode fl">
                        <img src="../../../static/home/images/index_img/wx.png">
                        <p>关注微信公众号</p>
                    </div>
                    <div class="rightcode fl">
                        <img src="../../../static/home/images/index_img/wx.png">
                        <p>关注官方微博</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer section">
        <div class="inner">
            <div class="content">
                <div class="shortcut clearfix">
                    <ul>
                        <li><a href="index.html">首页</a></li>
                        <li><span>|</span></li>
                        <li><a href="#aboutus">关于我们</a></li>
                        <li><span>|</span></li>
                        <li><a href="#coach">教练团队</a></li>
                        <li><span>|</span></li>
                        <li><a href="#course">健身课程</a></li>
                        <li><span>|</span></li>
                        <li><a href="activity">会员介绍</a></li>
                        <li><span>|</span></li>
                        <li><a href="#contactus">联系我们</a></li>
                    </ul>
                </div>
                <div class="footer-msg">
                   <p>我的网站 版权所有 2008-2014 湘ICP备8888888</p>
                   <p>本站涵盖的内容、图片、视频等模板演示数据，部分未能与原作者取得联系。若涉及版权问题，请及时通知我们并提供相关证明材料，我们将支付合理报酬或立即予以删除！0731-00000000</p>
                   <p>Powered by MetInfo 7.0.0beta ©2008-2019  mituo.cn</p>
                </div>
            </div>
        </div>
    </div>
    <script src="../../../static/common/hplus/js/jquery.min.js?v=2.1.4"></script>
<script src="../../../static/common/hplus/js/bootstrap.min.js?v=3.3.6"></script>
<script>
    //修改密码
    $("#updatepwd").click(function () {
        var name=$("#name").html();
        $("#petname").val(name);
        $("#pop-up").show();
        $("#send").off().click(function () {
            updatep();
        })
    })
    $("#updateptwo").click(function () {
        var name=$("#name").html();
        $("#petname").val(name);
        $("#pop-up").show();
        $("#send").off().click(function () {
            updatep();
        })
    })
    function updatep(){
        var pwd=$("#newpwd").val();
        $.ajax({
            type:"post",
            url:"<?php echo url('home/Index/updatep'); ?>",
            dataType:"json",
            data:{pwd:pwd},
            success: function (data) {
                if(data.code==1){
                    $("#pop-up").hide();
                    $("#result-msg").html(data.msg)
                    $("#result").show();
                }else{
                    $("#pop-up").hide();
                    $("#result-msg").html(data.msg)
                    $("#result").show();
                }
            }
        })
    }
    //关闭操作弹窗
    $("#cancel").click(function () {
        $("#pop-up").hide();
    })
    //关闭提示弹窗
    $("#resbtn").click(function () {
        $("#result").hide();
    })
    /*修改资料*/
    $("#edit").click(function () {
        $(".inputdata").each(function () {
            $(this).prop("disabled",false);
        })
    })
    $("#updatedata").off().click(function () {
        var data=$("#formdata").serialize();
        $.ajax({
            type:"post",
            url:"<?php echo url('home/Index/updatedata'); ?>",
            dataType:"json",
            data:data,
            success: function (data) {
                if(data.code==1){
                    $("#result-msg").html(data.msg);
                    $("#result").show();
                    var petname=$("#pet_name").val();
                    $("#name").html(petname);
                }else{
                    $("#result-msg").html(data.msg);
                    $("#result").show();
                }
            }
        })
    })
    $(function () {
        $.ajax({
            type:"get",
            url:"<?php echo url('home/Index/logsdata'); ?>",
            dataType:"json",
            success: function (data) {
                if(data){
                    $("#logindata").html(data.create_time);
                }
            }
        })
    })
    $(function () {
        $.ajax({
            type:"get",
            url:"<?php echo url('home/Index/memberdata'); ?>",
            dataType:"json",
            success: function (data) {
                console.log(data)
                if(data){
                    $("#pet_name").val(data.pet_name);
                    $(".sex").each(function () {
                        if(data.sex==$(this).attr("code")){
                            $(this).prop('checked','checked');
                        }
                    });
                    $("#email").val(data.email);
                    $("#phone").val(data.phone);
                }
            }
        })
    })
</script>
</body>
</html>