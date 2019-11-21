<?php /*a:1:{s:67:"/www/users/HA630745/WEB/yahoh/application/home/view/Index/help.html";i:1571635763;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>帮助中心</title>
    <!-- 引入bootstrap样式表 -->
    <link href="../../../static/common/hplus/css/bootstrap.min14ed.css?v=3.3.6" rel="stylesheet">
    <!-- 引入自定义样式表 -->
    <link rel="stylesheet" href="../../../static/home/css/base.css">
    <link rel="stylesheet" type="text/css" href="../../../static/home/css/commond.css">
    <link rel="stylesheet" type="text/css" href="../../../static/home/css/help.css">
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
                    <a href="<?php echo url('home/login/login'); ?>" class="effect">会员登录</a>
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
    <div class="helpus section" id="helpus">
       <div class="inner">
            <div class="content">
                <div class="introduction clearfix">
                   <div class="aside col-md-2">
                       <div class="aside-header">帮助中心</div>
                       <ul class="list_tab" id="list_tab">
                           <li class="on">课程预约</li>
                           <li>场地预约</li>
                           <li>个人资料</li>
                           <li>其他</li>
                       </ul>
                   </div>
                    <div class="aside_r col-md-9">
                        <div class="item">
                            <h4>预约课程遇到问题了？</h4>
                            <p>
                                Q：如何预约课程 <br>
                                A：团操课程：[健身课程]->[团操课程]->选择课程模块->选择课程时间->点击预约课程按钮
                                B：私教课程：[健身课程]->[私教课程]->选择相应课程->点击购买课程->客服会立即联系
                            </p>
                            <p>
                                Q：如何预约不到课程怎么办 <br>
                                A：每项课程都有规定的人数限制，如果显示报名人数已满时，请选择其他未满课程
                            </p>
                            <p>
                                Q：课程如何收费<br>
                                A：团操课程面向会员全部免费，私教课程参考页面的价格，详情请于客服联系
                            </p>
                            <p>
                                Q：如何查看课程预约的记录<br>
                                A：[个人资料]->快速通道->课程预约记录
                            </p>
                        </div>
                        <div class="item none">
                            <h4>预约场地遇到问题了？</h4>
                            <p>
                                Q：如何预约场地 <br>
                                A：[个人中心]->[场地预约]->选择日期->选择场地->选择时间和场数->点击确定按钮->右边确定订单详情->点击下单按钮
                            </p>
                            <p>
                                Q：想要预约多个场地怎么办？ <br>
                                A：俱乐部规定每次只能预约最多三个场地，如有需要可重复预约，如果想要预约多天场地，可与工作人员联系
                            </p>
                            <p>
                                Q：场地如何收费<br>
                                A：不同的场地收费额度不同，具体的价格请看订单详情
                            </p>
                            <p>
                                Q：预约场地如何支付<br>
                                A：确定订单后，请点击下单并扫描二维码进行支付，支付完成后点击支付成功按钮
                            </p>
                            <p>
                                Q：如何查看预约场地的订单<br>
                                A：[场地预约]->点击查看预订记录按钮
                                B：[个人资料]->快速通道->场地预约记录
                            </p>
                        </div>
                        <div  class="item none">
                            <h4>个人资料编辑遇到了问题？</h4>
                            <p>
                                Q：如何修改头像 <br>
                                A：[个人中心]->[个人资料]->修改头像->上传图片/选择热门头像->保存头像
                            </p>
                            <p>
                                Q：如何修改密码 <br>
                                A：[个人中心]->[个人资料]->快速通道->修改密码/登录历史->修改密码
                            </p>
                            <p>
                                Q：如何修改资料<br>
                                A：[个人中心]->[个人资料]->编辑->完善资料->点击修改按钮
                            </p>
                            <p>
                                Q：如何查看登录记录<br>
                                A：[个人中心]->[个人资料]->查看更多
                            </p>
                        </div>
                        <div class="item none">
                            <h4>其他方面遇到了问题？</h4>
                            <p>
                                Q：想要查看教练信息 <br>
                                A：[教练团队]->输入教练名字->点击按钮
                            </p>
                            <p>
                                Q：想要查看健康知识 <br>
                                A：[首页]->新闻资讯模块->健康知识->查看更多
                                B：[健身知识]->点击标题->查看
                            </p>
                            <p>
                                Q：想要查看会员权利<br>
                                A：[会员专区]->会员权利
                            </p>
                            <p>
                                A：[首页]->新闻资讯模块->会员活动->查看更多
                                B：[会员专区]->会员活动->点击标题->查看
                            </p>
                        </div>
                    </div>
                </div>
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
                        <img src="../../../static/home/images/index_img/wx.png" height="280" width="280">
                        <p>关注微信公众号</p>
                    </div>
                    <div class="rightcode fl">
                        <img src="../../../static/home/images/index_img/wx.png" height="280" width="280">
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
        $("#list_tab li").click(function () {
            var index=$(this).index();
            $(this).addClass("on").siblings("li").removeClass("on");
            $(".item").eq(index).show().siblings(".item").hide();
        })
    </script>
</body>
</html>