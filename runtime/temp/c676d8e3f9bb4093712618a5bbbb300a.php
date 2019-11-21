<?php /*a:2:{s:68:"/www/users/HA630745/WEB/yahoh/application/home/view/index/index.html";i:1571633574;s:70:"/www/users/HA630745/WEB/yahoh/application/home/view/index/jsindex.html";i:1571633616;}*/ ?>
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
    <link rel="stylesheet" type="text/css" href="../../../static/home/css/index.css">
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
    <div class="slide-bg" id="slide-bg">
        <div id="carousel" class="carousel-slide">
            <ul>
                <li><img src="../../../static/home/images/index_img/bg4.jpg"></li>
            </ul>
        </div>
    </div>
    <div class="advantage">
        <div class="advantage-content inner clearfix">
            <div class="advantage-list col-md-3 col-sm-6">
                <div class="list-box">
                    <span class="glyphicon glyphicon-cloud"></span>
                    <span>强悍的师资队伍</span>
                    <p class="info-title"></p>
                    <p class="info-text">在教练的专业知识和服务态度上精益求精，更针对不同教练员的自身特点进行不间断地培训与提升。</p>
                </div>
            </div>
            <div class="advantage-list col-md-3 col-sm-6">
                <div class="list-box">
                    <span class="glyphicon glyphicon-star"></span>
                    <span>特色实用课</span>
                    <p class="info-title"></p>
                    <p class="info-text">针对身体需求人群开发了极为实用的针对性课程，从身体协调性、运动康复、心里健康等多个维度提供专业服务。</p>
                </div>
            </div>
            <div class="advantage-list col-md-3 col-sm-6">
                <div class="list-box">
                    <span class="glyphicon glyphicon-heart"></span>
                    <span>个性教学方案</span>
                    <p class="info-title"></p>
                    <p class="info-text">专家量身定制训练方案，结合自由学习的方式达到最好的锻炼效果。</p>
                </div>
            </div>
            <div class="advantage-list col-md-3 col-sm-6">
                <div class="list-box">
                    <span class="glyphicon glyphicon-certificate"></span>
                    <span>动医养结合</span>
                    <p class="info-title"></p>
                    <p class="info-text">依托与体育部门的深度合作，积累了大量的中国运动医学领域的专家资源。</p>
                </div>
            </div>
        </div>
    </div>
    <div class="aboutus">
        <div class="aboutus-content">
            <div class="introduction inner clearfix">
                <div class="col-md-6">
                    <div class="aboutus-header clearfix">
                        <span class="line fl"></span>
                        <h2 class="aboutus-title fl">关于我们</h2>
                        <a href="<?php echo url('home/Index/aboutus'); ?>" class="aboutus-btn more fr">查看更多</a>
                    </div>
                    <p>
                        Yaho健身俱乐部成立于2011年，至今已拥有5家直营专业健身俱乐部，营业面积过四万平方米，拥有200余名具有国家/国际资质的私人健身教练，服务会员人数累计超过2000多人。Yaho立足于健身产业，不仅仅秉承着健身这一简单理念，而且时刻以海纳百川的胸怀面向社会，以强烈的责任感回馈社会，以引领全民健身、引领健康时尚生活方式的旗手标准来要求自己，承载着健康梦想，倡导时尚健康的生活方式，为追求健康快乐生活的人群提供全方位的完美运动健康体验。
                    </p>
                </div>
                <div class="introduction-picture col-md-6">
                    <div class="picture-box" id="picture-box">
                        <img src="../../../static/home/images/index_img/1.jpg">
                        <img src="../../../static/home/images/index_img/2.jpg">
                        <img src="../../../static/home/images/index_img/3.jpg">
                        <img src="../../../static/home/images/index_img/4.jpg">
                    </div>
                    <div id="picture-lr">
                        <div class="left" id="left"><i class="glyphicon glyphicon-chevron-left"></i></div>
                        <div class="right" id="right"><i class="glyphicon glyphicon-chevron-right"></i></div>
                    </div>
                    <div class="picture-node" id="picture-node">
                        <ul id="picture-ul">
                            <li id="0">1</li>
                            <li id="1">2</li>
                            <li id="2">3</li>
                            <li id="3">4</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="in-text inner clearfix">
                <div class="in-textpic">
                    <img src="../../../static/home/images/index_img/logo.jpg">
                    <div class="top-left"></div>
                    <div class="bottom-right"></div>
                </div>
                <div class="in-textimg col-md-6">
                    <img src="../../../static/home/images/aboutus_img/aboutus1.jpg">
                </div>
                <div class="col-md-6">
                    <div class="in-textin">
                        <p>Yaho致力于将健康生活理念渗透到人民的日常工作及生活当中。为满足会员的特定健康管理需求,旨在引导客户转向健康的生活方式，从而提高生活质量、提升社会幸福指数。</p>
                        <p>Yaho——一个拥有八年成功经验的健身俱乐部，一个值得您信赖的品牌！</p>
                    </div>
                </div>
            </div>
            <div class="data">
                <div class="data-content clearfix inner">
                    <div class="col-md-4">
                        <i class="glyphicon glyphicon-certificate"></i>
                        <div class="datalist">
                            <span class="bigsize timer count-title" id="count-number" data-to="8" data-speed="2000">8</span>
                            <span>年</span>
                        </div>
                        <p>资深级健身创办资格</p>
                    </div>
                    <div class="col-md-4">
                        <i class="glyphicon glyphicon-user"></i>
                        <div class="datalist">
                            <span class="bigsize timer count-title" id="count-number" data-to="2000" data-speed="2000">2000+</span>
                            <span>名</span>
                        </div>
                        <p>来自全国的忠实会员</p>
                    </div>
                    <div class="col-md-4">
                        <i class="glyphicon glyphicon-home"></i>
                        <div class="datalist">
                            <span class="bigsize timer count-title" id="count-number" data-to="100" data-speed="2000">100</span>
                            <span>家</span>
                        </div>
                        <p>面积达1000平方以上的连锁店</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="coach section" id="coach">
        <div class="inner">
            <div class="coach-header clearfix">
                <span class="line fl"></span>
                <h2 class="coach-title fl">金牌教练</h2>
                <a href="<?php echo url('home/Coach/coach'); ?>" class="more coach-btn fr">查看更多</a>
            </div>
            <div class="coach-content clearfix">
                <?php foreach($coachlist as $key=>$v): ?>
                    <div class="col-md-2 coach-listall">
                       <div class="coach-list">
                            <div class="coach-picture">
                                <img src="../../../<?php echo htmlentities($v['pic_name']); ?>">
                            </div>
                            <div class="coach-describe">
                                <h3><?php echo htmlentities($v['coachname']); ?></h3>
                                <p>擅长领域：<?php echo htmlentities($v['goodat']); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="knowledge section" id="knowledge">
        <div class="inner">
            <div class="knowledge-header clearfix">
                <span class="line fl"></span>
                <h2 class="knowledge-title fl">新闻资讯</h2>
                <button type="button" class="knowledge-btn fr" id="knowledge-ativity">会员活动</button>
                <button type="button" class="knowledge-btn active fr" id="knowledge-fit">健康知识</button>
            </div>
            <div class="knowledge-content clearfix" id="knowledge-con1">
                <div class="clearfix">
                    <?php foreach($knowledgelist as $key=>$v): ?>
                        <div class="knowledge-list col-md-4">
                            <div class="k-picture col-md-5">
                                <img src="../../../<?php echo htmlentities($v['pic_name']); ?>">
                            </div>
                            <div class="col-md-7">
                                <h3>
                                    <a href="<?php echo url('home/Knowledge/article',['id'=>$v['id']]); ?>"><?php echo htmlentities(msubstr($v['title'],0,8,'utf-8','true')); ?></a>
                                </h3>
                                <div class="kcontent"><?php echo msubstr(strip_tags($v['content']),0,45,'utf-8','true'); ?></div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="readmore">
                    <a href="<?php echo url('home/Knowledge/knowledge'); ?>" class="more">查看更多</a>
                </div>
            </div>
            <div class="knowledge-content knowledge-con clearfix" id="knowledge-con">
                <div class="clearfix">
                    <?php foreach($activitylist as $key=>$v): ?>
                    <div class="knowledge-list col-md-4">
                        <div class="k-picture col-md-5">
                            <img src="../../../<?php echo htmlentities($v['pic_name']); ?>">
                        </div>
                        <div class="col-md-7">
                            <h3>
                                <a href="<?php echo url('home/Activity/article',['id'=>$v['id']]); ?>"><?php echo htmlentities(msubstr($v['title'],0,8,'utf-8','true')); ?></a>
                            </h3>
                            <div><?php echo msubstr(strip_tags($v['content']),0,45,'utf-8','true'); ?></div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="readmore">
                    <a href="<?php echo url('home/Activity/customers'); ?>" class="more">查看更多</a>
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
    <div class="top">
        <div class="top-menu">
            <div class="menu-list btn-qq">
                <img src="../../../static/home/images/index_img/r_qq.png">
            </div>
            <div class="menu-list btn-wx">
                <img src="../../../static/home/images/index_img/r_wx.png">
                <img src="../../../static/home/images/index_img/wx.png" class="wx-img">
            </div>
            <div class="menu-list btn-phone">
                <img src="../../../static/home/images/index_img/r_phone.png">
                <div class="menu-phone">4009200206</div>
            </div>
            <div class="menu-list btn-top">
                <a href="#top"><img src="../../../static/home/images/index_img/r_top.png"></a>
            </div>
        </div>
    </div>
    <script src="../../../static/common/hplus/js/jquery.min.js?v=2.1.4"></script>
<script src="../../../static/common/hplus/js/bootstrap.min.js?v=3.3.6"></script>
<script src="../../../static/home/js/count-number.js"></script>
<script>
    //轮播图
    var imgsdata=document.getElementById("picture-box").getElementsByTagName("img");
    var lidata=document.getElementById("picture-node").getElementsByTagName("li");
    var index=0;
    for(var i=0;i<lidata.length;i++){
        lidata[i].onmouseover= function (e) {
            index= e.target.id;
            for(var j=0;j<imgsdata.length;j++){
                if(index==j){
                    lidata[j].style.backgroundColor="#ff0000";
                    imgsdata[j].style.display="block";
                }else{
                    lidata[j].style.backgroundColor="#666";
                    imgsdata[j].style.display="none";
                }
            }
        }
    }
    document.getElementById("left").onclick=function() {
        if (index <= 0) {
            index = 3;
        } else {
            index -= 1;//index=index-1
        }
        for (var i = 0; i < 4; i++) {
            if (i == index) {
                lidata[i].style.backgroundColor="#ff0000";
                imgsdata[i].style.display="block";
            } else {
                lidata[i].style.backgroundColor="#666";
                imgsdata[i].style.display="none";
            }
        }

    }
    document.getElementById("right").onclick=function() {
        if (index >= 3) {
            index = 0;
        } else {
            index += 1;//index=index-1
        }
        for (var i = 0; i < 4; i++) {
            if (i == index) {
                lidata[i].style.backgroundColor="#ff0000";
                imgsdata[i].style.display="block";
            } else {
                lidata[i].style.backgroundColor="#666";
                imgsdata[i].style.display="none";
            }
        }

    }
    var timeout=setInterval(startout,4000);
    function startout(){
        if(index>=3){
            index=0;
        }else{
            index+=1
        }
        for(var i=0;i<lidata.length;i++){
            if(index==i){
                lidata[i].style.backgroundColor="#ff0000";
                imgsdata[i].style.display="block";
            }else{
                lidata[i].style.backgroundColor="#666";
                imgsdata[i].style.display="none";
            }
        }
    }
    var picturebox=document.getElementById("picture-box");
    picturebox.onmouseover= function () {
        window.clearTimeout(timeout);
    }
    picturebox.onmouseout= function () {
         timeout=setInterval(startout,4000);
    }
</script>
</body>
</html>