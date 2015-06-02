<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
	<title>泡泡隆首页热门</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="布尔教育 http://www.itbool.com" />
	<link rel="stylesheet"  href="./css/reset.css"/>
	<link rel="stylesheet" type="text/css" href="./css/index.css">
	<link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
	<script src="./js/jquery-1.10.1.js"></script>
	<script type="text/javascript" src="./js/index.js"></script>
	<script src="./bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
	<div id="back"></div>
		<div id="login" class="modal fade">
			<form action="">
			<img src="./img/login_01.png" alt="" />
			<h1>登陆</h1>
			<input class="login_username" type="text" name=""value="邮箱/手机">
			<input class="login_passwd" type="password" name="password">
			<a id="tofind1"data-toggle="modal" data-target="#find1" href="#find1">忘记密码/</a>
			<a id="toregist"href="./regist_1.php">快速注册</a>
			<input type="submit" value="登陆" class="checklogin">
			<form action="">
		</div>

	<form action="">
		<div id="find1" class="modal fade">
			<img src="./img/login_02.png" alt="" />
			<h1>找回密码</h1>
			<input class="login_username" type="text" name=""value="邮箱/手机">
			<input class="login_passwd" type="text" name=""value="验证码">
			<a class="checkcode"href="#">1234</a>
			<a id="tofind2" data-toggle="modal" data-target="#find2" href="#find2">下一步</a>
		</div>
		<div id="find2">
			<img src="./img/login_02.png" alt="" />
			<h1>找回密码</h1>
			<h2>已向13311229866发送手机验证码</h2>
			<input class="login_passwd" type="text" name=""value="验证码">
			<input class="login_passwd_button" type="button" name=""value="60秒后再次发送">
			<input type="submit"value="提交"/ id="tofind3">
		</div>
		<div id="find3">
			<img src="./img/login_02.png" alt="" />
			<h1>找回密码</h1>
			<h2>已将验证地址发送至您的邮箱，请查收！</h2>
			<a id="toemail"href="http://mail.163.com/">查看邮箱</a>
		</div>
	</form>	
	<?php require('./nav.php') ?>
<div id="container">
	<div id="playimages" class="play">
		<ul class="big_pic">

			<div class="prev">
				<img src="./img/prev.png" alt="" />
			</div>
			<div class="next">
				<img src="./img/next.png" alt="" />
			</div>

			<div class="text">加载图片说明……</div>
			<div class="length">计算图片数量……</div>

			<a class="mark_left" href="javascript:;"></a>
			<a class="mark_right" href="javascript:;"></a>

			<div class="bg">
					
			</div>
			<li style="z-index:1;"><img src="images/1.jpg" /></li>
			<li><img src="images/2.jpg" /></li>
			<li><img src="images/3.jpg" /></li>
			<li><img src="images/4.jpg" /></li>
			<li><img src="images/5.jpg" /></li>
			<li><img src="images/6.jpg" /></li>
		</ul>
		<div class="small_pic">
			<ul style="width:390px;">
				<li style="filter: 100; opacity: 1;"><img src="images/1.jpg" /></li>
				<li><img src="images/2.jpg" /></li>
				<li><img src="images/3.jpg" /></li>
				<li><img src="images/4.jpg" /></li>
				<li><img src="images/5.jpg" /></li>
				<li><img src="images/6.jpg" /></li>
			</ul>
		</div>
	</div>	
	<div id="main">
		<div id="hotpro">
			<div class="container">
				<div class="content-top">
					<div class="row">
						<div class="col-md-2">
							<h1>热门项目</h1>
						</div>
						<div class="col-md-2 col-md-offset-8">
						    <div style="height:20px;"></div> 
							<a href="./hotpro.html">查看更多>></a>
						</div>
					</div>
				</div>
				<div class="content-main">
					<div class="row">
						<div class="col-md-7">
							<a href="./pro.html">
								<img class="project"src="./img/index_01.png" alt="2" style="width:100%" />
							</a>
						</div>
						<div class="col-md-5">
							<h1>MICLE傲血顶级订制主机</h1>
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
						<div class="col-md-4">
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
						<div class="col-md-4">
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
						<div class="col-md-4">
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
							<div class="col-md-2">
								<h1>热门投资</h1>
							</div>
							<div class="col-md-2 col-md-offset-8">
								<div style="height:20px;"></div> 
								<a href="./hotinvest.html">查看更多>></a>
							</div>
						</div>
				</div>
				<div class="content-foot">
					<div class="row">
						<div class="col-md-4">
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
						<div class="col-md-4">
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
						<div class="col-md-4">
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
							<div class="col-md-2">
								<h1>即将到期</h1>
							</div>
							<div class="col-md-2 col-md-offset-8">
								<div style="height:20px;"></div> 
								<a href="./hotinvest.html">查看更多>></a>
							</div>
						</div>
				</div>
				<div class="content-foot">
					<div class="row">
						<div class="col-md-4">
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
						<div class="col-md-4">
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
						<div class="col-md-4">
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
							<div class="col-md-2">
								<h1>热门路演</h1>
							</div>
							<div class="col-md-2 col-md-offset-8">
								<div style="height:20px;"></div> 
								<a href="./hotinvest.html">查看更多>></a>
							</div>
						</div>
				</div>
				<div class="content-foot">
					<div class="row">
						<div class="col-md-4">
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
						<div class="col-md-4">
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
						<div class="col-md-4">
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
	<div id="footer" >
		<div class="container">
			<div class="row">
				<div class="col-md-1 col-md-offset-4">
					<span>关于我们</span>
					<span class="pull-right">|</span>
				</div>
				<div class="col-md-1">
					<span>联系我们</span>
					<span class="pull-right">|</span>
				</div>
				<div class="col-md-1">
					<span>帮助中心</span>
					<span class="pull-right">|</span>
				</div>
				<div class="col-md-1">
					<span>服务规范</span>
				</div>
			</div>
			<div style="text-align:center">
				<span>如有问题请联系400-000-000</span>
			</div>
		</div>
	</div>
</div>
