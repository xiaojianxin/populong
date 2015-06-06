<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
	<title>个人中心个人界面</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="布尔教育 http://www.itbool.com" />
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet"  href="./css/reset.css"/>
	<link rel="stylesheet" type="text/css" href="./css/headfoot.css">
	<link rel="stylesheet" type="text/css" href="./css/self.css">
    <link rel="stylesheet" type="text/css" href="./css/leftnav.css">
	<script src="./js/jquery-1.10.1.js"></script>
	<script src="./bootstrap/js/bootstrap.min.js"></script>
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
                <a  class="btn btn-success" href="start.html">发起项目</a>
            </div>
            <div class="row">
                <div class="col-xs-3">
                    <?php require('./leftnav.php') ?>
                </div>
                <div  class="col-xs-9">
                <div class="self_right_top">
                    <div class='self_pic'>
                        <img src="./img/head_02.png" alt="" />

                    </div>
                    <div class="self_explain">Lilith-泡泡隆设计师</div>
                    <div class="container" id="self_nav">
                        <div id="topbottom" class="row">
                            <div id="toChooseone" class="col-xs-3 content_nav" ><a>关注者110</div>
                            <div id="toChoosefans" class="col-xs-3 content_nav" >粉丝110万</div>
                        </div>
                    </div>
                </div>

                    <div class="tab-content">
                        <div class="tab-pane active" id="fans"><?php require('./fans.php') ?></div>
                        <div class="tab-pane" id="concern"><?php require('./concern.php') ?></div>
                    </div>



        </div>
    </div>
<script>
    $('#toChoosefans').click(function(e) {

        $(this).css('border-top','1px solid #6cc77f');
        $(this).css('border-left','1px solid #6cc77f');
        $(this).css('border-right','1px solid #6cc77f');
        $(this).css('border-bottom','1px solid #ffffff');

        $('#toChooseone').css('border','1px solid #d2d2d2');

        $("#fans").attr('class',"tab-pane active");
        $("#concern").attr('class',"tab-pane");
    })
    $('#toChooseone').click(function(e) {

        $(this).css('border-top','1px solid #6cc77f');
        $(this).css('border-left','1px solid #6cc77f');
        $(this).css('border-right','1px solid #6cc77f');
        $(this).css('border-bottom','1px solid #ffffff');


        $('#toChoosefans').css('border','1px solid #d2d2d2');

        $("#concern").attr('class',"tab-pane active");
        $("#fans").attr('class',"tab-pane");
    })
</script>>
	</body>
	</html>	