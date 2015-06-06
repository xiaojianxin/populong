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
                <div  class="col-xs-9">
                    <div class="self_right_top">
                        <div class='self_pic'>
                              <img src="./img/head_02.png" alt="" />

                        </div>
                        <div class="self_explain">Lilith-泡泡隆设计师</div>
                        <div id="tabPrice">
                            <div class="tabbable" id="fourtab">
                                <ul class="nav nav-tabs ">
                                    <li class="startpro">
                                        <a href="#startpro" data-toggle="tab">发起的项目</a>
                                    </li>
                                    <li class="active">
                                        <a href="#followpro" data-toggle="tab">关注的项目</a>
                                    </li>
                                    <li>
                                        <a href="#follows" data-toggle="tab">关注者</a>
                                    </li>
                                    <li>
                                        <a href="#fans" data-toggle="tab">粉丝</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane" id="startpro">
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <div class=" fans_card">
                                                    <div class="row">
                                                        <div class="col-xs-4 fans_pic">
                                                            <a href="./others.html" class="fans_pic">
                                                                <img class="fan" src="./img/fan_01.png" alt="" />
                                                            </a>
                                                        </div>

                                                        <div class="col-xs-6 fans_description">
                                                            <div class="fans_name">张三三</div>
                                                            <div class="fans_introduction">某公司老总</div>
                                                            <div class="fans_introduction">关注11|粉丝20万</div>
                                                            <span class="btn btn-default foucus">
                                                            <span class="dropdown-toggle" data-toggle="dropdown" >互相关注<span class="glyphicon glyphicon-chevron-up"></span></span>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a href="#">取消关注</a>
                                                                </li>

                                                            </ul>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-4">
                                                <div class=" fans_card">
                                                    <div class="row">
                                                        <div class="col-xs-4 fans_pic">
                                                            <a href="./others.html" class="fans_pic">
                                                                <img class="fan" src="./img/fan_01.png" alt="" />
                                                            </a>
                                                        </div>

                                                        <div class="col-xs-6 fans_description">
                                                            <div class="fans_name">张三三</div>
                                                            <div class="fans_introduction">某公司老总</div>
                                                            <div class="fans_introduction">关注11|粉丝20万</div>
                                                            <span class="btn btn-default foucus">
                                                            <span class="dropdown-toggle" data-toggle="dropdown" >互相关注<span class="glyphicon glyphicon-chevron-up"></span></span>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a href="#">取消关注</a>
                                                                </li>

                                                            </ul>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-4">
                                                <div class=" fans_card">
                                                    <div class="row">
                                                        <div class="col-xs-4 fans_pic">
                                                            <a href="./others.html" class="fans_pic">
                                                                <img class="fan" src="./img/fan_01.png" alt="" />
                                                            </a>
                                                        </div>

                                                        <div class="col-xs-6 fans_description">
                                                            <div class="fans_name">张三三</div>
                                                            <div class="fans_introduction">某公司老总</div>
                                                            <div class="fans_introduction">关注11|粉丝20万</div>
                                                            <span class="btn btn-default foucus">
                                                            <span class="dropdown-toggle" data-toggle="dropdown" >互相关注<span class="glyphicon glyphicon-chevron-up"></span></span>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a href="#">取消关注</a>
                                                                </li>

                                                            </ul>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <div class=" fans_card">
                                                    <div class="row">
                                                        <div class="col-xs-4 fans_pic">
                                                            <a href="./others.html" class="fans_pic">
                                                                <img class="fan" src="./img/fan_01.png" alt="" />
                                                            </a>
                                                        </div>

                                                        <div class="col-xs-6 fans_description">
                                                            <div class="fans_name">张三三</div>
                                                            <div class="fans_introduction">某公司老总</div>
                                                            <div class="fans_introduction">关注11|粉丝20万</div>
                                                            <span class="btn btn-default foucus">
                                                            <span class="dropdown-toggle" data-toggle="dropdown" >互相关注<span class="glyphicon glyphicon-chevron-up"></span></span>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a href="#">取消关注</a>
                                                                </li>

                                                            </ul>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-4">
                                                <div class=" fans_card">
                                                    <div class="row">
                                                        <div class="col-xs-4 fans_pic">
                                                            <a href="./others.html" class="fans_pic">
                                                                <img class="fan" src="./img/fan_01.png" alt="" />
                                                            </a>
                                                        </div>

                                                        <div class="col-xs-6 fans_description">
                                                            <div class="fans_name">张三三</div>
                                                            <div class="fans_introduction">某公司老总</div>
                                                            <div class="fans_introduction">关注11|粉丝20万</div>
                                                            <span class="btn btn-default foucus">
                                                            <span class="dropdown-toggle" data-toggle="dropdown" >互相关注<span class="glyphicon glyphicon-chevron-up"></span></span>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a href="#">取消关注</a>
                                                                </li>

                                                            </ul>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-4">
                                                <div class=" fans_card">
                                                    <div class="row">
                                                        <div class="col-xs-4 fans_pic">
                                                            <a href="./others.html" class="fans_pic">
                                                                <img class="fan" src="./img/fan_01.png" alt="" />
                                                            </a>
                                                        </div>

                                                        <div class="col-xs-6 fans_description">
                                                            <div class="fans_name">张三三</div>
                                                            <div class="fans_introduction">某公司老总</div>
                                                            <div class="fans_introduction">关注11|粉丝20万</div>
                                                            <span class="btn btn-default foucus">
                                                            <span class="dropdown-toggle" data-toggle="dropdown" >互相关注<span class="glyphicon glyphicon-chevron-up"></span></span>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a href="#">取消关注</a>
                                                                </li>

                                                            </ul>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <div class=" fans_card">
                                                    <div class="row">
                                                        <div class="col-xs-4 fans_pic">
                                                            <a href="./others.html" class="fans_pic">
                                                                <img class="fan" src="./img/fan_01.png" alt="" />
                                                            </a>
                                                        </div>

                                                        <div class="col-xs-6 fans_description">
                                                            <div class="fans_name">张三三</div>
                                                            <div class="fans_introduction">某公司老总</div>
                                                            <div class="fans_introduction">关注11|粉丝20万</div>
                                                            <span class="btn btn-default foucus">
                                                            <span class="dropdown-toggle" data-toggle="dropdown" >互相关注<span class="glyphicon glyphicon-chevron-up"></span></span>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a href="#">取消关注</a>
                                                                </li>

                                                            </ul>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-4">
                                                <div class=" fans_card">
                                                    <div class="row">
                                                        <div class="col-xs-4 fans_pic">
                                                            <a href="./others.html" class="fans_pic">
                                                                <img class="fan" src="./img/fan_01.png" alt="" />
                                                            </a>
                                                        </div>

                                                        <div class="col-xs-6 fans_description">
                                                            <div class="fans_name">张三三</div>
                                                            <div class="fans_introduction">某公司老总</div>
                                                            <div class="fans_introduction">关注11|粉丝20万</div>
                                                            <span class="btn btn-default foucus">
                                                            <span class="dropdown-toggle" data-toggle="dropdown" >互相关注<span class="glyphicon glyphicon-chevron-up"></span></span>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a href="#">取消关注</a>
                                                                </li>

                                                            </ul>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-4">
                                                <div class=" fans_card">
                                                    <div class="row">
                                                        <div class="col-xs-4 fans_pic">
                                                            <a href="./others.html" class="fans_pic">
                                                                <img class="fan" src="./img/fan_01.png" alt="" />
                                                            </a>
                                                        </div>

                                                        <div class="col-xs-6 fans_description">
                                                            <div class="fans_name">张三三</div>
                                                            <div class="fans_introduction">某公司老总</div>
                                                            <div class="fans_introduction">关注11|粉丝20万</div>
                                                            <span class="btn btn-default foucus">
                                                            <span class="dropdown-toggle" data-toggle="dropdown" >互相关注<span class="glyphicon glyphicon-chevron-up"></span></span>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a href="#">取消关注</a>
                                                                </li>

                                                            </ul>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                           <div class="seemore"><a>查看更多</a></div>
                                        </div>
                                    </div>
                                    <div class="tab-pane active" id="followpro">
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <div class=" fans_card">
                                                    <div class="row">
                                                        <div class="col-xs-4 fans_pic">
                                                            <a href="./others.html" class="fans_pic">
                                                                <img class="fan" src="./img/fan_01.png" alt="" />
                                                            </a>
                                                        </div>

                                                        <div class="col-xs-6 fans_description">
                                                            <div class="fans_name">张三三</div>
                                                            <div class="fans_introduction">某公司老总</div>
                                                            <div class="fans_introduction">关注11|粉丝20万</div>
                                                            <span class="btn btn-default foucus">
                                                            <span class="dropdown-toggle" data-toggle="dropdown" >互相关注<span class="glyphicon glyphicon-chevron-up"></span></span>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a href="#">取消关注</a>
                                                                </li>

                                                            </ul>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-4">
                                                <div class=" fans_card">
                                                    <div class="row">
                                                        <div class="col-xs-4 fans_pic">
                                                            <a href="./others.html" class="fans_pic">
                                                                <img class="fan" src="./img/fan_01.png" alt="" />
                                                            </a>
                                                        </div>

                                                        <div class="col-xs-6 fans_description">
                                                            <div class="fans_name">张三三</div>
                                                            <div class="fans_introduction">某公司老总</div>
                                                            <div class="fans_introduction">关注11|粉丝20万</div>
                                                            <span class="btn btn-default foucus">
                                                            <span class="dropdown-toggle" data-toggle="dropdown" >互相关注<span class="glyphicon glyphicon-chevron-up"></span></span>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a href="#">取消关注</a>
                                                                </li>

                                                            </ul>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-4">
                                                <div class=" fans_card">
                                                    <div class="row">
                                                        <div class="col-xs-4 fans_pic">
                                                            <a href="./others.html" class="fans_pic">
                                                                <img class="fan" src="./img/fan_01.png" alt="" />
                                                            </a>
                                                        </div>

                                                        <div class="col-xs-6 fans_description">
                                                            <div class="fans_name">张三三</div>
                                                            <div class="fans_introduction">某公司老总</div>
                                                            <div class="fans_introduction">关注11|粉丝20万</div>
                                                            <span class="btn btn-default foucus">
                                                            <span class="dropdown-toggle" data-toggle="dropdown" >互相关注<span class="glyphicon glyphicon-chevron-up"></span></span>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a href="#">取消关注</a>
                                                                </li>

                                                            </ul>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <div class=" fans_card">
                                                    <div class="row">
                                                        <div class="col-xs-4 fans_pic">
                                                            <a href="./others.html" class="fans_pic">
                                                                <img class="fan" src="./img/fan_01.png" alt="" />
                                                            </a>
                                                        </div>

                                                        <div class="col-xs-6 fans_description">
                                                            <div class="fans_name">张三三</div>
                                                            <div class="fans_introduction">某公司老总</div>
                                                            <div class="fans_introduction">关注11|粉丝20万</div>
                                                            <span class="btn btn-default foucus">
                                                            <span class="dropdown-toggle" data-toggle="dropdown" >互相关注<span class="glyphicon glyphicon-chevron-up"></span></span>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a href="#">取消关注</a>
                                                                </li>

                                                            </ul>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-4">
                                                <div class=" fans_card">
                                                    <div class="row">
                                                        <div class="col-xs-4 fans_pic">
                                                            <a href="./others.html" class="fans_pic">
                                                                <img class="fan" src="./img/fan_01.png" alt="" />
                                                            </a>
                                                        </div>

                                                        <div class="col-xs-6 fans_description">
                                                            <div class="fans_name">张三三</div>
                                                            <div class="fans_introduction">某公司老总</div>
                                                            <div class="fans_introduction">关注11|粉丝20万</div>
                                                            <span class="btn btn-default foucus">
                                                            <span class="dropdown-toggle" data-toggle="dropdown" >互相关注<span class="glyphicon glyphicon-chevron-up"></span></span>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a href="#">取消关注</a>
                                                                </li>

                                                            </ul>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-4">
                                                <div class=" fans_card">
                                                    <div class="row">
                                                        <div class="col-xs-4 fans_pic">
                                                            <a href="./others.html" class="fans_pic">
                                                                <img class="fan" src="./img/fan_01.png" alt="" />
                                                            </a>
                                                        </div>

                                                        <div class="col-xs-6 fans_description">
                                                            <div class="fans_name">张三三</div>
                                                            <div class="fans_introduction">某公司老总</div>
                                                            <div class="fans_introduction">关注11|粉丝20万</div>
                                                            <span class="btn btn-default foucus">
                                                            <span class="dropdown-toggle" data-toggle="dropdown" >互相关注<span class="glyphicon glyphicon-chevron-up"></span></span>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a href="#">取消关注</a>
                                                                </li>

                                                            </ul>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <div class=" fans_card">
                                                    <div class="row">
                                                        <div class="col-xs-4 fans_pic">
                                                            <a href="./others.html" class="fans_pic">
                                                                <img class="fan" src="./img/fan_01.png" alt="" />
                                                            </a>
                                                        </div>

                                                        <div class="col-xs-6 fans_description">
                                                            <div class="fans_name">张三三</div>
                                                            <div class="fans_introduction">某公司老总</div>
                                                            <div class="fans_introduction">关注11|粉丝20万</div>
                                                            <span class="btn btn-default foucus">
                                                            <span class="dropdown-toggle" data-toggle="dropdown" >互相关注<span class="glyphicon glyphicon-chevron-up"></span></span>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a href="#">取消关注</a>
                                                                </li>

                                                            </ul>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-4">
                                                <div class=" fans_card">
                                                    <div class="row">
                                                        <div class="col-xs-4 fans_pic">
                                                            <a href="./others.html" class="fans_pic">
                                                                <img class="fan" src="./img/fan_01.png" alt="" />
                                                            </a>
                                                        </div>

                                                        <div class="col-xs-6 fans_description">
                                                            <div class="fans_name">张三三</div>
                                                            <div class="fans_introduction">某公司老总</div>
                                                            <div class="fans_introduction">关注11|粉丝20万</div>
                                                            <span class="btn btn-default foucus">
                                                            <span class="dropdown-toggle" data-toggle="dropdown" >互相关注<span class="glyphicon glyphicon-chevron-up"></span></span>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a href="#">取消关注</a>
                                                                </li>

                                                            </ul>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-4">
                                                <div class=" fans_card">
                                                    <div class="row">
                                                        <div class="col-xs-4 fans_pic">
                                                            <a href="./others.html" class="fans_pic">
                                                                <img class="fan" src="./img/fan_01.png" alt="" />
                                                            </a>
                                                        </div>

                                                        <div class="col-xs-6 fans_description">
                                                            <div class="fans_name">张三三</div>
                                                            <div class="fans_introduction">某公司老总</div>
                                                            <div class="fans_introduction">关注11|粉丝20万</div>
                                                            <span class="btn btn-default foucus">
                                                            <span class="dropdown-toggle" data-toggle="dropdown" >互相关注<span class="glyphicon glyphicon-chevron-up"></span></span>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a href="#">取消关注</a>
                                                                </li>

                                                            </ul>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="seemore">
                                                <a href="">查看更多</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="follows">
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <div class=" fans_card">
                                                    <div class="row">
                                                        <div class="col-xs-4 fans_pic">
                                                            <a href="./others.html" class="fans_pic">
                                                                <img class="fan" src="./img/fan_01.png" alt="" />
                                                            </a>
                                                        </div>

                                                        <div class="col-xs-6 fans_description">
                                                            <div class="fans_name">张三三</div>
                                                            <div class="fans_introduction">某公司老总</div>
                                                            <div class="fans_introduction">关注11|粉丝20万</div>
                                                            <span class="btn btn-default foucus">
                                                            <span class="dropdown-toggle" data-toggle="dropdown" >互相关注<span class="glyphicon glyphicon-chevron-up"></span></span>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a href="#">取消关注</a>
                                                                </li>

                                                            </ul>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-4">
                                                <div class=" fans_card">
                                                    <div class="row">
                                                        <div class="col-xs-4 fans_pic">
                                                            <a href="./others.html" class="fans_pic">
                                                                <img class="fan" src="./img/fan_01.png" alt="" />
                                                            </a>
                                                        </div>

                                                        <div class="col-xs-6 fans_description">
                                                            <div class="fans_name">张三三</div>
                                                            <div class="fans_introduction">某公司老总</div>
                                                            <div class="fans_introduction">关注11|粉丝20万</div>
                                                            <span class="btn btn-default foucus">
                                                            <span class="dropdown-toggle" data-toggle="dropdown" >互相关注<span class="glyphicon glyphicon-chevron-up"></span></span>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a href="#">取消关注</a>
                                                                </li>

                                                            </ul>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-4">
                                                <div class=" fans_card">
                                                    <div class="row">
                                                        <div class="col-xs-4 fans_pic">
                                                            <a href="./others.html" class="fans_pic">
                                                                <img class="fan" src="./img/fan_01.png" alt="" />
                                                            </a>
                                                        </div>

                                                        <div class="col-xs-6 fans_description">
                                                            <div class="fans_name">张三三</div>
                                                            <div class="fans_introduction">某公司老总</div>
                                                            <div class="fans_introduction">关注11|粉丝20万</div>
                                                            <span class="btn btn-default foucus">
                                                            <span class="dropdown-toggle" data-toggle="dropdown" >互相关注<span class="glyphicon glyphicon-chevron-up"></span></span>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a href="#">取消关注</a>
                                                                </li>

                                                            </ul>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="seemore">
                                                <a href="">查看更多</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="fans">
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <div class=" fans_card">
                                                    <div class="row">
                                                        <div class="col-xs-4 fans_pic">
                                                            <a href="./others.html" class="fans_pic">
                                                                <img class="fan" src="./img/fan_01.png" alt="" />
                                                            </a>
                                                        </div>

                                                        <div class="col-xs-6 fans_description">
                                                            <div class="fans_name">张三三</div>
                                                            <div class="fans_introduction">某公司老总</div>
                                                            <div class="fans_introduction">关注11|粉丝20万</div>
                                                            <span class="btn btn-default foucus">
                                                            <span class="dropdown-toggle" data-toggle="dropdown" >互相关注<span class="glyphicon glyphicon-chevron-up"></span></span>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a href="#">取消关注</a>
                                                                </li>

                                                            </ul>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-4">
                                                <div class=" fans_card">
                                                    <div class="row">
                                                        <div class="col-xs-4 fans_pic">
                                                            <a href="./others.html" class="fans_pic">
                                                                <img class="fan" src="./img/fan_01.png" alt="" />
                                                            </a>
                                                        </div>

                                                        <div class="col-xs-6 fans_description">
                                                            <div class="fans_name">张三三</div>
                                                            <div class="fans_introduction">某公司老总</div>
                                                            <div class="fans_introduction">关注11|粉丝20万</div>
                                                            <span class="btn btn-default foucus">
                                                            <span class="dropdown-toggle" data-toggle="dropdown" >互相关注<span class="glyphicon glyphicon-chevron-up"></span></span>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a href="#">取消关注</a>
                                                                </li>

                                                            </ul>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-4">
                                                <div class=" fans_card">
                                                    <div class="row">
                                                        <div class="col-xs-4 fans_pic">
                                                            <a href="./others.html" class="fans_pic">
                                                                <img class="fan" src="./img/fan_01.png" alt="" />
                                                            </a>
                                                        </div>

                                                        <div class="col-xs-6 fans_description">
                                                            <div class="fans_name">张三三</div>
                                                            <div class="fans_introduction">某公司老总</div>
                                                            <div class="fans_introduction">关注11|粉丝20万</div>
                                                            <span class="btn btn-default foucus">
                                                            <span class="dropdown-toggle" data-toggle="dropdown" >互相关注<span class="glyphicon glyphicon-chevron-up"></span></span>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a href="#">取消关注</a>
                                                                </li>

                                                            </ul>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="seemore">
                                                <a href="">查看更多</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
<!--		<script type="text/javascript">-->
<!--	$(function() {-->
<!--		$('.nav li').click(function(e) {-->
<!--			$('.nav li').removeClass('active');-->
<!--			//$(e.target).addClass('active');-->
<!--			$(this).addClass('active');-->
<!--		});-->
<!--	});-->
<!---->
<!--	</script>-->
	</body>
	</html>	