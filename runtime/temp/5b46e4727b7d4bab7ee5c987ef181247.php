<?php /*a:2:{s:77:"/www/users/HA630745/WEB/yahoh/application/admin/view/Memberform/mcardmsg.html";i:1573711019;s:79:"/www/users/HA630745/WEB/yahoh/application/admin/view/Memberform/jsmcardmsg.html";i:1571627458;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>会员卡操作</title>
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
                        <h5>会员卡操作</h5>
                    </div>
                    <div class="ibox-content">
                        <div class="">
                           <div class="cardname clearfix">
                               <div class="form-group col-md-6 clearfix">
                                   <label class="col-sm-4 control-label" for="member_card">请输入会员卡号:</label>
                                   <div class="col-sm-6">
                                       <input type="text" class="form-control" name="membercard" id="membercard">
                                   </div>
                               </div>
                               <div class="form-group col-md-1 clearfix">
                                   <button type="button" class="btn btn-primary select" id="select">查询</button>
                               </div>
                               <div class="form-group col-sm-5 clearfix">
                                   <div class="fr">
                                       <button class="btn btn-danger" type="button" id="loss">挂失</button>
                                       <button class="btn btn-primary" type="button" id="replen">换卡</button>
                                       <button class="btn btn-success" type="button" id="renewal">续卡</button>
                                       <button class="btn btn-warning" type="button" id="drawal">退卡</button>
                                   </div>
                               </div>
                           </div>
                            <hr>
                            <form accept-charset="utf-8" class="clearfix" id="formdata">
                                <input type="hidden" name="id" id="showid">
                                <div class="form-group col-sm-4 clearfix">
                                    <label class="col-sm-6 control-label">会员卡号：</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="member_card" id="member_card" disabled>
                                    </div>
                                </div>
                                <div class="form-group col-sm-4 clearfix">
                                    <label class="col-sm-6 control-label">会员姓名：</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="member_name" id="member_name" disabled>
                                    </div>
                                </div>
                                <div class="form-group col-sm-4 clearfix">
                                    <label class="col-sm-6 control-label">卡状态：</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control"  id="issue" disabled>
                                    </div>

                                </div>
                                <div class="form-group col-sm-4 clearfix">
                                    <label class="col-sm-6 control-label">邮箱：</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="email" id="email" disabled>
                                    </div>
                                </div>
                                <div class="form-group col-sm-4 clearfix">
                                    <label class="col-sm-6 control-label">性别：</label>
                                    <div class="col-sm-6">
                                        <label for="sex1">男</label>
                                        <i class="input-img check_bg check_bg_check">
                                            <input class="sex el" value="男" type="radio" name="sex" id="sex1"  disabled>
                                        </i>
                                        <label for="sex2">女</label>
                                        <i class="input-img check_bg">
                                            <input class="sex el" value="女" type="radio" name="sex" id="sex2" disabled>
                                        </i>
                                    </div>
                                </div>
                                <div class="form-group col-sm-4 clearfix">
                                    <label class="col-sm-6 control-label">地址：</label>
                                    <div class="col-sm-6">
                                        <select name="provinceid"  class="form-control" disabled>
                                            <?php foreach($list as $k=>$v): ?>
                                            <option value="<?php echo htmlentities($v['id']); ?>" class="province"><?php echo htmlentities($v['province']); ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-sm-4 clearfix">
                                    <label class="col-sm-6 control-label">会籍顾问：</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="consultant" id="consultant" disabled>
                                    </div>
                                </div>
                                <div class="form-group col-sm-4 clearfix">
                                    <label class="col-sm-6 control-label">身份证号码：</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="identity_card" id="identity_card" disabled>
                                    </div>
                                </div>
                                <div class="form-group col-sm-4 clearfix">
                                    <label class="col-sm-6 control-label">会员卡类型：</label>
                                    <div class="col-sm-6">
                                        <select name="card_type"  class="form-control" id="card_type" disabled>
                                            <?php foreach($data as $k=>$v): ?>
                                            <option value="<?php echo htmlentities($v['id']); ?>" class="card_type"><?php echo htmlentities($v['card_type']); ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-sm-4 clearfix">
                                    <label class="col-sm-6 control-label">付款金额：</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="consultant" id="pay_money" disabled>
                                    </div>
                                </div>
                                <div class="form-group col-sm-4 clearfix">
                                    <label class="col-sm-6 control-label">付款方式：</label>
                                    <div class="col-sm-6">
                                        <select name="pay" id="pay_method" class="form-control" disabled>
                                            <option value="现金支付" class="pay_method">现金支付</option>
                                            <option value="信用卡支付" class="pay_method">信用卡支付</option>
                                            <option value="微信支付" class="pay_method">微信支付</option>
                                            <option value="支付宝支付" class="pay_method">支付宝支付</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-sm-4 clearfix">
                                    <label class="col-sm-6 control-label">到期时间：</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="consultant" id="time" disabled>
                                    </div>
                                </div>
                                <div class="form-group col-sm-4 clearfix">
                                    <label class="col-sm-6 control-label">电话号码：</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="phone" id="phone" disabled>
                                    </div>
                                </div>
                            </form>
                        </div>
                </div>
            </div>
        </div>
        <div class="isdel" id="isdel">
            <p id="isdel-msg">确定要执行该操作吗？</p>
            <button type="button" class="btn btn-primary cancel" id="cancel">取消</button>
            <button type="button" class="btn btn-danger" id="sure">确定</button>
        </div>
        <div class="result" id="result">
            <p id="result-msg"></p>
            <button type="button" class="btn btn-primary" id="resbtn">确定</button>
        </div>
    </div>
    <div class="normalbox loss" id="normalbox">
        <div class="addbox">
            <div class="ibox-title">
                <h5 id="title"></h5>
            </div>
            <form accept-charset="utf-8" id="formcheck">
                <input type="hidden" name="id" class="updateid">
                <div class="form-group clearfix">
                    <label class="col-sm-4 control-label">会员卡号：</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control"  id="m_c" disabled>
                    </div>
                </div>
                <div class="form-group clearfix">
                    <label class="col-sm-4 control-label">会员密码：</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="password" autofocus>
                    </div>
                    <div class="col-sm-1 losscheckfail">
                        <i class="fa fa-times-circle-o icon2"></i>
                    </div>
                </div>
                <div class="form-group clearfix">
                    <div class="col-sm-6 col-sm-offset-3 fr">
                        <button class="btn btn-primary ccance" type="button" >取消</button>
                        <button class="btn btn-danger" type="button" id="nsend">提交</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="pop-up" id="pop-up">
        <div class="addbox">
            <div class="ibox-title">
                <h5>换卡操作</h5>
            </div>
            <form accept-charset="utf-8" id="formlist">
                <input type="hidden" name="id" class="updateid">
                <div class="form-group clearfix">
                    <label class="col-sm-4 control-label">原会员卡号：</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="member_c" id="member_c" disabled>
                    </div>
                </div>
                <div class="form-group clearfix">
                    <label class="col-sm-4 control-label">会员密码：</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="pwd" id="pwd" autofocus>
                    </div>
                    <div class="col-sm-1 replensuccess">
                        <i class="fa fa-check-circle-o icon1"></i>
                    </div>
                    <div class="col-sm-1 replenfail">
                        <i class="fa fa-times-circle-o icon2"></i>
                    </div>
                </div>
                <div class="form-group clearfix">
                    <label class="col-sm-4 control-label">新会员卡号</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="member_card" id="new_card" disabled>
                    </div>
                </div>
                <div class="form-group clearfix">
                    <div class="col-sm-4 col-sm-offset-3 fr">
                        <button class="btn btn-primary ccan" type="button" >取消</button>
                        <button class="btn btn-danger" type="button" id="send">提交</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="cardpro" id="cardpro-up">
        <div class="addbox">
            <div class="ibox-title">
                <h5>续卡操作</h5>
            </div>
            <form accept-charset="utf-8" id="formmsg">
                <input type="hidden" name="id" id="mid">
                <input type="hidden" name="operator" value="<?php echo htmlentities(app('request')->session('admin.adminname')); ?>">
                <div class="form-group col-md-6 clearfix">
                    <label class="col-sm-4 control-label">卡号</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="mcard" disabled>
                        <input type="hidden" class="form-control" name="member_card" id="mcard2">
                        <input type="hidden" class="form-control" name="member_name" id="membername2">
                    </div>
                </div>
                <div class="form-group col-md-6 clearfix">
                    <label class="col-sm-4 control-label">卡类型</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="cardtype" disabled>
                        <input type="hidden" class="form-control" name="card_type" id="cardtype2">
                    </div>
                </div>
                <div class="form-group col-md-6 clearfix">
                    <label class="col-sm-4 control-label">付款金额</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="money" id="money" disabled>
                    </div>
                </div>
                <div class="form-group col-md-6 clearfix">
                    <label class="col-sm-4 control-label">付款方式</label>
                    <div class="col-sm-8">
                        <select name="pay" id="pay" class="form-control" disabled>
                            <option value="现金支付" class="payname">现金支付</option>
                            <option value="信用卡支付" class="payname">信用卡支付</option>
                            <option value="微信支付" class="payname">微信支付</option>
                            <option value="支付宝支付" class="payname">支付宝支付</option>
                        </select>
                    </div>
                </div>
                <div class="form-group col-md-6 clearfix">
                    <label class="col-sm-4 control-label">原到时间</label>
                    <div class="col-sm-8">
                        <input type="date" class="form-control" id="e_time" disabled>
                        <input type="hidden" class="form-control" name="e_time" id="e_time2">
                    </div>
                </div>
                <div class="form-group m_pwd col-md-6 clearfix">
                    <label class="col-sm-4 control-label">会员密码</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="pwd" id="pwdd" autofocus>
                    </div>
                    <div class="renewalsuccess">
                        <i class="fa fa-check-circle-o icon1"></i>
                    </div>
                    <div class="renewalfail">
                        <i class="fa fa-times-circle icon2"></i>
                    </div>
                </div>
                <div class="form-group col-md-6 clearfix">
                    <label class="col-sm-4 control-label">新到时间</label>
                    <div class="col-sm-8">
                        <input type="date" class="form-control" name="end_time" id="end_time" disabled>
                    </div>
                </div>
                <div class="form-group col-md-12 clearfix">
                    <div class="col-sm-4 col-sm-offset-3 fr">
                        <button class="btn btn-primary ccancel" type="button" >取消</button>
                        <button class="btn btn-danger" type="button" id="sendre">提交</button>
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
<script src="../../../static/common/formate.js"></script>
<script>
    //查询会员显示数据
    $("#select").off().click(function () {
        var member_card=$("#membercard").val();
        $.ajax({
            type:"post",
            url:"<?php echo url('admin/Memberform/showdata'); ?>",
            dataType:"json",
            data:{member_card:member_card},
            success:function(data){
                if (data) {
                    $("#showid").val(data.id);
                    $("#member_card").val(data.member_card);
                    $("#member_name").val(data.member_name);
                    $("#email").val(data.email);
                    $("#issue").val(data.issue);
                    $(".sex").each(function () {
                        if(data.sex==$(this).val()){
                            $(this).prop('checked','checked');
                        }
                    });
                    $("#phone").val(data.phone);
                    $("#pay_money").val(data.money);
                    $("#time").val(data.end_time);
                    $(".pay_method").each(function () {
                        if(data.pay==$(this).val()){
                            $(this).prop('selected','selected');
                        }
                    });
                    $(".province").each(function () {
                        if(data.provinceid==$(this).val()){
                            $(this).prop('selected','selected');
                        }
                    });
                    $(".card_type").each(function () {
                        if(data.card_type==$(this).val()){
                            $(this).prop('selected','selected');
                        }
                    });
                    $("#consultant").val(data.consultant);
                    $("#identity_card").val(data.identity_card);
                }else{
                    $("#result-msg").html("该用户不存在");
                    $(".result").show();
                    $("#resbtn").click(function() {
                        $(".result").hide();
                    })
                }
            }
        })
    })
    //挂失操作
    $("#loss").off().click(function () {
        $(".losscheckfail").hide();
        $("#formcheck")[0].reset();
        $("#isdel").show();
        $("#sure").off().click(function () {
            $("#isdel").hide();
            $("#title").html("挂失操作");
            var cardname=$("#member_card").val();
            $("#m_c").val(cardname);
            $("#normalbox").show();
            $("#nsend").click(function () {
                var id=$("#showid").val();
                var pwd=$(password).val();
                var result=checkp(id,pwd);
                if(result){
                    $.ajax({
                        url: "<?php echo url('admin/Memberform/loss'); ?>",
                        type: 'post',
                        dataType: 'json',
                        data: {id:id},
                        success:function(data){
                            if (data) {
                                $("#normalbox").hide();
                                $("#result-msg").html("操作成功");
                                $("#result").show();
                            }else{
                                $("#normalbox").hide();
                                $("#result-msg").html("操作失败");
                                $("#result").show();
                            }
                        }
                    })
                }else{
                    $(".losscheckfail").show();
                }
            })
        })
    })
    //换卡操作
    $("#replen").off().click(function () {
        $(".replensuccess").hide();
        $(".replenfail").hide();
        $("#isdel").show();
        $("#sure").off().click(function () {
            $("#isdel").hide();
            var data=$("#member_card").val();
            $("#member_c").val(data);
            var id=$("#showid").val();
            $(".updateid").val(id);
            $("#pop-up").show();
            //验证密码是否正确
            $("#pwd").blur(function () {
                var pwd=$(this).val();
                var result=checkp(id,pwd);
                if(result){
                    $(".replensuccess").show();
                    $("#new_card").removeAttr("disabled");
                }else{
                    $("#new_card").attr("disabled","disabled");
                    $(".replenfail").show();
                }
            })
            $("#send").off().click(function () {
                if($("#new_card").attr("disabled")){
                    //未验证密码进行提交的提示
                    $("#result-msg").html("该操作不可用");
                    $("#result").show();
                }else {
                    var data = $("#formlist").serialize();
                    $.ajax({
                        url: "<?php echo url('admin/Memberform/replen'); ?>",
                        type: 'post',
                        dataType: 'json',
                        data: data,
                        success: function (data) {
                            if (data.code == 1) {
                                $("#pop-up").hide();
                                $("#result-msg").html(data.msg);
                                $("#result").show();
                            } else {
                                $("#pop-up").hide();
                                $("#result-msg").html(data.msg);
                                $("#result").show();
                            }
                        }
                    })
                }
            })
        })
    })
    //退卡即删除
    $("#drawal").off().click(function () {
        $("#isdel").show();
        $("#sure").off().click(function () {
            $("#isdel").hide();
            $("#title").html("退卡操作");
            var cardname=$("#member_card").val();
            $("#m_c").val(cardname);
            $("#normalbox").show();
            $("#nsend").click(function () {
                var id=$("#showid").val();
                var pwd=$(password).val();
                var result=checkp(id,pwd);
                if(result){
                    $.ajax({
                        url: "<?php echo url('admin/Memberform/delete'); ?>",
                        type: 'post',
                        dataType: 'json',
                        data: {id:id},
                        success:function(data){
                            if (data.code==1) {
                                $("#normalbox").hide();
                                $("#result-msg").html("操作成功");
                                $("#result").show();
                            }else{
                                $("#normalbox").hide();
                                $("#result-msg").html("操作失败");
                                $("#result").show();
                            }
                        }
                    })
                }else{
                    $(".losscheckfail").show();
                }
            })
        })
    })
    //续卡操作
    $("#renewal").off().click(function () {
        $(".renewalsuccess").hide();
        $(".renewalfail").hide();
        $("#isdel").show();
        $("#sure").off().click(function () {
            $("#isdel").hide();
            //显示原到期时间
            var time=$("#time").val();
            $("#e_time").val(time);
            $("#e_time2").val(time);
            //显示会员卡类型
            var type=$("#card_type").val();
            $("#cardtype").val(type);
            $("#cardtype2").val(type);
            //记录会员名字信息
            var name=$("#member_name").val();
            $("#membername2").val(name);
            //显示会员卡号
            var card=$("#member_card").val();
            $("#mcard").val(card);
            $("#mcard2").val(card);
            //显示弹窗
            $("#cardpro-up").show();
            //验证密码是否正确
            $("#pwdd").blur(function () {
                var id=$("#showid").val();
                var pwd=$(this).val();
                var result=checkp(id,pwd);
                if(result){
                    $("#money").removeAttr("disabled");
                    $("#pay").removeAttr("disabled");
                    $("#end_time").removeAttr("disabled");
                    $(".renewalsuccess").show();
                }else{
                    $("#money").attr("disabled","disabled");
                    $("#pay").attr("disabled","disabled");
                    $("#end_time").attr("disabled","disabled");
                    $(".renewalfail").show();
                }
            })
            //续卡操作
            $("#sendre").off().click(function () {
                if($("#money").attr("disabled")){
                    //未验证密码进行提交的提示
                    $("#result-msg").html("该操作不可用");
                    $("#result").show();
                }else{
                    var id=$("#showid").val();
                    $("#mid").val(id);
                    var data=$("#formmsg").serialize();
                    renewal(data);
                }
            })
        })
    })
    //会员卡管理验证密码操作
    function checkp(id,pwd){
        var flag=true;
        $.ajax({
            url: "<?php echo url('admin/Memberform/checkpw'); ?>",
            type: 'post',
            dataType: 'json',
            async:false,
            data:{
                id:id,
                pwd:pwd
            },
            success: function (data) {
                if(data){
                    flag=true;
                }else{
                    flag=false;
                }
            }
        })
        if(flag){
            return 1;
        }else{
            return 0;
        }
    }
    //续卡操作函数
    function renewal(data){
        $.ajax({
            url: "<?php echo url('admin/Memberform/renewal'); ?>",
            type: 'post',
            dataType: 'json',
            data:data,
            success: function (data) {
                if(data){
                    $("#cardpro-up").hide();
                    $("#result-msg").html(data.msg);
                    $("#result").show();
                }else{
                    $("#cardpro-up").hide();
                    $("#result-msg").html(data.msg);
                    $("#result").show();
                }
            }
        })
    }
    //是否删除弹窗关闭
    $("#cancel").click(function () {
        $("#isdel").hide();
    })
    //操作弹窗关闭
    $(".ccance").click(function () {
        $(".normalbox").hide();
    })
    $(".ccan").click(function () {
        $(".pop-up").hide();
    })
    $(".ccancel").click(function () {
        $(".cardpro").hide();
    })
    // 结果弹窗关闭
    $("#resbtn").click(function () {
        $("#result").hide();
        $("#resbtn").click(function() {
            $("#formdata")[0].reset();
        });
    })
</script>
</body>
</html>
