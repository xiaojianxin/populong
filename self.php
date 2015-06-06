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
    <link rel="stylesheet" type="text/css" href="./css/jPages.css"/>
	<script src="./js/jquery-1.10.1.js"></script>
	<script src="./bootstrap/js/bootstrap.min.js"></script>
    <script src="./js/leftnav.js"></script>
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
                    <div id="dealrecord" class="hidden"><?php require('./dealrecord.php')?></div>
                    <div id="selfindex" class="show"><?php require('./selfindex.php')?></div>
                    <div id="deposit" class="hidden"><?php require('./deposit.php')?></div>
                    <div id="withdraw" class="hidden"><?php require('./withdraw.php')?></div>
                    <div id="myinvest" class="hidden"><?php require('./myinvest.php')?></div>
                    <div id="transmarket" class="hidden"><?php require('./transmarket.php')?></div>
                    <div id="startpro" class="hidden"><?php require('./startpro.php')?></div>
                    <div id="focuspro" class="hidden"><?php require('./focuspro.php')?></div>
                    <div id="selfinformation" class="hidden"><?php require('./selfinformation.php')?></div>
                    <div id="transitions" class="hidden"><?php require('./dealrecord.php')?></div>
                    <div id="transitions" class="hidden"><?php require('./dealrecord.php')?></div>
                    <div id="message" class="hidden"><?php require('./message.php')?></div>
                    <div id="transitions" class="hidden"><?php require('./dealrecord.php')?></div>

                </div>
            </div>
        </div>
    </div>

            <?php require('./footer.php')?>
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
    });

    $('#leftnav a').click(function(e){
        //$('.nav li').removeClass('active');
        var judge = $(this).attr('class');
        if(judge=="accordion-toggle"){
            $('ul .active').removeClass('active');
            $(this).parent().addClass('active');
        }
        else{
            var id = $(this).attr('id');
            if(typeof (id) == "undefined")
            {
                $('ul .active').removeClass('active');
                $(this).parent().addClass('active');
                $('div .col-xs-9 .show').attr('class','hidden');
                $('div #selfindex').attr('class','show');
            }else{
                $(".accordion-inner a").css('color','#333333');
                $(this).css('color','#6cc77f');
                //$(e.target).addClass('active');
                //$(this).addClass('active');
                $('div .col-xs-9 .show').attr('class','hidden');
                $("div #"+id).attr('class','show');
            }
        }


    });
</script>
	</body>
	</html>	