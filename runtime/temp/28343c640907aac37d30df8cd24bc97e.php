<?php /*a:2:{s:68:"/www/users/HA630745/WEB/yahoh/application/home/view/coach/coach.html";i:1571303765;s:70:"/www/users/HA630745/WEB/yahoh/application/home/view/coach/jscoach.html";i:1571304065;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>健身教练</title>
    <!-- 引入bootstrap样式表 -->
    <link href="/static/common/hplus/css/bootstrap.min14ed.css?v=3.3.6" rel="stylesheet">
    <!-- 引入自定义样式表 -->
    <link rel="stylesheet" href="/static/home/css/base.css">
    <link rel="stylesheet" type="text/css" href="/static/home/css/commond.css">
    <link rel="stylesheet" type="text/css" href="/static/home/css/coach.css">
</head>
<body>
    <div class="header" id="header">
        <nav class="nav inner clearfix">
            <div class="logo fl">
                <img src="/static/home/images/index_img/logo.png">
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
        <img src="/static/home/images/index_img/bg4.jpg">
    </div>
    <div class="coach-classify inner clearfix">
        <ul id="coachtype">
            <li class="coach-type active">团操教练</li>
            <li class="coach-type">初级私人教练</li>
            <li class="coach-type">中级私人教练</li>
            <li class="coach-type">高级私人教练</li>
        </ul>
    </div>
    <div class="coach">
        <div class="coach-content inner clearfix">
            <div class="coach-all col-md-9">
                <div class="coach-list clearfix">
                    <?php foreach($data1 as $k=>$v): ?>
                    <div class="list-item clearfix">
                        <div class="coachs-picture col-md-2">
                            <img src="<?php echo htmlentities($v['pic_name']); ?>">
                        </div>
                        <div class="coachs-text col-md-10">
                            <h3><?php echo htmlentities($v['coachname']); ?></h3>
                            <p><?php echo htmlentities($v['described']); ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="list-page clearfix">
                    <?php echo $data1; ?>
                </div>
            </div>
            <div class="coach-all  all-none col-md-9">
                <div class="coach-list clearfix">
                    <?php foreach($data2 as $k=>$v): ?>
                    <div class="list-item clearfix">
                        <div class="coachs-picture col-md-2">
                            <img src="<?php echo htmlentities($v['pic_name']); ?>">
                        </div>
                        <div class="coachs-text col-md-10">
                            <h3><?php echo htmlentities($v['coachname']); ?></h3>
                            <p><?php echo htmlentities($v['described']); ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="list-page clearfix">
                    <?php echo $data2; ?>
                </div>
            </div>
            <div class="coach-all  all-none col-md-9">
                <div class="coach-list clearfix">
                    <?php foreach($data3 as $k=>$v): ?>
                    <div class="list-item clearfix">
                        <div class="coachs-picture col-md-2">
                            <img src="<?php echo htmlentities($v['pic_name']); ?>">
                        </div>
                        <div class="coachs-text col-md-10">
                            <h3><?php echo htmlentities($v['coachname']); ?></h3>
                            <p><?php echo htmlentities($v['described']); ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="list-page clearfix">
                    <?php echo $data3; ?>
                </div>
            </div>
            <div class="coach-all  all-none col-md-9">
                <div class="coach-list clearfix">
                    <?php foreach($data4 as $k=>$v): ?>
                    <div class="list-item clearfix">
                    <div class="coachs-picture col-md-2">
                        <img src="<?php echo htmlentities($v['pic_name']); ?>">
                    </div>
                    <div class="coachs-text col-md-10">
                        <h3><?php echo htmlentities($v['coachname']); ?></h3>
                        <p><?php echo htmlentities($v['described']); ?></p>
                    </div>
                </div>
                    <?php endforeach; ?>
                </div>
                <div class="list-page clearfix">
                    <?php echo $data4; ?>
                </div>
            </div>
            <div class="coach-all  all-none col-md-9" id="search-con">
                <div class="coach-list clearfix" id="coach-listcon">

                </div>
                <div class="list-page clearfix">
                    <?php echo $data4; ?>
                </div>
            </div>
            <div class="coach-search col-md-3">
                <div class="search-content">
                    <form>
                        <div class="input-search">
                            <div class="search-group">
                                <div class="search-msg" id="search-msg">
                                    <ul class="searchlist" id="searchlist"></ul>
                                </div>
                                <input type="text" placeholder="请输入教练名字" id="search" autocomplete="off">
                                <button type="button">
                                    <i class="glyphicon glyphicon-search" id="search-btn"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    <div class="recommend">
                        <h3>为你推荐</h3>
                        <div class="recommendcoach">
                            <ul id="hot" >
                                <li>李露</li>
                                <li>值是</li>
                                <li>释放</li>
                                <li>释放</li>
                                <li>上班</li>
                            </ul>
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
                        <img src="/static/home/images/index_img/wx.png">
                        <p>关注微信公众号</p>
                    </div>
                    <div class="rightcode fl">
                        <img src="/static/home/images/index_img/wx.png">
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
<script src="/static/home/js/jquery-2.2.3.min.js"></script>
<script src="/static/home/js/bootstrap.js"></script>
<script>
	/*模块切换*/
	$("#coachtype li").off().click(function () {
		var code=$(this).index();
		$(".coach-all").eq(code).show().siblings(".coach-all").hide();
		$(this).addClass('active').siblings("li").removeClass("active");
	})
	//动态搜索功能
	$("#search").keyup(function () {
		$("#searchlist").html('');
		var data=$(this).val().trim();
		$.ajax({
			url: "<?php echo url('home/Coach/search'); ?>",
			type: 'post',
			dataType: 'json',
			data: {data:data},
			success:function(data){
				if(data){
					var str="";
					if(data.length>5){
						data.length=5;
					}
					for(var i=0;i<data.length;i++){
						str+="<li code='"+data[i].id+"'>"+data[i].coachname+"</li>";
					}
					$("#search-msg").show();
					$("#searchlist").html(str);
					//改变列表的颜色
					$("#searchlist li").hover(function(){
						$(this).css("background-color",'#e7e7e7');
					}, function () {
						$(this).css("background-color",'#fff');
					})
					$("#searchlist li").click(function () {
						var msg=$(this).html();
						$("#search").val(msg);
						var id=$(this).attr("code");
						$("#search-msg").hide();
					})
				}
				else{
					$("#search-msg").hide();
				}
			}
		})
	})
	//    $("#search").blur(function () {
	//        $("#search-msg").hide();
	//    })
	window.onresize = function(){
		var swidth=$("#search").width()+24;
		$("#search-msg").css("width",swidth);
	}
	//搜索按钮点击开始搜索
	$("#search-btn").click(function () {
		var data=$("#search").val();
		searchname(data);
	})
	function searchname(data){
		$.ajax({
			url: "<?php echo url('home/Coach/searchbtn'); ?>",
			type: 'post',
			dataType: 'json',
			data: {data:data},
			success: function (data) {
				if(data){
					var str='';
					str+="<div class='list-item clearfix'>";
					str+="<div class='coachs-picture col-md-2'>";
					str+="<img src='"+data[0]['pic_name']+"'>";
					str+="</div>";
					str+="<div class='coachs-text col-md-10'>";
					str+="<h3>"+data[0]['coachname']+"</h3>";
					str+="<p>"+data[0]['described']+"</p>";
					str+="</div>";
					$("#coach-listcon").html(str);
					$("#search-con").show().siblings(".coach-all").hide();
				}else{
					var str='';
					str+="<div class='error'>查找失败，没有该教练</div>";
					$("#coach-listcon").html(str);
					$("#search-con").show().siblings(".coach-all").hide();
				}
			}
		})
	}
	//显示热门教练
	$(function(){
		$.ajax({
			type:'get',
			url:"<?php echo url('home/Coach/searchhot'); ?>",
			dataType:"json",
			success:function(data){
				if(data){
					var str='';
					for(var i=0;i<data.length;i++){
						str+="<li class='namelist' code='"+data[i].coachname+"'>"+data[i].coachname+"</li>";
					}
					$("#hot").html(str);
					$(".namelist").click(function () {
						var data=$(this).attr("code");
						searchname(data);
					})
				}else{
					var str='';
					$("#hot").html(str);
				}
			}
		})
	})
</script>
</body>
</html>