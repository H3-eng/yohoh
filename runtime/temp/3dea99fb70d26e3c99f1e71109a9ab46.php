<?php /*a:2:{s:69:"/www/users/HA630745/WEB/yahoh/application/admin/view/Index/index.html";i:1571642395;s:71:"/www/users/HA630745/WEB/yahoh/application/admin/view/Index/jsindex.html";i:1571621416;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>主页面</title>
    <!--H+框架样式-->
    <link href="../../../static/common/hplus/css/bootstrap.min14ed.css?v=3.3.6" rel="stylesheet">
    <link href="../../../static/common/hplus/css/font-awesome.min93e3.css?v=4.4.0" rel="stylesheet">
    <link href="../../../static/common/hplus/css/animate.min.css" rel="stylesheet">
    <link href="../../../static/common/hplus/css/style.min862f.css?v=4.1.0" rel="stylesheet">
    <!--自定义样式-->
    <link href="../../../static/admin/css/common.css" rel="stylesheet">
    <link href="../../../static/admin/css/base.css" rel="stylesheet">
</head>
<body class="fixed-sidebar full-height-layout gray-bg" style="overflow:hidden">
    <div id="wrapper">
        <!--左侧导航开始-->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element">
                            <span><img alt="image" class="img-circle" src="../../..<?php echo htmlentities(app('request')->session('admin.pic_name')); ?>" width="64" height="64"/></span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear">
                               <span class="block m-t-xs"><strong class="font-bold"><?php echo htmlentities(app('request')->session('admin.adminname')); ?></strong></span>
                                <span class="text-muted text-xs block"><?php echo htmlentities(app('request')->session('admin.role')); ?><b class="caret"></b></span>
                                </span>
                            </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a class="J_menuItem" href="<?php echo url('admin/index/avatarform'); ?>">修改头像</a>
                                </li>
                                <li><a class="J_menuItem" href="<?php echo url('admin/Index/profile'); ?>">个人信息</a>
                                </li>
                                <li class="divider"></li>
                                <li><a href="<?php echo url('admin/Index/loginout'); ?>">安全退出</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-book"></i><span class="nav-label">资讯管理</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a class="J_menuItem" href="<?php echo url('admin/Newsform/knowledge'); ?>">健康知识资讯</a>
                            </li>
                            <li><a class="J_menuItem" href="<?php echo url('admin/Newsform/activity'); ?>">会员活动资讯</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-user"></i> <span class="nav-label">会员管理</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a class="J_menuItem" href="<?php echo url('admin/Memberform/memberform'); ?>">会员列表</a>
                            </li>
                            <li><a class="J_menuItem" href="<?php echo url('admin/Memberform/membercard'); ?>">会员卡列表</a>
                            </li>
                            <li><a class="J_menuItem" href="<?php echo url('admin/Memberform/mcardmsg'); ?>">会员卡管理</a>
                            </li>
                            <li><a class="J_menuItem" href="<?php echo url('admin/Memberform/renewalcard'); ?>">续卡记录</a>
                            </li>
                        </ul>
                    </li>
                    <?php if(app('request')->session('admin.role') == '超级管理员'): ?>
                        <li>
                            <a href="#"><i class="fa fa-user-plus"></i> <span class="nav-label">管理员管理</span><span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a class="J_menuItem" href="<?php echo url('admin/Adminerform/powerform'); ?>">权限管理</a>
                                </li>
                                <li><a class="J_menuItem" href="<?php echo url('admin/Adminerform/roleform'); ?>">角色管理</a>
                                </li>
                                <li><a class="J_menuItem" href="<?php echo url('admin/Adminerform/adminerform'); ?>">管理员列表</a>
                                </li>
                            </ul>
                        </li>
                    <?php endif; ?>
                    <li>
                        <a href="#"><i class="fa fa-users"></i> <span class="nav-label">教练管理</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a class="J_menuItem" href="<?php echo url('admin/Coachform/coachform'); ?>">团操教练列表</a>
                            </li>
                            <li><a class="J_menuItem" href="<?php echo url('admin/Coachform/pcoachform'); ?>">私教教练列表</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-tree"></i> <span class="nav-label">场地管理</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a class="J_menuItem" href="<?php echo url('admin/Areaform/areaform'); ?>">私有场地管理</a>
                            </li>
                            <li><a class="J_menuItem" href="<?php echo url('admin/Areaform/arealist'); ?>">公有场地管理</a>
                            </li>
                            <li><a class="J_menuItem" href="<?php echo url('admin/Areaform/areaorder'); ?>">场地预约记录</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-tasks"></i> <span class="nav-label">课程管理</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a class="J_menuItem" href="<?php echo url('admin/Courseform/courseform'); ?>">团操课程基本信息</a>
                            </li>
                            <li><a class="J_menuItem" href="<?php echo url('admin/Courseform/pcourseform'); ?>">私教课程基本信息</a>
                            </li>
                            <li><a class="J_menuItem" href="<?php echo url('admin/Courseform/coursebook'); ?>">团操课程预约信息</a>
                            </li>
                            <li><a class="J_menuItem" href="<?php echo url('admin/Courseform/pcoursebook'); ?>">私教课程预订信息</a>
                            </li>
                            <li><a class="J_menuItem" href="<?php echo url('admin/Courseform/courseweek'); ?>">每周课程表</a>
                            </li>
                            <li><a class="J_menuItem" href="<?php echo url('admin/Courseform/coursebuy'); ?>">课程购买操作</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-cog"></i> <span class="nav-label">系统设置</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a class="J_menuItem" href="<?php echo url('admin/Logsform/mlogsform'); ?>">前台登录日志列表</a>
                            </li>
                            <li><a class="J_menuItem" href="<?php echo url('admin/Logsform/logsform'); ?>">后台登录日志列表</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <!--左侧导航结束-->
        <!--右侧部分开始-->
        <div id="page-wrapper" class="gray-bg dashbard-1">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">
                        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                        <div class="localtime fl">
                            <span class="fa fa-clock-o"></span>
                            <span id="time"></span>
                        </div>
                    </div>
                    <ul class="nav navbar-top-links navbar-right">
                        <li class="dropdown">
                            <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                                <i class="fa fa-bell"></i> <span class="label label-primary"><?php echo htmlentities($total); ?></span>
                            </a>
                            <ul class="dropdown-menu dropdown-alerts">
                                <li>
                                    <a class="J_menuItem" href="<?php echo url('admin/Noticeform/noticeform'); ?>">
                                        <div>
                                            <?php if($count != null): ?>
                                            <i class="fa fa-envelope fa-fw"></i> 您有<?php echo htmlentities($count); ?>条预订团操课程审核信息
                                            <?php else: ?>
                                            <i class="fa fa-envelope fa-fw"></i>暂无预订团操课程处理信息
                                            <?php endif; ?>
                                        </div>
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a class="J_menuItem" href="<?php echo url('admin/Noticeform/pnoticeform'); ?>">
                                        <div>
                                            <?php if($pcount != null): ?>
                                            <i class="fa fa-envelope fa-fw"></i> 您有<?php echo htmlentities($pcount); ?>条预订私教课程处理信息
                                            <?php else: ?>
                                            <i class="fa fa-envelope fa-fw"></i>暂无预订私教课程处理信息
                                            <?php endif; ?>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown hidden-xs">
                            <a class="right-sidebar-toggle" aria-expanded="false">
                                <i class="fa fa-tasks"></i> 主题
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="row content-tabs">
                <nav class="page-tabs J_menuTabs">
                    <div class="page-tabs-content">
                        <a href="<?php echo url('admin/index/indexform'); ?>" class="active J_menuTab" data-id="indexform.html"><i class="fa fa-home"></i>首页</a>
                    </div>
                </nav>
                <div class="btn-group roll-nav roll-right">
                    <button class="dropdown J_tabClose" data-toggle="dropdown">关闭操作<span class="caret"></span>
                    </button>
                    <ul role="menu" class="dropdown-menu dropdown-menu-right">
                        <li class="J_tabCloseAll"><a>关闭全部选项卡</a>
                        </li>
                         <li class="divider"></li>
                        <li class="J_tabCloseOther"><a>关闭其他选项卡</a>
                        </li>
                    </ul>
                </div>
                <a href="<?php echo url('admin/Index/loginout'); ?>" class="roll-nav roll-right J_tabExit"><i class="fa fa fa-sign-out"></i> 退出</a>
            </div>
            <div class="row J_mainContent" id="content-main">
                <iframe class="J_iframe" name="iframe0" width="100%" height="100%" src="<?php echo url('admin/index/indexform'); ?>" frameborder="0" data-id="index_v1.html" seamless></iframe>
            </div>
            <div class="footer">
                <div class="pull-right">&copy; 2019-2020 <a href="<?php echo url('home/Index/index'); ?>" target="_blank">YAHO健身俱乐部</a>
                </div>
            </div>
        </div>
        <!--右侧部分结束-->
        <!--右侧边栏开始-->
        <div id="right-sidebar">
            <div class="sidebar-container">
                <ul class="nav nav-tabs navs-3">
                    <li class="active">
                        <a data-toggle="tab" href="#tab-1">
                            <i class="fa fa-gear"></i> 主题
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane active">
                        <div class="sidebar-title">
                            <h3> <i class="fa fa-comments-o"></i> 主题设置</h3>
                            <small><i class="fa fa-tim"></i> 你可以从这里选择和预览主题的布局和样式，这些设置会被保存在本地，下次打开的时候会直接应用这些设置。</small>
                        </div>
                        <div class="skin-setttings">
                            <div class="title">主题设置</div>
                            <div class="setings-item">
                                <span>收起左侧菜单</span>
                                <div class="switch">
                                    <div class="onoffswitch">
                                        <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="collapsemenu">
                                        <label class="onoffswitch-label" for="collapsemenu">
                                            <span class="onoffswitch-inner"></span>
                                            <span class="onoffswitch-switch"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="setings-item">
                                <span>固定顶部</span>
                                <div class="switch">
                                    <div class="onoffswitch">
                                        <input type="checkbox" name="fixednavbar" class="onoffswitch-checkbox" id="fixednavbar">
                                        <label class="onoffswitch-label" for="fixednavbar">
                                            <span class="onoffswitch-inner"></span>
                                            <span class="onoffswitch-switch"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="setings-item">
                                <span>固定宽度</span>
                                <div class="switch">
                                    <div class="onoffswitch">
                                        <input type="checkbox" name="boxedlayout" class="onoffswitch-checkbox" id="boxedlayout">
                                        <label class="onoffswitch-label" for="boxedlayout">
                                            <span class="onoffswitch-inner"></span>
                                            <span class="onoffswitch-switch"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="title">皮肤选择</div>
                            <div class="setings-item default-skin nb">
                                <span class="skin-name "><a href="#" class="s-skin-0">默认皮肤</a></span>
                            </div>
                            <div class="setings-item blue-skin nb">
                                <span class="skin-name "><a href="#" class="s-skin-1">蓝色主题</a></span>
                            </div>
                            <div class="setings-item yellow-skin nb">
                                <span class="skin-name "><a href="#" class="s-skin-3">黄色/紫色主题</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--右侧边栏结束-->
        <!--mini聊天窗口开始-->
        <div class="small-chat-box fadeInRight animated">

            <div class="heading" draggable="true">
                <small class="chat-date pull-right">
                    2015.9.1
                </small> 与 Beau-zihan 聊天中
            </div>
            <div class="content">
                <div class="left">
                    <div class="author-name">
                        Beau-zihan <small class="chat-date">
                        10:02
                    </small>
                    </div>
                    <div class="chat-message active">
                        你好
                    </div>
                </div>
                <div class="right">
                    <div class="author-name">
                        游客
                        <small class="chat-date">
                            11:24
                        </small>
                    </div>
                    <div class="chat-message">
                        你好，请问H+有帮助文档吗？
                    </div>
                </div>
                <div class="left">
                    <div class="author-name">
                        Beau-zihan
                        <small class="chat-date">
                            08:45
                        </small>
                    </div>
                    <div class="chat-message active">
                        有，购买的H+源码包中有帮助文档，位于docs文件夹下
                    </div>
                </div>
                <div class="right">
                    <div class="author-name">
                        游客
                        <small class="chat-date">
                            11:24
                        </small>
                    </div>
                    <div class="chat-message">
                        那除了帮助文档还提供什么样的服务？
                    </div>
                </div>
                <div class="left">
                    <div class="author-name">
                        Beau-zihan
                        <small class="chat-date">
                            08:45
                        </small>
                    </div>
                    <div class="chat-message active">
                        1.所有源码(未压缩、带注释版本)；
                        <br> 2.说明文档；
                        <br> 3.终身免费升级服务；
                        <br> 4.必要的技术支持；
                        <br> 5.付费二次开发服务；
                        <br> 6.授权许可；
                        <br> ……
                        <br>
                    </div>
                </div>
            </div>
            <div class="form-chat">
                <div class="input-group input-group-sm">
                    <input type="text" class="form-control"> <span class="input-group-btn"> <button
                        class="btn btn-primary" type="button">发送
                </button> </span>
                </div>
            </div>
        </div>
        <div id="small-chat">
            <span class="badge badge-warning pull-right">5</span>
            <a class="open-small-chat">
                <i class="fa fa-comments"></i>
            </a>
        </div>
    </div>
    <script src="../../../static/common/hplus/js/jquery.min.js?v=2.1.4"></script>
<script src="../../../static/common/hplus/js/bootstrap.min.js?v=3.3.6"></script>
<script src="../../../static/common/hplus/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="../../../static/common/hplus/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="../../../static/common/hplus/js/plugins/layer/layer.min.js"></script>
<script src="../../../static/common/hplus/js/hplus.min.js?v=4.1.0"></script>
<script type="text/javascript" src="../../../static/common/hplus/js/contabs.min.js"></script>
<script src="../../../static/common/hplus/js/plugins/pace/pace.min.js"></script>
<script src="../../../static/common/formate.js"></script>
<script src="../../../static/common/hplus/js/content.min.js?v=1.0.0"></script>
<script>
    //获取当前时间
    $(function () {
        setInterval(function () {
            var timedata=new Date().getTime();
            var time=formatedate(timedata);
            $("#time").html(time);
        },1000);

    })
</script>
</body>
</html>
