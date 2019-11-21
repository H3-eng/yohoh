<?php /*a:1:{s:76:"/www/users/HA630745/WEB/yahoh/application/admin/view/Areaform/showorder.html";i:1571624807;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>订单详情页面</title>
    <!--H+框架样式-->
    <link href="../../../static/common/hplus/css/bootstrap.min14ed.css?v=3.3.6" rel="stylesheet">
    <link href="../../../static/common/hplus/css/font-awesome.min93e3.css?v=4.4.0" rel="stylesheet">
    <link href="../../../static/common/hplus/css/animate.min.css" rel="stylesheet">
    <link href="../../../static/common/hplus/css/style.min862f.css?v=4.1.0" rel="stylesheet">
    <!--自定义样式-->
    <link href="../../../static/admin/css/common.css" rel="stylesheet">
</head>
<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>订单详情页面</h5>
                </div>
                <div class="ibox-content">
                    <div class="row">
                        <table class="table table-striped table-bordered table-hover dataTables-example">
                            <thead>
                            <tr>
                                <td colspan="5">订单号：<?php echo htmlentities($data[0]['order_id']); ?></td>
                            </tr>
                            <tr>
                                <th>场地名称</th>
                                <th>场数</th>
                                <th>日期</th>
                                <th>时间</th>
                                <th>单价</th>
                            </tr>
                            </thead>
                            <tbody id="tbody">
                            <?php foreach($data as $k=>$v): ?>
                            <tr>
                                <td><?php echo htmlentities($v['areaname']); ?></td>
                                <td><?php echo htmlentities($v['areanum']); ?>号场</td>
                                <td><?php echo htmlentities($v['date']); ?></td>
                                <td><?php echo htmlentities($v['time']); ?></td>
                                <td><?php echo htmlentities($v['money']); ?></td>
                            </tr>
                            <?php endforeach; ?>
                            <tr>
                                <td colspan="5"><a href="<?php echo url('areaform/areaorder'); ?>">返回场地预约记录页面</a> </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
