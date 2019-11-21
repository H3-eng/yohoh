<?php /*a:1:{s:75:"/www/users/HA630745/WEB/yahoh/application/home/view/Activity/customers.html";i:1571667507;}*/ ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>会员介绍</title>
        <!-- 引入bootstrap样式表 -->
        <link href="../../../static/common/hplus/css/bootstrap.min14ed.css?v=3.3.6" rel="stylesheet">
        <!-- 引入自定义样式表 -->
        <link rel="stylesheet" href="../../../static/home/css/base.css">
        <link rel="stylesheet" type="text/css" href="../../../static/home/css/commond.css">
        <link rel="stylesheet" type="text/css" href="../../../static/home/css/customers.css">
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
        <div class="activity" id="activity">
            <div class="inner">
                <h1>会员活动</h1>
                <div class="content clearfix">
                    <?php foreach($data as $k=>$v): ?>
                    <div class="col-md-4">
                        <div class="activity-list">
                            <div class="activity-picture">
                                <img src="<?php echo htmlentities($v['pic_name']); ?>">
                            </div>
                            <div class="activity-text">
                                <h4><?php echo htmlentities(msubstr($v['create_time'],0,10)); ?></h4>
                                <h2><a href="<?php echo url('home/activity/article',['id'=>$v['id']]); ?>"><?php echo htmlentities(msubstr($v['title'],0,10)); ?></a></h2>
                                <p class="p"><?php echo msubstr(strip_tags($v['content']),0,90,'utf-8','true'); ?></p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    <div class="pagelist"><?php echo $data; ?></div>
                </div>           
            </div>       
        </div>
        <div class="interview" id="interview">
            <div class="interview-bg">
                <div class="interview-content inner">
                    <h1>会员权利</h1>
                    <div class="i_content clearfix">
                        <div class="col-md-12 clearfix">
                            <div class="col-md-6 interview-list">
                                <h2>会员Party日</h2>
                                <p class="list_text">每个月会设立一次开放的聚会，主题涉及运动、健康、交际、户外等领域，
                                    所有主题均由会员自行提出，目的充分发挥会所的娱乐、互动平台。</p>
                            </div>
                        </div>
                        <div class="col-md-12 clearfix">
                            <div class="col-md-6 fr interview-list">
                                <h2> 大面积实体绿植墙应用</h2>
                                <p class="list_text">新鲜的空气对处在运动过程中的人群十分重要，
                                    YAHO在设计之初就提倡"健身氧吧"的运动理念，
                                    店内采用大面积真体绿植墙来达到"氧吧"的功能。</p>
                            </div>
                        </div>
                        <div class="col-md-12 clearfix">
                            <div class="col-md-6 interview-list">
                                <h2> 完善的新风空气交换系统</h2>
                                <p class="list_text">快速的空气循环是保证会所内新鲜空气的必要手段，
                                    科学合理的换风周期（1次/5分钟）是威仕顿为您提供的健康运动保证。
                                </p>
                            </div>
                        </div>
                        <div class="col-md-12 clearfix">
                            <div class="col-md-6 fr interview-list">
                                <h2> 顶级互动式健身设备</h2>
                                <p class="list_text">进口WIFI功能跑步机上的大尺寸互动液晶屏可以无线连接店内同时运转的其他跑步机，
                                    与其进行时时互动，在增加互动的同时提升运动乐趣。
                                </p>
                            </div>
                        </div>
                        <div class="col-md-12 clearfix">
                            <div class="col-md-6 interview-list">
                                <h2> VESTON互动操课模式</h2>
                                <p class="list_text">根据"YAHO"品牌寓意，每名教练都是快乐、健康的传播使者，
                                    在教授操课过程中都会与会员进行充分的互动，最大限度的调动会员积极参与热情。
                                </p>
                            </div>
                        </div>
                        <div class="col-md-12 clearfix">
                            <div class="col-md-6 fr interview-list">
                                <h2> 提供"即时健身"服务配置</h2>
                                <p class="list_text">为让目前工作达人们能够不为健身前的筹备所累，为更多的客户提供健身便利条件，
                                    YAHO在服务细节方面大力挖掘，包括：免费提供洗护用品、感应式更衣柜、毛巾等。
                                    力争让想运动的客户随时可以来运动。
                                </p>
                            </div>
                        </div>
                        <div class="col-md-12 clearfix">
                            <div class="col-md-6 interview-list">
                                <h2> 健身小管家的专业服务理念</h2>
                                <p class="list_text">健康档案：YAHO采用终身会员制，凡入会即可获赠终身健康档案 <br>
                                    健康体检：每三个月提供一次专业的健康体检，并提出针对性的运动和饮食建议。<br>
                                    健康管家：定期通知会员近期运动频率，督促会员坚持运动。<br>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-12 clearfix">
                            <div class="col-md-6 fr interview-list">
                                <h2> 功能型水吧设置</h2>
                                <p class="list_text">屏蔽碳酸饮料，提供鲜果汁、咖啡等健康、时尚休闲饮品。
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
    </body>
</html>