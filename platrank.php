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

    $url = "123.57.74.122:8088/logic/insite";
    $json = '{"method":"sponser_ranklist"}';

    $result_arr = request_by_curl($url,$json);
    $result_arr = json_decode($result_arr);
    $result = $result_arr->result;
    //var_dump($result);
?>
                <div id="platrank">
                    <div class="twotab">
                        <div class="tabbable" id="twotab">
                            <ul class="nav nav-tabs">
                                <li class="active ">
                                    <a href="#startRank" data-toggle="tab">发起人排行榜</a>
                                </li>
                                <li>
                                    <a href="#investRank" data-toggle="tab">投资人排行榜</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="startRank">
                                    <table class="table">
                                        <thead >
                                        <tr class="active">
                                            <th>名次 </th>
                                            <th>姓名</th>
                                            <th>发起项目数</th>
                                            <th>筹集资金</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                    <?php 
                                    if (empty($result['0']->userName)){
                                        echo "没有发起人";
                                    }else{
                                        foreach ($result as $user) { ?>
                                          <tr class="warning">
                                                <td class="randId">1</td>
                                                <td class="proName">
                                                    <span>
                                                        <img src="./img/index_04.png"  class="img-circle rank-pic">
                                                    </span>
                                                    <span>
                                                        <?php echo $user->userName ?>
                                                    </span>
                                                </td>
                                                <td class="proNum"><span><?php echo $user->projNums ?></span></td>
                                                <td class="proMoney"><span> <?php echo $user->amount?></span></td>
                                            </tr>
                                   <?php 
                                    }
                                }
                                    ?>
                                        
                                        </tbody>
                                    </table>
                                </div>


                                <div class="tab-pane " id="investRank">

 <?PHP
    $url = "123.57.74.122:8088/logic/insite";
    $json = '{"method":"investor_ranklist"}';

    $result_arr = request_by_curl($url,$json);
    $result_arr = json_decode($result_arr);
    $result = $result_arr->result;
    //var_dump($result);
?>   
                                    <table class="table">
                                        <thead >
                                        <tr class="active">
                                            <th>名次 </th>
                                            <th>姓名</th>
                                            <th>发起项目数</th>
                                            <th>筹集资金</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                <?php 
                                    if (empty($result['0']->user)){
                                        echo "没有发起人";
                                    }else{
                                        foreach ($result as $user) { 
                                ?>
                                            <tr class="warning">
                                                <td class="randId">1</td>
                                                <td class="proName">
                                                    <span>
                                                        <img src="./img/index_04.png"  class="img-circle rank-pic">
                                                    </span>
                                                    <span>
                                                        <?php echo $user->userName ?>
                                                    </span>
                                                </td>
                                                <td class="proNum"><span><?php echo $user->projNums ?></span></td>
                                                <td class="proMoney"><span><?php echo $user->amount ?></span></td>
                                            </tr>
                                   <?php 
                                    }
                                }
                                    ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

