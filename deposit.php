<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
    <title>个人中心个人界面</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="布尔教育 http://www.itbool.com" />
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"  href="./css/reset.css"/>
    <link rel="stylesheet" type="text/css" href="./css/headfoot.css">
    <link rel="stylesheet" type="text/css" href="./css/self.css">
    <link rel="stylesheet" type="text/css" href="./css/leftnav.css">
    <script src="./js/jquery-1.10.1.js"></script>
    <script src="./bootstrap/js/bootstrap.min.js"></script>

    <!--[if lt IE 9]>
    <script src="http://apps.bdimg.com/libs/html5shiv/3.7/html5shiv.min.js"></script>
    <script src="http://apps.bdimg.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<div id="topnav">
    <?php require('./nav.php') ?>
</div>
<div id="main">
    <div class="container">
        <div id="self_top" >
            <a  class="btn btn-success" href="start.html">发起项目</a>
        </div>
        <div class="row">
            <div class="col-xs-3">
                <?php require('./leftnav.php') ?>
            </div>
            <div class="col-xs-9">
                <div id="depositBox">
                    <div id="depositTitle">
                        <div class="record-title">
                            <div class="title">充值</div>
                            <img src="./img/line.jpg">
                        </div>
                    </div>
                    <div id="depositForm">
                        <div style="height: 40px;"></div>
                        <div class="row">
                            <div class="col-xs-2 col-xs-offset-2">
                                <span class="red-mark">*</span>
                                <span class="title">充值金额</span>

                            </div>
                            <div class="col-xs-5">

                                <input class="form-control" /><br/>
                                <span>当前可用金额为：</span>
                                <span class="red-mark">100</span>

                            </div>
                        </div>
                        <div class="row">

                        </div>
                    </div>
                    <div style="height: 20px"></div>
                    <div id="chargeBox">
                        <div class="record-title">
                            <div class="title">充值</div>
                            <img src="./img/line.jpg" style="width: 100%;">
                        </div>

                        <div id="chargeArea">

                            <span class="chargeTitle">&nbsp;&nbsp;支付平台&nbsp;&nbsp;</span>
                            <div class="divider"></div>
                                <div style="height: 20px;"></div>
                                <div class="charge-content" id="chargePart">

                                        <div class="row">
                                            <div class="col-xs-3">
                                                <img src="./img/charge.jpg">
                                            </div>
                                        </div>

                                </div>
                                <div class="divider"></div>
                                <div class="btn btn-success" id="chargebutton">
                                    充值
                                </div>
                            </div>
                            <div id="chargeDes">
                                <h1>温馨提示:</h1>
                                <h1>   1.为了您的账户安全,请在充值前进行身份认证、手机绑定以及提现密码设 置。</h1>
                                <h1>   2.您的账户资金将由第三方平台托管。</h1>
                                <h1>   3.请注意您的银行卡充值限制,以免造成不便;每日的充值限额依据各银行 限额为准。</h1>
                                <h1>    4.禁止洗钱、虚假交易等行为,一经发现并确认,将终止该账户的使用。</h1>
                                 <h1>   5.如果充值金额没有及时到账,请联系客服电话:4009-099-888</h1>
                            </div>
                            <div style="height: 50px;"></div>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>