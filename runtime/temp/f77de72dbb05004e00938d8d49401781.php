<?php /*a:3:{s:79:"/www/users/HA630745/WEB/yahoh/application/admin/view/Courseform/courseweek.html";i:1571626145;s:81:"/www/users/HA630745/WEB/yahoh/application/admin/view/Courseform/jscourseweek.html";i:1571626376;s:76:"/www/users/HA630745/WEB/yahoh/application/admin/view/Common/jsformcheck.html";i:1571579985;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>每周课程基本信息</title>
    <!--H+框架样式-->
    <link href="../../../static/common/hplus/css/bootstrap.min14ed.css?v=3.3.6" rel="stylesheet">
    <link href="../../../static/common/hplus/css/font-awesome.min93e3.css?v=4.4.0" rel="stylesheet">
    <link href="../../../static/common/hplus/css/animate.min.css" rel="stylesheet">
    <link href="../../../static/common/hplus/css/style.min862f.css?v=4.1.0" rel="stylesheet">
    <!--自定义样式-->
    <link href="../../../static/admin/css/common.css" rel="stylesheet">
    <link href="../../../static/admin/css/base.css" rel="stylesheet">
</head>
<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>每周课程基本信息</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="row">
                        <div class="deletegroup fl">
                            <button type="button" class="btn btn-danger" id="deletesome">批量删除</button>
                            <button type="button" class="btn btn-success" id="add">添加课程</button>
                        </div>
                        <div class="searchgroup fr col-sm-3">
                            <div class="input-group">
                                <div class="search-msg" id="search-msg">
                                    <ul class="searchlist" id="searchlist"></ul>
                                </div>
                                <span class="input-group-btn">
                                    <a href="<?php echo url('admin/courseform/courseshow'); ?>" type="button" class="btn btn-sm btn-primary">显示一周的课表</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <table class="table table-striped table-bordered table-hover dataTables-example">
                        <thead>
                            <tr>
                                <th></th>
                                <th>编号</th>
                                <th>课程名称</th>
                                <th>课程场地</th>
                                <th>课程教练</th>
                                <th>开课时间段</th>
                                <th>课程时长</th>
                                <th>星期</th>
                                <th>课程限定人数</th>
                                <th>课程已报名人数</th>
                                <th>操作员</th>
                                <th>操作</th>
                            </tr>
                        </thead>
                        <tbody id="tbody"></tbody>
                    </table>
                    <div class="table-footer clearfix" id="table-footer">
                        <div class="col-sm-3">共<span id="datacount"></span>项</div>
                        <div class="page fr clearfix" id="page">
                            <div class="pageup fl" id="pageup">上一页</div>
                            <div class="pagelist fl clearfix" id="pagelist">
                                <ul></ul>
                            </div>
                            <div class="pagedown fl" id="pagedown">下一页</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="isdel" id="isdel">
        <p id="isdel-msg">确定要删除吗？</p>
        <button type="button" class="btn btn-primary cancel" id="cancel">取消</button>
        <button type="button" class="btn btn-danger" id="sure">确定</button>
    </div>
    <div class="result" id="result">
        <p id="result-msg"></p>
        <button type="button" class="btn btn-primary" id="resbtn">确定</button>
    </div>
</div>
<div class="pop-up-plus areaform" id="pop-up-plus">
    <div class="addbox">
        <div class="ibox-title">
            <h5 id="title"></h5>
        </div>
        <form accept-charset="utf-8" id="formlist" class="clearfix">
            <input type="hidden" name="id" class="updateid" id="updateid">
            <input type="hidden" name="operator" value="<?php echo htmlentities(app('request')->session('admin.adminname')); ?>" id="operator">
            <div class="form-group col-sm-6 clearfix">
                <label class="col-sm-4 control-label">课程名称</label>
                <div class="col-sm-8">
                    <select name="course_name" id="course_name" class="form-control">
                        <?php foreach($data2 as $k=>$v): ?>
                        <option value="<?php echo htmlentities($v['id']); ?>" class="course"><?php echo htmlentities($v['course_name']); ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="form-group col-sm-6 clearfix">
                <label class="col-sm-4 control-label">课程场地</label>
                <div class="col-sm-8">
                    <select name="course_area" id="course_area" class="form-control">
                        <?php foreach($data as $k=>$v): ?>
                        <option value="<?php echo htmlentities($v['id']); ?>" class="area"><?php echo htmlentities($v['areaname']); ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="form-group col-sm-6 clearfix">
                <label class="col-sm-4 control-label">课时</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="course_hour" id="course_hour">
                </div>
            </div>
            <div class="form-group col-sm-6 clearfix">
                <label class="col-sm-4 control-label">课程教练</label>
                <div class="col-sm-8">
                    <select name="course_coach" id="course_coach" class="form-control">
                        <?php foreach($data3 as $k=>$v): ?>
                        <option value="<?php echo htmlentities($v['id']); ?>" class="coach"><?php echo htmlentities($v['coachname']); ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="form-group col-sm-6 clearfix">
                <label class="col-sm-4 control-label">限定人数</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="course_num" id="course_num">
                </div>
            </div>
            <div class="form-group col-sm-6 clearfix">
                <label class="col-sm-4 control-label">星期</label>
                <div class="col-sm-8">
                    <select name="course_week"  class="form-control" id="course_week">
                        <option value="星期一" class="project">星期一</option>
                        <option value="星期二" class="project">星期二</option>
                        <option value="星期三" class="project">星期三</option>
                        <option value="星期四" class="project">星期四</option>
                        <option value="星期五" class="project">星期五</option>
                        <option value="星期六" class="project">星期六</option>
                        <option value="星期日" class="project">星期日</option>
                    </select>
                </div>
            </div>
            <div class="form-group col-sm-6 clearfix">
                <label class="col-sm-4 control-label">开课时间段</label>
                <div class="col-sm-8">
                    <select name="course_time"  class="form-control" id="course_time">
                        <option value="10:00-11:30" class="time">10:00-11:30</option>
                        <option value="14:00-15:30" class="time">14:00-15:30</option>
                        <option value="16:00-17:30" class="time">16:00-17:30</option>
                        <option value="19:00-20:30" class="time">19:00-20:30</option>
                    </select>
                </div>
            </div>
            <div class="form-group col-sm-12 clearfix">
                <div class="col-sm-4 col-sm-offset-3 fr">
                    <button class="btn btn-primary ccancel" type="button" >取消</button>
                    <button class="btn btn-danger addbtn updatebtn" type="button" >提交</button>
                </div>
            </div>
        </form>
    </div>
</div>
<script src="../../../static/common/hplus/js/jquery.min.js?v=2.1.4"></script>
<script src="../../../static/common/hplus/js/bootstrap.min.js?v=3.3.6"></script>
<script src="../../../static/common/hplus/js/content.min.js?v=1.0.0"></script>
<script src="../../../static/common/page.js"></script>
<script src="http://static.runoob.com/assets/jquery-validation-1.14.0/lib/jquery.js"></script>
<script src="http://static.runoob.com/assets/jquery-validation-1.14.0/dist/jquery.validate.min.js"></script>
<script>
    //单选框选中样式
    $(function () {
        $(".el").on("click",function() {
            $(this).parent('i').removeClass("check_bg_check");
            var checked = $(this).prop('checked');
            if(checked){
                $(this).parent('i').addClass("check_bg_check").siblings("i").removeClass("check_bg_check");
            }
        })
    });
    $.extend($.validator.messages, {
        required: "必填",
        remote: "请修正此字段",
        email: "格式错误",
        url: "请输入有效的网址",
        date: "请输入有效的日期",
        dateISO: "请输入有效的日期 (YYYY-MM-DD)",
        number: "请输入有效的数字",
        digits: "只能数字",
        creditcard: "请输入有效的信用卡号码",
        equalTo: "你的输入不相同",
        extension: "请输入有效的后缀",
        maxlength: $.validator.format("最多可以输入 {0} 个字符"),
        minlength: "11位数字",
        rangelength: $.validator.format("请输入长度在 {0} 到 {1} 之间的字符串"),
        range: $.validator.format("请输入范围在 {0} 到 {1} 之间的数值"),
        max: $.validator.format("请输入不大于 {0} 的数值"),
        min: $.validator.format("请输入不小于 {0} 的数值")
    });
     var validator= function (id) {
             return $(id).validate({
                debug:true,
                rules:{
                    powername:{
                        required:true
                    },
                    described:{
                        required:true
                    },
                    rolename:{
                        required:true
                    },
                    adminpname:{
                        required:true
                    },
                    adminname:{
                        required:true
                    },
                    password:{
                        required:true
                    },
                    phone:{
                        required:true,
                        minlength: 11,
                        digits:true
                    },
                    email:{
                        required:true,
                        email:true
                    },
                    card_type:{
                        required:true,
                    },
                    card_money:{
                        required:true,
                    },
                    start_card:{
                        required:true,
                    },
                    end_card:{
                        required:true,
                    },
                    member_card:{
                        required:true,
                    },
                    end_time:{
                        required:true,
                    },
                    member_name:{
                        required:true,
                    },
                    identity_card:{
                        required:true,
                    },
                    consultant:{
                        required:true,
                    },
                    money:{
                        required:true,
                    },
                    jobnum:{
                        required:true,
                    },
                    coachname:{
                        required:true,
                    },
                    goodat:{
                        required:true,
                    },
                    described:{
                        required:true,
                    },
                    area_id:{
                        required:true,
                    },
                    areaname:{
                        required:true,
                    },
                    areaitem:{
                        required:true,
                    },
                    course_name:{
                        required:true,
                    },
                    course_num:{
                        required:true,
                    },
                    course_money:{
                        required:true,
                    },
                    course_hour:{
                        required:true,
                    }
                },
            })
        }
</script>
<script>
    var totalNum,pageSize,totalPage;
    //页面加载时动态显示数据
    function getData(page){
        $.ajax({
            type:'get',
            url:"<?php echo url('admin/Courseform/courseweekshow'); ?>",
            data:{page:page},
            dataType:"json",
            success:function(data){
                if(data){
                    totalNum=data[0].totalNum;//总记录数
                    pageSize=data[0].pageSize;//每页数量
                    totalPage=data[0].totalPage;//总页数
                    var str='';
                    for(var i=1;i<data.length;i++){
                        str+="<tr id=tr_"+data[i].id+">";
                        str+="<td><input type='checkbox' class='checkbox'code="+data[i].id+"></td>";
                        str+="<td>"+data[i].id+"</td>";
                        str+="<td>"+data[i].course_name+"</td>";
                        str+="<td>"+data[i].areaname+"</td>";
                        str+="<td>"+data[i].coachname+"</td>";
                        str+="<td>"+data[i].course_time+"</td>";
                        str+="<td>"+data[i].course_hour+"</td>";
                        str+="<td>"+data[i].course_week+"</td>";
                        str+="<td>"+data[i].course_num+"</td>";
                        str+="<td>"+data[i].book_num+"</td>";
                        str+="<td>"+data[i].operator+"</td>";
                        str+="<td><a class='fa fa-pencil update' code="+data[i].id+"></a><a class='fa fa-trash delete' code="+data[i].id+"></a></td>";
                        str+="</tr>";
                    }
                    $("#tbody").html(str);
                    var datacount=totalNum;
                    $("#datacount").html(datacount);
                    $(".delete").off().click(function(){
                        var id=$(this).attr('code');
                        del(id);//调用删除数据函数
                    });
                    $(".update").off().click(function(){
                        var id=$(this).attr('code');
                        $("#formlist").find("input").removeClass("error");
                        validator("#formlist").resetForm();
                        updateshow(id);//调用修改数据函数
                    });
                    //获取分页样式
                    if (page==1) {
                        getPageBar();
                        $("#table-footer").show();
                    }
                }else{
                    var str='';
                    str+="<tr><td colspan='13'>数据请求失败</td></tr>";
                    $("#tbody").html(str);
                    $("#table-footer").hide();
                }
            }
        })
    }
    //页面加载初始化第一页
    $(function(){
        getData(1);
    })
    //添加操作
    $("#add").off().click(function () {
        $("#formlist").find("input").removeClass("error");
        validator("#formlist").resetForm();
        $("#title").html("添加课程");
        $("#pop-up-plus").show();
        $("#formlist")[0].reset();
        $(".addbtn").off().click(function(){
            if(validator("#formlist").form()){
                var data=$("#formlist").serialize();
                $.ajax({
                    type: "post",
                    url: "<?php echo url('admin/Courseform/weekadd'); ?>",
                    dataType: "json",
                    data:data,
                    success:function(data){
                        if (data.code==1) {
                            $(".pop-up-plus").hide();
                            $("#result-msg").html(data.msg);
                            $(".result").show();
                            $("#resbtn").click(function() {
                                $(".result").hide();
                                getData(1);
                            });
                        }else {
                            $(".pop-up-plus").hide();
                            $("#result-msg").html(data.msg);
                            $(".result").show();
                            $("#resbtn").click(function() {
                                $(".result").hide();
                            })
                        }
                    }
                })
            }
        })
    })
    function updateshow(id){
        $("#formlist")[0].reset();
        $(".updateid").val(id);
        $("#title").html("修改课程");
        $.ajax({
            type:"post",
            url:"<?php echo url('admin/Courseform/weekupdateshow'); ?>",
            dataType:"json",
            data:{id:id},
            success:function(data){
                if (data) {
                    $(".course").each(function () {
                        if(data.course_name==$(this).val()){
                            $(this).prop('selected','selected');
                        }
                    });
                    $(".area").each(function () {
                        if(data.course_area==$(this).val()){
                            $(this).prop('selected','selected');
                        }
                    });
                    $(".coach").each(function () {
                        if(data.course_coach==$(this).val()){
                            $(this).prop('selected','selected');
                        }
                    });
                    $("#course_hour").val(data.course_hour);
                    $(".project").each(function () {
                        if(data.course_week==$(this).val()){
                            $(this).prop('selected','selected');
                        }
                    });
                    $(".time").each(function () {
                        if(data.course_time==$(this).val()){
                            $(this).prop('selected','selected');
                        }
                    });
                    $("#course_num").val(data.course_num);
                    $("#pop-up-plus").show();
                    $(".updatebtn").off().click(function(){
                        if(validator("#formlist").form()){
                            update();
                        }
                    })
                }else{
                    $("#result-msg").html("该操作不可用");
                    $(".result").show();
                    $("#resbtn").click(function() {
                        $(".result").hide();
                    })
                }
            }
        })
    }
    //修改操作
    function update(){
        var data=$("#formlist").serialize();
        $.ajax({
            type:"post",
            url:"<?php echo url('admin/Courseform/weekupdate'); ?>",
            dataType:"json",
            data:data,
            success:function(data){
                if (data.code==1) {
                    $(".pop-up-plus").hide();
                    $("#result-msg").html(data.msg);
                    $(".result").show();
                    $("#resbtn").click(function() {
                        $(".result").hide();
                        var p=1;
                        $("#pagelist ul li").each(function () {
                            if($(this).hasClass("on")){
                                p=$(this).html();
                            }
                        })
                        getData(p);
                    });
                }else {
                    $(".pop-up-plus").hide();
                    $("#result-msg").html(data.msg);
                    $(".result").show();
                    $("#resbtn").click(function() {
                        $(".result").hide();
                    })
                }
            }
        })
    }
    // 删除操作
    function del(id){
        $("#isdel").show();
        $("#sure").off().click(function () {
            $("#isdel").hide();
            $.ajax({
                url: "<?php echo url('admin/Courseform/weekdelete'); ?>",
                type: 'post',
                dataType: 'json',
                data: {id:id},
                success:function(data){
                    if (data.code==1) {
                        $("#result-msg").html(data.msg);
                        $("#result").show();
                        $("#resbtn").click(function() {
                            $(".result").hide();
                            var p=1;
                            $("#pagelist ul li").each(function () {
                                if($(this).hasClass("on")){
                                    p=$(this).html();
                                }
                            })
                            getData(p);
                        });
                    }else{
                        $("#result-msg").html(data.msg);
                        $("#result").show();
                        $("#resbtn").click(function() {
                            $(".result").hide();
                        })
                    }
                }
            })
        })
    }
    //批量删除操作
    $("#deletesome").click(function(){
        $("#isdel").show();
        $("#sure").off().click(function () {
            $("#isdel").hide();
            var checkboxs=$(".checkbox");
            var arr=[];
            for (var i = 0; i < checkboxs.length; i++) {
                if(checkboxs.eq(i).prop("checked")){
                    var ids=checkboxs.eq(i).attr('code');
                    arr.push(ids)
                }
            };
            $.ajax({
                url: "<?php echo url('admin/Courseform/weekdeletesome'); ?>",
                type: 'post',
                dataType: 'json',
                data: {ids:arr},
                success:function(data){
                    if (data.code==1) {
                        $("#result-msg").html(data.msg);
                        $("#result").show();
                        $("#resbtn").click(function() {
                            getData(1);
                        });
                    }else{
                        $("#result-msg").html(data.msg);
                        $("#result").show();
                        $("#resbtn").click(function() {
                            $(".result").hide();
                        })
                    }
                }
            })
        })
    })
    //操作弹窗关闭
    $(".ccancel").click(function () {
        $("#pop-up-plus").hide();
    })
    //是否删除弹窗关闭
    $("#cancel").click(function () {
        $("#isdel").hide();
    })
    // 结果弹窗关闭
    $("#resbtn").click(function () {
        $("#result").hide();
    })
</script>
</body>
</html>
