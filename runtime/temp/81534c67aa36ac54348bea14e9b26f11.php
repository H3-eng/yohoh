<?php /*a:1:{s:70:"/www/users/HA630745/WEB/yahoh/application/home/view/Index/aboutus.html";i:1571633933;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>关于我们页面</title>
    <!-- 引入bootstrap样式表 -->
    <link href="../../../static/common/hplus/css/bootstrap.min14ed.css?v=3.3.6" rel="stylesheet">
    <!-- 引入自定义样式表 -->
    <link rel="stylesheet" href="../../../static/home/css/base.css">
    <link rel="stylesheet" type="text/css" href="../../../static/home/css/commond.css">
    <link rel="stylesheet" type="text/css" href="../../../static/home/css/aboutus.css">
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
    <div class="aboutus section" id="aboutus">
       <div class="inner">
            <div class="content">
                <div class="introduction clearfix">
                   <div class="aside col-md-2">
                       <ul class="list_tab" id="list_tab">
                           <li class="on">关于本站</li>
                           <li>联系我们</li>
                           <li>版权信息</li>
                           <li>隐私声明</li>
                           <li>招聘信息</li>
                       </ul>
                   </div>
                    <div class="aside_r col-md-9">
                        <div class="item">
                            <h2>公司简介</h2>
                            <p>Yaho健身俱乐部成立于2011年，至今已拥有5家直营专业健身俱乐部，营业面积过四万平方米，拥有200余名具有国家/国际资质的私人健身教练，服务会员人数累计超过2000多人。Yaho立足于健身产业，不仅仅秉承着健身这一简单理念，而且时刻以海纳百川的胸怀面向社会，以强烈的责任感回馈社会，以引领全民健身、引领健康时尚生活方式的旗手标准来要求自己，承载着健康梦想，倡导时尚健康的生活方式，为追求健康快乐生活的人群提供全方位的完美运动健康体验。
                            </p>
                            <p>Yaho致力于将健康生活理念渗透到人民的日常工作及生活当中。为满足会员的特定健康管理需求,旨在引导客户转向健康的生活方式，从而提高生活质量、提升社会幸福指数。</p>
                            <p>Yaho健身俱乐部是集室内恒温游泳、瑜伽、特色团操课、特色培训、VIP私人教练课程、器械、羽毛球、篮球、乒乓球、桌球、营养吧、SPA水疗吧等健身休闲娱乐设施为一体的综合性健身连锁俱乐部；开办至今，凭借业内优秀的管理团体，国内成熟的经营理念，国际一流器械设施，专业、专注、专心的品牌理念，服务珠三角健身客户6万多名VIP会员，300多万次运动，40多万次VIP私教课程，赢得众多客户的信赖，并在业界获得良好口碑！</p>
                            <p>Yaho——一个拥有八年成功经验的健身俱乐部，一个值得您信赖的品牌！</p>
                        </div>
                        <div class="item none">
                            <p>广州YAHO健身俱乐部</p>
                            <p> 地址：广州市白云区东圃二马路78号盈科智谷B栋452</p>
                            <p>邮编：510600</p>
                            <p>电话：4006-888-888</p>
                            <p>传真：020-88888888</p>
                            <p>E-mail：8888@qq.com</p>
                            <p> QQ：88888888，88888888</p>
                        </div>
                        <div  class="item none">
                            <h5>版权说明</h5>
                            <p>
                                YAHO公司拥有网站相关网页内所有资料（包括但不限于文字表述及其组合、图标、图饰、色彩、版面设计、专栏目录与名称、内容分类标准）的版权，或与 网站相关网页内容的资料提供者共同享有该网页内资料的版权，受中国知识产权法律法规及其相关法律法规以及相关国际条约的保护。
                                <br>
                                　　本站名称“YAHO健身俱乐部”是在广州市工商局登记注册的网站名称，任何个人、组织如有使用相同或类似的字样作为网站名称的，属于侵权行为，本站保留采取措施的权 力。本站LOGO、广告、域名、软件、版面设计、专栏目录与名称、内容分类标准以及为注册用户提供的任何或所有信息，
                                均受中华人民共和国相关知识产权法律 及其他财产权利法律的保护。
                            </p>
                        </div>
                        <div class="item none">
                            <h5>信息公开与共享</h5>
                            <p>YAHO不会将你的个人识别信息出租或出售给任何人。<br>
                                以下情况除外：<br>
                                　　你同意让第三方共享资料；<br>
                                　　只有透露你的个人资料，才能提供你所要求的产品和服务；<br>
                                　　我们需要向代表我们提供产品或服务的公司提供资料（除非我们另行通知你，否则这些公司无权使用你的身份识别资料）；<br>
                                　　我们需要听从法庭传票、法律命令或遵循法律程序；</p>
                            <h5>安全性</h5>
                            <p>
                                请注意，无论是您亲自，还是通过电话或互联网提供个人数据，都存在一定的风险，且没有任何系统或技术是完全安全、可防止篡改或黑客恶意攻击 的，
                                我们已尽力采取适当的保护措施以防止及尽可能降低未经授权的访问、滥用个人信息，以及个人信息不准确的风险。
                                例如，在收集或传送敏感数 据，如信用卡信息时，我们使用加密技术来保障数据安全。
                            </p>

                        </div>
                        <div class="item none">
                            <p>
                            YAHO热诚的欢迎不断进取、永不言弃、谦虚严谨、热情活力的您加入我们的团队，共创未来！
                            因公司业务快速发展需招聘以下职位，一经录用，YAHO将提供丰厚的薪酬及广阔的个人发展空间以及提供完善的员工福利!
                            有意者可发送简历至：88888888@qq.com（注明应聘职位）。</p>
                            <div class="joblist">
                                <h5>文员</h5>
                                <p class="noindex">工作地点：广州<br>
                                职位描述:<br>
                                1.负责多种形式的招聘工作，鉴定招聘工作的流程，负责新人的面试。<br>
                                2.负责新人的跟进。<br>
                                3.负责办理员工的入职，转正，离职等异动手续。<br>
                                4.负责员工的月，年绩效的管理；<br>
                                5.负责工作会议的完成召开，会议的记录，组织员工活动。<br>
                                职位要求：<br>
                                1.年龄22-35岁，形象气质好，亲和力强，善于沟通。<br>
                                2.要一定的团队精神,能够承受一定的工作压力，至少有激情与耐心。<br>
                                3. 具有优秀的表达沟通能力、学习能力和应变能力。<br></p>
                            </div>
                            <div class="joblist">
                                <h5>助理</h5>
                                <p class="noindex">工作地点：广州<br>
                                职位描述:<br>
                                1、负责日常招聘工作，协助拓展招聘渠道，组织并安排人力资源面试；<br>
                                2、协同开展新员工入职培训，业务培训；<br>
                                3、完成销售主管日常数据报表统计汇总；<br>
                                职位要求：<br>
                                1、人力资源或相关专业大专以上学历；<br>
                                2、良好的职业操守和职业素质，富有亲和力，认同企业文化，能承受一定工作压力。工作态度乐观积极，良好的团队合作意识；<br>
                                3、具有良好的职业道德，踏实稳重，工作细心，责任心强，有较强的沟通、协调能力，有团队协作精神；<br>
                                4、有良好的书面、口头表达能力、极强的亲和力与服务意识，沟通领悟能力强，逻辑思维能力强；<br>
                                5、具备强烈的责任感，事业心，优秀的沟通能力，耐心、细心，以及严谨的逻辑思维能力。<br></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="environment">
                    <div class="en-content clearfix">
                        <div class="picture col-md-4">
                            <img src="../../../static/home/images/aboutus_img/aboutus2.jpg" height="259" width="389" alt="">
                            <p>动感单车设施</p>
                        </div>
                        <div class="picture col-md-4">
                            <img src="../../../static/home/images/aboutus_img/aboutus3.jpg" height="259" width="389" alt="">
                            <p>肌肉健身室</p>
                        </div>
                        <div class="picture col-md-4">
                            <img src="../../../static/home/images/aboutus_img/aboutus4.jpg" height="259" width="389" alt="">
                            <p>养生瑜伽室</p>
                        </div>
                        <div class="picture col-md-4">
                            <img src="../../../static/home/images/aboutus_img/aboutus5.jpg" height="259" width="389" alt="">
                            <p>哑铃摆放地</p>
                        </div>
                        <div class="picture col-md-4">
                            <img src="../../../static/home/images/aboutus_img/aboutus6.jpg" height="259" width="389" alt="">
                            <p>跑步健身设施</p>
                        </div>
                        <div class="picture col-md-4">
                            <img src="../../../static/home/images/aboutus_img/aboutus7.jpg" height="259" width="389" alt="">
                            <p>有氧拳击馆</p>
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