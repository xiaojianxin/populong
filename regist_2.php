<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
	<title>注册界面填写账户信息</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <script src="./js/jquery-1.10.1.js"></script>
    <script src="./bootstrap/js/bootstrap.min.js"></script>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="./css/reset.css"/>
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
   
		 
         <?php require('./nav.php');
        var_dump($_POST);
        echo "1111";
         ?>

            <div class="container">
                <div class="modal fade" id="detail"  aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                          <div class="modal-content detail-content">
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
                    <div class="main_top_bottom"><img style="width:800px;" src="./img/regist_08.png" alt="" /></div>

				</div>
				<div id="main_body" class="container">
                    <div class="signup_form">
                        <form class="form" action='' method="post">
                            <input type="text" name="choice1" id="checkbox1" style="display:none" value='<?php $_POST['username'] ?>'/>
                            <input type="text" name="choice2" id="checkbox2" style="display:none" value='<?php $_POST['password'] ?>'/>
                            <input type="text" name="choice3" id="checkbox1" style="display:none" value='<?php $_POST['password1'] ?>'/>
                            <input type="text" name="choice4" id="checkbox2" style="display:none" value='<?php $_POST['checknum'] ?>'/>
                            <input type="text" name="choice5" id="checkbox1" style="display:none" value='<?php $_POST['email'] ?>'/>
                            <input type="text" name="choice6" id="checkbox2" style="display:none" value='<?php $_POST['telephone'] ?>'/>
                            <input type="text" name="choice7" id="checkbox2" style="display:none" value='<?php $_POST['checktelephone'] ?>'/>


                            <div class="row signup_content">
                                <label for="inputEmail3" class="col-xs-4 control-label" style="margin-top: 12px">
                                    <img class="signup_star" src="./img/regist_02.png" alt="" />
                                    <span>姓名 :</span>
                                </label>

                                
                                    <img class="beforeinput" src="./img/regist_03.png" alt="" />
                                <div class="input">
                                    <input type="text" name="username" class="form-control signup_input"  placeholder="昵称">
                                </div>
                            </div>

                            <div class="row signup_content">
                                <label for="inputEmail3" class="col-xs-4 control-label" style="margin-top: 12px">
                                    <img class="signup_star" src="./img/regist_02.png" alt="" />
                                    <span> 身份证号:</span>
                                </label>

                                       <img class="beforeinput" src="./img/regist_04.png" alt="" />
                                <div class="input">
                                    <input type="password" name="password" class="form-control signup_input"  placeholder="请输入密码">
                                </div>
                            </div>
                            <div class="row signup_content">
                                    <div class="col-xs-4"></div>
                                    <input id="regist" class="btn btn-success btn-lg submit-button" value="下一步">
                    
                            </div>
                        </form>
                    </div>
				</div>
			</div>
	
   <?php require('./footer.php')?>
<script>
$('.submit-button').click(function(){
	$.ajax({
		type:"post",  //默认值: "GET")。请求方式 ("POST" 或 "GET")， 默认为 "GET"。
		url:"123.57.74.122/logic/registe",  //当前页地址。发送请求的地址。
		data:$('.form').serialize(), //发送到服务器的数据。将自动转换为请求字符串格式。
		dataType:"json",//预期服务器返回的数据类型。如果不指定，jQuery 将自动根据 HTTP 包 MIME 信息来智能判断
		success:function(data){//请求成功后的回调函数。

		    alert(data); 
	});

	alert('111');
});
</script>
</body>
</html>