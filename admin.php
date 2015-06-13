<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
	<title>管理员中心个人界面</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="布尔教育 http://www.itbool.com" />
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet"  href="./css/reset.css"/>
	<link rel="stylesheet" type="text/css" href="./css/admin.css">
    <link rel="stylesheet" type="text/css" href="./css/leftnav.css">
    <link rel="stylesheet" type="text/css" href="./css/jPages.css"/>
    <link rel="stylesheet" type="text/css" href="./css/footer.css">
    <script src="./js/bootstrap-tooltip.js"></script>
    <script src="./js//bootstrap-popover.js"></script>
	<script src="./js/jquery-1.10.1.js"></script>
	<script src="./bootstrap/js/bootstrap.min.js"></script>
    <script src="./js/leftnav.js"></script>
    <script src="./js/admin.js"></script>
	<!--[if lt IE 9]>
	  <script src="http://apps.bdimg.com/libs/html5shiv/3.7/html5shiv.min.js"></script>
	  <script src="http://apps.bdimg.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

    <body>
    <div id="topnav">
        <?php require('./nav.php') ?>
    </div>
    <div id="main">
        <div class="container">
            <div id="self_top" >
            </div>
            <div class="row">
                <div class="col-xs-3">
                    <?php require('./admin-leftnav.php') ?>
                </div>
                <div  class="col-xs-9">
                    <?php 
                    if(empty($_GET)){
                        require('./admin-index.php');
                    }else{
                        $id = $_GET['id'];
                        if ($id == '0') {
                            require('./admin-nocheck.php');
                        }else if($id == '2'){
                            require('./admin-nodeal.php');
                        }else if ($id == '4'){
                            require('./admin-investing.php');
                        }else if($id == '6'){
                            require('./admin-investfailure.php');
                        }else if($id == '7') {
                            require('./admin-investsuccess.php');
                        }else if($id == '8'){
                            require('./admin-manage.php');
                        }else if($id == '9'){
                            require('./admin-moneyrecord.php');
                        }else if ($id == '10') {
                            require('./admin-deleteuser.php');
                        }
                    }
                    
                    

                    ?>

                </div>
            </div>
        </div>
    </div>

            <?php require('./footer.php')?>

	</body>
	</html>	