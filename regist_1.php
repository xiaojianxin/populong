<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
	<title>注册界面填写账户信息</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet"  href="./css/reset.css"/>
	<link rel="stylesheet" type="text/css" href="./css/regist.css">
	<link rel="stylesheet" type="text/css" href="./css/headfoot.css">
	<script type="text/javascript" src="./js/regist.js"></script>
	<script type="text/javascript" src="./js/regist_1.js"></script>
	<link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
	<script src="./js/jquery-1.10.1.js"></script>
	<script src="./bootstrap/js/bootstrap.min.js"></script>
	
</head>
<body>
	<div id="container">
		 <?php require('./nav.php') ?>
		<div id="main">
			<form action="">
				<div id="maincontainer1">
				<div id="main_top">
					<div id="main_top_top">
						<div class="title">注册</div>
						<div class="title_right">已有账号?</div>
						<a id="to_login" href="./index.html">立即登陆</a>
					</div>
					<img style="width:800px;" src="./img/regist_01.png" alt="" />
				</div>
				<div id="main_bottom">
					<div id="left">
						<li>
							<h1>选择角色</h1>
							<img src="./img/regist_02.png" alt="" /> 
						</li>
						<li>
							<h1>填写昵称</h1>
							<img src="./img/regist_02.png" alt="" /> 
						</li>
						<li>
							<h1>登陆密码</h1>
							<img src="./img/regist_02.png" alt="" /> 
						</li>
						<li>
							<h1>确认密码</h1>
							<img src="./img/regist_02.png" alt="" /> 
						</li>
						<li>
							<h1>图形验证</h1>
							<img src="./img/regist_02.png" alt="" /> 
						</li>
						<li>
							<h1>绑定邮箱</h1>
							<img src="./img/regist_02.png" alt="" /> 
						</li>
						<li>
							<h1>手机号码</h1>
							<img src="./img/regist_02.png" alt="" /> 
						</li>
						<li>
							<h1>手机验证</h1>
							<img src="./img/regist_02.png" alt="" /> 
						</li>
					</div>
					<div id="center">
						<li>
							<input type="checkbox" class="actorchoose"/>
							<h3>我要投资</h3>
							<input type="checkbox" class="actorchoose"/>
							<h3>我要发起项目</h3>

						</li>
						<li>
							<img src="./img/regist_03.png" alt="" />
							<input  type="text" name="输入昵称 "placeholder="输入昵称">
						</li>
						<li>
							<img src="./img/regist_04.png" alt="" />
							<input  type="text" name=" 输入密码" placeholder="登陆密码">
						</li>
						<li>
							<img src="./img/regist_04.png" alt="" />
							<input  type="text" name=" 再次输入密码"placeholder="确认密码">
						</li>
						<li>
							<input  type="text" name=" 验证码"placeholder="输入验证码">
							<h1 style="margin-left:8px;">4MLM</h1>
						</li>
						<li>
							<img src="./img/regist_05.png" alt="" />
							<input  type="text" name=" 输入绑定邮箱"placeholder="绑定邮箱">
						</li>
						<li>
							<img src="./img/regist_06.png" alt="" />
							<input  type="text" name=" 输入手机号"placeholder="手机号码">
						</li>
						<li>
							<input  type="text" placeholder=" 手机验证码">
							<input id="telephone_check" type="submit"value="点击获取手机验证码" />
						</li>
						<li>
							<input type="checkbox"id="checkagree">
							<h2>我已阅读并同意《泡泡龙网站服务协议》</h2>
							
						</li>
						<li>
							<a href="#"id="nowRegist">立即注册</a>
						</li>


					</div>
					<div id="right">
					</div>
				</div>
			</div>
			<div id="maincontainer2">
				<div id="main_top">
					<div id="main_top_top">
						<h1>注册</h1>
						<h2>已有账号？</h2>
						<a href="./index.html">立即登陆</a>
					</div>
					<img src="./img/regist_08.png" alt="" />
				</div>
				<div id="main_bottom">
					<div id="left">
						<li>
							<h1>姓名</h1>
							<img src="./img/regist_02.png" alt="" /> 
						</li>
						<li>
							<h1>身份证号</h1>
							<img src="./img/regist_02.png" alt="" /> 
						</li>
					</div>
					<div id="center">
						<li>
							<img src="./img/regist_03.png" alt="" />
							<input  type="text" placeholder="输入姓名 ">
						</li>
						<li>
							<img src="./img/regist_04.png" alt="" />
							<input  type="text" placeholder=" 输入身份证号">
						</li>
					</div>
					<div id="right">

					</div>
				</div>
				<div id="main_foot">
					
					<input type="submit"id="registSubmit"value="提交"/>
				</div>
			</div>
			</form>
			
		</div>
		<div id="footer">
			<div id="footercontainer">
				<h1> <a href="http://www.bolongruncheng.com/"> 京伯隆润成投资有限公司</a></h1>
				<h1>投资有风险，本平台投资行为责任用户自理，所有投资行为最终解释权归本公司所有</h1>
			</div>

		</div>
	</div>
</body>
</html>