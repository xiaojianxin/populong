<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
    <title>个人中心</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
            <div class="col-xs-9">
                <div id="message">
                    <div class="threetab">
                        <div class="tabbable" id="fourtab">
                            <ul class="nav nav-tabs">
                                <li class="active allpro">
                                    <a href="#receiveComment" data-toggle="tab">收到的评论</a>
                                </li>
                                <li>
                                    <a href="#sendComment" data-toggle="tab">发出的评论</a>
                                </li>
                                <li class="">
                                    <a href="#privateMsg" data-toggle="tab">私信</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="receiveComment">
                                </div>
                                <div class="tab-pane active" id="sendComment">
                                </div>
                                <div class="tab-pane active" id="privateMsg">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>