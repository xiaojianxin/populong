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
   <link rel="stylesheet"  href="./css/uploadify.css"/>
    <link rel="stylesheet" href="./css/start.css"/>
    <link rel="stylesheet" href="./css/footer.css"/>
    <link href="./css/toastr.css" rel="stylesheet"/>
    <script type="text/javascript" src="./js/jquery-1.10.1.js"></script>
    <script type="text/javascript" src="./bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="./js/jquery.uploadify.min.js"></script>
    <script type="text/javascript" src="./js/toastr.js"></script>
    <script type="text/javascript" src="./js/tinymce.min.js"></script>
    <script type="text/javascript" src="./js/start.js"></script>

</head>
<body>
<?php require('./nav.php') ?>
    <?php require('./agreement.php')?>
	

     <form action='./action/do_apply.php' method="post">

        <div class='show' >
                <?php require('./start1.php') ?>
        </div>
          <div class="hidden1" id='start_2'>
                <?php require('./start2.php') ?>
        </div>
          <div class="hidden2"  id='start_3'>
                <?php require('./start3.php') ?>
        </div>

        </form> 
        <?php  require('./footer.php'); ?>
    

<script type="text/javascript">

   
</script>


</body>
</html>