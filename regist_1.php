<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
	<title>注册界面填写账户信息</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <script src="./js/jquery-1.10.1.js"></script>
    <script src="./bootstrap/js/bootstrap.min.js"></script>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet"  href="./css/reset.css"/>
	<link rel="stylesheet" type="text/css" href="./css/regist.css">
	<link rel="stylesheet" type="text/css" href="./css/headfoot.css">
	<script type="text/javascript" src="./js/regist.js"></script>
	<script type="text/javascript" src="./js/regist_1.js"></script>
</head>
<body>
	<div id="container">
		 <?php require('./nav.php') ?>
		<div id="main">
				<div id="maincontainer1" >
				<div id="main_top">
					<div id="main_top_top">
						<div class="title">注册</div>
						<div class="title_right">已有账号?</div>
						<a id="to_login" href="./index.php">立即登陆</a>
					</div>
                    <div style=" margin-left:30px;width:100%;text-align: center;"><img style="width:800px;" src="./img/regist_01.png" alt="" /></div>

				</div>
				<div id="main_body">
                    <div class="signupform">
                        <form class="form" action="" method="post">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label" style="margin-top: 12px">
                                    <img src="./img/regist_02.png" alt="" />
                                    <span>选择角色</span>
                                </label>

                                <div class="input-group">
                                    <input type="radio" name="Transaction" class="btn-default"/>
                                    <span>我要投资</span>
                                    <input type="radio" name="Transaction" class="btn-default"/>
                                    <span>我要发起项目</span>

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label" style="margin-top: 12px">
                                    <img src="./img/regist_02.png" alt="" />
                                    <span>填写昵称</span>
                                </label>

                                <div class="input-group">
                                        <div class="input-pic">
                                            <img class="beforeinput" src="./img/regist_03.png" alt="" />
                                        </div>

                                        <div class="input-content">
                                            <input type="text" class="form-control"  placeholder="昵称">
                                        </div>

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label" style="margin-top: 12px">
                                    <img src="./img/regist_02.png" alt="" />
                                    <span>登陆密码</span>
                                </label>

                                <div class="input-group">
                                    <div class="input-pic">
                                        <img class="beforeinput" src="./img/regist_04.png" alt="" />
                                    </div>

                                    <div class="input-content">
                                        <input type="password" class="form-control"  placeholder="请输入密码">
                                    </div>

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label" style="margin-top: 12px">
                                    <img src="./img/regist_02.png" alt="" />
                                    <span>确认密码</span>

                                </label>

                                <div class="input-group">
                                    <div class="input-pic">
                                        <img class="beforeinput" src="./img/regist_04.png" alt="" />
                                    </div>

                                    <div class="input-content">
                                        <input type="password" class="form-control"  placeholder="请再次输入密码">
                                    </div>

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label" style="margin-top: 12px"> <img src="./img/regist_02.png" alt="" />
                                    <span>图形验证</span></label>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label" style="margin-top: 12px"> <img src="./img/regist_02.png" alt="" />
                                    <span>绑定邮箱</span></label>

                                <div class="input-group">
                                    <div class="input-pic">
                                        <img class="beforeinput" src="./img/regist_05.png" alt="" />
                                    </div>

                                    <div class="input-content">
                                        <input type="email" class="form-control"  placeholder="请输入邮箱">
                                    </div>

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label" style="margin-top: 12px"> <img src="./img/regist_02.png" alt="" />
                                    <span>手机号码</span></label>

                                <div class="input-group">
                                    <div class="input-pic">
                                        <img class="beforeinput" src="./img/regist_06.png" alt="" />
                                    </div>

                                    <div class="input-content">
                                        <input type="text" class="form-control"  placeholder="请输入手机号">
                                    </div>

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label" style="margin-top: 12px"> <img src="./img/regist_02.png" alt="" />
                                    <span>手机验证</span></label>

                                <div class="input-group">
                                    <div class="input-pic">
                                        <img class="beforeinput" src="./img/regist_06.png" alt="" />
                                    </div>

                                    <div class="input-content">
                                        <input type="text" class="form-control"  placeholder="请输入手机验证码">
                                    </div>

                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> Remember me
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-success btn-lg">立即注册</button>
                                </div>
                            </div>
                        </form>
                    </div>
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
			<div id="footercontainer" >
				<h1> <a href="http://www.bolongruncheng.com/"> 京伯隆润成投资有限公司</a></h1>
				<h1>投资有风险，本平台投资行为责任用户自理，所有投资行为最终解释权归本公司所有</h1>
			</div>

		</div>
	</div>
</body>
</html>