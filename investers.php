<?php
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="布尔教育 http://www.itbool.com" />
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"  href="./css/reset.css"/>
    <link rel="stylesheet" href="./css/toastr.css">
    <link rel="stylesheet" type="text/css" href="./css/hotdetail.css">
    <script src="./js/jquery-1.10.1.js"></script>
    <script type="text/javascript" src="./js/swiper3.07.min.js"></script>
    <script type="text/javascript" src="./js/index.js"></script>
    <script src="./bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="./js/toastr.js"></script>
    <!--[if lt IE 9]>
    <script src="http://apps.bdimg.com/libs/html5shiv/3.7/html5shiv.min.js"></script>
    <script src="http://apps.bdimg.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <![endif]-->
</head>
<body>
<div id="investers">
    <div class="container" style="min-width: 720px;">
     <?PHP
        function request_by_curl($remote_server, $json_string)
        {
            $ch = curl_init();
            curl_setopt($ch,CURLOPT_URL,$remote_server);
            curl_setopt($ch,CURLOPT_POSTFIELDS,$json_string);
            curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
            $data = curl_exec($ch);
            curl_close($ch);
            return $data;
        }
        $projectId = $_GET['projId'];
        $json = '{"method": "user_invest", "projectId": '.$projectId.'}';



        $url = "123.57.74.122:8088/logic/project";

        //var_dump($json);

        $result_arr = request_by_curl($url,$json);
        //var_dump($result_arr);
        $result_arr = json_decode($result_arr);
        $result = $result_arr->result;
        $isFocus=$result[0]->focus;

        var_dump($result);
        var_dump($isFocus);

  ?>
   
        <div class="row">
            <?php $i=1;foreach ($result as $invester) { ?>
                <div class="col-xs-4">
                    <div class="one-invester">
                        <div class="one-market">
                            <div style="height: 10px;"></div>
                            <img src="./img/fan_08.png" class="img-circle">
                            <form id="form<?php echo $i;?>">
                            <input name="idollD" value="<?php echo $invester->usreId;?>" style="display:none">
                            <input name="token" value="<?php echo $_SESSION['token'];?>" style="display:none">
                            </form>
                            <h2><?php echo $invester->nickname;?></h2>
                            <h3>支持此项目</h3>
                            <h3 class="text-red">￥<?php echo $invester->invsAmount ?></h3>
                            <?php if($isFocus == 1){?>

                                <li class="dropdown btn focus-btn"  id="unFocusPane<?php echo $i;?>">
                                    <a href="#" class="dropdown-toggle " data-toggle="dropdown"><span class="glyphicon glyphicon-ok"><span>已关注</a>
                                    <ul class="dropdown-menu">
                                        <a  href="#followModal"  data-toggle="modal" data-target="#followModal"
                                            style="color: grey;line-height: 30px;margin-left: 30%;">
                                            取消关注
                                        </a>
                                    </ul>
                                </li>

                            <?php }else{ ?>
                                <div class="btn focus-btn" id="focusPane<?php echo $i;?>">
                                    <a id="<?php echo $i;?>" class="focusButton" >
                                    <span class="glyphicon glyphicon-plus"><span>关注
                                    </a>
                                </div>
                            <?php } ?>

                            <div class="modal fade" id="followModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

                                        </div>
                                        <div class="modal-body">
                                            <div class="center-block">
                                                <img src="./img/question.jpg"style="width: 40%;margin-left: 30%;">
                                            </div>
                                            <h2 style="font-size: 20px;text-align: center; margin-bottom: 20px;">确定要取消关注此人吗？</h2>

                                            <div class="row">
                                                <div class="col-xs-2">

                                                </div>
                                                <div class="col-xs-4">
                                                    <div class="btn btn-success cancelFocus " style="width: 100%;" id="<?php echo $i;?>">取消关注</div>

                                                </div>
                                                <div class="col-xs-4">
                                                    <div class="btn btn-default" style="width: 100%;" data-dismiss="modal">取消</div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>


                        </div>
                    </div>
                </div>

            <?php $i++;} ?>
        </div>
    </div>
</div>
           

        


<script>
    toastr.options = {
        "closeButton": false,
        "debug": false,
        "positionClass": "toast-top-center",
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "3000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };
    $
$(".focusButton").click(function(){
    var i = $(this).attr('id');
    var idolId = $('#form'+i).children().eq(0).val();
    var token = $('#form'+i).children().eq(1).val();
    $.ajax({
        type:"POST",
        url:"./action/do_focus.php",
        data:"idolId="+idolId+"&token="+token+"&id="+i,
        success:function(data){
             var dataobj = eval("("+data+")");
                    if (dataobj.code==0) {

                    toastr.success("关注成功");
                        setTimeout(" window.location.reload();",3000);


                    };
            
        },
        error:function(){
            toastr.error("关注失败");
        }
    });

});
    $(".cancelFocus").click(function(){
        var i = $(this).attr('id');
        var idolId = $('#form'+i).children().eq(0).val();
        var token = $('#form'+i).children().eq(1).val();
        $.ajax({
            type:"POST",
            url:"./action/do_cancel_focus.php",
            data:"&idolId="+idolId+"&token="+token+"&id="+i,
            success:function(data){

                $('#followModal').modal('hide');

                toastr.success("已取消关注");
                setTimeout(" window.location.reload();",3000);
            },
            error:function(){
                toastr.error("取消关注失败");
            }
        });
    })
</script>
</body>
</html>