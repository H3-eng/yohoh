<?php /*a:1:{s:68:"/www/users/HA630745/WEB/yahoh/application/home/view/login/login.html";i:1571632813;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>前台登录</title>
    <link href="../../../static/common/hplus/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../static/common/hplus/css/font-awesome.min93e3.css?v=4.4.0" rel="stylesheet">
    <link href="../../../static/common/hplus/css/animate.min.css" rel="stylesheet">
    <link href="../../../static/common/hplus/css/style.min.css" rel="stylesheet">
    <link href="../../../static/common/hplus/css/login.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <meta http-equiv="refresh" content="0;ie.html" />
    <![endif]-->
    <script>
        if(window.top!==window.self){window.top.location=window.location};
    </script>
    <style>
        .error{
            color：#ff0000;
        }
    </style>
</head>
<body class="signin">
    <div class="signinpanel">
        <div class="row">
            <div class="col-sm-7">
                <div class="signin-info">
                    <div class="logopanel m-b">
                        <h1>[ H+ ]</h1>
                    </div>
                    <div class="m-b"></div>
                    <h4>欢迎使用 <strong>H+ 后台主题UI框架</strong></h4>
                    <ul class="m-b">
                        <li><i class="fa fa-arrow-circle-o-right m-r-xs"></i> 优势一</li>
                        <li><i class="fa fa-arrow-circle-o-right m-r-xs"></i> 优势二</li>
                        <li><i class="fa fa-arrow-circle-o-right m-r-xs"></i> 优势三</li>
                        <li><i class="fa fa-arrow-circle-o-right m-r-xs"></i> 优势四</li>
                        <li><i class="fa fa-arrow-circle-o-right m-r-xs"></i> 优势五</li>
                    </ul>
                    <strong>还没有账号？ <a href="#">立即注册&raquo;</a></strong>
                </div>
            </div>
            <div class="col-sm-5">
                <form id="formlist">
                    <h4 class="no-margins">登录：</h4>
                    <p class="error" id="errormsg"></p>
                    <input type="text" class="form-control uname" name="member_name" placeholder="用户名" />
                    <input type="password" class="form-control pword m-b" name="pwd" placeholder="密码" />
                    <a href="#">忘记密码了？</a>
                    <button class="btn btn-success btn-block" id="login">登录</button>
                </form>
            </div>
        </div>
        <div class="signup-footer">
            <div class="pull-left">
                &copy; 2015 All Rights Reserved. H+
            </div>
        </div>
    </div>
    <script src="/static/common/hplus/js/jquery.min.js?v=2.1.4"></script>
    <script src="/static/common/hplus/js/bootstrap.min.js?v=3.3.6"></script>
    <script>
        $("#login").click(function(){
            var datalist=$("#formlist").serialize();
            $.ajax({
                url:"<?php echo url('home/Login/logincheck'); ?>",
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
