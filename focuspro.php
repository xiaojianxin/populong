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
    <link rel="stylesheet" href="./css/jPages.css"/>
    <script src="./js/jquery-1.10.1.js"></script>
    <script src="./bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="./js/jPages.min.js"></script>
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
            <div class="col-xs-9" style="background-color: #ffffff;">
                <div id="focusPro">
                    <div class="twotab">
                        <div class="tabbable" id="twotab">
                            <ul class="nav nav-tabs">
                                <li class="active allpro">
                                    <a href="#allFocus" data-toggle="tab">全部项目</a>
                                </li>
                                <li>
                                    <a href="#financingFocus" data-toggle="tab">筹资中</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="allFocus">
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <div class="onebox">
                                                <a href="./pro.html">
                                                    <img class="project"src="./img/index_05.png" alt="2" />
                                                </a>
                                                <h2>泡泡隆投资平台</h2>
                                                <a href="">
                                                    <h3>发起人:孙总</h3>
                                                </a>
                                                <h4>最大限度服务投资者，为投资者打造最优投资平台，为有梦想的项目发起者提供展示自我的最佳平台</h4>
                                                <div id="right_center">
                                                    <div class="row">
                                                        <div class="col-xs-6">
                                                            <span>已完成:</span>
                                                            <span class="percentage-text">75%</span>
                                                        </div>
                                                        <div class="col-xs-1">
                                            <span>
                                                <img class="place"src="./img/index_details1.png" alt="地点" />
                                            </span>
                                                        </div>
                                                        <div class="col-xs-3">
                                                            <span>北京</span>
                                                        </div>
                                                        <div class="col-xs-2">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="progray">
                                                            <div class="progreen"></div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-7">
                                                            <span>20,000元</span>
                                                        </div>
                                                        <div class="col-xs-5">
                                                            <span>
                                                                10天
                                                            </span>

                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-7">
                                                            <span>已筹集资金</span>
                                                        </div>
                                                        <div class="col-xs-5">
                                                            <span>
                                                                剩余天数
                                                            </span>

                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="row" style="margin-top:20px;">
                                                    <div class="col-xs-6">
                                                        <span class="pull-left">
                                                            <img class="investor"src="./img/index_details3.png" alt="投资者" />
                                                        </span>
                                                        <span style="font-size: 12px">
                                                            投资者：220
                                                        </span>
                                                    </div>
                                                    <div class="col-xs-6 ">
                                                        <span >
                                                            <img class="follower"src="./img/index_details4.png" alt="投资者" />
                                                        </span>
                                                        <span style="font-size: 12px">
                                                            关注者：1500
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-4">
                                            <div class="onebox">
                                                <a href="./pro.html">
                                                    <img class="project"src="./img/index_05.png" alt="2" />
                                                </a>
                                                <h2>泡泡隆投资平台</h2>
                                                <a href="">
                                                    <h3>发起人:孙总</h3>
                                                </a>
                                                <h4>最大限度服务投资者，为投资者打造最优投资平台，为有梦想的项目发起者提供展示自我的最佳平台</h4>
                                                <div id="right_center">
                                                    <div class="row">
                                                        <div class="col-xs-6">
                                                            <span>已完成:</span>
                                                            <span class="percentage-text">75%</span>
                                                        </div>
                                                        <div class="col-xs-1">
                                            <span>
                                                <img class="place"src="./img/index_details1.png" alt="地点" />
                                            </span>
                                                        </div>
                                                        <div class="col-xs-3">
                                                            <span>北京</span>
                                                        </div>
                                                        <div class="col-xs-2">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="progray">
                                                            <div class="progreen"></div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-7">
                                                            <span>20,000元</span>
                                                        </div>
                                                        <div class="col-xs-5">
                                            <span>
                                                10天
                                            </span>

                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-7">
                                                            <span>已筹集资金</span>
                                                        </div>
                                                        <div class="col-xs-5">
                                            <span>
                                                剩余天数
                                            </span>

                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="row" style="margin-top:20px;">
                                                    <div class="col-xs-6">
                                                        <span class="pull-left">
                                                            <img class="investor"src="./img/index_details3.png" alt="投资者" />
                                                        </span>
                                                        <span style="font-size: 12px">
                                                            投资者：220
                                                        </span>
                                                    </div>
                                                    <div class="col-xs-6 ">
                                                        <span >
                                                            <img class="follower"src="./img/index_details4.png" alt="投资者" />
                                                        </span>
                                                        <span style="font-size: 12px">
                                                            关注者：1500
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-4">
                                            <div class="onebox">
                                                <a href="./pro.html">
                                                    <img class="project"src="./img/index_05.png" alt="2" />
                                                </a>
                                                <h2>泡泡隆投资平台</h2>
                                                <a href="">
                                                    <h3>发起人:孙总</h3>
                                                </a>
                                                <h4>最大限度服务投资者，为投资者打造最优投资平台，为有梦想的项目发起者提供展示自我的最佳平台</h4>
                                                <div id="right_center">
                                                    <div class="row">
                                                        <div class="col-xs-6">
                                                            <span>已完成:</span>
                                                            <span class="percentage-text">75%</span>
                                                        </div>
                                                        <div class="col-xs-1">
                                            <span>
                                                <img class="place"src="./img/index_details1.png" alt="地点" />
                                            </span>
                                                        </div>
                                                        <div class="col-xs-3">
                                                            <span>北京</span>
                                                        </div>
                                                        <div class="col-xs-2">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="progray">
                                                            <div class="progreen"></div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-7">
                                                            <span>20,000元</span>
                                                        </div>
                                                        <div class="col-xs-5">
                                            <span>
                                                10天
                                            </span>

                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-7">
                                                            <span>已筹集资金</span>
                                                        </div>
                                                        <div class="col-xs-5">
                                            <span>
                                                剩余天数
                                            </span>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row" style="margin-top:20px;">
                                                <div class="col-xs-6">
                                                        <span class="pull-left">
                                                            <img class="investor"src="./img/index_details3.png" alt="投资者" />
                                                        </span>
                                                        <span style="font-size: 12px">
                                                            投资者：220
                                                        </span>
                                                </div>
                                                <div class="col-xs-6 ">
                                                        <span >
                                                            <img class="follower"src="./img/index_details4.png" alt="投资者" />
                                                        </span>
                                                        <span style="font-size: 12px">
                                                            关注者：1500
                                                        </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-xs-4">
                                        <div class="onebox">
                                            <a href="./pro.html">
                                                <img class="project"src="./img/index_05.png" alt="2" />
                                            </a>
                                            <h2>泡泡隆投资平台</h2>
                                            <a href="">
                                                <h3>发起人:孙总</h3>
                                            </a>
                                            <h4>最大限度服务投资者，为投资者打造最优投资平台，为有梦想的项目发起者提供展示自我的最佳平台</h4>
                                            <div id="right_center">
                                                <div class="row">
                                                    <div class="col-xs-6">
                                                        <span>已完成:</span>
                                                        <span class="percentage-text">75%</span>
                                                    </div>
                                                    <div class="col-xs-1">
                                            <span>
                                                <img class="place"src="./img/index_details1.png" alt="地点" />
                                            </span>
                                                    </div>
                                                    <div class="col-xs-3">
                                                        <span>北京</span>
                                                    </div>
                                                    <div class="col-xs-2">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="progray">
                                                        <div class="progreen"></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-7">
                                                        <span>20,000元</span>
                                                    </div>
                                                    <div class="col-xs-5">
                                                            <span>
                                                                10天
                                                            </span>

                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-7">
                                                        <span>已筹集资金</span>
                                                    </div>
                                                    <div class="col-xs-5">
                                                            <span>
                                                                剩余天数
                                                            </span>

                                                    </div>

                                                </div>
                                            </div>
                                            <div class="row" style="margin-top:20px;">
                                                <div class="col-xs-6">
                                                        <span class="pull-left">
                                                            <img class="investor"src="./img/index_details3.png" alt="投资者" />
                                                        </span>
                                                        <span style="font-size: 12px">
                                                            投资者：220
                                                        </span>
                                                </div>
                                                <div class="col-xs-6 ">
                                                        <span >
                                                            <img class="follower"src="./img/index_details4.png" alt="投资者" />
                                                        </span>
                                                        <span style="font-size: 12px">
                                                            关注者：1500
                                                        </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                        <div class="onebox">
                                            <a href="./pro.html">
                                                <img class="project"src="./img/index_05.png" alt="2" />
                                            </a>
                                            <h2>泡泡隆投资平台</h2>
                                            <a href="">
                                                <h3>发起人:孙总</h3>
                                            </a>
                                            <h4>最大限度服务投资者，为投资者打造最优投资平台，为有梦想的项目发起者提供展示自我的最佳平台</h4>
                                            <div id="right_center">
                                                <div class="row">
                                                    <div class="col-xs-6">
                                                        <span>已完成:</span>
                                                        <span class="percentage-text">75%</span>
                                                    </div>
                                                    <div class="col-xs-1">
                                            <span>
                                                <img class="place"src="./img/index_details1.png" alt="地点" />
                                            </span>
                                                    </div>
                                                    <div class="col-xs-3">
                                                        <span>北京</span>
                                                    </div>
                                                    <div class="col-xs-2">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="progray">
                                                        <div class="progreen"></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-7">
                                                        <span>20,000元</span>
                                                    </div>
                                                    <div class="col-xs-5">
                                            <span>
                                                10天
                                            </span>

                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-7">
                                                        <span>已筹集资金</span>
                                                    </div>
                                                    <div class="col-xs-5">
                                            <span>
                                                剩余天数
                                            </span>

                                                    </div>

                                                </div>
                                            </div>
                                            <div class="row" style="margin-top:20px;">
                                                <div class="col-xs-6">
                                                        <span class="pull-left">
                                                            <img class="investor"src="./img/index_details3.png" alt="投资者" />
                                                        </span>
                                                        <span style="font-size: 12px">
                                                            投资者：220
                                                        </span>
                                                </div>
                                                <div class="col-xs-6 ">
                                                        <span >
                                                            <img class="follower"src="./img/index_details4.png" alt="投资者" />
                                                        </span>
                                                        <span style="font-size: 12px">
                                                            关注者：1500
                                                        </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                        <div class="onebox">
                                            <a href="./pro.html">
                                                <img class="project"src="./img/index_05.png" alt="2" />
                                            </a>
                                            <h2>泡泡隆投资平台</h2>
                                            <a href="">
                                                <h3>发起人:孙总</h3>
                                            </a>
                                            <h4>最大限度服务投资者，为投资者打造最优投资平台，为有梦想的项目发起者提供展示自我的最佳平台</h4>
                                            <div id="right_center">
                                                <div class="row">
                                                    <div class="col-xs-6">
                                                        <span>已完成:</span>
                                                        <span class="percentage-text">75%</span>
                                                    </div>
                                                    <div class="col-xs-1">
                                            <span>
                                                <img class="place"src="./img/index_details1.png" alt="地点" />
                                            </span>
                                                    </div>
                                                    <div class="col-xs-3">
                                                        <span>北京</span>
                                                    </div>
                                                    <div class="col-xs-2">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="progray">
                                                        <div class="progreen"></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-7">
                                                        <span>20,000元</span>
                                                    </div>
                                                    <div class="col-xs-5">
                                            <span>
                                                10天
                                            </span>

                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-7">
                                                        <span>已筹集资金</span>
                                                    </div>
                                                    <div class="col-xs-5">
                                            <span>
                                                剩余天数
                                            </span>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-top:20px;">
                                            <div class="col-xs-6">
                                                        <span class="pull-left">
                                                            <img class="investor"src="./img/index_details3.png" alt="投资者" />
                                                        </span>
                                                        <span style="font-size: 12px">
                                                            投资者：220
                                                        </span>
                                            </div>
                                            <div class="col-xs-6 ">
                                                        <span >
                                                            <img class="follower"src="./img/index_details4.png" alt="投资者" />
                                                        </span>
                                                        <span style="font-size: 12px">
                                                            关注者：1500
                                                        </span>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    <h1 class="seemore"><a>查看更多</a></h1>
                                    <div style="height: 50px;"></div>
                                </div>

                                <div class="tab-pane " id="financingFocus">
                                    <div class="row">
                                <div class="col-xs-4">
                                    <div class="onebox">
                                        <a href="./pro.html">
                                            <img class="project"src="./img/index_05.png" alt="2" />
                                        </a>
                                        <h2>泡泡隆投资平台</h2>
                                        <a href="">
                                            <h3>发起人:孙总</h3>
                                        </a>
                                        <h4>最大限度服务投资者，为投资者打造最优投资平台，为有梦想的项目发起者提供展示自我的最佳平台</h4>
                                        <div id="right_center">
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <span>已完成:</span>
                                                    <span class="percentage-text">75%</span>
                                                </div>
                                                <div class="col-xs-1">
                                            <span>
                                                <img class="place"src="./img/index_details1.png" alt="地点" />
                                            </span>
                                                </div>
                                                <div class="col-xs-3">
                                                    <span>北京</span>
                                                </div>
                                                <div class="col-xs-2">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="progray">
                                                    <div class="progreen"></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-7">
                                                    <span>20,000元</span>
                                                </div>
                                                <div class="col-xs-5">
                                                            <span>
                                                                10天
                                                            </span>

                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-xs-7">
                                                    <span>已筹集资金</span>
                                                </div>
                                                <div class="col-xs-5">
                                                            <span>
                                                                剩余天数
                                                            </span>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="row" style="margin-top:20px;">
                                            <div class="col-xs-6">
                                                        <span class="pull-left">
                                                            <img class="investor"src="./img/index_details3.png" alt="投资者" />
                                                        </span>
                                                        <span style="font-size: 12px">
                                                            投资者：220
                                                        </span>
                                            </div>
                                            <div class="col-xs-6 ">
                                                        <span >
                                                            <img class="follower"src="./img/index_details4.png" alt="投资者" />
                                                        </span>
                                                        <span style="font-size: 12px">
                                                            关注者：1500
                                                        </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="onebox">
                                        <a href="./pro.html">
                                            <img class="project"src="./img/index_05.png" alt="2" />
                                        </a>
                                        <h2>泡泡隆投资平台</h2>
                                        <a href="">
                                            <h3>发起人:孙总</h3>
                                        </a>
                                        <h4>最大限度服务投资者，为投资者打造最优投资平台，为有梦想的项目发起者提供展示自我的最佳平台</h4>
                                        <div id="right_center">
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <span>已完成:</span>
                                                    <span class="percentage-text">75%</span>
                                                </div>
                                                <div class="col-xs-1">
                                            <span>
                                                <img class="place"src="./img/index_details1.png" alt="地点" />
                                            </span>
                                                </div>
                                                <div class="col-xs-3">
                                                    <span>北京</span>
                                                </div>
                                                <div class="col-xs-2">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="progray">
                                                    <div class="progreen"></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-7">
                                                    <span>20,000元</span>
                                                </div>
                                                <div class="col-xs-5">
                                            <span>
                                                10天
                                            </span>

                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-xs-7">
                                                    <span>已筹集资金</span>
                                                </div>
                                                <div class="col-xs-5">
                                            <span>
                                                剩余天数
                                            </span>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="row" style="margin-top:20px;">
                                            <div class="col-xs-6">
                                                        <span class="pull-left">
                                                            <img class="investor"src="./img/index_details3.png" alt="投资者" />
                                                        </span>
                                                        <span style="font-size: 12px">
                                                            投资者：220
                                                        </span>
                                            </div>
                                            <div class="col-xs-6 ">
                                                        <span >
                                                            <img class="follower"src="./img/index_details4.png" alt="投资者" />
                                                        </span>
                                                        <span style="font-size: 12px">
                                                            关注者：1500
                                                        </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="onebox">
                                        <a href="./pro.html">
                                            <img class="project"src="./img/index_05.png" alt="2" />
                                        </a>
                                        <h2>泡泡隆投资平台</h2>
                                        <a href="">
                                            <h3>发起人:孙总</h3>
                                        </a>
                                        <h4>最大限度服务投资者，为投资者打造最优投资平台，为有梦想的项目发起者提供展示自我的最佳平台</h4>
                                        <div id="right_center">
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <span>已完成:</span>
                                                    <span class="percentage-text">75%</span>
                                                </div>
                                                <div class="col-xs-1">
                                            <span>
                                                <img class="place"src="./img/index_details1.png" alt="地点" />
                                            </span>
                                                </div>
                                                <div class="col-xs-3">
                                                    <span>北京</span>
                                                </div>
                                                <div class="col-xs-2">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="progray">
                                                    <div class="progreen"></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-7">
                                                    <span>20,000元</span>
                                                </div>
                                                <div class="col-xs-5">
                                            <span>
                                                10天
                                            </span>

                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-xs-7">
                                                    <span>已筹集资金</span>
                                                </div>
                                                <div class="col-xs-5">
                                            <span>
                                                剩余天数
                                            </span>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:20px;">
                                        <div class="col-xs-6">
                                                        <span class="pull-left">
                                                            <img class="investor"src="./img/index_details3.png" alt="投资者" />
                                                        </span>
                                                        <span style="font-size: 12px">
                                                            投资者：220
                                                        </span>
                                        </div>
                                        <div class="col-xs-6 ">
                                                        <span >
                                                            <img class="follower"src="./img/index_details4.png" alt="投资者" />
                                                        </span>
                                                        <span style="font-size: 12px">
                                                            关注者：1500
                                                        </span>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                    <h1 class="seemore"><a>查看更多</a></h1>
                                    <div style="height: 80px;"></div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
<!--<script type="text/javascript">-->
<!--    $(function(){-->
<!--        $("div.holder").jPages({-->
<!--            containerID : "deal-list"-->
<!--        });-->
<!--    });-->
<!--</script>-->
</body>
</html>