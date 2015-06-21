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
    <link rel="stylesheet" type="text/css" href="./css/success.css">
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

            <div class="container main">
                
				        <div class="container-top main_top"  >
					         <div  class="row main_top_middle">
						          <div class="col-xs-2 title_left">注册</div>
                        <div class="col-xs-2 title_right">已有账号?<a id="to_login" href="./index.php">立即登陆</a></div>
						
					         </div>
                        <div class="main_top_bottom">
                        <img style="width:800px;" src="./img/regist_10.png" alt="" />
                        </div>
				        </div>
				        <div id="main_body" class="container">
                            <div class="success row">
                             <div class='col-xs-3'>
                                <img class='success-pic' src='./img/others_01.png' alt=''/>
                             </div>
                             <div class='col-xs-8 success-text'>
                                恭喜您，注册成功
                             </div>
                                <div style="width: 230px; margin: 0 auto;">
                                    <a href="./index.php" class="btn btn-success" style="width: 200px;margin-top: 50px;">返回首页</a>
                                </div>
				        </div>

			</div>
        </div>


   <?php require('./footer.php')?>
	
</body>
</html>