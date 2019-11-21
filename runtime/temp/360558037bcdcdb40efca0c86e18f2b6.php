<?php /*a:1:{s:73:"/www/users/HA630745/WEB/yahoh/application/admin/view/Index/indexform.html";i:1571622148;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>首页</title>
    <!--H+框架样式-->
    <link href="../../../static/common/hplus/css/bootstrap.min14ed.css?v=3.3.6" rel="stylesheet">
    <link href="../../../static/common/hplus/css/font-awesome.min93e3.css?v=4.4.0" rel="stylesheet">
    <link href="../../../static/common/hplus/css/animate.min.css" rel="stylesheet">
    <link href="../../../static/common/hplus/css/style.min862f.css?v=4.1.0" rel="stylesheet">
    <!--自定义样式-->
    <link href="../../../static/admin/css/memberform.css" rel="stylesheet">
    <link href="../../../static/admin/css/base.css" rel="stylesheet">
</head>
<body class="gray-bg">
    <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-sm-3">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <span class="label label-success pull-right">总</span>
                        <h5>会员人数</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins"><?php echo htmlentities($mcount); ?></h1>
                        <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i>
                        </div>
                        <small>总人数</small>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <span class="label label-info pull-right">月</span>
                        <h5>课程预约</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins"><?php echo htmlentities($pcount); ?></h1>
                        <div class="stat-percent font-bold text-info">20% <i class="fa fa-level-up"></i>
                        </div>
                        <small>私教课程</small>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <span class="label label-primary pull-right">总</span>
                        <h5>场地预约</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins"><?php echo htmlentities($acount); ?></h1>
                        <div class="stat-percent font-bold text-navy">44% <i class="fa fa-level-up"></i>
                        </div>
                        <small>订单总量</small>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <span class="label label-danger pull-right">总</span>
                        <h5>活跃会员</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins"><?php echo htmlentities($ccount); ?></h1>
                        <div class="stat-percent font-bold text-danger">38% <i class="fa fa-level-down"></i>
                        </div>
                        <small>总人数</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
