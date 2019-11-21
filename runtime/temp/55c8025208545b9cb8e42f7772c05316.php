<?php /*a:1:{s:70:"/www/users/HA630745/WEB/yahoh/application/home/view/Course/course.html";i:1573473239;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <!-- 引入bootstrap样式表 -->
    <link href="../../../static/common/hplus/css/bootstrap.min14ed.css?v=3.3.6" rel="stylesheet">
    <!-- 引入自定义样式表 -->
    <link rel="stylesheet" href="../../../static/home/css/base.css">
    <link rel="stylesheet" type="text/css" href="../../../static/home/css/commond.css">
    <link rel="stylesheet" type="text/css" href="../../../static/home/css/course.css">
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
    <div class="course section zao" id="course">
        <input type="hidden" value="<?php echo htmlentities(app('request')->session('member.id')); ?>" id="member_id">
        <div class="allcourse inner clearfix">
            <h2>团操课程</h2>
            <div class="clearfix">
              <p class="fl">根据YAHO团操IBDP课程体系研发出适合零基础团操课程</p>
               <div class="searchbtn fr"><a href="<?php echo url('home/index/search'); ?>" type="button" class="btn btn-primary">快捷查询课程</a></div>
            </div>
            <div class="course-content">
                <div class="course-list col-md-2" id="aa">
                    <ul id="list">
                        <li class="classify-list active"><a>所有课程</a></li>
                        <?php foreach($courselist as $k=>$v): ?>
                        <li class="classify-list"><a><?php echo htmlentities($v['course_name']); ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="introduction-list">
                    <div class="course-introduction all col-md-10">
                        <div class="text col-md-8">
                            <h2>课程介绍</h2>
                            <p>本俱乐部每周日晚上九点将准时更新下周的课程，请认真查看相关课程信息，注意上课时间和地点</p>
                           <p>注意：每节课程将限制人数50人，若有心仪课程，请及时预订</p>                   
                           <div class="course-time">
                            <p>开课时间：</p>
                                <div class="clearfix">
                                    <div class="worktime col-md-6">
                                        <p>
                                            <span>
                                            星期一至星期五：
                                            </span>
                                        </p>                     
                                        <p>
                                            <span>早上 10:00-11:30</span>
                                        </p>
                                        <p>
                                            <span>下午 14:00-17:30</span>
                                        </p>
                                        <p>
                                            <span>晚上 19:00-21:00</span>
                                        </p>
                                     </div>  
                                    <div class="relextime col-md-6">
                                        <p>
                                            <span>星期六至星期日</span>
                                        </p>
                                        <p>
                                            <span>早上 10:00-11:30</span>
                                        </p>
                                        <p>
                                            <span>下午 14:00-17:30</span>
                                        </p>
                                        <p>
                                            <span>晚上 自由活动</span>
                                        </p>
                                    </div>
                                </div>
                               
                                <p>
                                    <span>营业时间：</span>
                                </p>
                                <p>
                                    <span>星期一至星期日</span>
                                    <span>10:00-21:00</span>
                                </p>
                            </div>
                        </div>
                        <div class="show col-md-4">
                            <img src="images/course1.jpg" alt="">      
                        </div>      
                    </div>
                    <div class="course-introduction hidd yoga col-md-10">
                        <div class="text col-md-8">
                            <h2>课程介绍</h2>
                            <p>养生瑜伽，是一种来源于古印度的运动。通过调整自己的呼吸，运用一些动作和姿势，让身体和心灵得到平衡，让身心的达到最好的状态。可以消除身体的疲惫感，让整个人都变得轻松，还可以让心态变得更积极。</p>
                           <p>养生瑜伽包括瑜伽十四式养生术：从头到脚的全身活动功法，缓和、谐调，强身健体、延年益寿的最佳养生法。</p> 
                           <p>养生瑜伽能预防和治疗各种身心相关的疾病、背痛、肩痛、颈痛、关节痛、失眠、消化系统紊乱、痛经、脱发等都有显著疗效；瑜伽能调节身心系统，消除烦恼，减压养心，释放身心，全身舒畅，心绪平静、冷静思考，达到修心养性的目的。</p>
                           <p>本周开课时间：</p>
                           <div class="course-time">
                               <?php foreach($data[0] as $k=>$v): ?>
                                <p>
                                    <i class="input-img check_bg">
                                        <input class="time el" type="checkbox" code="<?php echo htmlentities($v['id']); ?>"  id="time<?php echo htmlentities($v['id']); ?>">
                                    </i>
                                    <label for="time<?php echo htmlentities($v['id']); ?>"><span><?php echo htmlentities($v['course_week']); ?> <?php echo htmlentities($v['course_time']); ?></span></label>
                                </p>
                               <?php endforeach; ?>
                            </div>
                            <?php if(app('request')->session('member.id')): ?><input type="submit" value="预订课程" class="coursesubmit fr" ><?php endif; ?>
                        </div>
                        <div class="show col-md-4">
                            <img src="images/course1.jpg" alt="">              
                        </div>      
                    </div>
                    <div class="course-introduction hidd jazz col-md-10">
                        <div class="text col-md-8">
                            <h2>课程介绍</h2>
                            <p>爵士舞，是一种急促又富动感的节奏型舞蹈，是属于一种外放性的舞蹈。爵士舞蹈最初是非洲舞蹈的延伸，经被贩卖作为奴隶的黑人群体带到美国本土，而在美国逐渐演进形成本土化、大众化的舞蹈。</p> 
                           <p>爵士舞主要是动作和旋律方面的表演，主要目的是为了娱乐别人也娱乐自己，可带给自己与别人一段美好的时光，这也是为什么它的表现一点都不虚饰，舞蹈时所散发出愉悦的气氛和那种快乐的精神非常具感染力。虽然说必须具有非常好的技巧才能成为一位成功的爵士舞者，但是几乎每个人都能掌握它的基础舞步，而且爵士舞的表演空间很广，个人的色彩和独特的风格才是舞动时最令人注目的地方</p>
                           <p>本周开课时间：</p>
                           <div class="course-time">
                               <?php foreach($data[1] as $k=>$v): ?>
                               <p>
                                   <i class="input-img check_bg">
                                       <input class="time el" type="checkbox" code="<?php echo htmlentities($v['id']); ?>"  id="time<?php echo htmlentities($v['id']); ?>">
                                   </i>
                                   <label for="time<?php echo htmlentities($v['id']); ?>"><span><?php echo htmlentities($v['course_week']); ?> <?php echo htmlentities($v['course_time']); ?></span></label>
                               </p>
                               <?php endforeach; ?>
                            </div>
                           <?php if(app('request')->session('member.id')): ?><input type="submit" value="预订课程" class="coursesubmit fr" ><?php endif; ?>
                        </div>
                        <div class="show col-md-4">
                            <img src="images/course1.jpg" alt="">              
                        </div>      
                    </div>
                    <div class="course-introduction hidd belly col-md-10">
                        <div class="text col-md-8">
                            <h2>课程介绍</h2>
                            <p>肚皮舞，是一种带有阿拉伯风情的舞蹈形式，起源于中东地区，是身心合一的修身养性之舞，是神圣、崇高的宫廷舞，现成为一种国际性舞蹈</p> 
                           <p>肚皮舞是较为女性的舞蹈，舞者随着变化万千的快速节奏摆动臀部和腹部，舞姿优美，变化多端，而且多彰显阿拉伯风情，以神秘著称。近些年，肚皮舞也作为一种深受女士喜爱的减肥方式在世界各地广为流行。</p>
                           <p>肚皮舞其特色是，随着变化万千的快速节奏，摆动腹部、使劲的舞动臂部、胸部，这些动作，成为肚皮舞，牢不可破传统舞技，肚皮舞必需在平滑的地板，赤足舞蹈，配合音乐，以极快速，错综复杂之感性肢体动作，快速的舞步，交叉摇摆的舞姿，时而优雅、时而感性、妩媚娇柔，时而傲酷，神秘，肚皮舞迷人的特资，令人目不暇接。</p>
                           <p>本周开课时间：</p>
                           <div class="course-time">
                               <?php foreach($data[2] as $k=>$v): ?>
                               <p>
                                   <i class="input-img check_bg">
                                       <input class="time el" type="checkbox" code="<?php echo htmlentities($v['id']); ?>"  id="time<?php echo htmlentities($v['id']); ?>">
                                   </i>
                                   <label for="time<?php echo htmlentities($v['id']); ?>"><span><?php echo htmlentities($v['course_week']); ?> <?php echo htmlentities($v['course_time']); ?></span></label>
                               </p>
                               <?php endforeach; ?>
                            </div>
                            <?php if(app('request')->session('member.id')): ?><input type="submit" value="预订课程" class="coursesubmit fr"><?php endif; ?>
                        </div>
                        <div class="show col-md-4">
                            <img src="images/course1.jpg" alt="">
                        </div>      
                    </div>
                    <div class="course-introduction hidd aerobic col-md-10">
                        <div class="text col-md-8">
                            <h2>课程介绍</h2>
                            <p>有氧操 是一种 运动强度恰如其分的体操，非常适合于心肺功能和肌肉力量的逐步增强，同时确保营养素的需氧呼吸，避免人体内的“燃烧”的浪费。</p> 
                           <p>单车站姿爬坡：能锻炼到股四头肌和臂大肌，增加肌肉的肌耐力和肌力量，提高心肺功能，也可以减脂和缓解压力。</p>
                           <p>前踢腿：能锻炼到股四头肌、小腿和臂部，能够快速减肥，改善肌肉协调，还是一个简单的防身动作。</p>
                           <p>背靠球箭步蹲：可以锻炼到股四头肌和臀部，对提臀和塑造腿部曲线都很有帮助。</p>
                           <p>球上仰卧起坐：可以锻炼腹直肌，减少腹部多余脂肪，增强腰腹的力量，还可以锻炼身体的平衡，改善肠胃功能，尤其对便秘有很大帮助。</p>
                           <p>本周开课时间：</p>
                           <div class="course-time">
                               <?php foreach($data[3] as $k=>$v): ?>
                               <p>
                                   <i class="input-img check_bg">
                                       <input class="time el" type="checkbox" code="<?php echo htmlentities($v['id']); ?>"  id="time<?php echo htmlentities($v['id']); ?>">
                                   </i>
                                   <label for="time<?php echo htmlentities($v['id']); ?>"><span><?php echo htmlentities($v['course_week']); ?> <?php echo htmlentities($v['course_time']); ?></span></label>
                               </p>
                               <?php endforeach; ?>
                            </div>
                            <?php if(app('request')->session('member.id')): ?><input type="submit" value="预订课程" class="coursesubmit fr"><?php endif; ?>
                        </div>
                        <div class="show col-md-4">
                            <img src="images/course1.jpg" alt="">
                        </div>      
                    </div> 
                    <div class="course-introduction hidd boxing col-md-10">
                        <div class="text col-md-8">
                            <h2>课程介绍</h2>
                            <p>搏击操，是一种有氧操，是Aerobics的又一创新，它结合了拳击、泰拳、跆拳道、散手、太极的基本动作，遵循健美操最新编排方法，在强有力的音乐节拍下完成的一种身体锻炼方式。</p> 
                           <p>搏击操要求速度和力度的完美结合，可以消耗大量的热量，做一个小时的搏击操可以消耗600卡的热量，是跳健美操的两倍，而且练习搏击操可以加强腰部和腹部的肌肉力量，持续练习3个月后能让练习者拥有很好的耐力。</p>
                           <p>本周开课时间：</p>
                           <div class="course-time">
                               <?php foreach($data[4] as $k=>$v): ?>
                               <p>
                                   <i class="input-img check_bg">
                                       <input class="time el" type="checkbox" code="<?php echo htmlentities($v['id']); ?>"  id="time<?php echo htmlentities($v['id']); ?>">
                                   </i>
                                   <label for="time<?php echo htmlentities($v['id']); ?>"><span><?php echo htmlentities($v['course_week']); ?> <?php echo htmlentities($v['course_time']); ?></span></label>
                               </p>
                               <?php endforeach; ?>
                            </div>
                            <?php if(app('request')->session('member.id')): ?><input type="submit" value="预订课程" class="coursesubmit fr"><?php endif; ?>
                        </div>
                        <div class="show col-md-4">
                            <img src="images/course1.jpg" alt="">
                        </div>      
                    </div>
                    <div class="course-introduction hidd bike col-md-10">
                        <div class="text col-md-8">
                            <h2>课程介绍</h2>
                            <p>动感单车，是一种结合了音乐、视觉效果等独特的充满活力的室内自行车训练课程。动感单车克服了室外行驶的一切缺点，并在技术上进行改进，使得这项运动在简单易学之余，成为一项能够使全身得到锻炼的有氧运动。</p> 
                           <p>动感单车在充分激活身体的运动细胞后，在消耗能量的同时达到减脂的目的。在以腿部为中心的锻炼过程中，臀部、腰部、背部、手臂的肌肉都能得到充分的锻炼，同时还能够增强你的心肺功能。</p>
                           <p>动感单车是健身房中运动量最大的器械之一，对体能的要求非常高，通常一堂课能消耗500卡左右的热量。</p>
                           <p>本周开课时间：</p>
                           <div class="course-time">
                               <?php foreach($data[5] as $k=>$v): ?>
                               <p>
                                   <i class="input-img check_bg">
                                       <input class="time el" type="checkbox" code="<?php echo htmlentities($v['id']); ?>"  id="time<?php echo htmlentities($v['id']); ?>">
                                   </i>
                                   <label for="time<?php echo htmlentities($v['id']); ?>"><span><?php echo htmlentities($v['course_week']); ?> <?php echo htmlentities($v['course_time']); ?></span></label>
                               </p>
                               <?php endforeach; ?>
                            </div>
                            <?php if(app('request')->session('member.id')): ?>
                            <input type="submit" value="预订课程" class="coursesubmit fr">
                            <?php endif; ?>
                        </div>
                        <div class="show col-md-4">
                            <img src="images/course1.jpg" alt="">
                        </div>      
                    </div>  
                </div>  
            </div>                   
        </div>
        <div class="isbook" id="isbook">
            <input type="hidden" id="member_id" value="<?php echo htmlentities(app('request')->session('member.id')); ?>">
            <div class="bookbox">
                <div class="bookcon">
                    <span>是否申请预订？</span>
                </div>
                <div class="bookfoot">
                    <button type="button" class="btn btn-primary cancel">取消</button>
                    <button type="button" class="btn btn-success sure">确定</button>
                </div>
            </div>
        </div>
        <div class="courseresult" id="courseresult">
            <div class="dialogbox">
                <div class="dialogcon">
                    <span id="result-msg"></span>
                </div>
                <div class="dialogfoot">
                    <button type="button" class="btn btn-success" id="result-btn">确定</button>
                </div> 
            </div>         
        </div>
    </div>
    <div class="personsl-course section" id="personsl-course">
        <div class="inner">
            <div class="title clearfix">
                <h2 class="fl">私教课程</h2>
                <div class="readmore fr">
                    <a href="<?php echo url('home/Course/pcourse'); ?>" class="more">购买课程</a>
                </div>
            </div>
            <p>通过私教一对一指导，制定专属的个人健身方案，掌握更多的训练动作，可以快速找到并攻克自己的身体能力短板</p>
            <div class="pp-content">
                <div id="personsl-carousel" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="item active">
                            <?php foreach($pdata as $k=>$v): ?>
                            <div class="personsl-classify col-md-4">
                                <h2><?php echo htmlentities($v['role']); ?></h2>
                                <p><?php echo htmlentities($v['course_money']); ?></p>
                                <ul>
                                    <li><?php echo htmlentities($v['course_name']); ?></li>
                                    <li><?php echo htmlentities($v['coachname']); ?>教练</li>
                                    <li>一对一专业指导</li>
                                </ul>
                                <button class="personsl-btn">查看更多</button>
                            </div>
                            <?php endforeach; ?>
                        </div>
                        <?php if($count>3): ?>
                        <div class="item">
                            <?php foreach($pdata2 as $k=>$v): ?>
                            <div class="personsl-classify col-md-4">
                                <h2><?php echo htmlentities($v['role']); ?></h2>
                                <p><?php echo htmlentities($v['course_money']); ?></p>
                                <ul>
                                    <li><?php echo htmlentities($v['course_name']); ?></li>
                                    <li><?php echo htmlentities($v['coachname']); ?>教练</li>
                                    <li>一对一专业指导</li>
                                </ul>
                                <button class="personsl-btn">购买课程</button>
                            </div>
                            <?php endforeach; ?>
                        </div>
                        <?php endif; if($count>6): ?>
                        <div class="item">
                            <?php foreach($pdata3 as $k=>$v): ?>
                            <div class="personsl-classify col-md-4">
                                <h2><?php echo htmlentities($v['role']); ?></h2>
                                <p><?php echo htmlentities($v['course_money']); ?></p>
                                <ul>
                                    <li><?php echo htmlentities($v['course_name']); ?></li>
                                    <li><?php echo htmlentities($v['coachname']); ?>教练</li>
                                    <li>一对一专业指导</li>
                                </ul>
                                <button class="personsl-btn">购买课程</button>
                            </div>
                            <?php endforeach; ?>
                        </div>
                        <?php endif; ?>
                    </div>                    
                    <a class="right" href="#personsl-carousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a> 
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
</body>
<script src="../../../static/home/js/jquery-2.2.3.min.js"></script>
<script src="../../../static/home/js/bootstrap.js"></script>
<script>
    //复选框选中样式
    $(function () {
        $(".el").on("click",function() {
            $(this).parent('i').removeClass("check_bg_check");
            var checked = $(this).prop('checked');
            if(checked){
                $(this).parent('i').addClass("check_bg_check");
            }
        })
    });
    //模块切换
    $("#list").on("click","li",function(e) {
        if($(this)[0].nodeName.toLowerCase()=="li"){
            var code=$(this).index();
            $(".course-introduction").eq(code).show().siblings(".course-introduction").hide();
            $(this).addClass('active').siblings("li").removeClass("active");
        }
    });
    //预订课程
    $(".coursesubmit").click(function(){
        $("#isbook").show();
        $(".sure").off().click(function () {
            var times=$(".time");
            var arr=[];
            for (var i = 0; i < times.length; i++) {
                if(times.eq(i).prop("checked")){
                    var ids=times.eq(i).attr('code');
                    arr.push(ids)
                }
            };
            var member_id=$("#member_id").val();
            var order_id=new Date().getTime()+"_"+member_id;
            $.ajax({
                type:"post",
                url:"<?php echo url('home/Notice/add'); ?>",
                dataType:"json",
                data:{
                    ids:arr,
                    order_id:order_id
                },
                success: function (data) {
                    if (data.code==1) {
                        $("#isbook").hide();
                        $("#result-msg").html(data.msg);
                        $("#courseresult").show();
                        $("#result-btn").click(function() {
                            $("#courseresult").hide();
                        });
                        $(".input-img").each(function () {
                            $(this).removeClass("check_bg_check");
                            $(this).children(".el").prop("checked",false);
                        })
                    }else {
                        $("#isbook").hide();
                        $("#result-msg").html(data.msg);
                        $("#courseresult").show();
                        $("#result-btn").click(function() {
                            $("#courseresult").hide();
                        });
                        $(".input-img").each(function () {
                            $(this).removeClass("check_bg_check");
                            $(this).children(".el").prop("checked",false);
                        })
                    }
                }
            })

        })
    })
    $(".cancel").click(function () {
        $("#isbook").hide();
    })
</script>
</html>