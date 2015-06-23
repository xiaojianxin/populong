<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
	<title>注册界面填写账户信息</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta id="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta id="description" content="布尔教育 http://www.itbool.com" />
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

                            <input type="text" id="isInitiator" style="display:none" value=''/>
                            <input type="text" id="isInvestor"  style="display:none" value=''/>

                            <div class="row signup_content hidden">
                                <label for="inputEmail3" class="col-xs-2 control-label" style="margin-top: 12px">
                                    
                                    <span><img class="signup_star" src="./img/regist_02.png" alt="" />姓名 :</span>
                                </label>
                                <div class="input">
                                    <input type="text" id="inputRealname"  class="form-control signup_input"  placeholder="姓名">
                                </div>
                            </div>

                            <div class="row signup_content hidden">
                                <label for="inputEmail3" class="col-xs-2 control-label" style="margin-top: 12px">
                                    
                                    <span><img class="signup_star" src="./img/regist_02.png" alt="" /> 身份证号:</span>
                                </label>
                                <div class="input">
                                    <input type="password" id="inputIdCard" class="form-control signup_input"  placeholder="请输入身份证号码">
                                </div>
                            </div>


                            <div class="row signup_content show">
                               
                                <label for="inputEmail3" class="col-xs-2 control-label" >  
                                    
                                    <span ><img class="signup_star" src="./img/regist_02.png" alt="" /> 选择角色 :</span>
                                </label>

                                    <span class="col-xs-2 btn btn-default choice" id="choice1">我要投资</span>
                                    <span class="col-xs-2 btn btn-default choice" id='choice2'>我要发起项目</span>
                                    <div class="col-xs-3 warning hidden1 role">请选择角色</div>
                            </div>


                            <div class="row signup_content show">
                                <label for="inputEmail3" class="col-xs-2 control-label" style="margin-top: 12px">
                                    
                                    <span><img class="signup_star" src="./img/regist_02.png" alt="" />填写昵称 :</span>
                                </label>
                                <div class="input">
                                    <input type="text" id="inputNickname" class="form-control signup_input"  placeholder="昵称">
                                </div>
                                <div class="col-xs-3 warning hidden1 nickname">请填写昵称</div>
                            </div>

                            <div class="row signup_content show">
                                <label for="inputEmail3" class="col-xs-2 control-label" style="margin-top: 12px">
                                    
                                    <span><img class="signup_star" src="./img/regist_02.png" alt="" />填写密码 :</span>
                                </label>
                                <div class="input">
                                    <input type="password" id="inputPassword" class="form-control signup_input"  placeholder="请输入密码">
                                </div>
                                <div class="col-xs-3 warning hidden1 password">请输入密码</div>
                            </div>

                            <div class="row signup_content show">
                                <label for="inputEmail3" class="col-xs-2 control-label" style="margin-top: 12px">
                                    
                                    <span><img class="signup_star" src="./img/regist_02.png" alt="" />确认密码 :</span>
                                </label>
                              <div class="input">
                                    <input type="password" id="inputPassword1" class="form-control signup_input"  placeholder="请输入密码">
                               </div>
                               <div class="col-xs-3 warning hidden1 password1">两次输入密码不一致</div>
                            </div>


                          
                            <div class="row signup_content show">
                                <label for="inputEmail3" class="col-xs-2 control-label" style="margin-top: 12px">
                                    &nbsp&nbsp
                                    
                                    <span><img class="signup_star" src="./img/regist_02.png" alt="" />验证码 :</span>
                                </label>
     
                                <div class="col-xs-2">
                                    <input type="text" id="checknum" class="form-control"  placeholder="验证码">
                                </div>

                                <img id="checkpic" onclick="changing();" src='./checkcode.php' />
                            </div>



                          
                            <div class="row signup_content show">
                                <label for="inputEmail3" class="col-xs-2 control-label" style="margin-top: 12px">
                                    
                                    <span><img class="signup_star" src="./img/regist_02.png" alt="" />绑定邮箱 :</span>
                                </label>
                                  <div class="input">
                                    <input type="email" id="inputEmail" class="form-control signup_input"  placeholder="请输入邮箱">
                                </div>
                                <div class="col-xs-3 warning hidden1 email">请输入邮箱</div>
                            </div>

                            
                            <div class="row signup_content show">
                                <label for="inputEmail3" class="col-xs-2 control-label" style="margin-top: 12px">
                                    
                                    <span><img class="signup_star" src="./img/regist_02.png" alt="" />绑定手机 :</span>
                                </label>
                                 <div class="input">
                                    <input type="text" id="inputMobilePhone" class="form-control signup_input"  placeholder="请输入手机号">
                                </div>
                                <div class="col-xs-3 warning hidden1 mobliephone">请输入手机号</div>
                            </div>

                            <div class="row signup_content show">
                                <label for="inputEmail3" class="col-xs-2 control-label" style="margin-top: 12px">
                                    
                                    <span>  <img class="signup_star" src="./img/regist_02.png" alt="" />手机验证码 :</span>
                                </label>
     
                                <div class="col-xs-2">
                                    <input type="text" id="inputPhoCode" class="form-control"  placeholder="验证码">
                                </div>

                                <a class="col-xs-2 btn btn btn-success">点击获取手机验证码</a>
                            </div>

                            <div class=" row checkbox signup_content">
                                         <div class="col-xs-2"></div>
                                        <label>
                                            <input type="checkbox" required="required"> 我已阅读并同意<a href="#detail" data-toggle="modal" data-target="#detail">《泡泡龙网站服务协议》</a>
                                        </label>
                                    </div>
                            <div class="row signup_content show">
                                    <div class="col-xs-2"></div>

                                    <input id="regist-next" class="btn btn-success btn-lg submit-button" value="立即注册">
                    
                            </div>
                            <div class="row signup_content hidden">
                                    <div class="col-xs-2"></div>
                                    <a id="submit" class="btn btn-success btn-lg submit-button">下一步</a>
                    
                            </div>


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
           $('#isInvestor').attr("value",'1');
           judge0 = '1';
       }else if (judge0 == '1') {
         $("#choice1").css('border','1px solid #d4d4d4');
           $('#isInvestor').attr("value",'');
           judge0 = '0';
       }
   });

   $('#choice2').click(function(){

         if (judge1 == '0') {
            $("#choice2").css('border','1px solid #0066cc');
            $('#isInitiator').attr("value",'1');
            judge1 = '1';
        }else if (judge1 == '1') {
           $("#choice2").css('border','1px solid #d4d4d4');
            $('#isInitiator').attr("value",'');
            judge1 = '0';
        }
   });
  

   $('#regist-next').click(function(){
    var role1 = $('#isInvestor').val();
    var role2 = $('#isInitiator').val();
    var inputname = $('#checkbox1').val();
    var inputNickname = $('#inputNickname').val();
    var inputPassword = $('#inputPassword').val();
    var inputPassword1 = $('#inputPassword1').val();
    var inputPhoCode = $('#inputPhoCode').val();
    var inputEmail = $('#inputEmail').val();
    var inputMobilePhone = $('#inputMobilePhone').val();
    var inputMsgCode = $('#inputMsgCode').val();
    var inputRealName = $('#inputRealname').val();
    var inputIdCard = $('#inputIdCard').val();

    if(!$('#inputEmail').val().match(/^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(.[a-zA-Z0-9_-])+/ )){
     
         $('.email').removeClass('hidden1');

    }else if(role1==''&&role2==''){
      $('.role').removeClass('hidden1');
    }else if(inputNickname==''){
       $('.nickname').removeClass('hidden1');

     }else if(inputPassword==''){
       $('.password').removeClass('hidden1');
     }else if(inputPassword != inputPassword1){
       $('.password1').removeClass('hidden1');
     }else if(inputMobilePhone==''){
      $('.mobliephone').removeClass('hidden1');
     }else{
       $('.hidden').removeClass('hidden');
       $('.show').addClass('hidden');
       $('.show').removeClass('show');
    }
     
      
   });
   function changing(){
    document.getElementById('checkpic').src="./checkcode.php?"+Math.random();
} 
$('#submit').click(function(){
          var isInvestor = $('#isInvestor').val();
          var isInitiator = $('#isInitiator').val();
          var inputNickname = $('#inputNickname').val();
          var inputPassword = $('#inputPassword').val();
          var inputPhoCode = $('#inputPhoCode').val();
          var inputEmail = $('#inputEmail').val();
          var inputMobilePhone = $('#inputMobilePhone').val();
          var inputMsgCode = $('#inputMsgCode').val();
          var inputRealName = $('#inputRealname').val();
          var inputIdCard = $('#inputIdCard').val();
          alert(isInvestor);
          $.ajax({
              type:"POST",
              url:"./action/do_regist.php",
              data:"isInvestor="+isInvestor+"&"+"isInitiator="+isInitiator+"&"+"inputNickname="+inputNickname+"&"+"inputPassword="+inputPassword+"&"+"inputPhoCode="+inputPhoCode+"&"+"inputEmail="+inputEmail+"&"+"inputMobilePhone="+inputMobilePhone+"&"+"inputMsgCode="+inputMsgCode+"&"+"inputRealName="+inputRealName+"&"+"inputIdCard="+inputIdCard,
              success:function(data){
                var dataobj = eval("("+data+")");
                if(dataobj.code == ''){
                  window.location.href = "././success.php";
                }else{
                  alert('注册失败');
                }
              },
              error:function(){
                  alert("登录失败");
              }
          })
});



</script>
</body>
</html>