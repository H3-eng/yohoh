<?php /*a:1:{s:70:"/www/users/HA630745/WEB/yahoh/application/home/view/Index/message.html";i:1571670537;}*/ ?>
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
    <link rel="stylesheet" type="text/css" href="../../../static/home/css/message.css">
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
    <div class="main">
        <div class="ibx-crumbs clearfix">消息中心</div>
        <div class="news-list-nav clearfix">
            <div class="news-list-nav-item deleteall" style="display: block;">
                <span class="glyphicon glyphicon-trash"></span>
                <a id="delmsg">清空选中消息</a>
            </div>
            <div class="news-list-nav-item list active" dta-type="noRead" id="noread">
                未读消息
            </div>
            <div class="news-list-nav-item list" data-type="all" id="all">
                全部消息
            </div>
        </div>
        <div class="content">
            <div class="news-box">
                <div class="msg-data list-group-item-info" id="msg-data"><ul></ul></div>
                <div class="table-footer clearfix" id="table-footer">
                    <div class="col-sm-3">共<span id="datacount"></span>项</div>
                    <div class="page fr clearfix" id="page">
                        <div class="pageup fl" id="pageup">上一页</div>
                        <div class="pagelist fl clearfix" id="pagelist">
                            <ul></ul>
                        </div>
                        <div class="pagedown fl" id="pagedown">下一页</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="isdel" id="isdel">
            <p id="isdel-msg">确定要删除吗？</p>
            <button type="button" class="btn btn-primary cancel" id="cancel">取消</button>
            <button type="button" class="btn btn-danger" id="sure">确定</button>
        </div>
        <div class="result" id="result">
            <p id="result-msg"></p>
            <button type="button" class="btn btn-primary" id="resbtn">确定</button>
        </div>
        <div class="pop-up" id="pop-up">
            <div class="addbox">
                <div class="ibox-title">
                    <h5>课程信息</h5>
                </div>
                <div class="ibox-con clearfix">
                    <div class="form-group col-sm-12 clearfix">
                        <p class="col-sm-12 course-msg" id="course-msg">111
                        </p>
                    </div>
                    <div class="form-group col-sm-12 clearfix">
                        <div class="col-sm-4 col-sm-offset-3 fr">
                            <button class="btn btn-danger sure" type="button" >确定</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../../../static/common/hplus/js/jquery.min.js?v=2.1.4"></script>
    <script src="../../../static/common/hplus/js/bootstrap.min.js?v=3.3.6"></script>
    <script type="text/javascript" src="../../../static/common/page.js"></script>
    <script>
        //初始化显示未读页面
        $(function () {
            noreads(1);
        })
        //点击显示未读页面
        $("#noread").click(function () {
            $(this).addClass('active').siblings(".list").removeClass('active');
            $("#table-footer").hide();
            noreads(1);
        })
        function noreads(page){
            $.ajax({
                type:"post",
                url:"<?php echo url('home/Index/messageshow'); ?>",
                dataType:"json",
                data:{page:page},
                success: function (data) {
                    totalNum=data[0].totalNum;//总记录数
                    pageSize=data[0].pageSize;//每页数量
                    totalPage=data[0].totalPage;//总页数
                    if(data.length>1){
                        var str="";
                        for(var i=1;i<data.length;i++){
                            str+="<li>";
                            str+="<input type='checkbox' class='checkbox'code="+data[i].id+">";
                            str+="<p>"+data[i].title+"</p>";
                            str+="<a class='read' code='"+data[i].id+"'>查看详情</a>";
                            str+="</li>";
                        }
                        $("#msg-data ul").html(str);
                        $("#delmsg").show();
                        $("#delmsg").addClass("delnoread").removeClass("delall");
                        var datacount=totalNum;
                        $("#datacount").html(datacount);
                        //查看详情
                        $(".read").off().click(function () {
                            var id=$(this).attr('code');
                            showcourse(id);
                            $(".sure").off().click(function () {
                                $("#pop-up").hide();
                                reads(id);
                            })
                        })
                        //获取分页样式
                        if (page==1) {
                            getPageBar();
                            $("#table-footer").show();
                        }
                    }else{
                        var str="<li class='empty'>没有新消息</li>";
                        $("#msg-data ul").html(str);
                        $(".deleteall").hide();
                    }
                }
            })
        }
        //未读状态改变
        function reads(id){
            $.ajax({
                type:"post",
                url:"<?php echo url('home/Index/messageissue'); ?>",
                dataType:"json",
                data:{id:id},
                success: function (data) {
                    if(data){
                        noreads(1);
                    }
                }
            })
        }
        //点击显示已读页面
        $("#all").click(function () {
            $(this).addClass('active').siblings(".list").removeClass('active');
            $("#table-footer").hide();
            allread(1);
        })
        function allread(page){
            $.ajax({
                type: "post",
                url: "<?php echo url('home/Index/messageall'); ?>",
                dataType: "json",
                data:{page:page},
                success: function (data) {
                    if (data.length>1) {
                        totalNum=data[0].totalNum;//总记录数
                        pageSize=data[0].pageSize;//每页数量
                        totalPage=data[0].totalPage;//总页数
                        var str = "";
                        for (var i = 1; i < data.length; i++) {
                            str+="<li>";
                            str+="<input type='checkbox' class='checkbox'code="+data[i].id+">";
                            str += "<p>" + data[i].title + "</p>";
                            str += "<a class='read' code='" + data[i].id + "'>查看详情</a>";
                            str+="</li>";
                        }
                        $("#msg-data ul").html(str);
                        $("#delmsg").show();
                        $("#delmsg").addClass("delall").removeClass("delnoread");
                        var datacount=totalNum;
                        $("#datacount").html(datacount);
                        //获取分页样式
                        if (page==1) {
                            getPageBar();
                            $("#table-footer").show();
                        }
                        $(".read").click(function () {
                            var id=$(this).attr('code');
//                            reads(id);
                            showcourse(id);
                        })
                    } else {
                        var str = "<li class='empty'>没有新消息</li>";
                        $("#msg-data ul").html(str);
                        $(".deleteall").hide();
                    }
                }
            })
        }
        $(".delnoread").click(function () {
            $("#isdel").show();
            $("#sure").click(function () {
                $("#isdel").hide();
                var checkboxs=$(".checkbox");
                var arr=[];
                for (var i = 0; i < checkboxs.length; i++) {
                    if(checkboxs.eq(i).prop("checked")){
                        var ids=checkboxs.eq(i).attr('code');
                        arr.push(ids)
                    }
                };
                $.ajax({
                    url: "<?php echo url('home/Index/msg'); ?>",
                    type: 'post',
                    dataType: 'json',
                    data: {ids:arr},
                    success:function(data){
                        if (data.code==1) {
                            $("#result-msg").html(data.msg);
                            $("#result").show();
                            $("#resbtn").click(function() {
                                noreads(1);
                            });
                        }else{
                            $("#result-msg").html(data.msg);
                            $("#result").show();
                            $("#resbtn").click(function() {
                                $(".result").hide();
                            })
                        }
                    }
                })
            })
        })
        $(".delall").click(function () {
            $("#isdel").show();
            $("#sure").click(function () {
                $("#isdel").hide();
                var checkboxs=$(".checkbox");
                var arr=[];
                for (var i = 0; i < checkboxs.length; i++) {
                    if(checkboxs.eq(i).prop("checked")){
                        var ids=checkboxs.eq(i).attr('code');
                        arr.push(ids)
                    }
                };
                $.ajax({
                    url: "<?php echo url('home/Index/msg'); ?>",
                    type: 'post',
                    dataType: 'json',
                    data: {ids:arr},
                    success:function(data){
                        if (data.code==1) {
                            $("#result-msg").html(data.msg);
                            $("#result").show();
                            $("#resbtn").click(function() {
                                noreads(1);
                            });
                        }else{
                            $("#result-msg").html(data.msg);
                            $("#result").show();
                            $("#resbtn").click(function() {
                                $(".result").hide();
                            })
                        }
                    }
                })
            })
        })
        function showcourse(id){
            $("#pop-up").show();
            $.ajax({
                type: "post",
                url: "<?php echo url('home/Index/showcoursemsg'); ?>",
                dataType: "json",
                data:{id:id},
                success: function (data) {
                    if(data){
                        $("#course-msg").html(data[0].content)
                    }
                }
            })
        }
        $(".sure").click(function () {
            $("#pop-up").hide();
        })
    </script>
</body>
</html>