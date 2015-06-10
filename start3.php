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
<div id="container" style="background-color: #eeeff3;">
    <div class="container">
        <div class="row startpic">
            <img src="./img/start_03.png">
        </div>
        <div class="row" id="input3area">
            <form action="">
               <div class="col-xs-8">
<!--                   <div class="row">-->
<!--                       <div class="col-xs-3">-->
<!--                           <span class="text-title">绑定银行卡:</span>-->
<!--                       </div>-->
<!--                   </div>-->
<!---->
<!--                   <div class="divider"></div>-->
<!--                   <div class="row">-->
<!--                       <div class="col-xs-3">-->
<!--                           <span>真实姓名：</span>-->
<!--                       </div>-->
<!--                       <div class="col-xs-9">-->
<!--                           <input class="form-control" placeholder="真实姓名"/>-->
<!---->
<!--                       </div>-->
<!--                   </div>-->
<!--                   <div class="row">-->
<!--                       <div class="col-xs-3">-->
<!--                           <span>身份证号：</span>-->
<!--                       </div>-->
<!--                       <div class="col-xs-9">-->
<!--                           <input class="form-control" placeholder="身份证号"/>-->
<!---->
<!--                       </div>-->
<!--                   </div>-->
<!--                   <div class="row">-->
<!--                       <div class="col-xs-3">-->
<!--                           <span>银行卡号：</span>-->
<!--                       </div>-->
<!--                       <div class="col-xs-9">-->
<!--                           <input class="form-control" placeholder="银行卡号"/>-->
<!---->
<!--                       </div>-->
<!--                   </div>-->
<!--                   <div class="save btn btn-success" id="save">保存</div>-->
<!--                   <div style="height: 40px;"></div>-->
                   <div class="row">
                       <div class="col-xs-3">
                           <span class="text-title">增值服务:</span>
                       </div>
                   </div>

                   <div class="divider"></div>
                   <div class="row">
                       <div class="col-xs-3">
                           <span>进行路演</span>
                       </div>
                       <div class="col-xs-3">
                           <label class="radio-inline">
                               <input type="radio" name="inlineRadioOptions1" id="roadAct" value="option1"> 是
                           </label>
                           <label class="radio-inline">
                               <input type="radio" name="inlineRadioOptions1" id="unRoadAct" value="option2"> 否
                           </label>

                       </div>
                       <div class="col-xs-3">
                           <span>收费标准：200元</span>
                       </div>
                   </div>
                   <div class="row">
                       <div class="col-xs-3">
                           <span>进行热门推送</span>
                       </div>
                       <div class="col-xs-3">
                           <label class="radio-inline">
                               <input type="radio" name="inlineRadioOptions2" id="hotSend" value="option1"> 是
                           </label>
                           <label class="radio-inline">
                               <input type="radio" name="inlineRadioOptions2" id="unHotSend" value="option2"> 否
                           </label>

                       </div>
                       <div class="col-xs-3">
                           <span>收费标准：200元</span>
                       </div>
                   </div>
                   <div class="row">
                       <div class="col-xs-3">
                           <span>展示行业顾问</span>
                       </div>
                       <div class="col-xs-3">
                           <label class="radio-inline">
                               <input type="radio" name="inlineRadioOptions3" id="showTrade" value="option1"> 是
                           </label>
                           <label class="radio-inline">
                               <input type="radio" name="inlineRadioOptions3" id="unShowTrade" value="option2"> 否
                           </label>

                       </div>
                       <div class="col-xs-3">
                           <span>收费标准：200元</span>
                       </div>
                   </div>
                   <div class="row">
                       <div class="col-xs-3">
                           <span>展示投资顾问</span>
                       </div>
                       <div class="col-xs-3">
                           <label class="radio-inline">
                               <input type="radio" name="inlineRadioOptions4" id="showInvest" value="option1"> 是
                           </label>
                           <label class="radio-inline">
                               <input type="radio" name="inlineRadioOptions4" id="unshowInvest" value="option2"> 否
                           </label>

                       </div>
                       <div class="col-xs-3">
                           <span>收费标准：200元</span>
                       </div>
                   </div>
               </div>
                <div style="height: 40px;"></div>
                <div class="row">
                    <div class="col-xs-8 actionbutton">
                        <a href="start2.php"><span class="btn btn-success" id="previousStep3">上一步</span></a>
                        <a href="start4.php"><span class="btn btn-success" id="nextStep3">下一步</span></a>
                    </div>
                </div>
            </form>

        </div>
    </div>


</body>
</html>