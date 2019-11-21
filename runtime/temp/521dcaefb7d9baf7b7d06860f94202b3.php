<?php /*a:2:{s:76:"/www/users/HA630745/WEB/yahoh/application/admin/view/Areaform/areaorder.html";i:1571624724;s:78:"/www/users/HA630745/WEB/yahoh/application/admin/view/Areaform/jsareaorder.html";i:1571624781;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>公有场地预约记录</title>
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
                    <h5>公有场地预约记录</h5>
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
                                <input type="text" placeholder="请输入会员名称" class="input-sm form-control" id="search" autocomplete="off">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-sm btn-primary earch-btn" id="search-btn">搜索</button>
                                </span>
                            </div>
                        </div>
                    </div>
                    <table class="table table-striped table-bordered table-hover dataTables-example">
                        <thead>
                        <tr>
                            <th></th>
                            <th>编号</th>
                            <th>订单号</th>
                            <th>姓名</th>
                            <th>总价格</th>
                            <th>下单时间</th>
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
</div>
<script src="../../../static/common/hplus/js/jquery.min.js?v=2.1.4"></script>
<script src="../../../static/common/hplus/js/bootstrap.min.js?v=3.3.6"></script>
<script src="../../../static/common/hplus/js/content.min.js?v=1.0.0"></script>
<script src="../../../static/common/page.js"></script>
<script>
    var totalNum,pageSize,totalPage;
    function getData(page){
        $.ajax({
            type:'get',
            url:"<?php echo url('admin/Areaform/areaordershow'); ?>",
            data:{page:page},
            dataType:"json",
            success:function(data) {
                if (data) {
                    totalNum = data[0].totalNum;//总记录数
                    pageSize = data[0].pageSize;//每页数量
                    totalPage = data[0].totalPage;//总页数
                    var str = '';
                    for (var i = 1; i < data.length; i++) {
                        str += "<tr id=tr_" + data[i].id + ">";
                        str += "<td><input type='checkbox' class='checkbox'code=" + data[i].id + "></td>";
                        str += "<td>" + data[i].id + "</td>";
                        str += "<td>" + data[i].order_id + "</td>";
                        str += "<td>" + data[i].username + "</td>";
                        str += "<td>" + data[i].money + "</td>";
                        str += "<td>" + data[i].create_time + "</td>";
                        str += "<td><a href='showorder?id="+ data[i].order_id +"' class='look' code='" + data[i].order_id +"'>查看详情</a></td>";
                        str += "</tr>";
                    }
                    $("#tbody").html(str);
                    var datacount = totalNum;
                    $("#datacount").html(datacount);
                    //获取分页样式
                    if (page == 1) {
                        getPageBar();
                        $("#table-footer").show();
                    }
                } else {
                    var str = '';
                    str += "<tr><td colspan='7'>数据请求失败</td></tr>";
                    $("#tbody").html(str);
                    $("#table-footer").hide();
                }
            }
        })
    }
    $(function(){
        getData(1);
    })
    //动态搜索功能
    $("#search").off().keyup(function () {
        $("#searchlist").html('');
        var data=$(this).val().trim();
        $.ajax({
            url: "<?php echo url('admin/Areaform/ordersearch'); ?>",
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
                    $("#searchlist").html(str);
                    $("#search-msg").show();
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
            url: "<?php echo url('admin/Areaform/ordersearch'); ?>",
            type: 'post',
            dataType: 'json',
            data: {data:data},
            success: function (data) {
                if(data){
                    var str='';
                    for(var i=0;i<data.length;i++){
                        str += "<tr id=tr_" + data[i].id + ">";
                        str += "<td><input type='checkbox' class='checkbox'code=" + data[i].id + "></td>";
                        str += "<td>" + data[i].id + "</td>";
                        str += "<td>" + data[i].order_id + "</td>";
                        str += "<td>" + data[i].username + "</td>";
                        str += "<td>" + data[i].money + "</td>";
                        str += "<td>" + data[i].create_time + "</td>";
                        str += "<td><a href='showorder?id="+ data[i].order_id +"' class='look' code='" + data[i].order_id +"'>查看详情</a></td>";
                        str += "</tr>";
                    }
                    str+="<tr><td colspan='7'><a class='rehome'>返回第一页</a></td></tr>";
                    $("#tbody").html(str);
                    $("#table-footer").hide();
                    $(".rehome").off().click(function(){
                        getData(1);
                    })
                }else{
                    var str='';
                    str+="<tr><td colspan='7'>数据不存在</td></tr>";
                    str+="<tr><td colspan='7'><a  class='rehome'>返回第一页</a></td></tr>";
                    $("#tbody").html(str);
                    $("#table-footer").hide();
                    $(".rehome").off().click(function(){
                        getData(1);
                    })
                }
            }
        })
    })
</script>
</body>
</html>
