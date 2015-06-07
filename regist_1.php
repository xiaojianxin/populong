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
    <!--[if lt IE 9]>
    <script src="http://apps.bdimg.com/libs/html5shiv/3.7/html5shiv.min.js"></script>
    <script src="http://apps.bdimg.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
   
		 
         <?php require('./nav.php') ?>

            <div class="container">
                <div class="modal fade" id="detail"  aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                  <h4 class="modal-title" id="myModalLabel">
                                      《泡泡龙网站服务协议》
                                  </h4>
                              </div>
                              <div class="modal-body">
                              </div>
                              <div class="model-footer">
                                    <div class="btn btn-success  detail-close"  data-dismiss="modal" aria-hidden="true">关闭</div>
                              </div>
                          </div>

                      </div>

                  </div>
				<div class="container-top main_top"  >
					<div  class="row main_top_middle">
						<div class="col-xs-2 title_left">注册</div>
                        <div class="col-xs-2 title_right">已有账号?<a id="to_login" href="./index.php">立即登陆</a></div>
						
					</div>
                    <div class="main_top_bottom"><img style="width:800px;" src="./img/regist_01.png" alt="" /></div>

				</div>
				<div id="main_body" class="container">
                    <div class="signup_form">
                        <form class="form" action='' method="post">
                            <input type="text" name="choice1" id="checkbox1" style="display:none" value=''/>
                            <input type="text" name="choice2" id="checkbox2" style="display:none" value=''/>

                            <div class="row signup_content">
                               
                                <label for="inputEmail3" class="col-xs-4 control-label" >  
                                    <img class="signup_star" src="./img/regist_02.png" alt="" /> 
                                    <span >选择角色 :</span>
                                </label>

                                    <span class="col-xs-3 btn btn-default" id="choice1">我要投资</span>
                                    <div  class="col-xs-1">  </div>
                                    <span class="col-xs-3 btn btn-default" id="choice2">我要发起项目</span>

                            </div>


                            <div class="row signup_content">
                                <label for="inputEmail3" class="col-xs-4 control-label" style="margin-top: 12px">
                                    <img class="signup_star" src="./img/regist_02.png" alt="" />
                                    <span>填写昵称 :</span>
                                </label>

                                
                                    <img class="beforeinput" src="./img/regist_03.png" alt="" />
                                <div class="input">
                                    <input type="text" name="username" class="form-control signup_input"  placeholder="昵称">
                                </div>
                            </div>

                            <div class="row signup_content">
                                <label for="inputEmail3" class="col-xs-4 control-label" style="margin-top: 12px">
                                    <img class="signup_star" src="./img/regist_02.png" alt="" />
                                    <span>填写密码 :</span>
                                </label>

                                       <img class="beforeinput" src="./img/regist_04.png" alt="" />
                                <div class="input">
                                    <input type="password" name="password" class="form-control signup_input"  placeholder="请输入密码">
                                </div>
                            </div>

                            <div class="row signup_content">
                                <label for="inputEmail3" class="col-xs-4 control-label" style="margin-top: 12px">
                                    <img class="signup_star" src="./img/regist_02.png" alt="" />
                                    <span>确认密码 :</span>
                                </label>

                                       <img class="beforeinput" src="./img/regist_04.png" alt="" />
                                <div class="input">
                                    <input type="password" name="password1" class="form-control signup_input"  placeholder="请输入密码">
                                </div>
                            </div>


                          
                            <div class="row signup_content">
                                <label for="inputEmail3" class="col-xs-4 control-label" style="margin-top: 12px">
                                    &nbsp&nbsp
                                    <img class="signup_star" src="./img/regist_02.png" alt="" />
                                    <span>  验证码 :</span>
                                </label>
     
                                <div class="col-xs-4">
                                    <input type="text" name="checknum" class="form-control"  placeholder="验证码">
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
                                    <input type="email" name="email" class="form-control signup_input"  placeholder="请输入邮箱">
                                </div>
                            </div>

                            
                            <div class="row signup_content">
                                <label for="inputEmail3" class="col-xs-4 control-label" style="margin-top: 12px">
                                    <img class="signup_star" src="./img/regist_02.png" alt="" />
                                    <span>绑定手机 :</span>
                                </label>

                                       <img class="beforeinput" src="./img/regist_06.png" alt="" />
                                <div class="input">
                                    <input type="text" name="telephone" class="form-control signup_input"  placeholder="请输入手机号">
                                </div>
                            </div>

                            <div class="row signup_content">
                                <label for="inputEmail3" class="col-xs-4 control-label" style="margin-top: 12px">
                                    <img class="signup_star" src="./img/regist_02.png" alt="" />
                                    <span>  手机验证码 :</span>
                                </label>
     
                                <div class="col-xs-3">
                                    <input type="text" name="checktelephone" class="form-control"  placeholder="验证码">
                                </div>

                                <a class="col-xs-4 btn btn btn-success">点击获取手机验证码</a>
                            </div>

                            <div class=" row checkbox">
                                         <div class="col-xs-3"></div>
                                        <label>
                                            <input type="checkbox" required="required"> 我已阅读并同意<a href="#detail" data-toggle="modal" data-target="#detail">《泡泡龙网站服务协议》</a>
                                        </label>
                                    </div>
                            <div class="row signup_content">
                                    <div class="col-xs-4"></div>
                                    <input type="submit" id="11" class="btn btn-success btn-lg submit-button" value="立即注册">
                    
                            </div>
                        </form>
                    </div>
				</div>
			</div>
	
   <?php require('./footer.php')?>
<script type="text/javascript">
   $('#choice1').click(function(){
        $("#choice1").css('border','1px solid #0066cc');
        $('#checkbox1').attr("value",'11');
   });
   $('#choice2').click(function(){
       $("#choice2").css('border','1px solid #0066cc');
       $('#checkbox2').attr("value",'22');
   });



</script>
</body>
</html>