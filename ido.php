<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
	<title>我做你投</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="布尔教育 http://www.itbool.com" />
	<link rel="stylesheet"  href="./css/reset.css"/>
	<link rel="stylesheet" type="text/css" href="./css/index.css">
	<script type="text/javascript" src="./js/index.js"></script>
	<link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
	<script src="./js/jquery-1.10.1.js"></script>
	<script src="./bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
	<div id="back"></div>
	<div id="login">
		<img src="./img/login_01.png" alt="" />
		<h1>登陆</h1>
		<input class="login_username" type="text" name=""value="邮箱/手机">
		<input class="login_passwd" type="password" name="password"value="">
		<input class="remember" type="checkbox">
		<h2>记住用户名&nbsp;&nbsp;</h2>
		<a id="tofind1"href="#">忘记密码/</a>
		<a id="toregist"href="./regist_1.html">快速注册</a>
		<a class="checklogin"href="./indexlogin.html">登陆</a>
	</div>
	<div id="find1">
		<img src="./img/login_02.png" alt="" />
		<h1>找回密码</h1>
		<input class="login_username" type="text" name=""value="邮箱/手机">
		<input class="login_passwd" type="text" name=""value="验证码">
		<a class="checkcode"href="#">1234</a>
		<a id="tofind2"href="#">下一步</a>
	</div>
	<div id="find2">
		<img src="./img/login_02.png" alt="" />
		<h1>找回密码</h1>
		<h2>已向13311229866发送手机验证码</h2>
		<input class="login_passwd" type="text" name=""value="验证码">
		<input class="login_passwd" type="text" name=""value="60秒后再次发送">
		<a id="tofind3"href="#">提交</a>
	</div>
	<div id="find3">
		<img src="./img/login_02.png" alt="" />
		<h1>找回密码</h1>
		<h2>已将验证地址发送至您的邮箱，请查收！</h2>
		<a id="toemail"href="http://mail.163.com/">提交</a>
	</div>
	<div id="container">
		<?php require('./nav.php') ?>
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

				<div class="bg"></div>

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
				<div id="content_one">
					<div class="contentone_top">
						<h1>你投项目</h1>
						<a href="./hotpro.html">查看更多>></a>
					</div>

					<div class="contentone_bottom">
						<div id="main_left">
							<a href="./pro.html">
								<img class="project"src="./img/index_01.png" alt="2" />
							</a>
						</div>
						<div id="main_right">
							<h1>MICLE傲血顶级订制主机</h1>
							<h2><a href="0">由Lilith发起</a></h2>
							<p style="margin-top:44px;">英特尔30周年纪念全球制定机型，高端pc独家强力推荐，MICLE傲血顶级订制主机，值得拥有。</br></br></br></p>
							<div id="right_center"> 
								<h3>已完成75%</h3>
								<img class="place"src="./img/index_details1.png" alt="地点" />
								<h4>北京</br></h4>
							</div>
							<img class="progress"src="./img/index_details2.png" alt="进度" />
							<h5>￥1234567        90天</br>已筹金额            剩余天数</h5>
							<img class="investor"src="./img/index_details3.png" alt="投资者" />
							<div style="width:100%;height:24px;">
								<h6>投资者：220</h6>
								<img class="follower"src="./img/index_details4.png" alt="关注者" />
								<h6>关注者：1500</h7>
							</div>
						</div>
						<div class="contentone_bottom" style="margin-top:50px;float:left;">
						<div id="main_left">
							<a href="./pro.html">
								<img class="project"src="./img/index_02.png" alt="2" />
							</a>
						</div>
						<div id="main_right">
							<h1>MICLE傲血顶级订制主机</h1>
							<h2><a href="0">由Lilith发起</a></h2>
							<p style="margin-top:44px;">英特尔30周年纪念全球制定机型，高端pc独家强力推荐，MICLE傲血顶级订制主机，值得拥有。</br></br></br></p>
							<div id="right_center"> 
								<h3>已完成75%</h3>
								<img class="place"src="./img/index_details1.png" alt="地点" />
								<h4>北京</br></h4>
							</div>
							<img class="progress"src="./img/index_details2.png" alt="进度" />
							<h5>￥1234567        90天</br>已筹金额            剩余天数</h5>
							<img class="investor"src="./img/index_details3.png" alt="投资者" />
							<div style="width:100%;height:24px;">
								<h6>投资者：220</h6>
								<img class="follower"src="./img/index_details4.png" alt="关注者" />
								<h6>关注者：1500</h7>
							</div>
						</div>
						<div class="contentone_bottom" style="margin-top:50px;float:left;">
						<div id="main_left">
							<a href="./pro.html">
								<img class="project"src="./img/index_03.png" alt="2" />
							</a>
						</div>
						<div id="main_right">
							<h1>MICLE傲血顶级订制主机</h1>
							<h2><a href="0">由Lilith发起</a></h2>
							<p style="margin-top:44px;">英特尔30周年纪念全球制定机型，高端pc独家强力推荐，MICLE傲血顶级订制主机，值得拥有。</br></br></br></p>
							<div id="right_center"> 
								<h3>已完成75%</h3>
								<img class="place"src="./img/index_details1.png" alt="地点" />
								<h4>北京</br></h4>
							</div>
							<img class="progress"src="./img/index_details2.png" alt="进度" />
							<h5>￥1234567        90天</br>已筹金额            剩余天数</h5>
							<img class="investor"src="./img/index_details3.png" alt="投资者" />
							<div style="width:100%;height:24px;">
								<h6>投资者：220</h6>
								<img class="follower"src="./img/index_details4.png" alt="关注者" />
								<h6>关注者：1500</h7>
							</div>
						</div>
						<div class="contentone_bottom" style="margin-top:50px;float:left;">
						<div id="main_left">
							<a href="./pro.html">
								<img class="project"src="./img/index_04.png" alt="2" />
							</a>
						</div>
						<div id="main_right">
							<h1>MICLE傲血顶级订制主机</h1>
							<h2><a href="0">由Lilith发起</a></h2>
							<p style="margin-top:44px;">英特尔30周年纪念全球制定机型，高端pc独家强力推荐，MICLE傲血顶级订制主机，值得拥有。</br></br></br></p>
							<div id="right_center"> 
								<h3>已完成75%</h3>
								<img class="place"src="./img/index_details1.png" alt="地点" />
								<h4>北京</br></h4>
							</div>
							<img class="progress"src="./img/index_details2.png" alt="进度" />
							<h5>￥1234567        90天</br>已筹金额            剩余天数</h5>
							<img class="investor"src="./img/index_details3.png" alt="投资者" />
							<div style="width:100%;height:24px;">
								<h6>投资者：220</h6>
								<img class="follower"src="./img/index_details4.png" alt="关注者" />
								<h6>关注者：1500</h7>
							</div>
						</div>
						<div class="contentone_bottom" style="margin-top:50px;float:left;">
						<div id="main_left">
							<a href="./pro.html">
								<img class="project"src="./img/index_05.png" alt="2" />
							</a>
						</div>
						<div id="main_right">
							<h1>MICLE傲血顶级订制主机</h1>
							<h2><a href="0">由Lilith发起</a></h2>
							<p style="margin-top:44px;">英特尔30周年纪念全球制定机型，高端pc独家强力推荐，MICLE傲血顶级订制主机，值得拥有。</br></br></br></p>
							<div id="right_center"> 
								<h3>已完成75%</h3>
								<img class="place"src="./img/index_details1.png" alt="地点" />
								<h4>北京</br></h4>
							</div>
							<img class="progress"src="./img/index_details2.png" alt="进度" />
							<h5>￥1234567        90天</br>已筹金额            剩余天数</h5>
							<img class="investor"src="./img/index_details3.png" alt="投资者" />
							<div style="width:100%;height:24px;">
								<h6>投资者：220</h6>
								<img class="follower"src="./img/index_details4.png" alt="关注者" />
								<h6>关注者：1500</h7>
							</div>
						</div>
						<div class="contentone_bottom" style="margin-top:50px;float:left;">
						<div id="main_left">
							<a href="./pro.html">
								<img class="project"src="./img/index_05.png" alt="2" />
							</a>
						</div>
						<div id="main_right">
							<h1>MICLE傲血顶级订制主机</h1>
							<h2><a href="0">由Lilith发起</a></h2>
							<p style="margin-top:44px;">英特尔30周年纪念全球制定机型，高端pc独家强力推荐，MICLE傲血顶级订制主机，值得拥有。</br></br></br></p>
							<div id="right_center"> 
								<h3>已完成75%</h3>
								<img class="place"src="./img/index_details1.png" alt="地点" />
								<h4>北京</br></h4>
							</div>
							<img class="progress"src="./img/index_details2.png" alt="进度" />
							<h5>￥1234567        90天</br>已筹金额            剩余天数</h5>
							<img class="investor"src="./img/index_details3.png" alt="投资者" />
							<div style="width:100%;height:24px;">
								<h6>投资者：220</h6>
								<img class="follower"src="./img/index_details4.png" alt="关注者" />
								<h6>关注者：1500</h7>
							</div>
						</div>
						
				
				
				
				
			</div>
				<div id="footer">
					<h1> <a href="http://www.bolongruncheng.com/"> 北京伯隆润成投资有限公司</a></h1>
					<h1>投资有风险，本平台投资行为责任用户自理，所有投资行为最终解释权归本公司所有</h1>
				</div>
			</div>
		</body>
		</html>	