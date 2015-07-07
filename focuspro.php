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
$token = '"'.$_SESSION['token'].'"';
$url = "123.57.74.122:55555/logic/focus";
$json = '{
    "method": "myFocus",
    "token": '.$token.'
}';



$result_arr = request_by_curl($url,$json);
$result_arr = json_decode($result_arr,true);
//var_dump($result_arr);
?>
                <div id="focusPro">
                    <div class="twotab">
                        <div class="tabbable" id="twotab">
                            <ul class="nav nav-tabs">
                                <li class="active allpro">
                                    <a href="#allFocus" data-toggle="tab">全部项目</a>
                                </li>
                                <li>
                                    <a href="#financingFocus" data-toggle="tab">筹资中</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="allFocus">
                                    <div class="row" style="height: 1100px;">
                                        
                                            <?php foreach ($result_arr['result'] as $project) {?>
                                                <div class="col-xs-4">
                                                     <div class="onebox">
                                                <a href="./pro.php?projId=<?php echo $project['projID'];?>">
                                                    <img class="project" src=<?php echo $project['projPho'] ?> alt="2" />
                                                </a>
                                                <h2><?php echo $project['projName'];?></h2>
                                                <a href="">
                                                    <h3>发起人:<?php echo $project['projUserName'];?></h3>
                                                </a>
                                                <h4><?php echo $project['projAbst'];?></h4>
                                                <div id="right_center">
                                                    <div class="row">
                                                        <div class="col-xs-6">
                                                            <span>已完成:</span>
                                                            <span class="percentage-text">75%</span>
                                                        </div>
                                                        <div class="col-xs-1">
                                            <span>
                                                <img class="place"src="./img/index_details1.png" alt="地点" />
                                            </span>
                                                        </div>
                                                        <div class="col-xs-3">
                                                            <span><?php echo $project['city'];?></span>
                                                        </div>
                                                        <div class="col-xs-2">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="progray">
                                                            <div class="progreen"></div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-7">
                                                            <span><?php echo $project['realAmount'];?>元</span>
                                                        </div>
                                                        <div class="col-xs-5">
                                                            <span>
                                                                10天
                                                            </span>

                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-7">
                                                            <span>已筹集资金</span>
                                                        </div>
                                                        <div class="col-xs-5">
                                                            <span>
                                                                剩余天数
                                                            </span>

                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="row" style="margin-top:20px;">
                                                    <div class="col-xs-6">
                                                        <span class="pull-left">
                                                            <img class="investor"src="./img/index_details3.png" alt="投资者" />
                                                        </span>
                                                        <span style="font-size: 12px">
                                                            投资者：<?php echo $project['invsNum'];?>
                                                        </span>
                                                    </div>
                                                    <div class="col-xs-6 ">
                                                        <span >
                                                            <img class="follower"src="./img/index_details4.png" alt="投资者" />
                                                        </span>
                                                        <span style="font-size: 12px">
                                                            关注者：<?php echo $project['focusNum'];?>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                           <?php }?>
                                        
                                    <h1 class="seemore"><a>查看更多</a></h1>
                                    <div style="height: 50px;"></div>
                                </div>
</div>
                                <div class="tab-pane " id="financingFocus" >
                                    <div style="height: 1100px;">
                                        <div class="row">
                                            <!--填充遍历内容-->
                                        </div>

                                    </div>

                                    <h1 class="seemore"><a>查看更多</a></h1>
                                    <div style="height: 80px;"></div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>


<!--<script type="text/javascript">-->
<!--    $(function(){-->
<!--        $("div.holder").jPages({-->
<!--            containerID : "deal-list"-->
<!--        });-->
<!--    });-->
<!--</script>-->
