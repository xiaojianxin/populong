<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
	<title>注册界面填写账户信息</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="description" content="布尔教育 http://www.itbool.com" />
    <link rel="stylesheet"  href="./css/reset.css"/>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./css/index.css">
    <link rel="stylesheet" type="text/css" href="./css/footer.css">
    <link rel="stylesheet" type="text/css" href="./css/nav.css">
    <link rel="stylesheet" type="text/css" href="./css/regist.css">
    <script src="./js/jquery-1.10.1.js"></script>
    <script src="./bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="./js/regist.js"></script>
    <script type="text/javascript" src="./js/regist_1.js"></script>
    <!--[if lt IE 9]>
    <script src="http://apps.bdimg.com/libs/html5shiv/3.7/html5shiv.min.js"></script>
    <script src="http://apps.bdimg.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
   
		 
         <?php require('./nav.php') ?>
              <?php require('./agreement.php')?>

            <div class="container main">
                
				        <div class="container-top main_top"  >
					         <div  class="row main_top_middle">
						          <div class="col-xs-2 title_left">注册</div>
                        <div class="col-xs-2 title_right">已有账号?<a id="to_login" href="./index.php">立即登陆</a></div>
						
					         </div>
                        <div class="main_top_bottom">
                        <img class='show' style="width:800px;" src="./img/regist_01.png" alt="" />
                        <img class='hidden' style="width:800px;" src="./img/regist_08.png" alt="" />
                        </div>

				        </div>
				        <div id="main_body" class="container">
                    <div class="signup_form">
                        <form class="form" action='' method="post">
                            <input type="text" name="choice1" id="checkbox1" style="display:none" value=''/>
                            <input type="text" name="choice2" id="checkbox2" style="display:none" value=''/>

                            <div class="row signup_content hidden">
                                <label for="inputEmail3" class="col-xs-4 control-label" style="margin-top: 12px">
                                    <img class="signup_star" src="./img/regist_02.png" alt="" />
                                    <span>姓名 :</span>
                                </label>

                                
                                    <img class="beforeinput" src="./img/regist_03.png" alt="" />
                                <div class="input">
                                    <input type="text" name="username" class="form-control signup_input"  placeholder="姓名">
                                </div>
                            </div>

                            <div class="row signup_content hidden">
                                <label for="inputEmail3" class="col-xs-4 control-label" style="margin-top: 12px">
                                    <img class="signup_star" src="./img/regist_02.png" alt="" />
                                    <span> 身份证号:</span>
                                </label>

                                       <img class="beforeinput" src="./img/regist_04.png" alt="" />
                                <div class="input">
                                    <input type="password" name="password" class="form-control signup_input"  placeholder="请输入身份证号码">
                                </div>
                            </div>


                            <div class="row signup_content show">
                               
                                <label for="inputEmail3" class="col-xs-4 control-label" >  
                                    <img class="signup_star" src="./img/regist_02.png" alt="" /> 
                                    <span >选择角色 :</span>
                                </label>

                                    <span class="col-xs-3 btn btn-default" id="choice1">我要投资</span>
                                    <div  class="col-xs-1">  </div>
                                    <span class="col-xs-3 btn btn-default" id="choice2">我要发起项目</span>

                            </div>


                            <div class="row signup_content show">
                                <label for="inputEmail3" class="col-xs-4 control-label" style="margin-top: 12px">
                                    <img class="signup_star" src="./img/regist_02.png" alt="" />
                                    <span>填写昵称 :</span>
                                </label>

                                
                                    <img class="beforeinput" src="./img/regist_03.png" alt="" />
                                <div class="input">
                                    <input type="text" name="username" class="form-control signup_input"  placeholder="昵称">
                                </div>
                            </div>

                            <div class="row signup_content show">
                                <label for="inputEmail3" class="col-xs-4 control-label" style="margin-top: 12px">
                                    <img class="signup_star" src="./img/regist_02.png" alt="" />
                                    <span>填写密码 :</span>
                                </label>

                                       <img class="beforeinput" src="./img/regist_04.png" alt="" />
                                <div class="input">
                                    <input type="password" name="password" class="form-control signup_input"  placeholder="请输入密码">
                                </div>
                            </div>

                            <div class="row signup_content show">
                                <label for="inputEmail3" class="col-xs-4 control-label" style="margin-top: 12px">
                                    <img class="signup_star" src="./img/regist_02.png" alt="" />
                                    <span>确认密码 :</span>
                                </label>

                                       <img class="beforeinput" src="./img/regist_04.png" alt="" />
                                <div class="input">
                                    <input type="password" name="password1" class="form-control signup_input"  placeholder="请输入密码">
                                </div>
                            </div>


                          
                            <div class="row signup_content show">
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



                          
                            <div class="row signup_content show">
                                <label for="inputEmail3" class="col-xs-4 control-label" style="margin-top: 12px">
                                    <img class="signup_star" src="./img/regist_02.png" alt="" />
                                    <span>绑定邮箱 :</span>
                                </label>

                                       <img class="beforeinput" src="./img/regist_05.png" alt="" />
                                <div class="input">
                                    <input type="email" name="email" class="form-control signup_input email"  placeholder="请输入邮箱">
                                </div>
                            </div>

                            
                            <div class="row signup_content show">
                                <label for="inputEmail3" class="col-xs-4 control-label" style="margin-top: 12px">
                                    <img class="signup_star" src="./img/regist_02.png" alt="" />
                                    <span>绑定手机 :</span>
                                </label>

                                       <img class="beforeinput" src="./img/regist_06.png" alt="" />
                                <div class="input">
                                    <input type="text" name="telephone" class="form-control signup_input"  placeholder="请输入手机号">
                                </div>
                            </div>

                            <div class="row signup_content show">
                                <label for="inputEmail3" class="col-xs-4 control-label" style="margin-top: 12px">
                                    <img class="signup_star" src="./img/regist_02.png" alt="" />
                                    <span>  手机验证码 :</span>
                                </label>
     
                                <div class="col-xs-3">
                                    <input type="text" name="checktelephone" class="form-control"  placeholder="验证码">
                                </div>

                                <a class="col-xs-4 btn btn btn-success">点击获取手机验证码</a>
                            </div>

                            <div class=" row checkbox signup_content">
                                         <div class="col-xs-3"></div>
                                        <label>
                                            <input type="checkbox" required="required"> 我已阅读并同意<a href="#detail" data-toggle="modal" data-target="#detail">《泡泡龙网站服务协议》</a>
                                        </label>
                                    </div>
                            <div class="row signup_content show">
                                    <div class="col-xs-4"></div>

                                    <input id="regist-next" class="btn btn-success btn-lg submit-button" value="立即注册">
                    
                            </div>
                            <div class="row signup_content hidden">
                                    <div class="col-xs-4"></div>
                                    <input type="submit" id="11" class="btn btn-success btn-lg submit-button" value="下一步">
                    
                            </div>
                        </form>

                    </div>
				</div>

			</div>


   <?php require('./footer.php')?>
	
<script type="text/javascript">
    var judge0 = '0';
    var judge1 = '0';
   $('#choice1').click(function(){
       if (judge0 == '0') {
           $("#choice1").css('border','1px solid #0066cc');
           $('#checkbox1').attr("value",'22');
           judge0 = '1';
       }else if (judge0 == '1') {
         $("#choice1").css('border','1px solid #d4d4d4');
           $('#checkbox1').attr("value",'');
           judge0 = '0';
       }
   });

   $('#choice2').click(function(){

         if (judge1 == '0') {
            $("#choice2").css('border','1px solid #0066cc');
            $('#checkbox2').attr("value",'22');
            judge1 = '1';
        }else if (judge1 == '1') {
           $("#choice2").css('border','1px solid #d4d4d4');
            $('#checkbox2').attr("value",'');
            judge1 = '0';
        }
   });
  

   $('#regist-next').click(function(){
    if(!$('.email').val().match(/^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(.[a-zA-Z0-9_-])+/ )){
     
          alert('请填写邮箱');

    }else{
       $('.hidden').removeClass('hidden');
       $('.show').addClass('hidden');
       $('.show').removeClass('show');
    }
     
      
   })



</script>
</body>
</html>