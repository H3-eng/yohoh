<?php /*a:1:{s:69:"/www/users/HA630745/WEB/yahoh/application/home/view/Index/search.html";i:1573473052;}*/ ?>
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
    <div class="search-con">
        <form class="form-inline">
            <div class="form-group">
                <label for="coursename">课程名称：</label>
                <input type="text" class="form-control" id="coursename" placeholder="请输入课程名称">
            </div>
            <button type="button" class="btn btn-default" id="send">点击查询</button>
            <div id="msg">
                <table class='table' class="table">
                    <tr>
                        <td>课程名称</td>
                        <td>教练名称</td>
                        <td>场地名称</td>
                        <td>课程星期</td>
                        <td>课程时间</td>
                        <td>已报人数</td>
                    </tr>
                    <tbody id="tbody"></tbody>
                </table>
            </div>
    </form>
</div>
</body>
<script src="../../../static/common/hplus/js/jquery.min.js?v=2.1.4"></script>
<script src="../../../static/common/hplus/js/bootstrap.min.js?v=3.3.6"></script>
<script src="../../../static/common/hplus/js/content.min.js?v=1.0.0"></script>
<script type="text/javascript">
$("#send").click(function(){
    var coursename=$("#coursename").val();
    if(coursename){
        $.ajax({
            type:"post",
            url:"<?php echo url('home/Index/searchcon'); ?>",
            data:{
                coursename:$("#coursename").val(),
            },
            dataType:"json",
            success: function (data) {
                if(data){
                  var str="";
                  for(var i=0;i<data.length;i++){
                    str+="<tr>";
                    str+="<td>"+data[i].course_name+"</td>";
                    str+="<td>"+data[i].coachname+"</td>";
                    str+="<td>"+data[i].areaname+"</td>";
                    str+="<td>"+data[i].course_week+"</td>";
                    str+="<td>"+data[i].course_time+"</td>";
                    str+="<td>"+data[i].book_num+"</td>";
                    str+="</tr>";
                  }
                  $("#tbody").html(str)
                }else{
                   
                }
            }
        })
    }else{
        console.log(0)
    }
})


</script>
</html>