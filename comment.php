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
    <link rel="stylesheet" type="text/css" href="./css/hotdetail.css">
    <script src="./js/jquery-1.10.1.js"></script>
    <script type="text/javascript" src="./js/swiper3.07.min.js"></script>
    <script type="text/javascript" src="./js/index.js"></script>
    <script src="./bootstrap/js/bootstrap.min.js"></script>
    <!--[if lt IE 9]>
    <script src="http://apps.bdimg.com/libs/html5shiv/3.7/html5shiv.min.js"></script>
    <script src="http://apps.bdimg.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <![endif]-->
</head>
<body>
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

    $url = "123.57.74.122:8088/logic/project";
    $json = '{"method": "project_comment", "projectId": '.$projectId.'}';

    $result_arr = request_by_curl($url,$json);
    $result_arr = json_decode($result_arr);
    $result = $result_arr->result;
    $result_content = $result;
    var_dump($result);
    
    //var_dump($projectId);

?>
<div id="comment">
    <div class="container" style="min-width: 520px;">
<?php $i = 1;foreach($result as $comment){ ?>
        <div class="one-comment" id="comment<?php echo $i;?>">
            <div class="row">
                <div class="col-xs-2">
                    <div class="user-pic"><img src="./img/fan_01.png" class="img-circle"> </div>
                </div>
                <div class="col-xs-10">
                    <div style="height: 30px"></div>
                    <span class="user-name"><?php echo $comment->userName?></span>
                    <span class="user-time"><?php echo $comment->time?></span>
                    <p><?php echo $comment->content ?></p>
                    <div class="row pull-right" >
                        <span class="showReply" id="<?php echo $i;?>">回复（<?php echo sizeof($comment->comments)?>）</span>
                        <span class="showZan" id="<?php echo $i;?>">赞（<?php echo $comment->favor?>）</span>
                    </div>
                    <div class="replys" id="replys<?php echo $i;?>">
                        <div class="thumbnail">
                            <?php foreach ($comment->comments as $childcomment) {?>
                            <div class="one-reply">
                                <div class="row">
                                    <div class="col-xs-2">
                                        <img src="./img/fan_06.png">
                                    </div>
                                    <div class="col-xs-10">
                                        <div style="height: 20px;"></div>
                                        <span class="reply-name"><?php echo $childcomment->userName;?></span>
                                        <span>:</span>
                                        <span class="reply-content">
                                           <?php echo $childcomment->content ?>
                                        </span>
                                        <div style="height: 20px;"></div>

                                        <div class="divider"></div>
                                     </div>
                                </div>
                            </div>
                            <?php }?>
                            <div class="reply-form">
                                <input type="text" id="commentId<?php echo $i;?>" style="display:none" value="<?php echo $comment->id ;?>" />
                                <input type="text" id="reply-content<?php echo $i;?>" class="form-control" placeholder="我也来说一句">
                                <div style="height: 10px"></div>
                                <div class="btn btn-success pull-right do-reply" id="<?php echo $i;?>">回复</div>
                            </div>
                            <div style="height: 30px"></div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
       

        <?php $i++;}?>
        <div class="reply-form">
            <div style="height:50px;"></div>
            <div style="font-size:20px; margin-bottom:10px;">评论项目</div>
            <input type="text" id="commentId0" style="display:none" value="0" />
            <input type="text" id="reply-content0" class="form-control" placeholder="我也来说一句">
            <div style="height: 10px"></div>
            <div class="btn btn-success pull-right do-reply" id="0">回复</div>
        </div>
        <div style="height: 30px"></div>
         <input type="text" id="record" style="display:none" value="<?php echo $i;?>" />
         <input type="text" id="projId" style="display:none" value="<?php echo $projectId;?>" />
         <input type="text" id="token" style="display:none" value="<?php echo $_SESSION['token'];?>">
         <input type="text" id="record" style="display:none" value="<?php echo $i;?>" />
       
    </div>

</div>
<script type="text/javascript">
            var record = $('#record').val();
            $(".showReply").click(function(){
                var i = $(this).attr('id'); 
                $("#replys"+i).slideToggle();
            });

            $('.do-reply').click(function(){
                var i = $(this).attr('id'); 
                var content = $('#reply-content'+i).val();
                var projId = $('#projId').val();
                var commentId = $('#commentId'+i).val();
                //alert(commentId);
                var token = $('#token').val();
                 $.ajax({
                  type:"POST",
                  url:"./action/do_reply.php",
                  data:"content="+content+"&projId="+projId+"&commentId="+commentId+"&token="+token+"&id="+i,
                  success:function(data){
                    //alert(data);
                    var dataobj = eval("("+data+")");
                    if (dataobj.code==0) {
                     window.location.reload();
                    };
                  },
                  error:function(){
                      alert("注册失败");
                  }
                });

            });
</script>
</body>
</html>