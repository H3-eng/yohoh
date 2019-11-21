<?php /*a:2:{s:80:"/www/users/HA630745/WEB/yahoh/application/admin/view/Noticeform/pnoticeform.html";i:1571628849;s:82:"/www/users/HA630745/WEB/yahoh/application/admin/view/Noticeform/jspnoticeform.html";i:1571740853;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>私教课程预约信息</title>
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
                        <h5>私教课程预约信息</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <?php foreach($data as $k=>$v): ?>
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <i class="fa fa-info-circle"></i>
                                    </div>
                                    <div class="panel-body">
                                        <p>用户名：<?php echo htmlentities($v['username']); ?></p>
                                        <p>电子邮箱：<?php echo htmlentities($v['email']); ?></p>
                                        <p>电话号码：<?php echo htmlentities($v['phone']); ?></p>
                                        <p>课程编号：<?php echo htmlentities($v['course_id']); ?></p>
                                        <p>课程名称：<?php echo htmlentities($v['course_name']); ?></p>
                                        <p><button class="btn btn-danger check" code="<?php echo htmlentities($v['id']); ?>">处理</button></p>
                                    </div>
                                </div>
                            </div>
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
                        <h5 id="title">添加联系人</h5>
                    </div>
                    <form accept-charset="utf-8" id="formlist">
                        <input type="hidden" name="id" class="updateid">
                        <input type="hidden" name="operator" value="<?php echo htmlentities(app('request')->session('admin.adminname')); ?>">
                        <div class="form-group clearfix">
                            <label class="col-sm-4 control-label">联系人</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="chargename" id="chargename">
                            </div>
                        </div>
                        <div class="form-group col-sm-12 clearfix">
                            <div class="fr">
                                <button class="btn btn-primary ccancel" type="button" >取消</button>
                                <button class="btn btn-danger send" type="button" >提交</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </div>
    <!-- 基础文件 -->
<script src="../../../static/common/hplus/js/jquery.min.js?v=2.1.4"></script>
<script src="../../../static/common/hplus/js/bootstrap.min.js?v=3.3.6"></script>
<script src="../../../static/common/hplus/js/content.min.js?v=1.0.0"></script>
<script>
    //页面加载时动态显示数据
    $(".check").click(function(){
        var id=$(this).attr("code");
        $("#normalbox").show();
        $(".send").off().click(function () {
            var chargename=$("#chargename").val();
            $.ajax({
                type:"post",
                url:"<?php echo url('admin/Noticeform/pcheck'); ?>",
                dataType:"json",
                data:{
                    id:id,
                    chargename:chargename
                },
                success:function(data){
                    if (data) {
                        $("#normalbox").hide();
                        $("#result-msg").html("处理成功");
                        $(".result").show();
                        $("#resbtn").click(function() {
                            parent.location.reload(); 
                        })
                    }else{
                        $("#normalbox").hide();
                        $("#result-msg").html("处理失败");
                        $(".result").show();
                        $("#resbtn").click(function() {
                            $("#result").hide();
                        })
                    }
                }
            })
        })
    })
    // 结果弹窗关闭
    $("#resbtn").click(function () {
        $("#result").hide();
    })
    $(".ccancel").click(function () {
        $("#normalbox").hide();
    })
</script>
</body>
</html>
