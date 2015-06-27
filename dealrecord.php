<?php

    $ch = curl_init();
    $token = $_SESSION['token'];
    $curl_url = "http://123.57.74.122:8888/version_0.2/action/test_self_dealrecord.php?token=".$token;
    curl_setopt($ch, CURLOPT_URL, $curl_url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);//不直接输出，返回到变量
    $curl_result = curl_exec($ch);
    curl_close($ch);
    $r = json_decode($curl_result);
    //var_dump($r);
    $result = $r->result;
    var_dump($result);
    //$a = json_decode($nickname);
    //var_dump($a);
    //$a = $nickname['result'];
    //print_r($a);
?>
                <div id="recordbox">
                    <div class="record-title">
                        <div class="title">交易记录</div>
                    </div>
               
                <div class="row dealtype">
                    <span>&nbsp;&nbsp;交易类型:&nbsp;</span>
                    <span class="active">&nbsp;全部&nbsp;</span>
                    <span>&nbsp;充值&nbsp;</span>
                    <span>&nbsp;提现&nbsp;</span>
                    <span >&nbsp;投资&nbsp;</span>
                    <span >&nbsp;收益&nbsp;</span>
                </div>

                
                    <div id="deal-list">
                    <table class="table">
                        <thead >
                            <tr class="active">
                                <th> 时间 </th>
                                <th>交易类型</th>
                                <th> 交易详情 </th>
                                <th>金额</th>
                                <th>备注</th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php foreach ($result as $dealcontent) { ?>    
                        <tr class="warning">
                            <td><?php $time = $dealcontent->time ;
                            $str = (string)$time;  // 将int型转换成string
                            $arr = str_split($str, 4);
                            $year = $arr['0'];
                            $datearr = str_split($arr['1'],2); 
                            $mouth = $datearr['0'];
                            $day = $datearr['1'];
                            $time = $year.'.'.$mouth.'.'.$day.' '.$arr['2']; 
                            echo $time; // 结构输出?></td>
                            <td> <?php echo $dealcontent->tradeType ?></td>
                            <td><a href="./pro.php?id=<?php echo $dealcontent->amount?>"><?php echo $dealcontent->projName ?></a></td>
                            <td style="color: #6cc87f"> <?php echo $dealcontent->amount;?></td>
                            <td><?php echo $dealcontent->comment ?></td>
                        </tr>
                        <?php } ?>

                        </tbody>
                    </table>
                </div>
                <div id="deal-list">
                    <table class="table">
                        <thead >
                            <tr class="active">
                                <th> 时间 </th>
                                <th>交易类型</th>
                                <th> 交易详情 </th>
                                <th>金额</th>
                                <th>备注</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr class="warning">
                            <td>2015.01.22 13:55</td>
                            <td> 充值</td>
                            <td>交易内容</td>
                            <td style="color: #6cc87f"> 500</td>
                            <td> 无</td>
                        </tr>
                        <tr class="warning">
                            <td>2015.01.22 13:55</td>
                            <td> 充值</td>
                            <td>交易内容</td>
                            <td style="color: #6cc87f"> 500</td>
                            <td> 无</td>
                        </tr>
                        <tr class="warning">
                            <td>2015.01.22 13:55</td>
                            <td> 充值</td>
                            <td>交易内容</td>
                            <td style="color: #6cc87f"> 500</td>
                            <td> 无</td>
                        </tr>
                        <tr class="warning">
                            <td>2015.01.22 13:55</td>
                            <td> 充值事实上事实上身上试试</td>
                            <td>交易内容</td>
                            <td style="color: #6cc87f"> 500</td>
                            <td> 无</td>
                        </tr>
                        <tr class="warning">
                            <td>2015.01.22 13:55</td>
                            <td> 充值</td>
                            <td>交易内容</td>
                            <td style="color: #6cc87f"> 500</td>
                            <td> 无</td>
                        </tr>
                        <tr class="warning">
                            <td>2015.01.22 13:55</td>
                            <td> 充值</td>
                            <td>交易内容</td>
                            <td style="color: #6cc87f"> 500</td>
                            <td> 无</td>
                        </tr>
                        <tr class="warning">
                            <td>2015.01.22 13:55</td>
                            <td> 充值</td>
                            <td>交易内容</td>
                            <td style="color: #6cc87f"> 500</td>
                            <td> 无</td>
                        </tr>

                        </tbody>
                    </table>
                </div>
                <div id="pagination">
                    <div class="holder" style="text-align: center;">
                        <a class="jp-previous jp-disabled">←</a>
                        <a class="jp-current">1</a>
                        <span class="jp-hidden">...</span>
                        <a>2</a>
                        <a>3</a>
                        <a>4</a>
                        <a>5</a>
                        <a class="jp-hidden">6</a>
                        <a class="jp-hidden">7</a>
                        <a class="jp-hidden">8</a>
                        <a class="jp-hidden">9</a>
                        <span>...</span>
                        <a>10</a>
                        <a class="jp-next">→</a>
                    </div>
                </div>
            </div>

<script type="text/javascript">
    // $(function(){
    //     $("div.holder").jPages({
    //         containerID : "deal-list"
    //     });
    // });
</script>