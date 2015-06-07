
                <div id="message">
                    <div class="threetab">
                        <div class="tabbable" id="threetab">
                            <ul class="nav nav-tabs">
                                <li class="active allpro">
                                    <a href="#receiveComment" data-toggle="tab">收到的评论</a>
                                </li>
                                <li>
                                    <a href="#sendComment" data-toggle="tab">发出的评论</a>
                                </li>
                                <li class="">
                                    <a href="#privateMsg" data-toggle="tab">私信</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="receiveComment">
                                    <div id="receive-list">
                                        <div class="one-receive">
                                            <div class="row">
                                                <div class="col-xs-2">
                                                    <img src="./img/fan_08.png" class="img-circle">
                                                </div>
                                                <div class="col-xs-10">
                                                    <span class="message-title">Lisa</span>
                                                    <span>评论了项目</span>
                                                    <span class="message-title">泡泡龙</span>

                                                    <div class="comment-time">2015.02.16 11:30</div>
                                                    <div class="comment-content">
                                                        此处为评论内容此处为评论内容
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
                                        <div class="one-receive">
                                            <div class="row">
                                                <div class="col-xs-2">
                                                    <img src="./img/fan_07.png" class="img-circle">
                                                </div>
                                                <div class="col-xs-10">
                                                    <span class="message-title">Lisa</span>
                                                    <span>评论了项目</span>
                                                    <span class="message-title">泡泡龙</span>

                                                    <div class="comment-time">2015.02.16 11:30</div>
                                                    <div class="comment-content">
                                                        此处为评论内容此处为评论内容
                                                    </div>
                                                    <div class="comment-reply">
                                                        <span class="text-green reply-btn" id="reply-btn1">回复</span>
                                                        <span class="text-green">查看</span>
                                                    </div>
                                                    <div id="replycomment1" class="replycomment">
                                                        <input class="form-control"/>
                                                        <div class="btn btn-success replybutton">回复</div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="sendComment">
                                    <div id="send-list">
                                        <div class="one-send">
                                            <div class="row">
                                                <div class="col-xs-2">
                                                    <img src="./img/fan_08.png" class="img-circle">
                                                </div>
                                                <div class="col-xs-10">
                                                    <span class="message-title">我</span>
                                                    <span>评论了项目</span>
                                                    <span class="message-title">泡泡龙</span>

                                                    <div class="comment-time">2015.02.16 11:30</div>
                                                    <div class="comment-content">
                                                        此处为评论内容此处为评论内容
                                                    </div>
                                                    <div class="comment-reply">
                                                        <span class="text-orange" id="delete-comment">删除</span>
                                                        <span class="text-green">查看</span>
                                                    </div>


                                                </div>
                                            </div>
                                            <div class="one-send">
                                                <div class="row">
                                                    <div class="col-xs-2">
                                                        <img src="./img/fan_09.png" class="img-circle">
                                                    </div>
                                                    <div class="col-xs-10">
                                                        <span class="message-title">我</span>
                                                        <span>评论了项目</span>
                                                        <span class="message-title">泡泡龙</span>

                                                        <div class="comment-time">2015.02.16 11:30</div>
                                                        <div class="comment-content">
                                                            此处为评论内容此处为评论内容
                                                        </div>
                                                        <div class="comment-reply">
                                                            <span class="text-orange" id="delete-comment2">删除</span>
                                                            <span class="text-green">查看</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane active" id="privateMsg">
                                    <div id="private-list">
                                        <div class="one-private">
                                            <div class="row">
                                                <div class="col-xs-2">
                                                    <img src="./img/fan_09.png" class="img-circle">
                                                </div>
                                                <div class="col-xs-10">
                                                    <span class="message-title">Mike</span>
                                                    <div class="comment-time">2015.02.16 11:30</div>
                                                    <div class="comment-content">
                                                        此处为评论内容此处为评论内容
                                                    </div>
                                                    <div class="comment-reply">

                                                        <span class="text-green">查看</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
    })
</script>
