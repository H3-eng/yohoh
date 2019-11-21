<?php /*a:1:{s:75:"/www/users/HA630745/WEB/yahoh/application/admin/view/Newsform/activity.html";i:1571630926;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>会员活动资讯</title>
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
<div class="wrapper wrapper-content animated fadeInRight">
	<div class="row">
		<div class="col-sm-12">
			<div class="ibox float-e-margins">
				<div class="ibox-title">
					<h5>会员活动资讯</h5>
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
							<a button type="button" class="btn btn-success" href="<?php echo url('admin/newsform/activityadd'); ?>">添加活动</a>
						</div>
						<div class="searchgroup fr col-sm-3">
							<div class="input-group">
								<div class="search-msg" id="search-msg">
									<ul class="searchlist" id="searchlist"></ul>
								</div>
								<input type="text" placeholder="请输入活动标题" class="input-sm form-control" id="search" autocomplete="off">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-sm btn-primary search-btn" id="search-btn">搜索</button>
                                </span>
							</div>
						</div>
					</div>
					<table class="table table-bordered table-hover dataTables-example">
						<thead>
						<tr>
							<th></th>
							<th>编号</th>
							<th>作者</th>
							<th>修改人</th>
							<th>标题</th>
							<th>关键字</th>
							<th>浏览次数</th>
							<th>状态</th>
							<th>加入时间</th>
							<th>更新时间</th>
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
</body>
<!-- 基础文件 -->
<script src="../../../static/common/hplus/js/jquery.min.js?v=2.1.4"></script>
<script src="../../../static/common/hplus/js/bootstrap.min.js?v=3.3.6"></script>
<!-- H+文件 -->
<script src="../../../static/common/hplus/js/content.min.js?v=1.0.0"></script>
<!-- 分页文件 -->
<script src="../../../static/common/page.js"></script>
<script>
	var totalNum,pageSize,totalPage;
	//页面加载时动态显示数据
	function getData(page){
		$.ajax({
			type:'get',
			url:"<?php echo url('admin/Newsform/activityshow'); ?>",
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
						str+="<td>"+data[i].author+"</td>";
						str+="<td>"+data[i].updatename+"</td>";
						str+="<td>"+data[i].title.substr(0,8)+"</td>";
						str+="<td>"+data[i].keyword+"</td>";
						str+="<td>"+data[i].hits+"</td>";
						str+="<td>"+data[i].issue+"</td>";
						str+="<td>"+data[i].create_time+"</td>";
						str+="<td>"+data[i].update_time+"</td>";
						str+="<td><a class='fa fa-pencil update' code="+data[i].id+" href='activityupdate/id/"+data[i].id+"'></a>";
						str+="<a class='fa fa-trash delete' code="+data[i].id+"></a></td>";
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
	// 删除操作
	function del(id){
		$("#isdel").show();
		$("#sure").off().click(function () {
			$("#isdel").hide();
			$.ajax({
				url: "<?php echo url('admin/Newsform/adelete'); ?>",
				type: 'post',
				dataType: 'json',
				data: {id:id},
				success:function(data){
					if (data.code==1) {
						$("#result-msg").html(data.msg);
						$("#result").show();
						$("#resbtn").click(function() {
							$("#result").hide();
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
	$("#deletesome").off().click(function(){
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
				url: "<?php echo url('admin/Newsform/adeletesome'); ?>",
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
	//动态搜索功能
	$("#search").off().keyup(function () {
		$("#searchlist").html('');
		var data=$(this).val().trim();
		$.ajax({
			url: "<?php echo url('admin/Newsform/asearch'); ?>",
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
						str+="<li code='"+data[i].id+"'>"+data[i].title.substr(0,5)+"</li>";
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
			url: "<?php echo url('admin/Newsform/asearch'); ?>",
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
						str+="<td>"+data[i].author+"</td>";
						str+="<td>"+data[i].updatename+"</td>";
						str+="<td>"+data[i].title+"</td>";
						str+="<td>"+data[i].keyword+"</td>";
						str+="<td>"+data[i].hits+"</td>";
						str+="<td>"+data[i].issue+"</td>";
						str+="<td>"+data[i].create_time+"</td>";
						str+="<td>"+data[i].update_time+"</td>";
						str+="<td><a class='fa fa-pencil update' code='"+data[i].id+"'href='activityUpdate/id/"+data[i].id+"'></a>";
						str+="<a class='fa fa-trash delete' code='"+data[i].id+"'></a></td>";
						str+="</tr>";
					}
					str+="<tr><td colspan='11'><a  class='rehome'>返回第一页</a></td></tr>";
					$("#tbody").html(str);
					$("#table-footer").hide();
					$(".rehome").off().click(function(){
						getData(1);
					})
					$(".delete").off().click(function(){
						var id=$(this).attr('code');
						del(id);//调用删除数据函数
					});
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
	//是否删除弹窗关闭
	$("#cancel").click(function () {
		$("#isdel").hide();
	})
	// 结果弹窗关闭
	$("#resbtn").click(function () {
		$("#result").hide();
	})
</script>
</html>
