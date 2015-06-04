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
   
		 
         <?php require('./nav.php') ?>

            <div class="container">
		  
				<div class="container-top main_top"  >
					<div  class="row main_top_middle">
						<div class="col-xs-2 title_left">注册</div>
                        <div class="col-xs-2 title_right">已有账号?<a id="to_login" href="./index.php">立即登陆</a></div>
						
					</div>
                    <div class="main_top_bottom"><img style="width:800px;" src="./img/regist_01.png" alt="" /></div>

				</div>
				<div id="main_body">
                    <div class="container signup_form">
                        <form class="form" action="" method="post">
                            <div class="row signup_content">
                               
                                <label for="inputEmail3" class="col-xs-4 control-label" >  
                                    <img class="signup_star" src="./img/regist_02.png" alt="" /> 
                                    <span >选择角色 :</span>
                                </label>

                                    <span class="col-xs-3 btn btn-default">我要投资</span>
                                    <div  class="col-xs-1">  </div>
                                    <span class="col-xs-3 btn btn-default">我要发起项目</span>

                            </div>


                            <div class="row signup_content">
                                <label for="inputEmail3" class="col-xs-4 control-label" style="margin-top: 12px">
                                    <img class="signup_star" src="./img/regist_02.png" alt="" />
                                    <span>填写昵称 :</span>
                                </label>

                                
                                    <img class="beforeinput" src="./img/regist_03.png" alt="" />
                                <div class="input">
                                    <input type="text" class="form-control signup_input"  placeholder="昵称">
                                </div>
                            </div>

                            <div class="row signup_content">
                                <label for="inputEmail3" class="col-xs-4 control-label" style="margin-top: 12px">
                                    <img class="signup_star" src="./img/regist_02.png" alt="" />
                                    <span>填写密码 :</span>
                                </label>

                                       <img class="beforeinput" src="./img/regist_04.png" alt="" />
                                <div class="input">
                                    <input type="text" class="form-control signup_input"  placeholder="请输入密码">
                                </div>
                            </div>

                            <div class="row signup_content">
                                <label for="inputEmail3" class="col-xs-4 control-label" style="margin-top: 12px">
                                    <img class="signup_star" src="./img/regist_02.png" alt="" />
                                    <span>确认密码 :</span>
                                </label>

                                       <img class="beforeinput" src="./img/regist_04.png" alt="" />
                                <div class="input">
                                    <input type="text" class="form-control signup_input"  placeholder="请输入密码">
                                </div>
                            </div>


                          
                            <div class="row signup_content">
                                <label for="inputEmail3" class="col-xs-4 control-label" style="margin-top: 12px">
                                    &nbsp&nbsp
                                    <img class="signup_star" src="./img/regist_02.png" alt="" />
                                    <span>  验证码 :</span>
                                </label>
     
                                <div class="col-xs-4">
                                    <input type="text" class="form-control"  placeholder="验证码">
                                </div>

                                <img class="col-xs-4 pic-password" src="./img/regist_05.png" alt="" />
                            </div>



                          
                            <div class="row signup_content">
                                <label for="inputEmail3" class="col-xs-4 control-label" style="margin-top: 12px">
                                    <img class="signup_star" src="./img/regist_02.png" alt="" />
                                    <span>绑定邮箱 :</span>
                                </label>

                                       <img class="beforeinput" src="./img/regist_05.png" alt="" />
                                <div class="input">
                                    <input type="text" class="form-control signup_input"  placeholder="请输入邮箱">
                                </div>
                            </div>

                            
                            <div class="row signup_content">
                                <label for="inputEmail3" class="col-xs-4 control-label" style="margin-top: 12px">
                                    <img class="signup_star" src="./img/regist_02.png" alt="" />
                                    <span>绑定手机 :</span>
                                </label>

                                       <img class="beforeinput" src="./img/regist_06.png" alt="" />
                                <div class="input">
                                    <input type="text" class="form-control signup_input"  placeholder="请输入手机号">
                                </div>
                            </div>

                            <div class="row signup_content">
                                <label for="inputEmail3" class="col-xs-4 control-label" style="margin-top: 12px">
                                    <img class="signup_star" src="./img/regist_02.png" alt="" />
                                    <span>  手机验证码 :</span>
                                </label>
     
                                <div class="col-xs-3">
                                    <input type="text" class="form-control"  placeholder="验证码">
                                </div>

                                <a class="col-xs-4 btn btn btn-success">点击获取手机验证码</a>
                            </div>

                            <div class=" row checkbox">
                                         <div class="col-xs-3"></div>
                                        <label>
                                            <input type="checkbox"> 我已阅读并同意<a>《泡泡龙网站服务协议》</a>
                                        </label>
                                    </div>
                            <div class="row signup_content">
                                    <div class="col-xs-4"></div>
                                    <div type="submit" class="btn btn-success btn-lg submit-button">立即注册</div>
                    
                            </div>
                        </form>
                    </div>
					</div>
				</div>
			</div>
			
		</div>
		<?php require('./footer.php')?>
	</div>
</body>
</html>