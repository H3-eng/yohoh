<?php /*a:2:{s:71:"/www/users/HA630745/WEB/yahoh/application/home/view/Index/areabook.html";i:1573462736;s:73:"/www/users/HA630745/WEB/yahoh/application/home/view/Index/jsareabook.html";i:1571634876;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>场地预订页面</title>
    <!-- 引入bootstrap样式表 -->
    <link href="../../../static/common/hplus/css/bootstrap.min14ed.css?v=3.3.6" rel="stylesheet">
    <!-- 引入自定义样式表 -->
    <link rel="stylesheet" href="../../../static/home/css/base.css">
    <link rel="stylesheet" type="text/css" href="../../../static/home/css/commond.css">
    <link rel="stylesheet" type="text/css" href="../../../static/home/css/areabook.css">
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
    <div class="areacon" id="areacon">
        <input type="hidden" value="<?php echo htmlentities(app('request')->session('member.member_name')); ?>" id="member_name">
        <input type="hidden" value="<?php echo htmlentities(app('request')->session('member.id')); ?>" id="member_id">
        <input type="hidden" id="date">
        <div class="main">
            <div class="main-head clearfix">
                <ul class="clearfix fl datetime" id="datetime"></ul>
                <div class="areanote fl" id="areanote"><a href="<?php echo url('home/index/areadetails'); ?>" type="button" class="btn btn-primary">查看预订记录</a></div>
                <div class="searchbtn fl"><a href="<?php echo url('home/index/search'); ?>" type="button" class="btn btn-primary">搜索场地</a></div>
            </div>
            <div class="main-con clearfix">
                <div class="aside fl">
                    <div class="aside-list" >
                        <ul class="list-hole" id="list-hole">
                            <?php foreach($data as $k=>$v): ?>
                            <li id="<?php echo htmlentities($v['id']); ?>" class="name"><?php echo htmlentities($v['areaname']); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <div class="detail fr">
                    <div class="showstatus">
                        <div class="statusitem">
                            <label>
                                <i class="borde borde-one"></i>
                                <span>可预订</span>
                            </label>
                            <label>
                                <i class="borde borde-two"></i>
                                <span>已选</span>
                            </label>
                            <label>
                                <i class="borde borde-three"></i>
                                <span>可预订</span>
                            </label>
                        </div>
                        <div class="areamsg">
                            <ul>
                                <li><span >场地</span><p id="areaname"></p></li>
                                <li><span>日期</span><p id="datemsg"></p></li>
                            </ul>
                        </div>
                        <div class="order" id="order">
                            <div class="order-con">
                                <h5 class="order-title">订单详情</h5>
                                <p class="order-text">场地</p>
                                <hr>
                                <ul id="order-ul" class="order-ul clearfix">
                                </ul>
                                <p class="totalmoney clearfix">
                                    <span>账单总计</span>
                                    <span class="total fr"></span>
                                </p>
                                <div class="order-btn">
                                    <button type="button" class="btn btn-danger" id="orders">下单</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="areanum">
                    <?php foreach($data as $k=>$v): ?>
                    <div class="data shownone">
                        <div class="timeitem">
                            <ul class="timelist clearfix">
                                <li>09:00-11:00</li>
                                <li>14:00-16:00</li>
                                <li>16:00-18:00</li>
                                <li>19:00-21:00</li>
                            </ul>
                        </div>
                        <div class="itemlist clearfix">
                            <div class="itembox fl">
                                <ul class="item clearfix" id="timeitem">
                                    <?php $__FOR_START_1979447177__=0;$__FOR_END_1979447177__=$v['areaitem'];for($i=$__FOR_START_1979447177__;$i < $__FOR_END_1979447177__;$i+=1){ ?>
                                    <li>
                                        <div class="arean fl"><?php echo htmlentities($i+1); ?>号场</div>
                                        <div class="checkbox-group fl">
                                            <label>
                                                <i class="input-img check_bg">
                                                    <input code="<?php echo htmlentities($i+1); ?>" cpde=<?php echo htmlentities($v['money']); ?> cnde="<?php echo htmlentities($v['areaname']); ?>" ctde="09:00-11:00" type="checkbox" class="status el">
                                                    <span class="disable"></span>
                                                </i>
                                            </label>
                                            <label>
                                                <i class="input-img check_bg">
                                                    <input code="<?php echo htmlentities($i+1); ?>" cpde=<?php echo htmlentities($v['money']); ?> cnde="<?php echo htmlentities($v['areaname']); ?>" ctde="14:00-16:00" type="checkbox" class="status el">
                                                    <span class="disable"></span>
                                                </i>
                                            </label>
                                            <label>
                                                <i class="input-img check_bg">
                                                    <input code="<?php echo htmlentities($i+1); ?>" cpde=<?php echo htmlentities($v['money']); ?> cnde="<?php echo htmlentities($v['areaname']); ?>" ctde="16:00-18:00" type="checkbox" class="status el">
                                                    <span class="disable"></span>
                                                </i>
                                            </label>
                                            <label>
                                                <i class="input-img check_bg">
                                                    <input code="<?php echo htmlentities($i+1); ?>" cpde=<?php echo htmlentities($v['money']); ?> cnde="<?php echo htmlentities($v['areaname']); ?>" ctde="19:00-21:00" type="checkbox" class="status el">
                                                    <span class="disable"></span>
                                                </i>
                                            </label>
                                        </div>
                                    </li>
                                    <?php } ?>
                                </ul>
                                <div class="surelist">
                                    <button type="button" class="send fr">确定</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="getmoney" id="getmoney">
                <div class="getcon">
                    <div class="closebtn clearfix">
                        <i class="glyphicon glyphicon-remove fr "></i>
                    </div>
                    <p>扫码二维码付款，请备注姓名，付款成功后，点击付款成功按钮</p>
                    <div class="codeimg">
                        <img src="../../../static/home/images/money.jpg" >
                    </div>
                    <div class="s-btn">
                        <button class="success" id="success">付款成功</button>
                    </div>
                </div>
            </div>
            <div class="result">
                <p id="result-con">最多选择3片场地</p>
                <button class="btn btn-success" id="sure">确定</button>
            </div>
            <div class="issure">
                <p id="issure-con"></p>
                <button class="btn btn-success" id="issurebtn">确定</button>
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
                        <img src="../../../static/home/images/index_img/footer1.png">
                        <p>关注微信公众号</p>
                    </div>
                    <div class="rightcode fl">
                        <img src="../../../static/home/images/index_img/footer1.png">
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
<script src="../../../static/common/hplus/js/content.min.js?v=1.0.0"></script>
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
    //选择好场地后点击确定按钮
    $(".send").click(function () {
        //判断不能预订超过3片场地
        var sum=0;
        $(".el").each(function () {
            var checked = $(this).prop('checked');
            if(checked){
               sum=sum+1;
            }
        })
       if(sum>3){
           $("#result-con").html("最多选择3片场地");
           $(".result").show();
       }else{
           var arr=[];
           //遍历复选框记录选中信息
           $(".el").each(function () {
               if($(this).prop('checked')){
                   var data={};
                   var time=$(this).attr("ctde");
                   data['time']=time;
                   var areanum=$(this).attr("code");
                   data['areanum']=areanum;
                   var money=$(this).attr("cpde");
                   data['money']=money;
                   var areaname=$(this).attr("cnde");
                   data['areaname']=areaname;
                   arr.push(data);
                   orderlist();
               }
           })
          function orderlist() {
              var str = "";
              var num = 0;
              for (var i = 0; i < arr.length; i++) {
                  num = num + parseFloat(arr[i]["money"]);
                  str += "<li>";
                  str += "<span>" + arr[i]["areaname"] + " " + arr[i]["areanum"] + "号道" + arr[i]["time"] + "</span>";
                  str += "<span class='fr'>￥" + arr[i]["money"] + "</span>";
                  str += "</li>";
                  str += "<hr>";
              }
              var money = "￥" + num;
              $("#order-ul").html(str);
              $(".total").html(money);
              $("#orders").click(function () {
                  $("#issure-con").html("确定要预订吗？");
                  $(".issure").show()
                  $("#issurebtn").click(function () {
                      $(".issure").hide();
                      $("#getmoney").show();
                      $("#success").off().click(function () {
                          var member_name = $("#member_name").val();
                          //调用函数记录订单数据
                          orderdata(arr, member_name, num);
                      })
                  })
              })
          }
       }
    })
    //付款成功后记录订单信息
    function orderdata(str,name,totalmoney){
        var member_id=$("#member_id").val();
        var order_id=new Date().getTime()+"_"+member_id;
        var date=$("#date").val();
        $.ajax({
            type:"post",
            url:"<?php echo url('home/Index/bookarea'); ?>",
            data:{
                str:str,
                name:name,
                totalmoney:totalmoney,
                member_id:member_id,
                order_id:order_id,
                date:date
            },
            dataType:"json",
            success: function (data) {
                if(data){
                    $("#result-con").html("预订成功");
                    $("#getmoney").hide();
                    $(".result").show();
                    $(".el").each(function () {
                        $(this).prop("checked",false);
                    })
                    $("#sure").click(function(){
                        $(".result").hide();
                    })
                    getdata();
                }else{
                    $("#result-con").html("预订失败，请与工作人员核对信息");
                    $("#getmoney").hide();
                    $(".result").show();
                    $("#sure").click(function(){
                        $(".result").hide();
                    })
                }
            }
        })
    }
    //弹窗关闭
    $("#sure").click(function(){
        $(".result").hide();
    })
    //支付码弹窗
    $(".closebtn").click(function () {
        $("#getmoney").hide();
    })
    $(function () {
        //场地列表样式
        //初始化第一页样式
        $("#list-hole li").eq(0).addClass("active").siblings("li").removeClass("active");
        $(".data").eq(0).show().siblings(".data").hide();
        $("#areaname").html($("#list-hole li").eq(0).html());
        //场地列表点击时候
        $("#list-hole").on("click","li",function () {
            $(this).addClass("active").siblings("li").removeClass("active");
            $("#areaname").html($(this).html());
            var index=$(this).index();
            $(".data").eq(index).show().siblings(".data").hide();
            getdata();
        })
        //动态获取日期列表
        var str="";
        for(var i=0;i<5;i++){
            str+="<li class='date-group'>";
            str+="<div class='week'>"+getDay(i).split(",")[1]+"</div>";
            str+="<div class='stock'>剩余3</div>";
            str+= "<div class='date'>"+getDay(i).split(",")[0]+"</div>";
            str+="</li>";
        }
        $("#datetime").html(str);
        //初始化第一页的日期列表
        $("#date").val($(".date").eq(0).html());
        $("#datemsg").html($(".date").eq(0).html());
        $(".date-group").eq(0).addClass("current").siblings("li").removeClass("current");
        $(".date-group").click(function () {
            $("#date").val($(this).children(".date").html());
            $("#datemsg").html($(this).children(".date").html());
            $(this).addClass("current").siblings("li").removeClass("current");
            getdata();
        })
        getdata();
        //获取日期函数
        function getDay(day){
            var today = new Date();
            var targetday_milliseconds=today.getTime() + 1000*60*60*24*day;
            today.setTime(targetday_milliseconds); //注意，这行是关键代码
            var tMonth = today.getMonth();
            var tDate = today.getDate();
            var tDay = today.getDay();
            var weeks = ["星期日","星期一","星期二","星期三","星期四","星期五","星期六"];
            var week = weeks[tDay];
            tMonth = doHandleMonth(tMonth + 1);
            tDate = doHandleMonth(tDate);
            return tMonth+"月"+tDate+"日"+","+week;
        }
        function doHandleMonth(month){
            var m = month;
            if(month.toString().length == 1){
                m = "0" + month;
            }
            return m;
        }
    })
    //获取已预订的场地信息
    function getdata(){
        var areaname="";
        var index=-1;
        $("#list-hole li").each(function () {
            if($(this).hasClass("active")){
                areaname=$(this).html();
                index=$(this).index();
            };
        });
        $(".status").prop("disabled",false);
        $(".disable").hide();
        var date=$("#date").val();
        $.ajax({
            type:"post",
            url:"<?php echo url('home/Index/searchdate'); ?>",
            data:{
                date:date,
                areaname:areaname
            },
            dataType:"json",
            success: function (data) {
                if(data){
                    for(var i=0;i<data.length;i++){
                        var areanum=data[i]['areanum'];
                        var time=data[i]['time'];
                       $(".el").each(function(){
                           if($(this).attr("code")==areanum&&$(this).attr("ctde")==time){
                               $(this).prop("disabled",true);
                               $(this).siblings(".disable").show();
                           }
                       })
                    }
                }else{
                    $(".el").each(function(){
                        $(this).prop("checked",false);
                    })
                }
            }
        })
    }
</script>
</body>
</html>