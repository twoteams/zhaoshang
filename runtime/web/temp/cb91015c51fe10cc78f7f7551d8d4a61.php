<?php /*a:1:{s:53:"E:\wwwbankcom\zhaoshang\app\web\view\index\index.html";i:1616935077;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>招商银行信用卡申请</title>
    <link rel="stylesheet" href="/web//layui/dist/css/layui.css">
    <script src="/web//layui/dist/layui.all.js"></script>
    <script type="text/javascript" async="" src="http://www.google-analytics.com/ga.js"></script>
    <script src="https://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="http://market.cmbchina.com/ccard/ccwebui/scripts/commonheader.js" type="text/javascript"></script>
    <script type="text/javascript" src="http://market.cmbchina.com/ccard/ccwebui/Scripts/jquery-1.10.2.js"></script>
    <script type="text/javascript"
            src="http://market.cmbchina.com/ccard/ccwebui/Scripts/CommonHeaderControl.js"></script>
    <link rel="stylesheet" type="text/css" href="http://market.cmbchina.com/ccard/ccwebui/Styles/Head.css">
    <script src="http://market.cmbchina.com/ccard/ccwebui/scripts/footer.js" type="text/javascript"></script>
    <script type="text/javascript" src="http://market.cmbchina.com/ccard/ccwebui/Scripts/FooterControl.js"></script>
    <link rel="stylesheet" type="text/css" href="http://market.cmbchina.com/ccard/ccwebui/Styles/Common.css">
    <style type="text/css">
        @charset "utf-8";
        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        hr,
        p,
        blockquote,
        dl,
        dt,
        dd,
        ul,
        ol,
        li,
        pre,
        form,
        fieldset,
        legend,
        button,
        input,
        textarea,
        th,
        td {
            margin: 0;
            padding: 0;
        }

        textarea {
            resize: none
        }

        .footerbg {
            margin-top: 0px !important;
        }

        body area:focus {
            outline: none;
        }

        body,
        button,
        input,
        select,
        textarea {
            font: 12px/1.5 Arial, Helvetica, sans-serif;
            outline: none;
        }

        ul,
        ol {
            list-style: none;
        }

        a {
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        a,
        a:link,
        a:active {
            text-decoration: none;
        }

        div,
        p {
            word-break: break-all;
        }

        a {
            blr: expression(this.onFocus=this.blur());
            /*IE Opera*/
            outline: none;
            /*FF Opera*/
        }

        a:focus {
            -moz-outline-style: none;
            /*FF*/
        }

        img {
            vertical-align: top;
            border: 0;
        }

        .main {
            position: relative;
            background: #ffffff no-repeat;
            width: 100%;
            height: auto;
            /*margin: 0 auto;*/
            margin: 0 0;
            font-family: "微软雅黑";
            overflow: hidden;
            text-align: center;
        }

        .pop,
        .pop1 {
            display: none;
        }

        .pop01 {
            position: absolute;
            left: 42px;
            top: 520px;
            z-index: 3;
        }

        .pop02 {
            position: absolute;
            left: 592px;
            top: 519px;
            z-index: 4;
        }

        .pop03 {
            position: absolute;
            left: 41px;
            top: 964px;
            z-index: 5;
        }

        .pop04 {
            position: absolute;
            left: 596px;
            top: 967px;
            z-index: 6;
        }

        .down_1 {
            cursor: pointer;
        }

        #pagebottom {
            position: relative;
            width: 100%;
            height: 135px;
            background: #e9ecef;
            overflow: hidden;
        }

        #pagebottom-img {
            width: 100%;
            height: 135px;
            background: url("images/pagebottom-img.png") no-repeat center center;
        }

        #pagetop {
            position: relative;
            width: 100%;
            height: 340px;
            /*background-image: url(images/pc_01.jpg);*/
            /*background: #000;*/
            overflow: hidden;
        }

        #pagetop-bag {
            position: absolute;
            width: 100%;
            top: 0px;
            left: 0px;
            transition: all 1s ease-in-out;
            -moz-transition: all 1s ease-in-out;
        }

        #pagetop-bag.show {
            left: -100%;
        }


        #pagetop1 {
            position: absolute;
            width: 100%;
            height: 250px;
            background: url("images/pagetop1.jpg") no-repeat center center;
            top: 0px;
            left: 0%;
        }

        #pagetop2 {
            position: absolute;
            width: 100%;
            height: 250px;
            background: url("images/pagetop2.jpg") no-repeat center center;
            top: 0px;
            left: 0%;
        }

        #pagetop3 {
            position: absolute;
            width: 100%;
            height: 250px;
            background: url("images/pagetop3.jpg") no-repeat center center;
            top: 0px;
            left: 0%;
        }


        #pagetop-point {
            position: absolute;
            width: 100px;
            height: 14px;
            top: 225px;
            left: 47%;
            /*background: #33AAAA;*/
        }

        .pagetop-point {
            width: 14px;
            height: 14px;
            float: left;
            margin-right: 10px;
            background: url(images/pagetop-point-off.png) no-repeat center center;
            cursor: pointer;
        }


        .pagetop-point.on {
            background: url(images/pagetop-point-on.png) no-repeat center center;
        }


        #pagetop-bottom {
            position: absolute;
            width: 100%;
            height: 90px;
            top: 250px;
            left: 0px;
            background: url(images/pagetop-bottom.jpg) no-repeat center center;
            z-index: 2;
        }

        #pagecontent {
            position: initial;
            background: #ffffff no-repeat;
            width: 1006px;
            height: auto;
            margin: 0 auto;
            font-family: "微软雅黑";
            overflow: hidden;
            /*padding-bottom: 50px;*/
        }

        #pagecontent-btn {
            width: 1006px;
            height: 36px;
            margin-top: 25px;
            margin-bottom: 15px;
            /*background: #ff0;*/
            text-align: center;
            font-size: 17px;
        }

        .pagecontent-btn {
            width: 186px;
            height: 36px;
            float: left;
            background: url(images/pagecontent-btn-off.png) no-repeat center center;
            margin-left: 7px;
            margin-right: 7px;
            color: #000000;
            font-weight: 100;
            cursor: pointer;
        }

        .pagecontent-btn.on {
            background: url(images/pagecontent-btn-on.png) no-repeat center center;
            color: #FFFFFF;
            font-weight: 600;
        }

        .pagecontent-btn p {
            margin: 5px;
        }

        #pagecontent-main {
            margin-top: px;
            margin-bottom: 30px;
        }

        .pagecontent-main {
            display: none;
        }

        #pagecontent-main1 {
            display: block;
        }

        .pagecontent-main-row {
            position: initial;
            background: #ffffff no-repeat;
            width: 100%;
            height: 225px;
        }

        .pagecontent-main-line {
            position: initial;
            background: url(images/pagecontent-main-line.png) no-repeat center center;
            width: 100%;
            height: 5px;
            margin-bottom: 20px;
        }

        .pagecontent-main-box {
            position: relative;
            /*background: #aaa;*/
            width: 49%;
            height: 225px;
            float: left;
            margin-left: 7px;
            text-align: left;
        }

        .pagecontent-main-box-left {
            position: initial;
            /*background: #aaa;*/
            width: 55%;
            height: 225px;
            float: left;
            text-align: right;
        }

        #pagecontent-main1 .pagecontent-main-box-left {
            cursor: pointer;
        }

        .pagecontent-main-box-left img {
            margin-top: 30px;
            /*margin-left: 30px;*/
            margin-right: 10px;
        }

        #pagecontent-main1 img {
            margin-top: 50px;
            /*margin-left: 30px;*/
            margin-right: 10px;
        }

        .pagecontent-main-box-right {
            position: relative;
            /*background: #aaa;*/
            width: 42%;
            height: 225px;
            float: left;
            padding-left: 3%;
            /*margin-left: 20px;*/
        }

        .pagecontent-main-box-txt {
            position: initial;
            /*background: #3aa;*/
            width: 100%;
            /*height: 150px;*/
            margin-top: 30px;
            color: #000000;
        }

        .pagecontent-main-box-txt h6 {
            font-size: 18px;
            margin-top: 45px;
            color: #000000;
        }

        .pagecontent-main-box-txt p {
            font-size: 14px;
            margin-top: 5px;
            color: #000000;
        }

        .pagecontent-main-box-btn {
            position: initial;
            width: 100%;
            height: 35px;
            margin-top: 15px;
        }

        .pagecontent-main-box-hot {
            position: absolute;
            width: 24px;
            height: 14px;
            left: 120px;
            top: 30px;
            background: url(images/pagecontent-main-box-hot.png) no-repeat left center;
        }

        #pagecontent-main1 .pagecontent-main-box-hot {
            left: 160px;
        }

        .pagecontent-main-box-float {
            position: absolute;
            background: #e9eaed;
            width: 100%;
            height: 100%;
            left: 0px;
            top: 0px;
            text-align: left;
        }

        .pagecontent-main-box .pagecontent-main-box-float {
            display: none;
        }

        /*			.pagecontent-main-box:hover .pagecontent-main-box-float {
            display: block;
        }*/

        .pagecontent-main-box-float h6 {
            font-size: 16px;
            margin-top: 20px;
            padding-left: 20px;
            padding-right: 10px;
            color: #1a1a1a;
        }

        .pagecontent-main-box-float h7 {
            font-size: 12px;
            margin-top: 10px;
            padding-left: 20px;
            padding-right: 20px;
            color: #cc0435;
            font-weight: 600;
        }

        .pagecontent-main-box-float p {
            font-size: 12px;
            margin-top: 5px;
            padding-left: 20px;
            padding-right: 20px;
            color: #3f3f3f;
        }
    </style>
    <script src="http://sdc.cmbchina.com/dcs5w0txb10000wocrvqy1nqm_6n1p/wtid.js"></script>
    <script src="http://market.cmbchina.com/ccard/ccwebui//Scripts/sdc_cmb.js"></script>
</head>

<body>
<div id="pagecontent">
    <div id="pagecontent-main">
        <div class="pagecontent-main" id="pagecontent-main1" style="display: block;">
            <div class="pagecontent-main-row">
                <div class="pagecontent-main-box">
                    <div class="pagecontent-main-box-left">
                        <img src="/web//images/pagecontent-main-row11-2.png">

                    </div>
                    <div class="pagecontent-main-box-right">
                        <div class="pagecontent-main-box-txt">
                            <h6>宝可梦粉丝卡 </h6>

                            <p>新户达标领宝可梦周边<br>
                                宝可梦：就决定是你了！</p>
                        </div>

                        <div class="pagecontent-main-box-btn" style="left:180px">
                            <a href="create.html" class="layui-btn layui-btn-danger">立即申请</a>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>