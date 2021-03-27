<?php /*a:1:{s:56:"D:\MajorSix\www\zhaoshang\app\web\view\index\create.html";i:1616745443;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>二组银行信用卡-在线申请首页</title>
    <link rel="stylesheet" href="https://ccclub.cmbchina.com/CrdCardApply/css/header.css">
    <link rel="stylesheet" href="https://ccclub.cmbchina.com/CrdCardApply/css/common.css">
    <script src="https://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
</head>
<body>
<div class="header">
    <div class="headertop">
        <span style="width:60px;"><a href="http://www.cmbchina.com/" target="_blank">一网通主站</a></span>
        <span style="color:#dedede; width:8px;">|</span>
        <span><a href="http://creditcard.cmbchina.com/" target="_blank">信用卡网站</a></span>
        <ul>
            <li><a href="http://map.cmbchina.com/" target="_blank">营业网点</a></li>

            <li class="gap">|</li>
            <li><a href="http://career.cmbchina.com/cmbcareer/" target="_blank">加入我们</a></li>
            <li class="clearfloat"></li>
        </ul>
        <div class="clearfloat"></div>
    </div>
    <div class="headerlogo">
        <a href="http://www.cmbchina.com/" target="_blank" style="text-decoration:none; font-size:0;">
            <img alt="logo" src="/web/images/banner.png" width="437px" height="95px" border="0"></a>
    </div>
    <input name="Header1$hidBCC" type="hidden" id="Header1_hidBCC" value="Y">
    <input name="Header1$hidBaseMCAUrl" type="hidden" id="Header1_hidBaseMCAUrl" value="https://ccclub.cmbchina.com/mca/MPreContract.aspx">
    <input name="Header1$hidBasePCAUrl" type="hidden" id="Header1_hidBasePCAUrl" value="http://ccclub.cmbchina.com/pca/PPreContract.aspx">
    <script type="text/javascript">
        if ("Y" == document.getElementById("Header1_hidBCC").value) {
            var winsearch = location.search;
            if (null == winsearch || undefined == winsearch) { winsearch = ""; }
            var bccbasemcaurl = document.getElementById("Header1_hidBaseMCAUrl").value, bccbasepcaurl = document.getElementById("Header1_hidBasePCAUrl").value;
            if (/AppleWebKit.*Mobile/i.test(navigator.userAgent) || (/MIDP|SymbianOS|NOKIA|SAMSUNG|LG|NEC|TCL|Alcatel|BIRD|DBTEL|Dopod|PHILIPS|HAIER|LENOVO|MOT-|Nokia|SonyEricsson|SIE-|Amoi|ZTE/.test(navigator.userAgent))) {
                //不跳转pad
                //if (/iPad/i.test(navigator.userAgent))
                //{
                //    winsearch = winsearch.toLowerCase().replace("cardsel=", "CardID=");
                //    window.location.href = bccbasepcaurl + winsearch;
                //}
                //else
                //{
                window.location.href = bccbasemcaurl + winsearch;
                //}
            }
        }
    </script>
</div>
<div class="maincon">
    <div class="innernav">
        <span class="selstep1">填写基本信息</span>
        <span class="stepgap"></span>
        <span class="step2">完善个人信息并提交</span>
        <div class="clear"></div>
    </div>
    <div id="cardactivityp" class="homegift">
        新户刷卡达标送宝可梦周边
    </div>
    <div style="margin: 10px 0 0 200px;">
        <div class="tbcon" style="overflow:visible;">
            <div class="tbconcell">
                <div class="tdleft">您正在申请的是：</div>
                <div class="tdmid" style="font-weight:bold; color:#333;"><span id="lbCardName">宝可梦粉丝卡家族款</span></div>
                <div class="clear"></div>
            </div>
            <form action="" method="post">
                <div id="part1">
                    <div class="tbconcell">
                        <div class="tdleft"><span>*</span>姓名：</div>
                        <div class="tdmid"><input name="name" type="text" id="name" class="tbinput" maxlength="14" placeholder="请与证件一致"></div>
                        <div class="tdright"><span id="stxbName"></span></div>
                        <div class="clear"></div>
                    </div>
                    <div class="tbconcell">
                        <div class="tdleft"><span>*</span>身份证号码：</div>
                        <div class="tdmid"><input name="cardid" type="text" id="txbCardId" class="tbinput" maxlength="18" autocomplete="off"> </div>
                        <div class="tdright"><span id="stxbCardId"></span></div>
                        <div class="clear"></div>
                    </div>
                    <div style="position: relative;margin-left: 170px;">
                        <div style="display: none;" class="numberdiv" id="txbNumberRept">
                        </div>
                    </div>
                    <div class="tbconcell" style="height:auto;">
                        <div class="tdleft"><span>*</span>选择卡面：</div>
                        <div class="tdmid">

                            <div class="newcardselect" id="newcardselect">

                                <dl id="dl_0">
                                    <dt><input type="radio" name="image_id" id="" value=""> 银联金卡</dt>
                                    <dd><img alt="" title="" width="123px" height="79px" border="0" src="/web/images/_UG.gif"> </dd>
                                </dl>

                            </div>

                        </div>
                        <div class="clear"></div>
                    </div>
                    <span id="repickcardtip" style="color:#F60; line-height:26px; display:none; margin-left:160px;">请选择您想申请的信用卡卡面</span>
                    <div class="tbconcell">
                        <div class="tdleft"><span>*</span>公司所在区域：</div>
                        <div class="tdmid"><input name="address" type="text"class="tbinput" maxlength="14" ></div>
                        <div class="tdright"><span ></span></div>
                        <div class="clear"></div>
                    </div>
                    <div style="margin:22px 0 10px 170px;">
                        <input type="submit" value="" id="btnSure" class="btnsubimg btnsureimg">
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
</body>
</html>