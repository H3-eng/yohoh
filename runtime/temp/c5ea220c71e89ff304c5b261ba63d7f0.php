<?php /*a:1:{s:71:"/www/users/HA630745/WEB/yahoh/application/home/view/Index/becomeus.html";i:1571668596;}*/ ?>
<!DOCTYPE html>
<html>
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
    <link rel="stylesheet" type="text/css" href="../../../static/home/css/commond.css">
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
    <div class="becomeus">
        <div class="list-group">
          <a href="#" class="list-group-item active">
            欢迎加入YAHO
          </a>
          <a href="#" class="list-group-item">请致电：8888-8888888</a>
          <a href="#" class="list-group-item">联系地址：广东省广州市白云区榛果公寓32栋5楼</a>
          <a href="#" class="list-group-item">Porta ac consectetur ac</a>
          <a href="#" class="list-group-item">Vestibulum at eros</a>
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
</body>
</html>