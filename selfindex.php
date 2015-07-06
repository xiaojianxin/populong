<?php
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
$url = "123.57.74.122:55555/logic/userinfo";
$json = '{
    "method": "myIdols",
    "token": '.$token.'
}';
$json1 = '{
    "method": "myFans",
    "token": '.$token.'
}';
$result_arr1 = request_by_curl($url,$json);
$result_arr1= json_decode($result_arr1);
$idols = $result_arr1->result;
$result_arr2 = request_by_curl($url,$json1);
$result_arr2= json_decode($result_arr2);
$fans = $result_arr2->result;


?>
                <div class="self_right_top">
                    <div class='self_pic'>
                        <img src="./img/head_02.png" alt="" />

                    </div>
                    <div class="self_explain">Lilith-泡泡隆设计师</div>
                    <div class='row'>
                        <div class="col-xs-4" style="width:37%"></div>
                        <a href="#" id="popover_bottom1" class='col-xs-2' style="width:15%"
                           rel="popover" data-content="It's so simple to create a tooltop for my website!">
                            发起者 lv3</a>
                        <a href="#" id="popover_bottom2" class='col-xs-2' rel="popover" data-content="It's so simple to create a tooltop for my website!">投资者 lv6</a>
                        <div class="col-xs-4"></div>

                    </div>
                    <div class="container-fluid" id="self_nav">
                        <div id="topbottom" class="row">
                            <div id="toChooseone" class="col-xs-3 content_nav" >关注者<?php echo sizeof($idols)?></div>
                            <div id="toChoosefans" class="col-xs-3 content_nav" >粉丝<?php echo sizeof($fans)?></div>
                        </div>
                    </div>
                </div>
                    
                    <div class=" self-tab-content">
                        <div class="tab-pane" id="concern"><?php require('./concern.php') ?></div>
                        <div class="tab-pane" id="fans" style="display:none"><?php require('./fans.php') ?></div>
                    </div>


