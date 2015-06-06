<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
    <title>个人中心</title>
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
                <div class="record-title">
                    <div class="title">提现</div>
                    <img src="./img/line.jpg" style="width: 100%;">
                </div>
                <div class="btn btn-success btn-lg pull-right" id="editInformation">
                    <span class="glyphicon glyphicon-edit">修改信息</span></div>
                <div id="informationBox">

                    <div class="row">
                        <div class="col-xs-3">
                            <img src="./img/self_03.png" style="width: 100%;">

                        </div>
                        <div class="col-xs-9 user-information">
                             <div class="row">
                                 <div class="col-xs-3">

                                     <span class="title">昵称:</span>
                                     <span class="red-mark">*</span>

                                 </div>
                                 <div class="col-xs-6">
                                     <div style="height: 5px;"></div>
                                     <span class="user-name">小美丽</span>
                                 </div>
                                 <div class="col-xs-2">
                                     <div style="height: 8px;"></div>
                                     <span class="green-tip"><img src="./img/others_01.png"> </span>
                                     <span class="text-green">已认证</span>
                                 </div>
                             </div>
                            <div class="row">
                                <div class="col-xs-3">

                                    <span class="title">真实姓名:</span>
                                    <span class="red-mark">*</span>

                                </div>
                                <div class="col-xs-6">
                                    <div style="height: 5px;"></div>
                                    <span class="user-name">*研</span>
                                </div>
                                <div class="col-xs-2">
                                    <div style="height: 8px;"></div>
                                    <span class="green-tip"><img src="./img/others_01.png"> </span>
                                    <span class="text-green">已认证</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-3">

                                    <span class="title">身份证号码:</span>
                                    <span class="red-mark">*</span>

                                </div>
                                <div class="col-xs-6">
                                    <div style="height: 5px;"></div>
                                    <span class="user-identity">139***************</span>
                                </div>
                                <div class="col-xs-2">
                                    <div style="height: 8px;"></div>
                                    <span class="green-tip"><img src="./img/others_01.png"> </span>
                                    <span class="text-green">已认证</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-3">

                                    <span class="title">手机号码:</span>
                                    <span class="red-mark">*</span>

                                </div>
                                <div class="col-xs-6">
                                    <div style="height: 5px;"></div>
                                    <span class="user-phone">139***************</span>
                                </div>
                                <div class="col-xs-2">
                                    <div style="height: 8px;"></div>
                                    <span class="green-tip"><img src="./img/others_01.png"> </span>
                                    <span class="text-green">已认证</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-3">

                                    <span class="title">邮箱地址:</span>
                                    <span class="red-mark">*</span>

                                </div>
                                <div class="col-xs-6">
                                    <div style="height: 5px;"></div>
                                    <span class="user-email">139***************</span>
                                </div>
                                <div class="col-xs-2">
                                    <div style="height: 8px;"></div>
                                    <span class="green-tip"><img src="./img/others_01.png"> </span>
                                    <span class="text-green">已认证</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-3">

                                    <span class="title">性别：</span>


                                </div>
                                <div class="col-xs-6">
                                    <div style="height: 5px;"></div>
                                    <span class="user-sex">女</span>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-xs-3">

                                    <span class="title">出生日期：</span>


                                </div>
                                <div class="col-xs-6">
                                    <div style="height: 5px;"></div>
                                    <span class="user-borntime">20141111</span>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-xs-3">
                                    <span class="title">最高学历：</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-3">
                                    <span class="title">毕业院校：</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-3">
                                    <span class="title">居住地区：</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-3">
                                    <span class="title">公司行业：</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-3">
                                    <span class="title">公司规模：</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-3">
                                    <span class="title">职位：</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-3">
                                    <span class="title">月收入：</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </div>
  </div>
</body>
</html>