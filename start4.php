<?PHP
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
    <title>发起项目</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"  href="./css/reset.css"/>
    <link rel="stylesheet" href="./css/start.css"/>
    <script type="text/javascript" src="./js/jquery-1.10.1.js"></script>
    <script type="text/javascript" src="./js/start.js"></script>
    <script type="text/javascript" src="./bootstrap/js/bootstrap.min.js"></script>

</head>
<body>
<?php require('./nav.php') ?>
<div id="container" style="background-color: #eeeff3;min-height: 800px;">
    <div class="container">
        <div class="row startpic">
            <img src="./img/start_04.png">
        </div>
        <div class="center-show">
            <h1>您的项目申请已提交，请耐心等候审核</h1>
            <h2>审核周长月3-7个工作日，先去看看其他项目吧</h2>
             <a href="./index.php"><div class="btn btn-success">返回首页</div></a>
        </div>
    </div>
</div>
</body>
</html>