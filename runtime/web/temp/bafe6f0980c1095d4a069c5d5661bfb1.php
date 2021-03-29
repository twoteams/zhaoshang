<?php /*a:1:{s:70:"D:\phpstudy_pro\WWW\wwwbandcom\zhaoshang\app\web\view\index\login.html";i:1616987036;}*/ ?>
<html><head>
    <meta name="Generator" content="ECSHOP v4.1.4">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="Keywords" content="">
    <meta name="Description" content="">
    <title>用户中心</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="animated_favicon.gif" type="image/gif">
    <link href="/web/default/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="/web/default/images/login_reg.css">

    <script type="text/javascript" src="/web/js/common.js"></script><script type="text/javascript" src="/web/js/user.js"></script><script type="text/javascript" src="/web/js/transport.js"></script></head><body>
<script type="text/javascript" src="/web/js/transport2.js"></script><script type="text/javascript" src="/web/js/utils.js"></script><link href="/web/default/images/ec12.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
    var process_request = "正在处理您的请求...";
</script>
<script language="javascript" src="/web/default/js/fdjs.js" type="text/javascript" charset="utf-8"></script>
<script language="javascript" src="/web/default/js/fdjs.json.js" type="text/javascript" charset="utf-8"></script>
<div class="reg_top" style="padding-top:10px"> <img src="/web/default/images/logo.gif" height="100px"></div>
<div class="clear0"></div><div class="blank"></div>
<div class="container">
    <div id="body">
        <div class="loginWrap">
            <div class="loginPic"> <img class="pic" src="/web/default/images/loginPic.jpg" alt=""> <a href="index.php" class="piclink"></a>
                <div class="loginBord">
                    <div class="loginTit"> <span class="fl">用户登录</span> <span class="fr"> <i class="grey">还没有注册账号？</i> <a href="user.php?act=register">立即注册</a></span> </div>
                    <form name="formLogin" action="<?php echo url('home/login/login'); ?>" method="post" onsubmit="return userLogin()">
                        <div class="inputGroup noticWrap">
                            <div class="inputWrap">
                                <div class="user-icon"></div>
                                <input class="inputborder" name="username" autocomplete="off" placeholder="用户名" type="text" style="border:0">
                            </div>
                        </div>
                        <div class="inputGroup noticWrap">
                            <div class="inputWrap">
                                <div class="pass-icon"></div>
                                <input class="inputborder" name="password" placeholder="密码" type="password">
                            </div>
                        </div>

                        <div class="formLine clearfix">
                            <div class="check_radio fl">
                                <input type="checkbox" value="1" name="remember" id="remember">
                                <label for="remember"> 请保存我这次的登录信息。</label>
                            </div>
                            <a href="user.php?act=get_password" class="fr"> 忘记密码?</a> </div>
                        <input type="hidden" name="act" value="act_login">
                        <input type="hidden" name="back_act" value="http://www.ecshops.com/">
                        <input class="loginbtn" name="submit" value="登 录" type="submit">
                    </form>
                </div>
                <div class="shadow_l"></div>
                <div class="shadow_r"></div>
            </div>
        </div>
        <div class="blank"></div>
    </div>
</div>







<div class="blank"></div>
<div class="footads"><img alt="广告说明" src="/web/default/images/footad.jpg"></div>

<div class="footer">
    <div class="footHelp">
        <table border="0" cellspacing="0" cellpadding="0">
            <tbody><tr>
                <td></td>
            </tr>
            </tbody></table>
    </div>


    <div class="footer_info"> © 2021-2021 1808A 二组 版权所有，并保留所有权利。  上海市徐汇区宜山路700号C1楼12层     Tel: 400-821-3016           <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&amp;uin=328894295&amp;site=qq&amp;menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:328894295:52"></a>
        <a href="http://amos.alicdn.com/getcid.aw?v=2&amp;uid=%E6%B5%8B%E8%AF%95&amp;site=cntaobao&amp;s=2&amp;groupid=0&amp;charset=utf-8" target="_blank"><img src="http://amos1.taobao.com/online.ww?v=2&amp;uid=%E6%B5%8B%E8%AF%95&amp;s=2" width="16" height="16" border="0" alt="淘宝旺旺">测试</a>
        <br>
        ICP备案证书号:<a href="http://beian.miit.gov.cn/" target="_blank">沪ICP备05002918号</a><br>
        共执行 45 个查询，用时 0.029328 秒，在线 1 人，Gzip 已禁用，占用内存 3.304 MB<br>
        <a href="http://xyunqi.com/products/ecshop?from=nav" target="_blank" style=" font-family:Verdana; font-size:11px;">Powered&nbsp;by&nbsp;<strong><span style="color: #3366FF">二组银行</span>&nbsp;<span style="color: #FF9966">v4.1.4</span></strong></a>&nbsp;<br>
        <div>
            <div class="clear10"></div>
        </div>
    </div>
    <script type="text/javascript">

        window.__Object_toJSONString = Object.prototype.toJSONString;
        delete Object.prototype.toJSONString;


    </script>
    <script type="text/javascript">

        // var show_num = [];
        //
        // layui.use(['formLogin'], function () {
        //
        //     var formLogin = layui.form,
        //         layer = layui.layer;
        //     // 登录过期的时候，跳出ifram框架
        //     if (top.location != self.location) top.location = self.location;
        //     // 进行登录操作
        //     form.on('submit(submit)', function (data) {
        //         data = data.field;
        //         if (data.username == '') {
        //             layer.msg('用户名不能为空');
        //             return false;
        //         }
        //         if (data.password == '') {
        //             layer.msg('密码不能为空');
        //             return false;
        //         }
        //
        //         $(".input-val").val('');
        //         //url，url，data,type等重要数据
        //         url ="/home/login/check";
        //         $.ajax({
        //             url,
        //             data,
        //             type:"POST",
        //             success(res){
        //                 if(res.status == 1){
        //                     layer.msg('登录成功', function () {
        //                         window.location = '/home/login/login';
        //                     });
        //                 }else{
        //                     layer.msg(res.message);
        //                     return false;
        //                 }
        //             }
        //         })
        //         return false;
        //     });
        // });
        // $(function(){
        //     // location.href  =  "http://www.baidu.com";
        //     draw(show_num);
        //     $("#canvas").on('click',function(){
        //         draw(show_num);
        //     })
        // })
        //
        //
        var process_request = "正在处理您的请求...";
        var username_empty = "- 用户名不能为空。";
        var username_shorter = "- 用户名长度不能少于 3 个字符。";
        var username_invalid = "- 用户名只能是由字母数字以及下划线组成。";
        var password_empty = "- 登录密码不能为空。";
        var password_shorter = "- 登录密码不能少于 6 个字符。";
        var confirm_password_invalid = "- 两次输入密码不一致";
        var email_empty = "- Email 为空";
        var email_invalid = "- Email 不是合法的地址";
        var agreement = "- 您没有接受协议";
        var msn_invalid = "- msn地址不是一个有效的邮件地址";
        var qq_invalid = "- QQ号码不是一个有效的号码";
        var home_phone_invalid = "- 家庭电话不是一个有效号码";
        var phone_invalid = "- 电话不是一个有效号码";
        var office_phone_invalid = "- 办公电话不是一个有效号码";
        var mobile_phone_invalid = "- 手机号码不是一个有效号码";
        var msg_un_blank = "* 用户名不能为空";
        var msg_un_length = "* 用户名最长不得超过7个汉字";
        var msg_un_format = "* 用户名含有非法字符";
        var msg_un_registered = "* 用户名已经存在,请重新输入";
        var msg_can_rg = "* 可以注册";
        var msg_email_blank = "* 邮件地址不能为空";
        var msg_email_registered = "* 邮箱已存在,请重新输入";
        var msg_email_format = "* 邮件地址不合法";
        var msg_blank = "不能为空";
        var no_select_question = "- 您没有完成密码提示问题的操作";
        var passwd_balnk = "- 密码中不能包含空格";
        var username_exist = "用户名 %s 已经存在";
    </script>
</div></body></html>