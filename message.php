<?php
    $ch = curl_init();
    $token = $_SESSION['token'];
    //var_dump($token);
    $curl_url = "http://123.57.74.122:8888/version_0.2/action/test_self_message.php?token=".$token."&status=0";
    //var_dump($_SESSION);
    curl_setopt($ch, CURLOPT_URL, $curl_url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);//不直接输出，返回到变量
    $curl_result = curl_exec($ch);
    $result = json_decode($curl_result);
    curl_close($ch);
    $result = $result->result;
   // var_dump($result);
?>
                <div id="message">
                    <div class="threetab">
                        <div class="tabbable" id="threetab">
                            <ul class="nav nav-tabs">
                                <li class="active allpro">
                                    <a href="#receiveComment" data-toggle="tab">收到的评论</a>
                                </li>
                                <li class="">
                                    <a href="#sendComment" data-toggle="tab">发出的评论</a>
                                </li>
                                <li class="">
                                    <a href="#privateMsg" data-toggle="tab">私信</a>
                                </li>
                                <li class="">
                                    <a href="#systemMsg" data-toggle="tab">系统信息</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="receiveComment">
                                    <div id="receive-list">
                                        <?php foreach ($result->received_message as $message) {?>
                                             <div class="one-receive">
                                            <div class="row">
                                                <div class="col-xs-2">
                                                    <img src="./img/fan_08.png" class="img-circle">
                                                </div>
                                                <div class="col-xs-10">
                                                    <span class="message-title"><?php echo $message->fromName?></span>
                                                    <span>评论了项目</span>
                                                    <span class="message-title"><?php echo $message->projectName?></span>

                                                    <div class="comment-time"><?php echo date('Y-m-d H:i:s',$message->time)?></div>
                                                    <div class="comment-content">
                                                        <?php echo $message->content ?>
                                                    </div>
                                                    <div class="comment-reply">
                                                        <span class="text-green reply-btn" id="reply-btn">回复</span>
                                                        <span class="text-green">查看</span>
                                                    </div>
                                                    <div id="replycomment" class="replycomment">
                                                        <input class="form-control"/>
                                                        <div class="btn btn-success replybutton">回复</div>
                                                    </div>

                                                </div>
                                            </div>
                                              
                                        </div>
                                     <?php }?> 
                                    </div>
                                </div>
                                <div class="tab-pane" id="sendComment">
                                    <div id="send-list">
                                        <?php foreach ($result->sended_message as $message) {?>
                                        <div class="one-send">
                                            <div class="row">
                                                <div class="col-xs-2">
                                                    <img src="./img/fan_08.png" class="img-circle">
                                                </div>
                                                <div class="col-xs-10">
                                                    <span class="message-title"><?php echo $_SESSION['nickName'];?></span>
                                                    <?php if ($message->type == 1) {?>
                                                        <span>评论了项目</span>
                                                        <span class="message-title"><?php echo $message->projectName;?></span>
                                                    <?php }elseif ($message->type == 2) {?>
                                                        <span>评论了</span>
                                                        <span class="message-title"><?php echo $message->toName;?></span>
                                                   <?php }
                                                    ?>
                                                    
                                                    

                                                    <div class="comment-time"><?php echo date('Y-m-d H:i:s',$message->time)?></div>
                                                    <div class="comment-content">
                                                        <?php echo $message->content ?>
                                                    </div>
                                                    <div class="comment-reply">
                                                         <input type="text" id="token" style="display:none" value="<?php echo $_SESSION['token'];?>">
                                                        <a class="text-orange delete-comment" id="<?php echo $message->commentId?>">删除</a>
                                                        <span class="text-green">查看</span>
                                                    </div>


                                                </div>
                                            </div>
                                        
                                            </div>
                                        <?php }?> 
                                        </div>
                                    </div>
                            
                                <div class="tab-pane" id="privateMsg">
                                    <div id="private-list">
                                        <?php foreach ($result->private_message as $message) {?>
                                        <div class="one-private">
                                            <div class="row">
                                                <div class="col-xs-2">
                                                    <img src="./img/fan_09.png" class="img-circle">
                                                </div>
                                                <div class="col-xs-10">
                                                    <span class="message-title"><?php echo $message->fromName;?></span>
                                                    <div class="comment-time"><?php echo date('Y-m-d H:i:s',$message->time)?></div>
                                                    <div class="comment-content">
                                                         <?php echo $message->content ?>
                                                    </div>
                                                    <div class="comment-reply">

                                                        <span class="text-green">查看</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="tab-pane" id="systemMsg">
 <?php
    $ch = curl_init();
    $token = $_SESSION['token'];
    //var_dump($token);
    $curl_url = "http://123.57.74.122:8888/version_0.2/action/test_self_message.php?token=".$token."&status=1";
    //var_dump($_SESSION);
    curl_setopt($ch, CURLOPT_URL, $curl_url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);//不直接输出，返回到变量
    $curl_result = curl_exec($ch);
    $result = json_decode($curl_result);
    curl_close($ch);
    $result = $result->result;
    $result1 = $result->unReadMessage;
    $result = $result->readMessage;
?>  
                                    <div id="send-list">
                                        <?php foreach ($result as $message) {?>
                                           <div class="one-send">
                                            <div class="row">
                                                <div class="col-xs-2">
                                                    <img src="./img/fan_08.png" class="img-circle">
                                                </div>
                                                <div class="col-xs-10">
                                                    <span>系统通知</span>
                                                    <div class="comment-time"><?php echo date("Y-m-d",$message->createTime);?></div>
                                                    <div class="comment-content">
                                                        <?php echo $message->content?>
                                                    </div>
                                                    <div class="comment-reply">
                                                        <span class="text-green">查看</span>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <?php }?>
                                          <?php foreach ($result1 as $message) {?>
                                           <div class="one-send">
                                            <div class="row">
                                                <div class="col-xs-2">
                                                    <img src="./img/fan_08.png" class="img-circle">
                                                </div>
                                                <div class="col-xs-10">
                                                    <span>系统通知</span>
                                                    <div class="comment-time"><?php echo date("Y-m-d",$message->createTime);?></div>
                                                    <div class="comment-content">
                                                        <?php echo $message->content?>
                                                    </div>
                                                    <div class="comment-reply">
                                                        <span class="text-green">查看</span>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <?php }?>
                                       
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>

    
<script type="text/javascript">
    $("#reply-btn").click(function(){
        $("#replycomment").slideToggle();
    });
    $("#reply-btn1").click(function(){
        $("#replycomment1").slideToggle();
    });
    $('.delete-comment').click(function(){
        var messageId = $(this).attr("id");
        var token = $('#token').val();
        alert(token);
         $.ajax({
            cache: false,
            type:"POST",
            url:"./action/do_delete_message.php",
            data:"messageId="+messageId+"&token="+token,
            success:function(data){
                alert(data);
                var dataobj = eval("("+data+")");
                if(dataobj.code == '10006'){
                    $("#login .error-tip").html('用户名不存在');
                }else if(dataobj.code == '10005'){
                    $("#login .error-tip").html('密码错误');
                }
                else
                {

                    toastr.success("删除成功");
                    $("#login").fadeOut();

                    setTimeout(function(){window.location.href=window.location.href;},1000);



                }
            },
            error:function(){
                alert("登录失败");
            }
        })
    });
</script>
