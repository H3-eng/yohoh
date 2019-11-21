<?php /*a:2:{s:80:"/www/users/HA630745/WEB/yahoh/application/admin/view/Courseform/pcoursebook.html";i:1571630114;s:82:"/www/users/HA630745/WEB/yahoh/application/admin/view/Courseform/jspcoursebook.html";i:1571630059;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>私教课程预订列表</title>
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
                    <h5>私教课程预订列表</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="row">
                        <div class="searchgroup fr col-sm-3">
                            <div class="input-group">
                                <div class="search-msg" id="search-msg">
                                    <ul class="searchlist" id="searchlist"></ul>
                                </div>
                                <input type="text" placeholder="请输入用户名名称" class="input-sm form-control" id="search" autocomplete="off">
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
                                <th>用户姓名</th>
                                <th>电话号码</th>
                                <th>电子邮箱</th>
                                <th>课程名称</th>
                                <th>用户身份</th>
                                <th>联系人</th>
                                <th>状态</th>
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
    <div class="result" id="result">
        <p id="result-msg"></p>
        <button type="button" class="btn btn-primary" id="resbtn">确定</button>
    </div>
    <div class="isdel" id="isdel">
        <p id="isdel-msg">确定要删除吗？</p>
        <button type="button" class="btn btn-primary cancel" id="cancel">取消</button>
        <button type="button" class="btn btn-danger" id="sure">确定</button>
    </div>
</div>
<div class="normalbox" id="normalbox">
    <div class="addbox">
        <div class="ibox-title">
            <h5 id="title"></h5>
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
            <div class="form-group col-sm-11 clearfix">
                <div class="fr">
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
<script src="../../../static/common/hplus/js/content.min.js?v=1.0.0"></script>
<!-- 分页文件 -->
<script src="../../../static/common/page.js"></script>
<script>
    var totalNum,pageSize,totalPage;
    //页面加载时动态显示数据
    function getData(page){
        $.ajax({
            type:'get',
            url:"<?php echo url('admin/Courseform/pcoursebookshow'); ?>",
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
                        str+="<td>"+data[i].username+"</td>";
                        str+="<td>"+data[i].phone+"</td>";
                        str+="<td>"+data[i].email+"</td>";
                        str+="<td>"+data[i].course_name+"</td>";
                        if(data[i].member_id==0){
                            str+="<td>会员</td>";
                        }else{
                            str+="<td>非会员</td>";
                        }
                        str+="<td>"+data[i].chargename+"</td>";
                        str+="<td>"+data[i].issue+"</td>";
                        str+="<td>"+data[i].operator+"</td>";
                        str+="<td><a class='fa fa-pencil update' code="+data[i].id+"></a><a  class='fa fa-trash delete' code="+data[i].id+"></a></td>";
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
                        updateshow(id);//调用修改数据函数
                    });
                    //获取分页样式
                    if (page==1) {
                        getPageBar();
                        $("#table-footer").show();
                    }
                }else{
                    var str='';
                    str+="<tr><td colspan='10'>数据请求失败</td></tr>";
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
    function updateshow(id){
        $("#formlist")[0].reset();
        $(".updateid").val(id);
        $("#title").html("修改联系人");
        $.ajax({
            type:"post",
            url:"<?php echo url('admin/Courseform/pbookupdateshow'); ?>",
            dataType:"json",
            data:{id:id},
            success:function(data){
                if (data) {
                    $("#chargename").val(data.chargename);
                    $("#normalbox").show();
                    $(".updatebtn").off().click(function(){
                        update();
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
            url:"<?php echo url('admin/Courseform/pbookupdate'); ?>",
            dataType:"json",
            data:data,
            success:function(data){
                if (data.code==1) {
                    $("#normalbox").hide();
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
                    $("#normalbox").hide();
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
                url: "<?php echo url('admin/Courseform/pbookdelete'); ?>",
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
    $("#search").off().keyup(function () {
        $("#searchlist").html('');
        var data=$(this).val().trim();
        $.ajax({
            url: "<?php echo url('admin/Courseform/pbooksearch'); ?>",
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
                        str+="<li code='"+data[i].id+"'>"+data[i].username+"</li>";
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
    $("#search-btn").off().click(function () {
        var data=$("#search").val();
        $.ajax({
            url: "<?php echo url('admin/Courseform/pbooksearch'); ?>",
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
                        str+="<td>"+data[i].username+"</td>";
                        str+="<td>"+data[i].phone+"</td>";
                        str+="<td>"+data[i].email+"</td>";
                        str+="<td>"+data[i].course_name+"</td>";
                        if(data[i].member_id==0){
                            str+="<td>会员</td>";
                        }else{
                            str+="<td>非会员</td>";
                        }
                        str+="<td>"+data[i].chargename+"</td>";
                        str+="<td>"+data[i].issue+"</td>";
                        str+="<td>"+data[i].operator+"</td>";
                        str+="<td><a class='fa fa-pencil update' code="+data[i].id+"></a><a  class='fa fa-trash delete' code="+data[i].id+"></a></td>";
                        str+="</tr>";
                    }
                    str+="<tr><td colspan='13'><a  class='rehome'>返回第一页</a></td></tr>";
                    $("#tbody").html(str);
                    $("#table-footer").hide();
                    $(".rehome").off().click(function(){
                        getData(1);
                    })
                }else{
                    var str='';
                    str+="<tr><td colspan='10'>数据不存在</td></tr>";
                    str+="<tr><td colspan='10'><a  class='rehome'>返回第一页</a></td></tr>";
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
        $("#normalbox").hide();
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
