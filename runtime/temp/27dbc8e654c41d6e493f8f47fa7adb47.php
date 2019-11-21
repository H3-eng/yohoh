<?php /*a:1:{s:71:"/www/users/HA630745/WEB/yahoh/application/admin/view/Index/profile.html";i:1571623767;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>个人信息页面</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link href="../../../static/common/hplus/css/bootstrap.min14ed.css?v=3.3.6" rel="stylesheet">
    <link href="../../../static/common/hplus/css/font-awesome.min93e3.css?v=4.4.0" rel="stylesheet">
    <link href="../../../static/common/hplus/css/animate.min.css" rel="stylesheet">
    <link href="../../../static/common/hplus/css/style.min862f.css?v=4.1.0" rel="stylesheet">
    <!--webupload框架样式-->
    <link rel="stylesheet" href="../../../static/common/webuploader/webuploader.css">
    <link rel="stylesheet" type="text/css" href="../../../static/admin/css/base.css">
    <link rel="stylesheet" type="text/css" href="../../../static/admin/css/common.css">
</head>
<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row profile">
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>当前登录账户信息</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="logindata">
                        <ul class="clearfix">
                            <li class="col-md-4">
                                <span>用户名：</span>
                                <span><?php echo htmlentities($data[0]['name']); ?></span>
                            </li>
                            <li class="col-md-4">
                                <span>账户身份：</span>
                                <span><?php echo htmlentities($data[0]['role']); ?></span>
                            </li>
                            <li class="col-md-4">
                                <span>登录时间：</span>
                                <span><?php echo htmlentities($data[0]['create_time']); ?></span>
                            </li>
                            <li class="col-md-4">
                                <span>登录IP：</span>
                                <span><?php echo htmlentities($data[0]['loginip']); ?></span>
                            </li>
                            <li class="col-md-4">
                                <span>登录地点：</span>
                                <span><?php echo htmlentities($data[0]['area']); ?></span>
                            </li>
                            <li class="col-md-4">
                                <span>当前状态：</span>
                                <span><?php echo htmlentities($data[0]['issue']); ?></span>
                            </li>
                        </ul>
                    </div>
                    <div class="tabledata clearfix">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>登录账户</th>
                                <th>账户身份</th>
                                <th>登录状态</th>
                                <th>登录ip</th>
                                <th>登录地点</th>
                                <th>登录时间</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($data as $k=>$v): ?>
                                <tr>
                                    <td><?php echo htmlentities($v['name']); ?></td>
                                    <td><span class="line"><?php echo htmlentities($v['role']); ?></span></td>
                                    <?php if($v['issue'] == '正常登录'): ?>
                                    <td class="text-navy"> <i class="fa fa-level-up"></i><?php echo htmlentities($v['issue']); ?> </td>
                                    <?php else: ?>
                                    <td class="text-warning"> <i class="fa fa-level-down"></i><?php echo htmlentities($v['issue']); ?></td>
                                    <?php endif; ?>
                                    <td><?php echo htmlentities($v['loginip']); ?></td>
                                    <td><?php echo htmlentities($v['area']); ?></td>
                                    <td><?php echo htmlentities($v['create_time']); ?></td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                        <div class="pagelist fr"><?php echo $data; ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="../../../static/common/hplus/js/jquery.min.js?v=2.1.4"></script>
<script src="../../../static/common/hplus/js/bootstrap.min.js?v=3.3.6"></script>
<script src="../../../static/common/hplus/js/content.min.js?v=1.0.0"></script>
</body>
</html>