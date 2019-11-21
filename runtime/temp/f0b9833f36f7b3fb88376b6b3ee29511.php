<?php /*a:3:{s:78:"/www/users/HA630745/WEB/yahoh/application/admin/view/Courseform/coursebuy.html";i:1571625825;s:80:"/www/users/HA630745/WEB/yahoh/application/admin/view/Courseform/jscoursebuy.html";i:1571626244;s:76:"/www/users/HA630745/WEB/yahoh/application/admin/view/Common/jsformcheck.html";i:1571579985;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>课程购买管理</title>
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
                    <h5>课程购买管理</h5>
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
                            <button type="button" class="btn btn-success" id="add">添加订单</button>
                        </div>
                        <div class="searchgroup fr col-sm-3">
                            <div class="input-group">
                                <div class="search-msg" id="search-msg">
                                    <ul class="searchlist" id="searchlist"></ul>
                                </div>
                                <input type="text" placeholder="请输入会员名字" class="input-sm form-control" id="search" autocomplete="off">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-sm btn-primary search-btn" id="search-btn">搜索</button>
                                </span>
                            </div>
                        </div>
                    </div>
                    <table class="table table-striped table-bordered table-hover dataTables-example">
                        <thead>
                            <tr>
                                <th></th>
                                <th>编号</th>
                                <th>会员名字</th>
                                <th>课程名字</th>
                                <th>付款金额</th>
                                <th>付款方式</th>
                                <th>会员卡号</th>
                                <th>开课教练</th>
                                <th>添加时间</th>
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
<div class="pop-up areaform" id="pop-up">
    <div class="addbox">
        <div class="ibox-title">
            <h5 id="title"></h5>
        </div>
        <form accept-charset="utf-8" id="formlist" class="clearfix">
            <input type="hidden" name="operator" value="<?php echo htmlentities(app('request')->session('admin.adminname')); ?>">
            <input type="hidden" name="id" class="updateid">
            <div class="form-group col-sm-12 clearfix">
                <label class="col-sm-4 control-label">会员名字</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="member_name" id="member_name">
                </div>
            </div>
            <div class="form-group col-sm-12 clearfix">
                <label class="col-sm-4 control-label">课程名称</label>
                <div class="col-sm-6">
                    <select name="course_id" id="course_id" class="form-control">
                        <?php foreach($data as $k=>$v): if($v['member_num']<5): ?>
                        <option value="<?php echo htmlentities($v['id']); ?>" class="area"><?php echo htmlentities($v['course_name']); ?></option>
                        <?php endif; endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="form-group col-sm-12 clearfix">
                <label class="col-sm-4 control-label">付款方式</label>
                <div class="col-sm-6">
                    <select name="pay"  class="form-control" id="pay">
                        <option value="现金支付" class="pay">现金支付</option>
                        <option value="信用卡支付" class="pay">信用卡支付</option>
                        <option value="微信支付" class="pay">微信支付</option>
                        <option value="支付宝支付" class="pay">支付宝支付</option>
                    </select>
                </div>
            </div>
            <div class="form-group col-sm-12 clearfix">
                <label class="col-sm-4 control-label">付款金额</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="money" id="money">
                </div>
            </div>
            <div class="form-group col-sm-12 clearfix">
                <label class="col-sm-4 control-label">会员卡号</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="member_card" id="member_card">
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
<!-- 基础文件 -->
<script src="../../../static/common/hplus/js/jquery.min.js?v=2.1.4"></script>
<script src="../../../static/common/hplus/js/bootstrap.min.js?v=3.3.6"></script>
<!-- H+文件 -->
<script src="../../../static/common/hplus/js/content.min.js?v=1.0.0"></script>
<!-- 分页文件 -->
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
            url:"<?php echo url('admin/Courseform/coursebuyshow'); ?>",
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
                        str+="<td>"+data[i].member_name+"</td>";
                        str+="<td>"+data[i].course_name+"</td>";
                        str+="<td>"+data[i].money+"</td>";
                        str+="<td>"+data[i].pay+"</td>";
                        str+="<td>"+data[i].member_card+"</td>";
                        str+="<td>"+data[i].coachname+"</td>";
                        str+="<td>"+data[i].create_time+"</td>";
                        str+="<td>"+data[i].operator+"</td>";
                        str+="<td><a class='fa fa-trash delete' code="+data[i].id+"></a></td>";
                        str+="</tr>";
                    }
                    $("#tbody").html(str);
                    var datacount=totalNum;
                    $("#datacount").html(datacount);
                    $(".delete").off().click(function(){
                        var id=$(this).attr('code');
                        del(id);//调用删除数据函数
                    });
                    //获取分页样式
                    if (page==1) {
                        getPageBar();
                        $("#table-footer").show();
                    }
                }else{
                    var str='';
                    str+="<tr><td colspan='11'>数据请求失败</td></tr>";
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
        $("#title").html("添加订单");
        $("#pop-up").show();
        $("#formlist")[0].reset();
        $(".addbtn").off().click(function(){
            if(validator("#formlist").form()){
                var data=$("#formlist").serialize();
                $.ajax({
                    type: "post",
                    url: "<?php echo url('admin/Courseform/buyadd'); ?>",
                    dataType: "json",
                    data:data,
                    success:function(data){
                        if (data.code==1) {
                            $(".pop-up").hide();
                            $("#result-msg").html(data.msg);
                            $(".result").show();
                            $("#resbtn").click(function() {
                                $(".result").hide();
                                getData(1);
                            });
                        }else {
                            $(".pop-up").hide();
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
    // 删除操作
    function del(id){
        $("#isdel").show();
        $("#sure").off().click(function () {
            $("#isdel").hide();
            $.ajax({
                url: "<?php echo url('admin/Courseform/buydelete'); ?>",
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
    //动态搜索功能
    $("#search").keyup(function () {
        $("#searchlist").html('');
        var data=$(this).val().trim();
        $.ajax({
            url: "<?php echo url('admin/Courseform/buysearch'); ?>",
            type: 'post',
            dataType: 'json',
            data: {data:data},
            success:function(data){
                if(data){
                    var str="";
                    if(data.length>5){
                        data.length=5;
                    }
                    for(var i=0;i<data.length;i++){
                        str+="<li code='"+data[i].id+"'>"+data[i].member_name+"</li>";
                    }
                    var swidth=$("#search").width()+24;
                    $("#search-msg").css("width",swidth);
                    $("#search-msg").show();
                    $("#searchlist").html(str);
                    //改变列表的颜色
                    $("#searchlist li").hover(function(){
                        $(this).css("background-color",'#e7e7e7');
                    }, function () {
                        $(this).css("background-color",'#fff');
                    })
                    $("#searchlist li").click(function () {
                        var msg=$(this).html();
                        $("#search").val(msg);
                        $("#search-msg").hide();
                    })
                }
            }
        })
    })
    window.onresize = function(){
        var swidth=$("#search").width()+24;
        $("#search-msg").css("width",swidth);
    }
    //搜索按钮点击开始搜索
    $("#search-btn").click(function () {
        var data=$("#search").val();
        $.ajax({
            url: "<?php echo url('admin/Courseform/buysearch'); ?>",
            type: 'post',
            dataType: 'json',
            data: {data:data},
            success: function (data) {
                if(data){
                    var str='';
                    for(var i=0;i<data.length;i++){
                        str+="<tr id=tr_"+data[i].id+">";
                        str+="<td><input type='checkbox' class='checkbox'code="+data[i].id+"></td>";
                        str+="<td>"+data[i].id+"</td>";
                        str+="<td>"+data[i].member_name+"</td>";
                        str+="<td>"+data[i].course_name+"</td>";
                        str+="<td>"+data[i].money+"</td>";
                        str+="<td>"+data[i].pay+"</td>";
                        str+="<td>"+data[i].member_card+"</td>";
                        str+="<td>"+data[i].coachname+"</td>";
                        str+="<td>"+data[i].create_time+"</td>";
                        str+="<td>"+data[i].operator+"</td>";
                        str+="<td><a class='fa fa-trash delete' code="+data[i].id+"></a></td>";
                        str+="</tr>";
                    }
                    str+="<tr><td colspan='11'><a  class='rehome'>返回第一页</a></td></tr>";
                    $("#tbody").html(str);
                    $("#table-footer").hide();
                    $(".delete").off().click(function(){
                        var id=$(this).attr('code');
                        del(id);//调用删除数据函数
                    });
                    $(".rehome").off().click(function(){
                        getData(1);
                    })
                }else{
                    var str='';
                    str+="<tr><td colspan='11'>数据不存在</td></tr>";
                    str+="<tr><td colspan='11'><a  class='rehome'>返回第一页</a></td></tr>";
                    $("#tbody").html(str);
                    $("#table-footer").hide();
                    $(".rehome").off().click(function(){
                        getData(1);
                    })
                }
            }
        })
    })
    //操作弹窗关闭
    $(".ccancel").click(function () {
        $("#pop-up").hide();
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
