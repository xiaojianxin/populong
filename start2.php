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
            <img src="./img/start_02.png">
        </div>
        <div class="row" id="input2area">
            <form action="">
                <div class="row">
                    <div class="btn-group">
                        <div class="btn btn-success active" id="repay1">&nbsp;&nbsp;实物回报&nbsp;&nbsp;</div>
                        <div class="btn btn-default" id="repay2">&nbsp;&nbsp;资金回报&nbsp;&nbsp;</div>
                    </div>
                </div>
               <div class="row" id="repayContent1">
                   <div class="col-xs-8">
                       <div class="row">
                           <div class="col-xs-3">
                               <span class="text-title">回报01（必填）:</span>
                           </div>
                       </div>

                       <div class="divider"></div>
                       <div class="row">
                           <div class="col-xs-3">
                               <span>支持金额：</span>
                           </div>
                           <div class="col-xs-9">
                               <input class="form-control" placeholder="不超过20个字"/>
                               <span class="text">元</span>
                           </div>
                       </div>
                       <div class="row">
                           <div class="col-xs-3">
                               <span>限定名额：</span>
                           </div>
                           <div class="col-xs-9">
                               <span><input class="form-control" placeholder="不少于10000"/></span>

                               <span class="text">个</span>
                               <span class="text"><small>0为不限定名额</small></span>
                           </div>
                       </div>

                       <div class="row">
                           <div class="col-xs-3">
                               <span>说明图片：</span>
                           </div>
                           <div class="col-xs-9">
                               <div class="row">
                                   <div class="col-xs-4">
                                       <div class="btn btn-default">上传图片</div>
                                   </div>
                                   <div class="col-xs-8">
                                       <span class="text"><small>（选填）</small></span>
                                       <span class="text">支持jpg,png格式图片，图片大小不超过2M</span>
                                   </div>
                               </div>
                           </div>
                       </div>


                       <div class="row">
                           <div class="col-xs-3">
                               <span>回报内容：</span>
                           </div>
                           <div class="col-xs-9">
                               <textarea placeholder="最多不超过50字"></textarea>
                           </div>
                       </div>
                       <div class="row">
                           <div class="col-xs-3">
                               <span>回报时间：</span>
                           </div>
                           <div class="col-xs-9">
                               <input class="form-control" placeholder="不超过20个字"/>
                               <span class="text">天</span>
                           </div>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="#"><img src="./img/fan_06.png"></a>
                       </div>
                       <div class="text-center">预览</div>
                   </div>
               </div>
                <div style="height: 20px;"></div>

                <div class="row" id="repayContent2">
                    <div class="col-xs-8">
                        <div class="row">
                            <div class="col-xs-3">
                                <span class="text-title">回报02(选填):</span>
                            </div>
                        </div>

                        <div class="divider"></div>
                        <div class="row">
                            <div class="col-xs-3">
                                <span>支持金额：</span>
                            </div>
                            <div class="col-xs-9">
                                <input class="form-control" placeholder="不超过20个字"/>
                                <span class="text">元</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-3">
                                <span>限定名额：</span>
                            </div>
                            <div class="col-xs-9">
                                <span><input class="form-control" placeholder="不少于10000"/></span>

                                <span class="text">个</span>
                                <span class="text"><small>0为不限定名额</small></span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-3">
                                <span>说明图片：</span>
                            </div>
                            <div class="col-xs-9">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="btn btn-default">上传图片</div>
                                    </div>
                                    <div class="col-xs-8">
                                        <span class="text"><small>（选填）</small></span>
                                        <span class="text">支持jpg,png格式图片，图片大小不超过2M</span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-xs-3">
                                <span>回报内容：</span>
                            </div>
                            <div class="col-xs-9">
                                <textarea placeholder="最多不超过50字"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-3">
                                <span>回报时间：</span>
                            </div>
                            <div class="col-xs-9">
                                <input class="form-control" placeholder="不超过20个字"/>
                                <span class="text">天</span>
                            </div>
                        </div>
                    </div>
                    <div style="height: 20px;"></div>
                        <div class="row" id="repayContent3">
                            <div class="col-xs-8">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <span class="text-title">回报03(选填):</span>
                                    </div>
                                </div>

                                <div class="divider"></div>
                                <div class="row">
                                    <div class="col-xs-3">
                                        <span>支持金额：</span>
                                    </div>
                                    <div class="col-xs-9">
                                        <input class="form-control" placeholder="不超过20个字"/>
                                        <span class="text">元</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-3">
                                        <span>限定名额：</span>
                                    </div>
                                    <div class="col-xs-9">
                                        <span><input class="form-control" placeholder="不少于10000"/></span>

                                        <span class="text">个</span>
                                        <span class="text"><small>0为不限定名额</small></span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-3">
                                        <span>说明图片：</span>
                                    </div>
                                    <div class="col-xs-9">
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <div class="btn btn-default">上传图片</div>
                                            </div>
                                            <div class="col-xs-8">
                                                <span class="text"><small>（选填）</small></span>
                                                <span class="text">支持jpg,png格式图片，图片大小不超过2M</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-xs-3">
                                        <span>回报内容：</span>
                                    </div>
                                    <div class="col-xs-9">
                                        <textarea placeholder="最多不超过50字"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-3">
                                        <span>回报时间：</span>
                                    </div>
                                    <div class="col-xs-9">
                                        <input class="form-control" placeholder="不超过20个字"/>
                                        <span class="text">天</span>
                                    </div>
                                </div>
                            </div>


                            <div style="height: 20px;"></div>

                                <div class="row" id="repayContent4">
                                    <div class="col-xs-8">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <span class="text-title">回报04(选填):</span>
                                            </div>
                                        </div>

                                        <div class="divider"></div>
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <span>支持金额：</span>
                                            </div>
                                            <div class="col-xs-9">
                                                <input class="form-control" placeholder="不超过20个字"/>
                                                <span class="text">元</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <span>限定名额：</span>
                                            </div>
                                            <div class="col-xs-9">
                                                <span><input class="form-control" placeholder="不少于10000"/></span>

                                                <span class="text">个</span>
                                                <span class="text"><small>0为不限定名额</small></span>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-xs-3">
                                                <span>说明图片：</span>
                                            </div>
                                            <div class="col-xs-9">
                                                <div class="row">
                                                    <div class="col-xs-4">
                                                        <div class="btn btn-default">上传图片</div>
                                                    </div>
                                                    <div class="col-xs-8">
                                                        <span class="text"><small>（选填）</small></span>
                                                        <span class="text">支持jpg,png格式图片，图片大小不超过2M</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <span>回报内容：</span>
                                            </div>
                                            <div class="col-xs-9">
                                                <textarea placeholder="最多不超过50字"></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <span>回报时间：</span>
                                            </div>
                                            <div class="col-xs-9">
                                                <input class="form-control" placeholder="不超过20个字"/>
                                                <span class="text">天</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                <div class="row">
                    <div class="col-xs-3">
                        <span class="btn btn-success" id="saveRepay">保存</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-8 actionbutton">
                        <a href="start.php"><span class="btn btn-success" id="previousStep">上一步</span></a>
                        <a href="start3.php"><span class="btn btn-success" id="nextStep">下一步</span></a>


                    </div>
                </div>
            </form>
        <div style="height: 50px"></div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $("#repay1").click(function(){
        $("#repay1").addClass("active");
        $("#repay2").removeClass("active");
        $("#repayContent2").show();
        $("#repayContent3").show();
        $("#repayContent4").show();
    });
    $("#repay2").click(function(){
        $("#repay2").addClass("active");
        $("#repay1").removeClass("active");
        $("#repayContent2").hide();
        $("#repayContent3").hide();
        $("#repayContent4").hide();
    })
</script>
</body>
</html>