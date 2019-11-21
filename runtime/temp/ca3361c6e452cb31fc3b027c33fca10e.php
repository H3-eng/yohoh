<?php /*a:1:{s:72:"/www/users/HA630745/WEB/yahoh/application/home/view/Index/homephoto.html";i:1571635942;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>健身俱乐部</title>
    <!-- 引入bootstrap样式表 -->
    <link href="../../../static/common/hplus/css/bootstrap.min14ed.css?v=3.3.6" rel="stylesheet">
    <!--webupload框架样式-->
    <link rel="stylesheet" href="../../../static/common/webuploader/webuploader.css">
    <!-- 引入公共样式表 -->
    <link rel="stylesheet" href="../../../static/home/css/base.css">
    <link rel="stylesheet" type="text/css" href="../../../static/home/css/commond.css">
    <link rel="stylesheet" type="text/css" href="../../../static/home/css/homedata.css">
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
    <div class="ibx-all inner">
        <div class="ibx-header clearfix">头像设置</div>
        <div class="ibx-content clearfix">
            <div class="ibx-nav clearfix">
                <div class="item-group col-md-7">
                    <div class="ibx-item list active" id="local-p">
                        自定义头像
                    </div>
                    <div class="ibx-item list"  id="hot-p">
                        热门推荐头像
                    </div>
                </div>
            </div>
            <div class="ibx-nav-con clearfix">
                <div class="news-box col-md-7">
                    <div class="box-item">
                        <div class="selectgroup">
                            <div id="Picker" class="fl">选择图片</div>
                            <span class="selecttext fl">支持jpg、jpeg、gif、png、bmp格式的图片</span>
                        </div>
                        <div id="box" class="uploadbox">
                            <div class="box-img">
                                <!--用来存放item-->
                                <img src="" id="avatar">
                                <!--<p  id="delpic" class="delpic">删除</p>-->
                            </div>
                            <div class="sendgroup">
                                <button class="btn btn-danger fl save">保存头像</button>
                                <div id="Picker2" class="fl">重新选择</div>
                            </div>
                        </div>
                    </div>
                    <div class="box-item photo-data">
                        <ul id="photo-ul">
                            <li><img src="../../../static/home/images/index_img/p_1.jpg" alt=""></li>
                            <li><img src="../../../static/home/images/index_img/p_2.jpg" alt=""></li>
                            <li><img src="../../../static/home/images/index_img/p_3.jpg" alt=""></li>
                            <li><img src="../../../static/home/images/index_img/p_4.jpg" alt=""></li>
                            <li><img src="../../../static/home/images/index_img/p_5.jpg" alt=""></li>
                            <li><img src="../../../static/home/images/index_img/p_6.jpg" alt=""></li>
                            <li><img src="../../../static/home/images/index_img/p_7.jpg" alt=""></li>
                            <li><img src="../../../static/home/images/index_img/p_8.jpg" alt=""></li>
                        </ul>
                        <div class="sendgroup">
                            <button class="btn btn-danger fl save">保存头像</button>
                        </div>
                    </div>
                </div>
                <div class="photo-look col-md-4">
                    <h3>头像预览</h3>
                    <div class="showphoto">
                        <img src="../../../static/home/images/index_img/p_1.jpg" id="showsrc">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../../../static/common/hplus/js/jquery.min.js?v=2.1.4"></script>
    <script type="text/javascript" src="../../../static/home/js/count-number.js"></script>
    <!-- webupload文件 -->
    <script src="../../../static/common/webuploader/webuploader.js"></script>
    <script>
        //图片上传
        //webupload上传图片插件
        var uid=1;
        var uploader = WebUploader.create({
            auto: true,
            swf: '/static/common/webuploader/Uploader.swf',
            server:"<?php echo url('home/Index/picpro'); ?>",
            pick: '#Picker',
            resize:false,
            fileVal:'picname',
            formData:{
                uid:uid
            },
            duplicate :true,
            accept: {
                title: 'Images',
                extensions: 'gif,jpg,jpeg,bmp,png',
                mimeTypes: 'image/*'
            }
        });
        uploader.on( 'uploadSuccess', function($file,response ) {
            if(response.status==0){
                $('#avatar').prop('src',response.name).show('slow');
                $(".selectgroup").hide();
                $("#box").show();
                $("#showsrc").prop('src',response.name).show('slow');
            }
        });
        var uploade = WebUploader.create({
            auto: true,
            swf: '/static/common/webuploader/Uploader.swf',
            server:"<?php echo url('home/Index/picpro'); ?>",
            pick: '#Picker2',
            resize:false,
            fileVal:'picname',
            formData:{
                uid:uid
            },
            duplicate :true,
            accept: {
                title: 'Images',
                extensions: 'gif,jpg,jpeg,bmp,png',
                mimeTypes: 'image/*'
            }
        });
        uploade.on( 'uploadSuccess', function($file,response ) {
            if(response.status==0){
                $('#avatar').prop('src',response.name).show('slow');
                $("#showsrc").prop('src',response.name).show('slow');
            }
        });
        $(".save").click(function () {
            var picname= $('#showsrc').prop('src');
            $.ajax({
                type:'post',
                url:"<?php echo url('home/Index/savepicname'); ?>",
                data:{picname:picname},
                dataType:'json',
                success: function () {
                    
                }
            })
        })
        //webupload删除本地图片操作
        $("#delpic").off().click(function () {
            var picname= $('#avatar').prop('src');
            picname="."+picname;
            $.ajax({
                type:'post',
                url:"<?php echo url('admin/Newsform/delpic'); ?>",
                data:{picname:picname},
                dataType:'json',
                success:function(){
                    $('#avatar').prop('src','');
                }
            })
        })
        //模块切换
        $(".ibx-item").click(function () {
            var index=$(this).index();
            $(this).addClass("active").siblings(".ibx-item").removeClass("active");
            $(".box-item").eq(index).show().siblings(".box-item").hide();
        })
        //热门头像预览
        $("#photo-ul").on("click","li", function () {
            var src=$(this).children("img").prop("src");
            $("#showsrc").prop("src",src);
        })
    </script>
</body>
</html>