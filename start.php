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
    <script type="text/javascript" src="./js/jquery-1.10.1.js"></script>
    <script type="text/javascript" src="./js/start.js"></script>
    <script type="text/javascript" src="./bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="./js/jquery.uploadify.min.js"></script>

</head>
<body>
<?php require('./nav.php') ?>
	
      <form action='./action/do_apply.php'>
          <div class='show' >
                <?php require('./start1.php') ?>
        </div>
          <div class="hidden1" id='start_2'>
                <?php require('./start2.php') ?>
        </div>
          <div class="hidden2"  id='start_3'>
                <?php require('./start3.php') ?>
        </div>
        <div class="hidden" id='start_4'>
                <?php require('./start4.php') ?>
        </div>

        </form> 
        <?php  require('./footer.php'); ?>
    

<script type="text/javascript">
    $('#nextstep').click(function(e){

         $('.show').addClass('hidden0');
        $('.show').removeClass('show');
        $('.hidden1').addClass('show');
         $('.hidden1').removeClass('hidden1');
         
      

    });
     $('#nextStep_next').click(function(e){

         $('.show').addClass('hidden1');
         $('.show').removeClass('show');
         $('.hidden2').addClass('show');
         $('.hidden2').removeClass('hidden2');
         
      

    });

     $('#previousStep_prev').click(function(e){

         $('.show').addClass('hidden1');
         $('.show').removeClass('show');
         $('.hidden0').addClass('show');
         $('.hidden0').removeClass('hidden0');
         
      

    });
      
         $('#previousStep3').click(function(e){

         $('.show').addClass('hidden2');
         $('.show').removeClass('show');
         $('.hidden1').addClass('show');
         $('.hidden1').removeClass('hidden1');
         
      

    });
    

   
</script>


</body>
</html>