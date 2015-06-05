<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
    <title>泡泡隆首页热门</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="布尔教育 http://www.itbool.com" />
    <link rel="stylesheet"  href="./css/reset.css"/>
    <link rel="stylesheet" href="./css/swiper.min.css">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./css/index.css">
    <link rel="stylesheet" type="text/css" href="./css/footer.css">
    <script src="./js/jquery-1.10.1.js"></script>
    <script type="text/javascript" src="./js/swiper3.07.min.js"></script>
    <script type="text/javascript" src="./js/index.js"></script>
    <script src="./bootstrap/js/bootstrap.min.js"></script>
    <!--[if lt IE 9]>
    <script src="http://apps.bdimg.com/libs/html5shiv/3.7/html5shiv.min.js"></script>
    <script src="http://apps.bdimg.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>



<?php require('./nav.php') ?>
<div id="container">

<div class="modal fade" id="login" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">
                    <img src="./img/login_01.png" alt="" />
                    登陆
                </h4>
            </div>
            <div class="modal-body">
                <form action="">

                    <div class="form-group">
                        <input type="email" class="form-control login_username" placeholder="邮箱/手机">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control login_passwd" placeholder="密码">
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox">记住用户名
                        </label>
                    </div>
                    <div class="forget" style="margin-top: 10px;">
                        <div class="row">
                            <div class="col-sm-6" style="margin-top: 20px">
                                <a id="tofind1" href="#forgetPW" data-toggle="modal" data-target="#forgetPW">忘记密码</a>
                                <span>&nbsp;|&nbsp;</span>
                                <a id="toregist"href="./regist_1.php">快速注册</a>
                            </div>
                            <div class="col-sm-6 ">
                                <button type="submit" class="btn checklogin pull-right">登陆</button>
                            </div>
                        </div>
                    </div>



                </form>
            </div>

        </div>

    </div>

</div>
<div class="modal fade" id="forgetPW" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">
                    <span class="glyphicon glyphicon-arrow-right"></span>
                    找回密码
                </h4>
            </div>
            <div class="modal-body">
                <form action="">

                    <div class="form-group">
                        <input type="email" class="form-control findAccount" placeholder="注册时的邮箱或者手机号码">
                    </div>
                    <div class="form-group">

                        <div class="row">
                            <div class="col-xs-6">
                                <input type="text" class="form-control checkCode" placeholder="验证码">
                            </div>
                            <div class="col-xs-6">
                                <input type="text" class="form-control checkEmail" placeholder="1 2 3 4"/>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-10"></div>
                        <div class="col-sm-2">
                            <div id="nextFind" class="btn nextStep btn-lg pull-right" >
                                <a href="#inputCode"
                                   data-toggle="modal" data-target="#inputCode">下一步</a>
                            </div>
                        </div>

                    </div>


                </form>
            </div>

        </div>

    </div>

</div>
<div class="modal fade" id="inputCode" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">
                    <span class="glyphicon glyphicon-arrow-right"></span>
                    找回密码
                </h4>
            </div>
            <div class="modal-body">
                <h2>已向13000000000发送手机验证码：</h2>
                <div class="form-group">

                    <div class="row">
                        <div class="col-xs-6">
                            <input type="text" class="form-control checkCode" placeholder="验证码">
                        </div>
                        <div class="col-xs-6">
                            <div class="btn btn-default btn-lg">60s后再次发送</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-10"></div>
                        <div class="col-sm-2">
                            <div id="submitFind" class="btn nextStep pull-right btn-lg" >
                                <a href="#sendCode"
                                   data-toggle="modal" data-target="#sendCode">提交</a>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>

    </div>

</div>

<div class="modal fade" id="sendCode" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">
                    <span class="glyphicon glyphicon-arrow-right"></span>
                    找回密码
                </h4>
            </div>
            <div class="modal-body">
               <h2>已将验证地址发送到您的手机，请查收</h2>

                <div class="row">
                    <div class="col-sm-4">

                    </div>
                    <div class="col-sm-4">
                        <div class="btn btn-lg gotoEmail"><a href="www.126.com">现在去邮箱</div>
                    </div>
                    <div class="col-sm-4">

                    </div>
                </div>

            </div>

        </div>

    </div>

</div>

<div class="swiper-container">
    <div class="swiper-wrapper">
        <div class="swiper-slide"><img src="images/44.jpg" /></div>
        <div class="swiper-slide"><img src="images/55.jpg" /></div>
        <div class="swiper-slide"><img src="images/66.jpg" /></div>
        <div class="swiper-slide"><img src="images/77.jpg" /></div>
        <div class="swiper-slide"><img src="images/88.jpg" /></div>
        <div class="swiper-slide"><img src="images/zz.jpg" /></div>

    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>
<div id="main">
<div id="hotpro">
<div class="container">
<div class="content-top">
    <div class="row">
        <div class="col-sm-4">
            <h1>热门项目</h1>
        </div>
        <div class="col-sm-4 col-sm-offset-4 ">
            <div style="height:20px;"></div>
            <a href="./hotpro.html" class="pull-right">查看更多>></a>
        </div>
    </div>
</div>
<div class="content-main">
    <div class="row">
        <div class="col-sm-7">
            <a href="./pro.html">
                <img class="project"src="./img/index_01.png" alt="2" style="width:100%" />
            </a>
        </div>
        <div class="col-sm-5">
            <h1>MICLE傲血顶级订制主机</h1>

            <h2><a href="#">由Lilith发起</a></h2>

            <h2><a href="0">由Lilith发起</a></h2>

            <p>英特尔30周年纪念全球制定机型，高端pc独家强力推荐，MICLE傲血顶级订制主机，值得拥有。</p>
            <div style="height:20px;"></div>
            <div id="right_center">
                <div class="row">
                    <div class="col-xs-4">
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
                    <div class="col-xs-4">
                    </div>
                </div>
                <div class="row">
                    <div class="progray">
                        <div class="progreen"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-5">
                        <span>20,000元</span>
                    </div>
                    <div class="col-xs-5">
										<span>
											10天
										</span>

                    </div>
                    <div class="col-xs-2">
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-5">
                        <span>已筹集资金</span>
                    </div>
                    <div class="col-xs-5">
										<span>
											剩余天数
										</span>

                    </div>
                    <div class="col-xs-2">
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top:20px;">
                <div class="col-xs-6">
									<span class="pull-left">
										<img class="investor"src="./img/index_details3.png" alt="投资者" />
									</span>
									<span>
									投资者：220
									</span>
                </div>
                <div class="col-xs-6 pull-right">
									<span >
										<img class="follower"src="./img/index_details4.png" alt="投资者" />
									</span>
									<span>
									关注者：1500
									</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content-foot">
    <div class="row">
        <div class="col-sm-4">
            <div class="onebox">
                <a href="./pro.html">
                    <img class="project"src="./img/index_02.png" alt="2" />
                </a>
                <h2>泡泡隆投资平台</h2>
                <a href="">
                    <h3>发起人:孙总</h3>
                </a>
                <h4>最大限度服务投资者，为投资者打造最优</br>投资平台，为有梦想的项目发起者提供</br>展示自我的最佳平台</h4>
                <div id="right_center">
                    <div class="row">
                        <div class="col-xs-6">
                            <span>已完成:</span>
                            <span class="percentage-text">75%</span>
                        </div>
                        <div class="col-xs-1">

                            <img class="place"src="./img/index_details1.png" alt="地点" />

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
        </div>
        <div class="col-sm-4">
            <div class="onebox">
                <a href="./pro.html">
                    <img class="project"src="./img/index_03.png" alt="2" />
                </a>
                <h2>泡泡隆投资平台</h2>
                <a href="">
                    <h3>发起人:孙总</h3>
                </a>
                <h4>最大限度服务投资者，为投资者打造最优</br>投资平台，为有梦想的项目发起者提供</br>展示自我的最佳平台</h4>
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
        </div>
        <div class="col-sm-4">
            <div class="onebox">
                <a href="./pro.html">
                    <img class="project"src="./img/index_04.png" alt="2" />
                </a>
                <h2>泡泡隆投资平台</h2>
                <a href="">
                    <h3>发起人:孙总</h3>
                </a>
                <h4>最大限度服务投资者，为投资者打造最优</br>投资平台，为有梦想的项目发起者提供</br>展示自我的最佳平台</h4>
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
        </div>
    </div>
</div>
</div>
</div>
<div id="hotinv">
    <div class="container">
        <div class="content-top">
            <div class="row">
                <div class="col-sm-4">
                    <h1>热门投资</h1>
                </div>
                <div class="col-sm-4 col-sm-offset-4">
                    <div style="height:20px;"></div>
                    <a href="./hotinvest.html" class="pull-right">查看更多>></a>
                </div>
            </div>
        </div>
        <div class="content-foot">
            <div class="row">
                <div class="col-sm-4">
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
                </div>
                <div class="col-sm-4">
                    <div class="onebox">
                        <a href="./pro.html">
                            <img class="project"src="./img/index_06.png" alt="2" />
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
                </div>
                <div class="col-sm-4">
                    <div class="onebox">
                        <a href="./pro.html">
                            <img class="project"src="./img/index_07.png" alt="2" />
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
                </div>
            </div>
        </div>
    </div>
</div>
<div id="hottime">
    <div class="container">
        <div class="content-top">
            <div class="row">
                <div class="col-sm-4">
                    <h1>即将到期</h1>
                </div>
                <div class="col-sm-4 col-sm-offset-4">
                    <div style="height:20px;"></div>
                    <a href="./hotinvest.html" class="pull-right">查看更多>></a>
                </div>
            </div>
        </div>
        <div class="content-foot">
            <div class="row">
                <div class="col-sm-4">
                    <div class="onebox">
                        <a href="./pro.html">
                            <img class="project"src="./img/index_08.png" alt="2" />
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
                </div>
                <div class="col-sm-4">
                    <div class="onebox">
                        <a href="./pro.html">
                            <img class="project"src="./img/index_09.png" alt="2" />
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
                </div>
                <div class="col-sm-4">
                    <div class="onebox">
                        <a href="./pro.html">
                            <img class="project"src="./img/index_10.png" alt="2" />
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
                </div>
            </div>
        </div>
    </div>
</div>
<div id="hotvid">
    <div class="container">
        <div class="content-top">
            <div class="row">
                <div class="col-sm-4">
                    <h1>热门路演</h1>
                </div>
                <div class="col-sm-4 col-sm-offset-4">
                    <div style="height:20px;"></div>
                    <a href="./hotinvest.html" class="pull-right">查看更多>></a>
                </div>
            </div>
        </div>
        <div class="content-foot">
            <div class="row">
                <div class="col-sm-4">
                    <div class="onebox">
                        <a href="./pro.html">
                            <img class="project"src="./img/index_03.png" alt="2" />
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
                </div>
                <div class="col-sm-4">
                    <div class="onebox">
                        <a href="./pro.html">
                            <img class="project"src="./img/index_06.png" alt="2" />
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
                </div>
                <div class="col-sm-4">
                    <div class="onebox">
                        <a href="./pro.html">
                            <img class="project"src="./img/index_09.png" alt="2" />
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
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?php require('./footer.php')?>
</div>

<script type="text/javascript">
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        paginationClickable: true,
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: 2500,
        autoplayDisableOnInteraction: false
    });
    $("#tofind1").click(function(){
        $('#login').modal('hide');

    });
    $("#nextFind").click(function(){
        $("#forgetPW").modal('hide');
    });
    $("#submitFind").click(function(){
        $("#inputCode").modal('hide');
    })
</script>
</body>
</html>
