<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
	<title>个人中心个人界面</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="布尔教育 http://www.itbool.com" />
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet"  href="./css/reset.css"/>
	<link rel="stylesheet" type="text/css" href="./css/self.css">
    <link rel="stylesheet" type="text/css" href="./css/leftnav.css">
    <link rel="stylesheet" type="text/css" href="./css/jPages.css"/>
    <link rel="stylesheet" type="text/css" href="./css/footer.css">
    <script src="./js/jquery-1.10.1.js"></script>
    <script src="./bootstrap/js/bootstrap.min.js"></script>

    <script src="./js/self.js"></script>
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
                <a  class="btn btn-success" href="start.php">发起项目</a>
            </div>
            <div class="row">
                <div class="col-xs-3">
                    <?php require('./leftnav.php') ?>
                </div>
                <div  class="col-xs-9">
                    <?php 
                    if(empty($_GET)){
                        require('./selfindex.php');
                    }else{
                        $id = $_GET['id'];
                        if ($id == '0') {
                            require('./dealrecord.php');
                        }else if($id == '2'){
                            require('./deposit.php');
                        }else if ($id == '3') {
                            require('./withdraw.php');
                        }else if ($id == '4'){
                            require('./myinvest.php');
                        }else if($id == '5'){
                            require('./transmarket.php');
                        }else if($id == '6'){
                            require('./startpro.php');
                        }else if($id == '7') {
                            require('./focuspro.php');
                        }else if($id == '8'){
                            require('./selfinformation.php');
                        }else if($id == '9'){
                            require('./dealrecord.php');
                        }else if ($id == '10') {
                            require('./platrank.php');
                        }else if($id == '11'){
                            require('./message.php');
                        }else if ($id == '12') {
                            require('./platrank.php');
                        }else if($id == '13'){
                            require('./dealrecord.php');
                        }else if ($id == '14') {
                            require('./editinformation.php');
                        }
                    }
                    
                    

                    ?>

                </div>
            </div>
        </div>
    </div>

    <?php require('./footer.php') ?>

	</body>
	</html>	