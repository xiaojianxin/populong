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
    <div class="container" >
        <div id="self_top" >
            <a  class="btn btn-success" href="start.html">发起项目</a>
        </div>
        <div class="row">
            <div class="col-xs-3">
                <?php require('./leftnav.php') ?>
            </div>
            <div class="col-xs-9" style="background-color: #ffffff">
                <div id="withdrawBox">
                    <div id="withdrawTitle">
                        <div class="record-title">
                            <div class="title">提现</div>
                            <img src="./img/line.jpg">
                        </div>
                    </div>
                    <div id="withdrawForm">
                        <div style="height: 40px;"></div>
                        <div class="row">
                            <div class="col-xs-2"></div>
                            <div class="col-xs-2">

                                <span class="title">充值金额</span>
                                <span class="red-mark">*</span>
                            </div>
                            <div class="col-xs-6">
                                <div style="height: 5px;"></div>
                                <input class="form-control" /><br/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-2"></div>
                            <div class="col-xs-2">

                                <span class="title">可用金额</span>
                            </div>
                            <div class="col-xs-6">
                                <span class="red-mark">0.00</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-2"></div>
                            <div class="col-xs-2">
                                <span class="title">提现费用</span>
                            </div>
                            <div class="col-xs-6">
                                <span class="red-mark">0.00</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-2"></div>
                            <div class="col-xs-2">
                                <span class="title">实际扣除金额</span>
                            </div>
                            <div class="col-xs-6">
                                <span class="red-mark">0.00</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-2"></div>
                            <div class="col-xs-2">
                                <span class="title">预计到款时间</span>
                            </div>
                            <div class="col-xs-6">
                                <span >2015-03-10   1-2个工作日（双休日和法定节假日除外）之内到账</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-2"></div>
                            <div class="col-xs-2">

                                <span class="title">手机号码</span>
                                <span class="red-mark">*</span>
                            </div>
                            <div class="col-xs-6">
                                <div style="height: 5px;"></div>
                                <input class="form-control" placeholder="输入手机号码" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-2"></div>
                            <div class="col-xs-2">

                                <span class="title">验证码</span>
                                <span class="red-mark">*</span>
                            </div>
                            <div class="col-xs-3">
                                <div style="height: 5px;"></div>
                                <input class="form-control" placeholder="输入验证码" />
                            </div>
                            <div class="col-xs-3">
                                <div class="btn btn-success">获取手机验证码</div>
                            </div>
                        </div>
                    </div>
                    <div style="height: 20px"></div>
                    <div id="chargeBox">
                        <div class="record-title">
                            <div class="title">提现</div>
                            <img src="./img/line.jpg" style="width: 100%;">
                        </div>

                        <div id="withdrawArea">

                            <div class="btn btn-success" id="withdrawbutton">
                                提现
                            </div>
                        </div>
                        <div id="withdrawDes">
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