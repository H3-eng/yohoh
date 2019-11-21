<?php /*a:2:{s:69:"/www/users/HA630745/WEB/yahoh/application/admin/view/Login/login.html";i:1571660843;s:71:"/www/users/HA630745/WEB/yahoh/application/admin/view/Login/jslogin.html";i:1571621137;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>健身管理系统</title>
    <link rel="shortcut icon" href="favicon.ico"> 
    <link href="../../../static/common/hplus/css/bootstrap.min14ed.css?v=3.3.6" rel="stylesheet">
    <link href="../../../static/common/hplus/css/font-awesome.min93e3.css?v=4.4.0" rel="stylesheet">
    <link href="../../../static/common/hplus/css/animate.min.css" rel="stylesheet">
    <link href="../../../static/common/hplus/css/style.min862f.css?v=4.1.0" rel="stylesheet">
    <link href="../../../static/admin/css/common.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <meta http-equiv="refresh" content="0;ie.html" />
    <![endif]-->
    <script>if(window.top !== window.self){ window.top.location = window.location;}</script>
</head>
<body class="gray-bg login-gray-bg">
    <div class="middle-box text-center loginscreen  animated fadeInDown">
        <div>
            <div>
                <h1 class="logo-name">YAHO</h1>
            </div>
            <div class="errormsg" id="errormsg"></div>
            <form class="m-t" role="form" id="formlist">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="用户名" name="adminpname">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="密码" name="password">
                </div>
                <button type="button" class="btn btn-primary block full-width m-b" id="login">登 录</button>
                <p class="text-muted text-center"> <a href="login.html#"><small>忘记密码了？</small></a>
                </p>
            </form>
        </div>
    </div>
    <!--引入js文件-->
        <script src="../../../static/common/hplus/js/jquery.min.js?v=2.1.4"></script>
<script src="../../../static/common/hplus/js/bootstrap.min.js?v=3.3.6"></script>
<script>
    $("#login").click(function(){
        var datalist=$("#formlist").serialize();
        $.ajax({
            url:"<?php echo url('admin/login/logincheck'); ?>",
            type:"post",
            //表单序列化，可以获取表单的所有内容
            data:datalist,
            dataType:"json",
            success: function (data) {
                if(data.code==1){
                    location.href=data.url;
                }else{
                    $("#errormsg").html(data.msg);
                }
            }
        });
        return false;
    })
</script>
</body>
</html>
