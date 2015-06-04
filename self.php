<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
	<title>个人中心个人界面</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="布尔教育 http://www.itbool.com" />
	<link rel="stylesheet"  href="./css/reset.css"/>
	<link rel="stylesheet" type="text/css" href="./css/headfoot.css">
	<link rel="stylesheet" type="text/css" href="./css/self.css">
    <link rel="stylesheet" type="text/css" href="./css/leftnav.css">
	<script type="text/javascript" src="./js/self.js"></script>
	<script type="text/javascript" src="./js/login.js"></script>
    <script type="text/javascript" src="./js/leftnav.js"></script>
	<link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
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
                         <?php require('./leftnav.php') ?>


                        <div  class="col-xs-9">
                            <div class="self_right_top">
                                <div class='self_pic'>
                                      <img src="./img/head_02.png" alt="" />
                                      
                                </div>
                                <div class="self_explain">Lilith-泡泡隆设计师</div>
                                <div class="container" id="self_nav">
                                    <div id="topbottom" class="row">
                                        <div id="toChooseOne"class="col-xs-3 content_nav"  onclick=invChoose()>发起的项目</div>
                                        <div id="toChooseTwo"class="col-xs-3 content_nav" >关注的项目</div>
                                        <div id="toChooseThree"class="col-xs-3 content_nav" >关注者110</div>
                                        <div id="toChooseFour"class="col-xs-3 content_nav" >粉丝110万</div>
                                    </div>
                                </div>
                            </div>

                            <div id="self_fans">
                            <div class="row">
                                <div class="col-xs-4 fans_card">
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
                                            <a class="foucus" href="./others.html">关注</a>
                                        </div>
                                    </div>
                                </div>
                               
                                 <div class="col-xs-4 fans_card">
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
                                            <a class="foucus" href="./others.html">关注</a>
                                        </div>
                                    </div>
                                </div>
                                  <div class="col-xs-4 fans_card">
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
                                            <a class="foucus" href="./others.html">关注</a>
                                        </div>
                                    </div>
                                </div>
                        
                        </div>

                        <div class="row">
                                <div class="col-xs-4 fans_card">
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
                                            <a class="foucus" href="./others.html">关注</a>
                                        </div>
                                    </div>
                                </div>
                               
                                 <div class="col-xs-4 fans_card">
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
                                            <a class="foucus" href="./others.html">关注</a>
                                        </div>
                                    </div>
                                </div>
                                  <div class="col-xs-4 fans_card">
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
                                            <a class="foucus" href="./others.html">关注</a>
                                        </div>
                                    </div>
                                </div>
                        
                        </div>

                        <div class="row">
                                <div class="col-xs-4 fans_card">
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
                                            <a class="foucus" href="./others.html">关注</a>
                                        </div>
                                    </div>
                                </div>
                               
                                 <div class="col-xs-4 fans_card">
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
                                            <a class="foucus" href="./others.html">关注</a>
                                        </div>
                                    </div>
                                </div>
                                  <div class="col-xs-4 fans_card">
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
                                            <a class="foucus" href="./others.html">关注</a>
                                        </div>
                                    </div>
                                </div>
                        
                        </div>



                        
                    </div>
                </div>
            </div>



                            <div class="fanone">
                                <div class="fanoneleft">
                                    <a href="./others.html">
                                        <img class="fan" src="./img/fan_01.png" alt="" />
                                    </a>
                                </div>
                                <div class="fanoneright">
                                    <h2>张三三</h2>
                                    <h4>某公司老总</h4>
                                    <h3>关注11|粉丝20万</h3>
                                    <a class="foucus" href="./others.html">关注</a>
                                </div>
                            </div>
                            <div class="fanone">
                                <div class="fanoneleft">
                                    <a href="./others.html">
                                        <img class="fan" src="./img/fan_01.png" alt="" />
                                    </a>
                                </div>
                                <div class="fanoneright">
                                    <h2>李四四</h2>
                                    <h4>某公司老总</h4>
                                    <h3>关注11|粉丝20万</h3>
                                    <a class="foucus" href="./others.html">关注</a>
                                </div>
                            </div>
                            <div class="fanone">
                                <div class="fanoneleft">
                                    <a href="./others.html">
                                        <img class="fan" src="./img/fan_01.png" alt="" />
                                    </a>
                                </div>
                                <div class="fanoneright">
                                    <h2>王五五</h2>
                                    <h4>某公司老总</h4>
                                    <h3>关注11|粉丝20万</h3>
                                    <a class="foucus" href="./others.html">关注</a>
                                </div>
                            </div>
                            <div class="fanone">
                                <div class="fanoneleft">
                                    <a href="./others.html">
                                        <img class="fan" src="./img/fan_01.png" alt="" />
                                    </a>
                                </div>
                                <div class="fanoneright">
                                    <h2>张三三</h2>
                                    <h4>某公司老总</h4>
                                    <h3>关注11|粉丝20万</h3>
                                    <a class="foucus" href="./others.html">关注</a>
                                </div>
                            </div>
                            <div class="fanone">
                                <div class="fanoneleft">
                                    <a href="./others.html">
                                        <img class="fan" src="./img/fan_01.png" alt="" />
                                    </a>
                                </div>
                                <div class="fanoneright">
                                    <h2>李四四</h2>
                                    <h4>某公司老总</h4>
                                    <h3>关注11|粉丝20万</h3>
                                    <a class="foucus" href="./others.html">关注</a>
                                </div>
                            </div>
                            <div class="fanone">
                                <div class="fanoneleft">
                                    <a href="./others.html">
                                        <img class="fan" src="./img/fan_01.png" alt="" />
                                    </a>
                                </div>
                                <div class="fanoneright">
                                    <h2>王五五</h2>
                                    <h4>某公司老总</h4>
                                    <h3>关注11|粉丝20万</h3>
                                    <a class="foucus" href="./others.html">关注</a>
                                </div>
                            </div>
                            <div class="fanone">
                                <div class="fanoneleft">
                                    <a href="./others.html">
                                        <img class="fan" src="./img/fan_01.png" alt="" />
                                    </a>
                                </div>
                                <div class="fanoneright">
                                    <h2>张三三</h2>
                                    <h4>某公司老总</h4>
                                    <h3>关注11|粉丝20万</h3>
                                    <a class="foucus" href="./others.html">关注</a>
                                </div>
                            </div>
                            <div class="fanone">
                                <div class="fanoneleft">
                                    <a href="./others.html">
                                        <img class="fan" src="./img/fan_01.png" alt="" />
                                    </a>
                                </div>
                                <div class="fanoneright">
                                    <h2>李四四</h2>
                                    <h4>某公司老总</h4>
                                    <h3>关注11|粉丝20万</h3>
                                    <a class="foucus" href="./others.html">关注</a>
                                </div>
                            </div>
                            <div class="fanone">
                                <div class="fanoneleft">
                                    <a href="./others.html">
                                        <img class="fan" src="./img/fan_01.png" alt="" />
                                    </a>
                                </div>
                                <div class="fanoneright">
                                    <h2>王五五</h2>
                                    <h4>某公司老总</h4>
                                    <h3>关注11|粉丝20万</h3>
                                    <a class="foucus" href="./others.html">关注</a>
                                </div>
                            </div>
                            <div class="fanone">
                                <div class="fanoneleft">
                                    <a href="./others.html">
                                        <img class="fan" src="./img/fan_01.png" alt="" />
                                    </a>
                                </div>
                                <div class="fanoneright">
                                    <h2>张三三</h2>
                                    <h4>某公司老总</h4>
                                    <h3>关注11|粉丝20万</h3>
                                    <a class="foucus" href="./others.html">关注</a>
                                </div>
                            </div>
                            <div class="fanone">
                                <div class="fanoneleft">
                                    <a href="./others.html">
                                        <img class="fan" src="./img/fan_01.png" alt="" />
                                    </a>
                                </div>
                                <div class="fanoneright">
                                    <h2>李四四</h2>
                                    <h4>某公司老总</h4>
                                    <h3>关注11|粉丝20万</h3>
                                    <a class="foucus" href="./others.html">关注</a>
                                </div>
                            </div>
                            <div class="fanone">
                                <div class="fanoneleft">
                                    <a href="./others.html">
                                        <img class="fan" src="./img/fan_01.png" alt="" />
                                    </a>
                                </div>
                                <div class="fanoneright">
                                    <h2>王五五</h2>
                                    <h4>某公司老总</h4>
                                    <h3>关注11|粉丝20万</h3>
                                    <a class="foucus" href="./others.html">关注</a>
                                </div>
                            </div>
                        </div>
                        
                    
                    </div>
                </div>
				    

				<div id="self_right">
					<div id="selfRight1">
						
						
						<div id="self_right_bottom2">
							<div id="otherchoose">
								<div class="main_one">
									<a href="./pro.html">
										<img class="project"src="./img/index_04.png" alt="2" />
									</a>
									<h2>泡泡隆投资平台</h2>
									<a href="">
										<h3>发起人:孙总</h3>
									</a>
									<h4>最大限度服务投资者，为投资者打造最优投资平台，为有梦想的项目发起者提供展示自我的最佳平台.100%</h4>
									<h5 class="txt1">16%</h5>
									<img class="place"src="./img/index_details1.png" alt="地点" />
									<h6>北京</h6>
									<div class="progray">
										<div class="progreen"></div>
									</div>
									<h4>￥1234567  90天</br>已筹金额  剩余天数</h4>

								</div>
								<div class="main_one">
									<a href="./pro.html">
										<img class="project"src="./img/index_05.png" alt="2" />
									</a>
									<h2>泡泡隆投资平台</h2>
									<a href="">
										<h3>发起人:孙总</h3>
									</a>
									<h4>最大限度服务投资者，为投资者打造最优投资平台，为有梦想的项目发起者提供展示自我的最佳平台.100%</h4>
									<h5 class="txt1">16%</h5>
									<img class="place"src="./img/index_details1.png" alt="地点" />
									<h6>北京</h6>
									<div class="progray">
										<div class="progreen"></div>
									</div>
									<h4>￥1234567  90天</br>已筹金额  剩余天数</h4>
								</div>
								<div class="main_two">
									<a href="./pro.html">
										<img class="project"src="./img/index_06.png" alt="2" />
									</a>
									<h2>泡泡隆投资平台</h2>
									<a href="">
										<h3>发起人:孙总</h3>
									</a>
									<h4>最大限度服务投资者，为投资者打造最优投资平台，为有梦想的项目发起者提供展示自我的最佳平台.100%</h4>
									<h5 class="txt1">16%</h5>
									<img class="place"src="./img/index_details1.png" alt="地点" />
									<h6>北京</h6>
									<div class="progray">
										<div class="progreen"></div>
									</div>
									<h4>￥1234567  90天</br>已筹金额  剩余天数</h4>

								</div>
							</div>
							<div id="otherchoose">
								<div class="main_one">
									<a href="./pro.html">
										<img class="project"src="./img/index_04.png" alt="2" />
									</a>
									<h2>泡泡隆投资平台</h2>
									<a href="">
										<h3>发起人:孙总</h3>
									</a>
									<h4>最大限度服务投资者，为投资者打造最优投资平台，为有梦想的项目发起者提供展示自我的最佳平台.100%</h4>
									<h5 class="txt1">16%</h5>
									<img class="place"src="./img/index_details1.png" alt="地点" />
									<h6>北京</h6>
									<div class="progray">
										<div class="progreen"></div>
									</div>
									<h4>￥1234567  90天</br>已筹金额  剩余天数</h4>

								</div>
								<div class="main_one">
									<a href="./pro.html">
										<img class="project"src="./img/index_05.png" alt="2" />
									</a>
									<h2>泡泡隆投资平台</h2>
									<a href="">
										<h3>发起人:孙总</h3>
									</a>
									<h4>最大限度服务投资者，为投资者打造最优投资平台，为有梦想的项目发起者提供展示自我的最佳平台.100%</h4>
									<h5 class="txt1">16%</h5>
									<img class="place"src="./img/index_details1.png" alt="地点" />
									<h6>北京</h6>
									<div class="progray">
										<div class="progreen"></div>
									</div>
									<h4>￥1234567  90天</br>已筹金额  剩余天数</h4>
								</div>
								<div class="main_two">
									<a href="./pro.html">
										<img class="project"src="./img/index_06.png" alt="2" />
									</a>
									<h2>泡泡隆投资平台</h2>
									<a href="">
										<h3>发起人:孙总</h3>
									</a>
									<h4>最大限度服务投资者，为投资者打造最优投资平台，为有梦想的项目发起者提供展示自我的最佳平台.100%</h4>
									<h5 class="txt1">16%</h5>
									<img class="place"src="./img/index_details1.png" alt="地点" />
									<h6>北京</h6>
									<div class="progray">
										<div class="progreen"></div>
									</div>
									<h4>￥1234567  90天</br>已筹金额  剩余天数</h4>

								</div>
							</div>
						</div>
						<div id="self_right_bottom3">
							<div class="fanone">
								<div class="fanoneleft">
									<a href="./others.html">
										<img class="fan" src="./img/fan_01.png" alt="" />
									</a>
								</div>
								<div class="fanoneright">
									<h2>张三三</h2>
									<h4>某公司老总</h4>
									<h3>关注11|粉丝20万</h3>
									<a class="foucus" href="./others.html">关注</a>
								</div>
							</div>
							<div class="fanone">
								<div class="fanoneleft">
									<a href="./others.html">
										<img class="fan" src="./img/fan_01.png" alt="" />
									</a>
								</div>
								<div class="fanoneright">
									<h2>李四四</h2>
									<h4>某公司老总</h4>
									<h3>关注11|粉丝20万</h3>
									<a class="foucus" href="./others.html">关注</a>
								</div>
							</div>
							<div class="fanone">
								<div class="fanoneleft">
									<a href="./others.html">
										<img class="fan" src="./img/fan_01.png" alt="" />
									</a>
								</div>
								<div class="fanoneright">
									<h2>王五五</h2>
									<h4>某公司老总</h4>
									<h3>关注11|粉丝20万</h3>
									<a class="foucus" href="./others.html">关注</a>
								</div>
							</div>
							<div class="fanone">
								<div class="fanoneleft">
									<a href="./others.html">
										<img class="fan" src="./img/fan_01.png" alt="" />
									</a>
								</div>
								<div class="fanoneright">
									<h2>张三三</h2>
									<h4>某公司老总</h4>
									<h3>关注11|粉丝20万</h3>
									<a class="foucus" href="./others.html">关注</a>
								</div>
							</div>
							<div class="fanone">
								<div class="fanoneleft">
									<a href="./others.html">
										<img class="fan" src="./img/fan_01.png" alt="" />
									</a>
								</div>
								<div class="fanoneright">
									<h2>李四四</h2>
									<h4>某公司老总</h4>
									<h3>关注11|粉丝20万</h3>
									<a class="foucus" href="./others.html">关注</a>
								</div>
							</div>
							<div class="fanone">
								<div class="fanoneleft">
									<a href="./others.html">
										<img class="fan" src="./img/fan_01.png" alt="" />
									</a>
								</div>
								<div class="fanoneright">
									<h2>王五五</h2>
									<h4>某公司老总</h4>
									<h3>关注11|粉丝20万</h3>
									<a class="foucus" href="./others.html">关注</a>
								</div>
							</div>
							<div class="fanone">
								<div class="fanoneleft">
									<a href="./others.html">
										<img class="fan" src="./img/fan_01.png" alt="" />
									</a>
								</div>
								<div class="fanoneright">
									<h2>张三三</h2>
									<h4>某公司老总</h4>
									<h3>关注11|粉丝20万</h3>
									<a class="foucus" href="./others.html">关注</a>
								</div>
							</div>
							<div class="fanone">
								<div class="fanoneleft">
									<a href="./others.html">
										<img class="fan" src="./img/fan_01.png" alt="" />
									</a>
								</div>
								<div class="fanoneright">
									<h2>李四四</h2>
									<h4>某公司老总</h4>
									<h3>关注11|粉丝20万</h3>
									<a class="foucus" href="./others.html">关注</a>
								</div>
							</div>
							<div class="fanone">
								<div class="fanoneleft">
									<a href="./others.html">
										<img class="fan" src="./img/fan_01.png" alt="" />
									</a>
								</div>
								<div class="fanoneright">
									<h2>王五五</h2>
									<h4>某公司老总</h4>
									<h3>关注11|粉丝20万</h3>
									<a class="foucus" href="./others.html">关注</a>
								</div>
							</div>
							<div class="fanone">
								<div class="fanoneleft">
									<a href="./others.html">
										<img class="fan" src="./img/fan_01.png" alt="" />
									</a>
								</div>
								<div class="fanoneright">
									<h2>张三三</h2>
									<h4>某公司老总</h4>
									<h3>关注11|粉丝20万</h3>
									<a class="foucus" href="./others.html">关注</a>
								</div>
							</div>
							<div class="fanone">
								<div class="fanoneleft">
									<a href="./others.html">
										<img class="fan" src="./img/fan_01.png" alt="" />
									</a>
								</div>
								<div class="fanoneright">
									<h2>李四四</h2>
									<h4>某公司老总</h4>
									<h3>关注11|粉丝20万</h3>
									<a class="foucus" href="./others.html">关注</a>
								</div>
							</div>
							<div class="fanone">
								<div class="fanoneleft">
									<a href="./others.html">
										<img class="fan" src="./img/fan_01.png" alt="" />
									</a>
								</div>
								<div class="fanoneright">
									<h2>王五五</h2>
									<h4>某公司老总</h4>
									<h3>关注11|粉丝20万</h3>
									<a class="foucus" href="./others.html">关注</a>
								</div>
							</div>
							<div class="fanone">
								<div class="fanoneleft">
									<a href="./others.html">
										<img class="fan" src="./img/fan_01.png" alt="" />
									</a>
								</div>
								<div class="fanoneright">
									<h2>张三三</h2>
									<h4>某公司老总</h4>
									<h3>关注11|粉丝20万</h3>
									<a class="foucus" href="./others.html">关注</a>
								</div>
							</div>
							<div class="fanone">
								<div class="fanoneleft">
									<a href="./others.html">
										<img class="fan" src="./img/fan_01.png" alt="" />
									</a>
								</div>
								<div class="fanoneright">
									<h2>李四四</h2>
									<h4>某公司老总</h4>
									<h3>关注11|粉丝20万</h3>
									<a class="foucus" href="./others.html">关注</a>
								</div>
							</div>
							<div class="fanone">
								<div class="fanoneleft">
									<a href="./others.html">
										<img class="fan" src="./img/fan_01.png" alt="" />
									</a>
								</div>
								<div class="fanoneright">
									<h2>王五五</h2>
									<h4>某公司老总</h4>
									<h3>关注11|粉丝20万</h3>
									<a class="foucus" href="./others.html">关注</a>
								</div>
							</div>
						</div>
						<div id="self_right_bottom4">
							<div class="fanone">
								<div class="fanoneleft">
									<a href="./others.html">
										<img class="fan" src="./img/fan_01.png" alt="" />
									</a>
								</div>
								<div class="fanoneright">
									<h2>孙悟空</h2>
									<h4>战士</h4>
									<h3>关注11|粉丝20万</h3>
									<a class="foucus" href="./others.html">关注</a>
								</div>
							</div>
							<div class="fanone">
								<div class="fanoneleft">
									<a href="./others.html">
										<img class="fan" src="./img/fan_01.png" alt="" />
									</a>
								</div>
								<div class="fanoneright">
									<h2>周润发</h2>
									<h4>演员</h4>
									<h3>关注11|粉丝20万</h3>
									<a class="foucus" href="./others.html">关注</a>
								</div>
							</div>
							<div class="fanone">
								<div class="fanoneleft">
									<a href="./others.html">
										<img class="fan" src="./img/fan_01.png" alt="" />
									</a>
								</div>
								<div class="fanoneright">
									<h2>买买提</h2>
									<h4>艺术家</h4>
									<h3>关注11|粉丝20万</h3>
									<a class="foucus" href="./others.html">关注</a>
								</div>
							</div><div class="fanone">
								<div class="fanoneleft">
									<a href="./others.html">
										<img class="fan" src="./img/fan_01.png" alt="" />
									</a>
								</div>
								<div class="fanoneright">
									<h2>八戒</h2>
									<h4>某胖子</h4>
									<h3>关注11|粉丝20万</h3>
									<a class="foucus" href="./others.html">关注</a>
								</div>
							</div>
							<div class="fanone">
								<div class="fanoneleft">
									<a href="./others.html">
										<img class="fan" src="./img/fan_01.png" alt="" />
									</a>
								</div>
								<div class="fanoneright">
									<h2>拉登</h2>
									<h4>某公司老总</h4>
									<h3>关注11|粉丝20万</h3>
									<a class="foucus" href="./others.html">关注</a>
								</div>
							</div>
							<div class="fanone">
								<div class="fanoneleft">
									<a href="./others.html">
										<img class="fan" src="./img/fan_01.png" alt="" />
									</a>
								</div>
								<div class="fanoneright">
									<h2>西红柿</h2>
									<h4>某公司老总</h4>
									<h3>关注11|粉丝20万</h3>
									<a class="foucus" href="./others.html">关注</a>
								</div>
							</div><div class="fanone">
								<div class="fanoneleft">
									<a href="./others.html">
										<img class="fan" src="./img/fan_01.png" alt="" />
									</a>
								</div>
								<div class="fanoneright">
									<h2>北极熊</h2>
									<h4>某公司老总</h4>
									<h3>关注11|粉丝20万</h3>
									<a class="foucus" href="./others.html">关注</a>
								</div>
							</div>
							<div class="fanone">
								<div class="fanoneleft">
									<a href="./others.html">
										<img class="fan" src="./img/fan_01.png" alt="" />
									</a>
								</div>
								<div class="fanoneright">
									<h2>田园犬</h2>
									<h4>某公司老总</h4>
									<h3>关注11|粉丝20万</h3>
									<a class="foucus" href="./others.html">关注</a>
								</div>
							</div>
							<div class="fanone">
								<div class="fanoneleft">
									<a href="./others.html">
										<img class="fan" src="./img/fan_01.png" alt="" />
									</a>
								</div>
								<div class="fanoneright">
									<h2>马屁精</h2>
									<h4>某公司老总</h4>
									<h3>关注11|粉丝20万</h3>
									<a class="foucus" href="./others.html">关注</a>
								</div>
							</div><div class="fanone">
								<div class="fanoneleft">
									<a href="./others.html">
										<img class="fan" src="./img/fan_01.png" alt="" />
									</a>
								</div>
								<div class="fanoneright">
									<h2>树莓派</h2>
									<h4>某公司老总</h4>
									<h3>关注11|粉丝20万</h3>
									<a class="foucus" href="./others.html">关注</a>
								</div>
							</div>
							<div class="fanone">
								<div class="fanoneleft">
									<a href="./others.html">
										<img class="fan" src="./img/fan_01.png" alt="" />
									</a>
								</div>
								<div class="fanoneright">
									<h2>李四四</h2>
									<h4>某公司老总</h4>
									<h3>关注11|粉丝20万</h3>
									<a class="foucus" href="./others.html">关注</a>
								</div>
							</div>
							<div class="fanone">
								<div class="fanoneleft">
									<a href="./others.html">
										<img class="fan" src="./img/fan_01.png" alt="" />
									</a>
								</div>
								<div class="fanoneright">
									<h2>王五五</h2>
									<h4>某公司老总</h4>
									<h3>关注11|粉丝20万</h3>
									<a class="foucus" href="./others.html">关注</a>
								</div>
							</div><div class="fanone">
								<div class="fanoneleft">
									<a href="./others.html">
										<img class="fan" src="./img/fan_01.png" alt="" />
									</a>
								</div>
								<div class="fanoneright">
									<h2>张三三</h2>
									<h4>某公司老总</h4>
									<h3>关注11|粉丝20万</h3>
									<a class="foucus" href="./others.html">关注</a>
								</div>
							</div>
							<div class="fanone">
								<div class="fanoneleft">
									<a href="./others.html">
										<img class="fan" src="./img/fan_01.png" alt="" />
									</a>
								</div>
								<div class="fanoneright">
									<h2>李四四</h2>
									<h4>某公司老总</h4>
									<h3>关注11|粉丝20万</h3>
									<a class="foucus" href="./others.html">关注</a>
								</div>
							</div>
							<div class="fanone">
								<div class="fanoneleft">
									<a href="./others.html">
										<img class="fan" src="./img/fan_01.png" alt="" />
									</a>
								</div>
								<div class="fanoneright">
									<h2>王五五</h2>
									<h4>某公司老总</h4>
									<h3>关注11|粉丝20万</h3>
									<a class="foucus" href="./others.html">关注</a>
								</div>
							</div>
						</div>
					</div>
					<div id="selfRight2">
						<div id="selfRight2_top">
							<h1>交易记录</h1>
						</div>
						<div id="selfRight2_bottom">
							<ul id="tradetype">
								<li><a href="#">交易类型：</a></li>
								<li><a href="#"id="toTradetype1">全部</a></li>
								<li><a href="#"id="toTradetype2">充值</a></li>
								<li><a href="#"id="toTradetype3">提现</a></li>
								<li><a href="#"id="toTradetype4">投资</a></li>
								<li><a href="#"id="toTradetype5">收益</a></li>
							</ul>
							<div id="tradeType1">
								<li>
								<h1>时间</h1>
								<h2>交易类型</h2>
								<h3>交易详情</h3>
								<h4>金额</h4>
								<h5>备注</h5>
							</li>
							<li>
								<h1>2015.01.22 23:26</h1>
								<h2>充值</h2>
								<h3>充值500元</h3>
								<h4>500</h4>
								<h5>无</h5>
							</li>
							<li>
								<h1>2015.01.22 23:26</h1>
								<h2>提现</h2>
								<h3>提现500元</h3>
								<h4>500</h4>
								<h5>无</h5>
							</li>
							<li>
								<h1>2015.01.22 23:26</h1>
								<h2>投资</h2>
								<h3>投资500元</h3>
								<h4>500</h4>
								<h5>无</h5>
							</li>
							<li>
								<h1>2015.01.22 23:26</h1>
								<h2>收益</h2>
								<h3>收益500元</h3>
								<h4>500</h4>
								<h5>无</h5>
							</li>
							<li>
								<h1>2015.01.22 23:26</h1>
								<h2>充值</h2>
								<h3>充值500元</h3>
								<h4>500</h4>
								<h5>无</h5>
							</li>
							<li>
								<h1>2015.01.22 23:26</h1>
								<h2>提现</h2>
								<h3>提现500元</h3>
								<h4>500</h4>
								<h5>无</h5>
							</li>
							<li>
								<h1>2015.01.22 23:26</h1>
								<h2>投资</h2>
								<h3>投资500元</h3>
								<h4>500</h4>
								<h5>无</h5>
							</li>
							<li>
								<h1>2015.01.22 23:26</h1>
								<h2>收益</h2>
								<h3>收益500元</h3>
								<h4>500</h4>
								<h5>无</h5>
							</li>
							<li>
								<h1>2015.01.22 23:26</h1>
								<h2>充值</h2>
								<h3>充值500元</h3>
								<h4>500</h4>
								<h5>无</h5>
							</li>
							<li>
								<h1>2015.01.22 23:26</h1>
								<h2>提现</h2>
								<h3>提现500元</h3>
								<h4>500</h4>
								<h5>无</h5>
							</li>
							<li>
								<h1>2015.01.22 23:26</h1>
								<h2>投资</h2>
								<h3>投资500元</h3>
								<h4>500</h4>
								<h5>无</h5>
							</li>
							<li>
								<h1>2015.01.22 23:26</h1>
								<h2>收益</h2>
								<h3>收益500元</h3>
								<h4>500</h4>
								<h5>无</h5>
							</li>
							</div>
							<div id="tradeType2">
								<li>
								<h1>时间</h1>
								<h2>交易类型</h2>
								<h3>交易详情</h3>
								<h4>金额</h4>
								<h5>备注</h5>
							</li>
							<li>
								<h1>2015.01.22 23:26</h1>
								<h2>充值</h2>
								<h3>充值500元</h3>
								<h4>500</h4>
								<h5>无</h5>
							</li>
							<li>
								<h1>2015.01.22 23:26</h1>
								<h2>充值</h2>
								<h3>充值500元</h3>
								<h4>500</h4>
								<h5>无</h5>
							</li>
							<li>
								<h1>2015.01.22 23:26</h1>
								<h2>充值</h2>
								<h3>充值500元</h3>
								<h4>500</h4>
								<h5>无</h5>
							</li>
							</div>
							<div id="tradeType3">
								<li>
								<h1>时间</h1>
								<h2>交易类型</h2>
								<h3>交易详情</h3>
								<h4>金额</h4>
								<h5>备注</h5>
							</li>
							<li>
								<h1>2015.01.22 23:26</h1>
								<h2>提现</h2>
								<h3>提现500元</h3>
								<h4>500</h4>
								<h5>无</h5>
							</li>
							<li>
								<h1>2015.01.22 23:26</h1>
								<h2>提现</h2>
								<h3>提现500元</h3>
								<h4>500</h4>
								<h5>无</h5>
							</li>
							<li>
								<h1>2015.01.22 23:26</h1>
								<h2>提现</h2>
								<h3>提现500元</h3>
								<h4>500</h4>
								<h5>无</h5>
							</li>
							</div>
							<div id="tradeType4">
							<li>
								<h1>2015.01.22 23:26</h1>
								<h2>投资</h2>
								<h3>投资500元</h3>
								<h4>500</h4>
								<h5>无</h5>
							</li>
							<li>
								<h1>2015.01.22 23:26</h1>
								<h2>投资</h2>
								<h3>投资500元</h3>
								<h4>500</h4>
								<h5>无</h5>
							</li>
							<li>
								<h1>2015.01.22 23:26</h1>
								<h2>投资</h2>
								<h3>投资500元</h3>
								<h4>500</h4>
								<h5>无</h5>
							</li>
							</div>
							<div id="tradeType5">
							<li>
								<h1>2015.01.22 23:26</h1>
								<h2>收益</h2>
								<h3>收益500元</h3>
								<h4>500</h4>
								<h5>无</h5>
							</li>
							<li>
								<h1>2015.01.22 23:26</h1>
								<h2>收益</h2>
								<h3>收益500元</h3>
								<h4>500</h4>
								<h5>无</h5>
							</li>
							<li>
								<h1>2015.01.22 23:26</h1>
								<h2>收益</h2>
								<h3>收益500元</h3>
								<h4>500</h4>
								<h5>无</h5>
							</li>
							</div>
						</div>
					</div>
					<div id="selfRight3">
						<div class="selfRight3_top">
							<h1>充值</h1>
						</div>
						<div id="selfRight3_center">
							<li>
								<img src="./img/self_02.png" alt="" />
								<h1>充值金额</h1>
								<form action="">
									<input type="text" />
								</form>
							</li>
								<h2>当前可用金额：</h2>
								<h3>0.00</h3>
								<h4>元</h4>
						</div>
						<div class="selfRight3_top">
							<h1>充值</h1>
						</div>
						<div id="selfRight3_bottom">
							<h1>支付平台</h1>
							<img src="./img/invest_02.png" alt="" />
						</div>
						<input type="submit"value="充值" />
						<div id="selfRight3_foot">
							<p>温馨提示</br>1.为了您的账户安全，请在充值前进行身份认证、手机绑定以及提现密码设置</br>2.您的账户资金将由第三方平台托管</br>3.请注意您的银行卡充值限制，以免造成不便，每日的充值限额一句各银行限额为准。</br>4.禁止洗钱、虚假交易等行为，一经发现并确认，将终止该账户的使用。</br>5.如果充值金额没有及时到账，请联系客服电话4009-099-888</p>
						</div>
					</div>
					<div id="selfRight4">
						<div class="selfRight4_top">
							<h1>提现</h1>
						</div>
						<div id="selfRight4_center">
							<li>
								<img src="./img/self_02.png" alt="" />
								<h1>提现金额</h1>
								<form action="">
									<input type="text" />
								</form>
							</li>
								<h2>可用金额：</h2>
								<h3>0.00</h3>
								<h4>元</h4>
								<h2>提现费用：</h2>
								<h3>0.00</h3>
								<h4>元</h4>
								<h2>实际扣除金额：</h2>
								<h3>0.00</h3>
								<h4>元</h4>
							<li>
								<img src="./img/self_02.png" alt="" />
								<h1>手机号码</h1>
								<form action="">
									<input type="text" />
								</form>
							</li>
							<li>
								<img src="./img/self_02.png" alt="" />
								<h1>手机验证</h1>
								<form action="">
									<input type="text" />
								</form>
							</li>
							<input type="submit"id="telephonecheck"value="点击再次获取" />

						</div>
						<input type="submit"value="提现" />
						<div id="selfRight4_foot">
							<p>温馨提示</br>1.为了您的账户安全，请在充值前进行身份认证、手机绑定以及提现密码设置</br>2.您的账户资金将由第三方平台托管</br>3.请注意您的银行卡充值限制，以免造成不便，每日的充值限额一句各银行限额为准。</br>4.禁止洗钱、虚假交易等行为，一经发现并确认，将终止该账户的使用。</br>5.如果充值金额没有及时到账，请联系客服电话4009-099-888</p>
						</div>
					</div>
					<div id="selfRight5">
						<div class="self_right_top">
							<img src="./img/head_02.png" alt="" />
							<h1>Lilith-泡泡隆设计师</h1>
							<div id="topbottom">
								<div id="toChooseOne"class="prize"onclick=invChoose()>我投资的项目</div>
							</div>
						</div>
						<div id="self_right_bottom1">
							<div id="otherchoose">
								<div class="main_one">
									<a href="./pro.html">
										<img class="project"src="./img/index_01.png" alt="2" />
									</a>
									<h2>泡泡隆投资平台</h2>
									<a href="">
										<h3>发起人:孙总</h3>
									</a>
									<h4>最大限度服务投资者，为投资者打造最优</br>投资平台，为有梦想的项目发起者提供</br>展示自我的最佳平台.100%</h4>
									<h5 class="txt1">16%</h5>
									<img class="place"src="./img/index_details1.png" alt="地点" />
									<h6>北京</h6>
									<div class="progray">
										<div class="progreen"></div>
									</div>
									<h4>￥1234567  90天</br>已筹金额  剩余天数</h4>

								</div>
								<div class="main_one">
									<a href="./pro.html">
										<img class="project"src="./img/index_02.png" alt="2" />
									</a>
									<h2>泡泡隆投资平台</h2>
									<a href="">
										<h3>发起人:孙总</h3>
									</a>
									<h4>最大限度服务投资者，为投资者打造最优</br>投资平台，为有梦想的项目发起者提供</br>展示自我的最佳平台.100%</h4>
									<h5 class="txt1">16%</h5>
									<img class="place"src="./img/index_details1.png" alt="地点" />
									<h6>北京</h6>
									<div class="progray">
										<div class="progreen"></div>
									</div>
									<h4>￥1234567  90天</br>已筹金额  剩余天数</h4>
								</div>
								<div class="main_two">
									<a href="./pro.html">
										<img class="project"src="./img/index_03.png" alt="2" />
									</a>
									<h2>泡泡隆投资平台</h2>
									<a href="">
										<h3>发起人:孙总</h3>
									</a>
									<h4>最大限度服务投资者，为投资者打造最优</br>投资平台，为有梦想的项目发起者提供</br>展示自我的最佳平台.100%</h4>
									<h5 class="txt1">16%</h5>
									<img class="place"src="./img/index_details1.png" alt="地点" />
									<h6>北京</h6>
									<div class="progray">
										<div class="progreen"></div>
									</div>
									<h4>￥1234567  90天</br>已筹金额  剩余天数</h4>

								</div>
							</div>
							<div id="otherchoose">
								<div class="main_one">
									<a href="./pro.html">
										<img class="project"src="./img/index_01.png" alt="2" />
									</a>
									<h2>泡泡隆投资平台</h2>
									<a href="">
										<h3>发起人:孙总</h3>
									</a>
									<h4>最大限度服务投资者，为投资者打造最优</br>投资平台，为有梦想的项目发起者提供</br>展示自我的最佳平台.100%</h4>
									<h5 class="txt1">16%</h5>
									<img class="place"src="./img/index_details1.png" alt="地点" />
									<h6>北京</h6>
									<div class="progray">
										<div class="progreen"></div>
									</div>
									<h4>￥1234567  90天</br>已筹金额  剩余天数</h4>

								</div>
								<div class="main_one">
									<a href="./pro.html">
										<img class="project"src="./img/index_02.png" alt="2" />
									</a>
									<h2>泡泡隆投资平台</h2>
									<a href="">
										<h3>发起人:孙总</h3>
									</a>
									<h4>最大限度服务投资者，为投资者打造最优</br>投资平台，为有梦想的项目发起者提供</br>展示自我的最佳平台.100%</h4>
									<h5 class="txt1">16%</h5>
									<img class="place"src="./img/index_details1.png" alt="地点" />
									<h6>北京</h6>
									<div class="progray">
										<div class="progreen"></div>
									</div>
									<h4>￥1234567  90天</br>已筹金额  剩余天数</h4>
								</div>
								<div class="main_two">
									<a href="./pro.html">
										<img class="project"src="./img/index_03.png" alt="2" />
									</a>
									<h2>泡泡隆投资平台</h2>
									<a href="">
										<h3>发起人:孙总</h3>
									</a>
									<h4>最大限度服务投资者，为投资者打造最优</br>投资平台，为有梦想的项目发起者提供</br>展示自我的最佳平台.100%</h4>
									<h5 class="txt1">16%</h5>
									<img class="place"src="./img/index_details1.png" alt="地点" />
									<h6>北京</h6>
									<div class="progray">
										<div class="progreen"></div>
									</div>
									<h4>￥1234567  90天</br>已筹金额  剩余天数</h4>
								</div>
							</div>
						</div>
					</div>
					<div id="selfRight6">
						<div class="self_right_top">
							<img src="./img/head_02.png" alt="" />
							<h1>Lilith-泡泡隆设计师</h1>
							<div id="topbottom">
								<div id="toChooseOne"class="prize"onclick=invChoose()>二级市场</div>
							</div>
						</div>
						<div id="self_right_bottom1">
							<div id="otherchoose">
								<div class="main_one">
									<a href="./pro.html">
										<img class="project"src="./img/index_01.png" alt="2" />
									</a>
									<h2>泡泡隆投资平台</h2>
									<a href="">
										<h3>发起人:孙总</h3>
									</a>
									<h4>最大限度服务投资者，为投资者打造最优</br>投资平台，为有梦想的项目发起者提供</br>展示自我的最佳平台.100%</h4>
									<h5 class="txt1">16%</h5>
									<img class="place"src="./img/index_details1.png" alt="地点" />
									<h6>北京</h6>
									<div class="progray">
										<div class="progreen"></div>
									</div>
									<h4>￥1234567  90天</br>已筹金额  剩余天数</h4>

								</div>
								<div class="main_one">
									<a href="./pro.html">
										<img class="project"src="./img/index_01.png" alt="2" />
									</a>
									<h2>泡泡隆投资平台</h2>
									<a href="">
										<h3>发起人:孙总</h3>
									</a>
									<h4>最大限度服务投资者，为投资者打造最优</br>投资平台，为有梦想的项目发起者提供</br>展示自我的最佳平台.100%</h4>
									<h5 class="txt1">16%</h5>
									<img class="place"src="./img/index_details1.png" alt="地点" />
									<h6>北京</h6>
									<div class="progray">
										<div class="progreen"></div>
									</div>
									<h4>￥1234567  90天</br>已筹金额  剩余天数</h4>
								</div>
								<div class="main_two">
									<a href="./pro.html">
										<img class="project"src="./img/index_01.png" alt="2" />
									</a>
									<h2>泡泡隆投资平台</h2>
									<a href="">
										<h3>发起人:孙总</h3>
									</a>
									<h4>最大限度服务投资者，为投资者打造最优</br>投资平台，为有梦想的项目发起者提供</br>展示自我的最佳平台.100%</h4>
									<h5 class="txt1">16%</h5>
									<img class="place"src="./img/index_details1.png" alt="地点" />
									<h6>北京</h6>
									<div class="progray">
										<div class="progreen"></div>
									</div>
									<h4>￥1234567  90天</br>已筹金额  剩余天数</h4>

								</div>
							</div>
							<div id="otherchoose">
								<div class="main_one">
									<a href="./pro.html">
										<img class="project"src="./img/index_01.png" alt="2" />
									</a>
									<h2>泡泡隆投资平台</h2>
									<a href="">
										<h3>发起人:孙总</h3>
									</a>
									<h4>最大限度服务投资者，为投资者打造最优</br>投资平台，为有梦想的项目发起者提供</br>展示自我的最佳平台.100%</h4>
									<h5 class="txt1">16%</h5>
									<img class="place"src="./img/index_details1.png" alt="地点" />
									<h6>北京</h6>
									<div class="progray">
										<div class="progreen"></div>
									</div>
									<h4>￥1234567  90天</br>已筹金额  剩余天数</h4>

								</div>
								<div class="main_one">
									<a href="./pro.html">
										<img class="project"src="./img/index_02.png" alt="2" />
									</a>
									<h2>泡泡隆投资平台</h2>
									<a href="">
										<h3>发起人:孙总</h3>
									</a>
									<h4>最大限度服务投资者，为投资者打造最优</br>投资平台，为有梦想的项目发起者提供</br>展示自我的最佳平台.100%</h4>
									<h5 class="txt1">16%</h5>
									<img class="place"src="./img/index_details1.png" alt="地点" />
									<h6>北京</h6>
									<div class="progray">
										<div class="progreen"></div>
									</div>
									<h4>￥1234567  90天</br>已筹金额  剩余天数</h4>
								</div>
								<div class="main_two">
									<a href="./pro.html">
										<img class="project"src="./img/index_03.png" alt="2" />
									</a>
									<h2>泡泡隆投资平台</h2>
									<a href="">
										<h3>发起人:孙总</h3>
									</a>
									<h4>最大限度服务投资者，为投资者打造最优</br>投资平台，为有梦想的项目发起者提供</br>展示自我的最佳平台.100%</h4>
									<h5 class="txt1">16%</h5>
									<img class="place"src="./img/index_details1.png" alt="地点" />
									<h6>北京</h6>
									<div class="progray">
										<div class="progreen"></div>
									</div>
									<h4>￥1234567  90天</br>已筹金额  剩余天数</h4>
								</div>
							</div>
						</div>
					</div>
					<div id="selfRight7">
						<div id="selfRight7_top">
							<h1>交易记录|</h1>
							<h1>正在筹资|</h1>
							<h1>筹资成功|</h1>
							<h1>筹资失败|</h1>
						</div>
						<div id="selfRight7_bottom">
							<ul id="tradetype">
								<li><a href="#">项目名称</a></li>
								<li><a href="#">筹资时间</a></li>
								<li><a href="#">目标金额</a></li>
								<li><a href="#">当前进度</a></li>
								<li><a href="#">项目状态</a></li>
							</ul>
							<li>
								<a href="./pro.html"><img src="./img/index_01.png" alt="" /></a>
								<h1>时间</h1>
								<h2>交易类型</h2>
								<h3>交易详情</h3>
								<h4>金额</h4>
								<h5>备注</h5>
							</li>
							<li>
								<a href="./pro.html"><img src="./img/index_01.png" alt="" /></a>
								<h1>时间</h1>
								<h2>交易类型</h2>
								<h3>交易详情</h3>
								<h4>金额</h4>
								<h5>备注</h5>
							</li>
							<li>
								<a href="./pro.html"><img src="./img/index_01.png" alt="" /></a>
								<h1>时间</h1>
								<h2>交易类型</h2>
								<h3>交易详情</h3>
								<h4>金额</h4>
								<h5>备注</h5>
							</li>
							<li>
								<a href="./pro.html"><img src="./img/index_01.png" alt="" /></a>
								<h1>时间</h1>
								<h2>交易类型</h2>
								<h3>交易详情</h3>
								<h4>金额</h4>
								<h5>备注</h5>
							</li>
							<li>
								<a href="./pro.html"><img src="./img/index_01.png" alt="" /></a>
								<h1>时间</h1>
								<h2>交易类型</h2>
								<h3>交易详情</h3>
								<h4>金额</h4>
								<h5>备注</h5>
							</li>
							<li>
								<a href="./pro.html"><img src="./img/index_01.png" alt="" /></a>
								<h1>时间</h1>
								<h2>交易类型</h2>
								<h3>交易详情</h3>
								<h4>金额</h4>
								<h5>备注</h5>
							</li>
							<li>
								<a href="./pro.html"><img src="./img/index_01.png" alt="" /></a>
								<h1>时间</h1>
								<h2>交易类型</h2>
								<h3>交易详情</h3>
								<h4>金额</h4>
								<h5>备注</h5>
							</li>
							<li>
								<a href="./pro.html"><img src="./img/index_01.png" alt="" /></a>
								<h1>时间</h1>
								<h2>交易类型</h2>
								<h3>交易详情</h3>
								<h4>金额</h4>
								<h5>备注</h5>
							</li>
							
						</div>
					</div>
					<div id="selfRight8">
						<div id="selfRight7_top">
							<h1>全部项目|</h1>
							<h1>正在筹资|</h1>
						</div>
						<div id="self_right_bottom1">
							<div id="otherchoose">
								<div class="main_one">
									<a href="./pro.html">
										<img class="project"src="./img/index_01.png" alt="2" />
									</a>
									<h2>泡泡隆投资平台</h2>
									<a href="">
										<h3>发起人:孙总</h3>
									</a>
									<h4>最大限度服务投资者，为投资者打造最优</br>投资平台，为有梦想的项目发起者提供</br>展示自我的最佳平台.100%</h4>
									<h5 class="txt1">16%</h5>
									<img class="place"src="./img/index_details1.png" alt="地点" />
									<h6>北京</h6>
									<div class="progray">
										<div class="progreen"></div>
									</div>
									<h4>￥1234567  90天</br>已筹金额  剩余天数</h4>

								</div>
								<div class="main_one">
									<a href="./pro.html">
										<img class="project"src="./img/index_02.png" alt="2" />
									</a>
									<h2>泡泡隆投资平台</h2>
									<a href="">
										<h3>发起人:孙总</h3>
									</a>
									<h4>最大限度服务投资者，为投资者打造最优</br>投资平台，为有梦想的项目发起者提供</br>展示自我的最佳平台.100%</h4>
									<h5 class="txt1">16%</h5>
									<img class="place"src="./img/index_details1.png" alt="地点" />
									<h6>北京</h6>
									<div class="progray">
										<div class="progreen"></div>
									</div>
									<h4>￥1234567  90天</br>已筹金额  剩余天数</h4>
								</div>
								<div class="main_two">
									<a href="./pro.html">
										<img class="project"src="./img/index_03.png" alt="2" />
									</a>
									<h2>泡泡隆投资平台</h2>
									<a href="">
										<h3>发起人:孙总</h3>
									</a>
									<h4>最大限度服务投资者，为投资者打造最优</br>投资平台，为有梦想的项目发起者提供</br>展示自我的最佳平台.100%</h4>
									<h5 class="txt1">16%</h5>
									<img class="place"src="./img/index_details1.png" alt="地点" />
									<h6>北京</h6>
									<div class="progray">
										<div class="progreen"></div>
									</div>
									<h4>￥1234567  90天</br>已筹金额  剩余天数</h4>

								</div>
							</div>
							<div id="otherchoose">
								<div class="main_one">
									<a href="./pro.html">
										<img class="project"src="./img/index_01.png" alt="2" />
									</a>
									<h2>泡泡隆投资平台</h2>
									<a href="">
										<h3>发起人:孙总</h3>
									</a>
									<h4>最大限度服务投资者，为投资者打造最优</br>投资平台，为有梦想的项目发起者提供</br>展示自我的最佳平台.100%</h4>
									<h5 class="txt1">16%</h5>
									<img class="place"src="./img/index_details1.png" alt="地点" />
									<h6>北京</h6>
									<div class="progray">
										<div class="progreen"></div>
									</div>
									<h4>￥1234567  90天</br>已筹金额  剩余天数</h4>

								</div>
								<div class="main_one">
									<a href="./pro.html">
										<img class="project"src="./img/index_02.png" alt="2" />
									</a>
									<h2>泡泡隆投资平台</h2>
									<a href="">
										<h3>发起人:孙总</h3>
									</a>
									<h4>最大限度服务投资者，为投资者打造最优</br>投资平台，为有梦想的项目发起者提供</br>展示自我的最佳平台.100%</h4>
									<h5 class="txt1">16%</h5>
									<img class="place"src="./img/index_details1.png" alt="地点" />
									<h6>北京</h6>
									<div class="progray">
										<div class="progreen"></div>
									</div>
									<h4>￥1234567  90天</br>已筹金额  剩余天数</h4>
								</div>
								<div class="main_two">
									<a href="./pro.html">
										<img class="project"src="./img/index_03.png" alt="2" />
									</a>
									<h2>泡泡隆投资平台</h2>
									<a href="">
										<h3>发起人:孙总</h3>
									</a>
									<h4>最大限度服务投资者，为投资者打造最优</br>投资平台，为有梦想的项目发起者提供</br>展示自我的最佳平台.100%</h4>
									<h5 class="txt1">16%</h5>
									<img class="place"src="./img/index_details1.png" alt="地点" />
									<h6>北京</h6>
									<div class="progray">
										<div class="progreen"></div>
									</div>
									<h4>￥1234567  90天</br>已筹金额  剩余天数</h4>
								</div>
							</div>
						</div>
					</div>
					<div id="selfRight9">
						<input type="button" id="modify"value="修改信息"/>
						<div id="left9">
							<img src="./img/self_03.png" alt="" />
						</div>
						<div id="center9">
							<li>
								<img src="./img/regist_02.png" alt="" />
								<h1>个人昵称：</h1>
								<h2>shi美腻</h2>
							</li>
							<li>
								<img src="./img/regist_02.png" alt="" />
								<h1>真实姓名：</h1>
								<h2>西施</h2>
								<img src="./img/others_01.png"class="confirm" alt="" />
								<h3>已认证</h3>
							</li>
							<li>
								<img src="./img/regist_02.png" alt="" />
								<h1>身份证号：</h1>
								<h2>130481XXXXXXXX1234</h2>
								<img src="./img/others_01.png"class="confirm" alt="" />
								<h3>已认证</h3>
							</li>
							<li>
								<img src="./img/regist_02.png" alt="" />
								<h1>手机号码：</h1>
								<h2>13333554878</h2>
								<img src="./img/others_01.png"class="confirm" alt="" />
								<h3>已认证</h3>
							</li>
							<li>
								<img src="./img/regist_02.png" alt="" />
								<h1>邮箱地址：</h1>
								<h2>13333554878@qq.com</h2>
								<img src="./img/others_01.png"class="confirm" alt="" />
								<h3>已认证</h3>
							</li>
							<li>
								<img src="./img/regist_02.png" alt="" />
								<h1>性别：</h1>
								<h2>女</h2>
							</li>
							<li>
								<img src="./img/regist_02.png" alt="" />
								<h1>出生日期：</h1>
								<h2>1990-05-16</h2>
							</li>
							<li>
								<img src="./img/regist_02.png" alt="" />
								<h1>最高学历：</h1>
								<h2> </h2>
							</li>
							<li>
								<img src="./img/regist_02.png" alt="" />
								<h1>毕业院校：</h1>
								<h2> </h2>
							</li>
							<li>
								<img src="./img/regist_02.png" alt="" />
								<h1>居住地区：</h1>
								<h2> </h2>
							</li>
							<li>
								<img src="./img/regist_02.png" alt="" />
								<h1>公司行业：</h1>
								<h2> </h2>
							</li>
							<li>
								<img src="./img/regist_02.png" alt="" />
								<h1>公司规模：</h1>
								<h2> </h2>
							</li>
							<li>
								<img src="./img/regist_02.png" alt="" />
								<h1>职位：</h1>
								<h2> </h2>
							</li>
							<li>
								<img src="./img/regist_02.png" alt="" />
								<h1>月收入：</h1>
								<h2> </h2>
							</li>
						</div>
						<div id="bottom9">
							<li>
								<img src="./img/regist_02.png" alt="" />
								<h1>个人昵称：</h1>
								<input type="text" />
								<img src="./img/others_01.png"class="confirm" alt="" />
								<h3>已认证</h3>
							</li>
							<li>
								<img src="./img/regist_02.png" alt="" />
								<h1>真实姓名：</h1>
								<h2>西施</h2>
								<img src="./img/others_01.png"class="confirm" alt="" />
								<h3>已认证</h3>
							</li>
							<li>
								<img src="./img/regist_02.png" alt="" />
								<h1>身份证号：</h1>
								<h2>130481XXXXXXXX1234</h2>
								<img src="./img/others_01.png"class="confirm" alt="" />
								<h3>已认证</h3>
							</li>
							<li>
								<img src="./img/regist_02.png" alt="" />
								<h1>手机号码：</h1>
								<h2>13333554878</h2>
								<img src="./img/others_01.png"class="confirm" alt="" />
								<h3>已认证</h3>
							</li>
							<li>
								<img src="./img/regist_02.png" alt="" />
								<h1>邮箱地址：</h1>
								<h2>13333554878@qq.com</h2>
								<img src="./img/others_01.png"class="confirm" alt="" />
								<h3>已认证</h3>
							</li>
							<li>
								<img src="./img/regist_02.png" alt="" />
								<h1>性别：</h1>
								<h2>女</h2>
							</li>
							<li>
								<img src="./img/regist_02.png" alt="" />
								<h1>出生日期：</h1>
								<h2>1990-05-16</h2>
							</li>
							<li>
								<img src="./img/regist_02.png" alt="" />
								<h1>最高学历：</h1>
								<h2> </h2>
							</li>
							<li>
								<img src="./img/regist_02.png" alt="" />
								<h1>毕业院校：</h1>
								<h2> </h2>
							</li>
							<li>
								<img src="./img/regist_02.png" alt="" />
								<h1>居住地区：</h1>
								<h2> </h2>
							</li>
							<li>
								<img src="./img/regist_02.png" alt="" />
								<h1>公司行业：</h1>
								<h2> </h2>
							</li>
							<li>
								<img src="./img/regist_02.png" alt="" />
								<h1>公司规模：</h1>
								<h2> </h2>
							</li>
							<li>
								<img src="./img/regist_02.png" alt="" />
								<h1>职位：</h1>
								<h2> </h2>
							</li>
							<li>
								<img src="./img/regist_02.png" alt="" />
								<h1>月收入：</h1>
								<h2> </h2>
							</li>
						</div>
					</div>
					<div id="selfRight10">
						<input type="button" id="tosafe"value="修改信息"/>
						<div id="selfRight7_top">
							<h1>安全认证</h1>
						</div>
						<li>
							<img src="./img/confirm_02.png" alt="" />
							<h1>昵称</h1>
							<h2>shi美腻</h2>
							<h3>修改</h3>
						</li>
						<li>
							<img src="./img/confirm_03.png" alt="" />
							<h1>实名认证</h1>
							<h2>123131213131321321</h2>
							<h3>*妍</h3>
						</li>
						<li>
							<img src="./img/confirm_04.png" alt="" />
							<h1>绑定邮箱</h1>
							<h2>121231231</h2>
							<h3>修改</h3>
						</li>
						<li>
							<img src="./img/confirm_05.png" alt="" />
							<h1>绑定手机</h1>
							<h2>1231231231</h2>
							<h3>修改</h3>
						</li>
						<li>
							<img src="./img/confirm_06.png" alt="" />
							<h1>登陆密码</h1>
							<h2>未设置</h2>
							<h3>修改</h3>
						</li>
						<li>
							<img src="./img/confirm_01.png" alt="" />
							<h1>交易密码</h1>
							<h2>未设置</h2>
							<h3>修改</h3>
						</li>
					</div>
					<div id="selfRight11">
						<img src="./img/unfinnished4.jpg" alt="" />
					</div>
					<div id="selfRight12">
						<div id="selfRight12_top">
							<h1><a href="#" id="toChooseStarter">发起人排行榜</a></h1>
							<h1><a href="#" id="toChooseInvestor">投资人排行榜</a></h1>
						</div>
						<div id="selfRight12_starter">
							<ul>
							<li>名次</li>
							<li>姓名</li>
							<li>发起项目数</li>
							<li>筹集资金</li>
						</ul>
						<li>
							<h1>1</h1>
							<a href="./others.html">
								<img src="./img/self_01.png" alt="" />
							</a>
							<h2>7</h2>
							<h2>210000000</h2>
						</li>
						<li>
							<h1>2</h1>
							<a href="./others.html">
								<img src="./img/self_01.png" alt="" />
							</a>
							<h2>8</h2>
							<h2>200000000</h2>
						</li>
						<li>
							<h1>3</h1>
							<a href="./others.html">
								<img src="./img/self_01.png" alt="" />
							</a>
							<h2>8</h2>
							<h2>190000000</h2>
						</li>
						<li>
							<h1>4</h1>
							<a href="./others.html">
								<img src="./img/self_01.png" alt="" />
							</a>
							<h2>8</h2>
							<h2>180000000</h2>
						</li>
						<li>
							<h1>5</h1>
							<a href="./others.html">
								<img src="./img/self_01.png" alt="" />
							</a>
							<h2>8</h2>
							<h2>180000000</h2>
						</li>
						<li>
							<h1>6</h1>
							<a href="./others.html">
								<img src="./img/self_01.png" alt="" />
							</a>
							<h2>8</h2>
							<h2>170000000</h2>
						</li>
						<li>
							<h1>7</h1>
							<a href="./others.html">
								<img src="./img/self_01.png" alt="" />
							</a>
							<h2>8</h2>
							<h2>160000000</h2>
						</li>
						<li>
							<h1>8</h1>
							<a href="./others.html">
								<img src="./img/self_01.png" alt="" />
							</a>
							<h2>8</h2>
							<h2>150000000</h2>
						</li>
						<li>
							<h1>9</h1>
							<a href="./others.html">
								<img src="./img/self_01.png" alt="" />
							</a>
							<h2>8</h2>
							<h2>140000000</h2>
						</li>
						<li>
							<h1>10</h1>
							<a href="./others.html">
								<img src="./img/self_01.png" alt="" />
							</a>
							<h2>8</h2>
							<h2>130000000</h2>
						</li>
						</div>
						<div id="selfRight12_investor">
							<ul>
							<li>名次</li>
							<li>姓名</li>
							<li>投资项目数</li>
							<li>投资资金</li>
						</ul>
						<li>
							<h1>1</h1>
							<a href="./others.html">
								<img src="./img/self_01.png" alt="" />
							</a>
							<h2>7</h2>
							<h2>210000000</h2>
						</li>
						<li>
							<h1>2</h1>
							<a href="./others.html">
								<img src="./img/self_01.png" alt="" />
							</a>
							<h2>8</h2>
							<h2>200000000</h2>
						</li>
						<li>
							<h1>3</h1>
							<a href="./others.html">
								<img src="./img/self_01.png" alt="" />
							</a>
							<h2>8</h2>
							<h2>190000000</h2>
						</li>
						<li>
							<h1>4</h1>
							<a href="./others.html">
								<img src="./img/self_01.png" alt="" />
							</a>
							<h2>8</h2>
							<h2>180000000</h2>
						</li>
						<li>
							<h1>5</h1>
							<a href="./others.html">
								<img src="./img/self_01.png" alt="" />
							</a>
							<h2>8</h2>
							<h2>180000000</h2>
						</li>
						<li>
							<h1>6</h1>
							<a href="./others.html">
								<img src="./img/self_01.png" alt="" />
							</a>
							<h2>8</h2>
							<h2>170000000</h2>
						</li>
						<li>
							<h1>7</h1>
							<a href="./others.html">
								<img src="./img/self_01.png" alt="" />
							</a>
							<h2>8</h2>
							<h2>160000000</h2>
						</li>
						<li>
							<h1>8</h1>
							<a href="./others.html">
								<img src="./img/self_01.png" alt="" />
							</a>
							<h2>8</h2>
							<h2>150000000</h2>
						</li>
						<li>
							<h1>9</h1>
							<a href="./others.html">
								<img src="./img/self_01.png" alt="" />
							</a>
							<h2>8</h2>
							<h2>140000000</h2>
						</li>
						<li>
							<h1>10</h1>
							<a href="./others.html">
								<img src="./img/self_01.png" alt="" />
							</a>
							<h2>8</h2>
							<h2>130000000</h2>
						</li>
						</div>
					</div>
				</div>
			</div> 
			<div id="footer">
				<h1> <a href="http://www.bolongruncheng.com/"> 北京伯隆润成投资有限公司</a></h1>
				<h1>投资有风险，本平台投资行为责任用户自理，所有投资行为最终解释权归本公司所有</h1>
			</div>
		</div>
		<script type="text/javascript">
	$(function() {
		$('.nav li').click(function(e) {
			$('.nav li').removeClass('active');
			//$(e.target).addClass('active');
			$(this).addClass('active');
		});
	});

	</script>
	</body>
	</html>	