<?php /*a:1:{s:79:"/www/users/HA630745/WEB/yahoh/application/admin/view/Courseform/courseshow.html";i:1571625883;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>每周课程表</title>
    <!--H+框架样式-->
    <link href="../../../static/common/hplus/css/bootstrap.min14ed.css?v=3.3.6" rel="stylesheet">
    <link href="../../../static/common/hplus/css/font-awesome.min93e3.css?v=4.4.0" rel="stylesheet">
    <link href="../../../static/common/hplus/css/animate.min.css" rel="stylesheet">
    <link href="../../../static/common/hplus/css/style.min862f.css?v=4.1.0" rel="stylesheet">
</head>
<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>每周课程表
                        <a href="<?php echo url('admin/courseform/courseweek'); ?>">返回上一页</a>
                    </h5>

                </div>
                <div class="ibox-content">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>时间</th>
                                <th>星期一</th>
                                <th>星期二</th>
                                <th>星期三</th>
                                <th>星期四</th>
                                <th>星期五</th>
                                <th>星期六</th>
                                <th>星期日</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>10:00-11:30</td>
                                <td><?php foreach($data1 as $k=>$v): if($v['course_week'] == '星期一'): ?><?php echo htmlentities($v['course_name']); endif; endforeach; ?></td>
                                <td><?php foreach($data1 as $k=>$v): if($v['course_week'] == '星期二'): ?><?php echo htmlentities($v['course_name']); endif; endforeach; ?></td>
                                <td><?php foreach($data1 as $k=>$v): if($v['course_week'] == '星期三'): ?><?php echo htmlentities($v['course_name']); endif; endforeach; ?></td>
                                <td><?php foreach($data1 as $k=>$v): if($v['course_week'] == '星期四'): ?><?php echo htmlentities($v['course_name']); endif; endforeach; ?></td>
                                <td><?php foreach($data1 as $k=>$v): if($v['course_week'] == '星期五'): ?><?php echo htmlentities($v['course_name']); endif; endforeach; ?></td>
                                <td><?php foreach($data1 as $k=>$v): if($v['course_week'] == '星期六'): ?><?php echo htmlentities($v['course_name']); endif; endforeach; ?></td>
                                <td><?php foreach($data1 as $k=>$v): if($v['course_week'] == '星期日'): ?><?php echo htmlentities($v['course_name']); endif; endforeach; ?></td>
                            </tr>
                        <tr>
                            <td>14:00-15:30</td>
                            <td><?php foreach($data2 as $k=>$v): if($v['course_week'] == '星期一'): ?><?php echo htmlentities($v['course_name']); endif; endforeach; ?></td>
                            <td><?php foreach($data2 as $k=>$v): if($v['course_week'] == '星期二'): ?><?php echo htmlentities($v['course_name']); endif; endforeach; ?></td>
                            <td><?php foreach($data2 as $k=>$v): if($v['course_week'] == '星期三'): ?><?php echo htmlentities($v['course_name']); endif; endforeach; ?></td>
                            <td><?php foreach($data2 as $k=>$v): if($v['course_week'] == '星期四'): ?><?php echo htmlentities($v['course_name']); endif; endforeach; ?></td>
                            <td><?php foreach($data2 as $k=>$v): if($v['course_week'] == '星期五'): ?><?php echo htmlentities($v['course_name']); endif; endforeach; ?></td>
                            <td><?php foreach($data2 as $k=>$v): if($v['course_week'] == '星期六'): ?><?php echo htmlentities($v['course_name']); endif; endforeach; ?></td>
                            <td><?php foreach($data2 as $k=>$v): if($v['course_week'] == '星期日'): ?><?php echo htmlentities($v['course_name']); endif; endforeach; ?></td>
                        </tr>
                        <tr>
                            <td>15:30-17:00</td>
                            <td><?php foreach($data3 as $k=>$v): if($v['course_week'] == '星期一'): ?><?php echo htmlentities($v['course_name']); endif; endforeach; ?></td>
                            <td><?php foreach($data3 as $k=>$v): if($v['course_week'] == '星期二'): ?><?php echo htmlentities($v['course_name']); endif; endforeach; ?></td>
                            <td><?php foreach($data3 as $k=>$v): if($v['course_week'] == '星期三'): ?><?php echo htmlentities($v['course_name']); endif; endforeach; ?></td>
                            <td><?php foreach($data3 as $k=>$v): if($v['course_week'] == '星期四'): ?><?php echo htmlentities($v['course_name']); endif; endforeach; ?></td>
                            <td><?php foreach($data3 as $k=>$v): if($v['course_week'] == '星期五'): ?><?php echo htmlentities($v['course_name']); endif; endforeach; ?></td>
                            <td><?php foreach($data3 as $k=>$v): if($v['course_week'] == '星期六'): ?><?php echo htmlentities($v['course_name']); endif; endforeach; ?></td>
                            <td><?php foreach($data3 as $k=>$v): if($v['course_week'] == '星期日'): ?><?php echo htmlentities($v['course_name']); endif; endforeach; ?></td>
                        </tr>
                            <tr>
                                <td>17:00-18:30</td>
                                <td><?php foreach($data4 as $k=>$v): if($v['course_week'] == '星期一'): ?><?php echo htmlentities($v['course_name']); endif; endforeach; ?></td>
                                <td><?php foreach($data4 as $k=>$v): if($v['course_week'] == '星期二'): ?><?php echo htmlentities($v['course_name']); endif; endforeach; ?></td>
                                <td><?php foreach($data4 as $k=>$v): if($v['course_week'] == '星期三'): ?><?php echo htmlentities($v['course_name']); endif; endforeach; ?></td>
                                <td><?php foreach($data4 as $k=>$v): if($v['course_week'] == '星期四'): ?><?php echo htmlentities($v['course_name']); endif; endforeach; ?></td>
                                <td><?php foreach($data4 as $k=>$v): if($v['course_week'] == '星期五'): ?><?php echo htmlentities($v['course_name']); endif; endforeach; ?></td>
                                <td><?php foreach($data4 as $k=>$v): if($v['course_week'] == '星期六'): ?><?php echo htmlentities($v['course_name']); endif; endforeach; ?></td>
                                <td><?php foreach($data4 as $k=>$v): if($v['course_week'] == '星期日'): ?><?php echo htmlentities($v['course_name']); endif; endforeach; ?></td>
                            </tr>
                            <tr>
                                <td>20:00-21:30</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
