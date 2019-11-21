<?php /*a:2:{s:79:"/www/users/HA630745/WEB/yahoh/application/admin/view/Noticeform/noticeform.html";i:1571741953;s:81:"/www/users/HA630745/WEB/yahoh/application/admin/view/Noticeform/jsnoticeform.html";i:1571740930;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>团操课程预约信息</title>
    <!--[if lt IE 9]>
    <meta http-equiv="refresh" content="0;ie.html" />
    <![endif]-->
    <link rel="shortcut icon" href="favicon.ico">
    <link href="../../../static/common/hplus/css/bootstrap.min14ed.css?v=3.3.6" rel="stylesheet">
    <link href="../../../static/common/hplus/css/font-awesome.min93e3.css?v=4.4.0" rel="stylesheet">
    <link href="../../../static/common/hplus/css/animate.min.css" rel="stylesheet">
    <link href="../../../static/common/hplus/css/style.min862f.css?v=4.1.0" rel="stylesheet">
    <link href="../../../static/admin/css/common.css" rel="stylesheet">
    <link href="../../../static/admin/css/base.css" rel="stylesheet">
</head>
<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeIn noticeform">
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>团操课程预约信息</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <?php foreach($data as $k=>$v): ?>
                        <div class="con-header clearfix">
                            <div class="order-msg fl">
                                <span>预约单号：<?php echo htmlentities($v['order_id']); ?></span>
                                <span>会员卡号：<?php echo htmlentities($v['member_card']); ?></span>
                                <span>会员名字：<?php echo htmlentities($v['member_name']); ?></span>
                            </div>
                            <div class="ordercheck fr">
                                <button class="btn btn-danger order-check" code="<?php echo htmlentities($v['id']); ?>">审核</button>
                            </div>
                        </div>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>课程名称</th>
                                    <th>课程教练</th>
                                    <th>课程星期</th>
                                    <th>课程时间</th>
                                </tr>
                            </thead>
                            <?php foreach($datalist as $k=>$val): if($val['order_id'] == $v['order_id']): ?>
                            <tbody>
                                <tr>
                                    <td><?php echo htmlentities($val['course_name']); ?></td>
                                    <td><?php echo htmlentities($val['course_coach']); ?></td>
                                    <td><?php echo htmlentities($val['course_week']); ?></td>
                                    <td><?php echo htmlentities($val['course_time']); ?></td>
                                </tr>
                            </tbody>
                            <?php endif; endforeach; ?>
                        </table>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="result" id="result">
            <p id="result-msg"></p>
            <button type="button" class="btn btn-primary" id="resbtn">确定</button>
        </div>
        <div class="normalbox" id="normalbox">
            <div class="addbox">
                <div class="ibox-title">
                    <h5 id="title">审核信息</h5>
                </div>
                <form accept-charset="utf-8" id="formlist">
                    <input type="hidden" id="bid">
                    <input type="hidden" id="operator" value="<?php echo htmlentities(app('request')->session('admin.adminname')); ?>">
                    <div class="form-group col-sm-12 clearfix">
                        <label class="col-sm-4 control-label">审核</label>
                        <div class="col-sm-6">
                            <select  class="form-control" name="issue" id="issue" >
                                <option value="通过" class="issue">通过</option>
                                <option value="不通过" class="issue">不通过</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-sm-12 clearfix">
                        <div class="fr">
                            <button class="btn btn-primary ccancel" type="button" >取消</button>
                            <button class="btn btn-danger" type="button" id="send" >提交</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="../../../static/common/hplus/js/jquery.min.js?v=2.1.4"></script>
<script src="../../../static/common/hplus/js/bootstrap.min.js?v=3.3.6"></script>
<script src="../../../static/common/hplus/js/content.min.js?v=1.0.0"></script>
<script src="../../../static/common/page.js"></script>
<script>
    var totalNum,pageSize,totalPage;
    //审核
    $(".order-check").off().click(function () {
        var id = $(this).attr("code");
        $("#normalbox").show();
        $("#send").off().click(function () {
            var issue = $("#issue").val();
            $.ajax({
                type: "post",
                url: "<?php echo url('admin/Noticeform/check'); ?>",
                dataType: "json",
                data: {
                    issue: issue,
                    id: id,
                },
                success: function (data) {
                    if(data.code==1){
                        $("#normalbox").hide();
                        $("#result-msg").html(data.msg);
                        $(".result").show();
                        $("#resbtn").click(function() {
                            parent.location.reload(); 
                        })
                    }else{
                        $("#normalbox").hide();
                        $("#result-msg").html(data.msg);
                        $(".result").show();
                        $("#resbtn").click(function() {
                            $(".result").hide();
                        })
                    }
                }
            })
        })
    })
$(".ccancel").click(function () {
    $("#normalbox").hide();
})

</script>
</body>
</html>
