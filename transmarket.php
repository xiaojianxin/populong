
                <div id="transMarket">
                    <div class="twotab">
                        <div class="tabbable" id="twotab">
                            <ul class="nav nav-tabs">
                                <li class="active allpro">
                                    <a href="#buyin" data-toggle="tab">资金买入</a>
                                </li>
                                <li>
                                    <a href="#sellout" data-toggle="tab">资金卖出</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane active" id="buyin">

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

                                    $url = "123.57.74.122:8088/logic/invest";
                                    $json = '{"method": "invest_sold_query", "account": 6}';

                                    $result_arr = request_by_curl($url,$json);
                                    $result_arr = json_decode($result_arr);
                                    $result = $result_arr->result;
                                    var_dump($result);

                                    ?>
                                    <table class="table">
                                        <thead >
                                        <tr class="active">
                                            <th> 项目 </th>
                                            <th>买入时机</th>
                                            <th>买入金额</th>
                                            <th>进度</th>
                                            <th>状态</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                    <?php foreach ($result as $project) { ?>
                                        <tr class="warning">
                                            <td class="proName">
                                                <div class="row">
                                                    <div class="col-xs-4">
                                                        <img src="./img/index_07.png" style="width: 80px;float: right;">
                                                    </div>
                                                    <div class="col-xs-8">
                                                          <?php echo $project->projName;?>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="proTime">
                                        <?php $time = $project->applyTime ;
                                        $str = (string)$time;  // 将int型转换成string
                                        $arr = str_split($str, 4);
                                        $year = $arr['0'];
                                        $datearr = str_split($arr['1'],2); 
                                        $mouth = $datearr['0'];
                                        $day = $datearr['1'];
                                        $time = $year.'.'.$mouth.'.'.$day.' '.$arr['2']; 
                                         echo $time; // 结构输出?></td>

                                            <td class="proMoney"> <?php echo $project->realAmount ?></td>
                                            <td class="proState">
                                                <div style="height: 10px"></div>
                                                <h1>
                                                    <?php 
                                                        $realAmount = $project->realAmount;
                                                        $planAmount = $project->planAmount;
                                                        $precent = $realAmount/$planAmount;
                                                        $precent = $precent*100; 
                                                        $precent = $precent.'%';
                                                        echo $precent;
                                                    ?>
                                                </h1>
                                                <div style="height: 10px"></div>
                                                <h1>
                                                    <?php 
                                                if($precent == "100%"){
                                                    echo "已完成筹资";
                                                }else{
                                                    echo "未完成筹资";
                                                }
                                                    ?>
                                                </h1>
                                            </td>

                                            <td> 
                                                <span class='status'><?php echo $project->status;?></span>
                                                <div class='trans'> <a href='./inittransfer.php'>转让</a></div>
                                            </td>

                                        </tr>

                                        <?php } ?>

                                        <tr class="warning">
                                            <td class="proName">
                                                <div class="row">
                                                    <div class="col-xs-4">
                                                        <img src="./img/index_07.png" style="width: 80px;float: right;">
                                                    </div>
                                                    <div class="col-xs-8">
                                                        灵石传说--邀请您认识上古战国红
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="proTime">2015.01.22 13:55</td>

                                            <td class="proMoney"> 2000</td>
                                            <td class="proState">
                                                <div style="height: 10px"></div>
                                                <h1>100%</h1>
                                                <div style="height: 10px"></div>
                                                <h1>已完成筹资</h1>
                                            </td>

                                            <td> 已通过</td>

                                        </tr>
                                        <tr class="warning">
                                            <td class="proName">
                                                <div class="row">
                                                    <div class="col-xs-4">
                                                        <img src="./img/index_07.png" style="width: 80px;float: right;">
                                                    </div>
                                                    <div class="col-xs-8">
                                                        灵石传说--邀请您认识上古战国红
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="proTime">2015.01.22 13:55</td>

                                            <td class="proMoney"> 2000</td>
                                            <td class="proState">
                                                <div style="height: 10px"></div>
                                                <h1>100%</h1>
                                                <div style="height: 10px"></div>
                                                <h1>已完成筹资</h1>
                                            </td>

                                            <td> 已通过</td>

                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane " id="sellout">
                                    <?PHP

                                    $url = "123.57.74.122:8088/logic/invest";
                                    $json = '{"method": "invest_bought_query", "account": 6}';

                                    $result_arr = request_by_curl($url,$json);
                                    $result_arr = json_decode($result_arr);
                                    $result = $result_arr->result;
                                    var_dump($result);

                                    ?>

                                    <table class="table">
                                        <thead >
                                        <tr class="active">
                                            <th> 项目 </th>
                                            <th>买入时机</th>
                                            <th>买入金额</th>
                                            <th>进度</th>
                                            <th>状态</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                    <?php foreach ($result as $project) { ?>
                                        <tr class="warning">
                                            <td class="proName">
                                                <div class="row">
                                                    <div class="col-xs-4">
                                                        <img src="./img/index_07.png" style="width: 80px;float: right;">
                                                    </div>
                                                    <div class="col-xs-8">
                                                          <?php echo $project->projName;?>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="proTime">
                                        <?php $time = $project->applyTime ;
                                        $str = (string)$time;  // 将int型转换成string
                                        $arr = str_split($str, 4);
                                        $year = $arr['0'];
                                        $datearr = str_split($arr['1'],2); 
                                        $mouth = $datearr['0'];
                                        $day = $datearr['1'];
                                        $time = $year.'.'.$mouth.'.'.$day.' '.$arr['2']; 
                                         echo $time; // 结构输出?></td>

                                            <td class="proMoney"> <?php echo $project->realAmount ?></td>
                                            <td class="proState">
                                                <div style="height: 10px"></div>
                                                <h1>
                                                    <?php 
                                                        $realAmount = $project->realAmount;
                                                        $planAmount = $project->planAmount;
                                                        $precent = $realAmount/$planAmount;
                                                        $precent = $precent*100; 
                                                        $precent = $precent.'%';
                                                        echo $precent;
                                                    ?>
                                                </h1>
                                                <div style="height: 10px"></div>
                                                <h1>
                                                    <?php 
                                                if($precent == "100%"){
                                                    echo "已完成筹资";
                                                }else{
                                                    echo "未完成筹资";
                                                }
                                                    ?>
                                                </h1>
                                            </td>

                                            <td> 
                                                <span class='status'><?php echo $project->status;?></span>
                                                <div class='trans'> <a href='./inittransfer.php'>转让</a></div>
                                            </td>

                                        </tr>

                                        <?php } ?>

                                          </tbody>
                                    </table>

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
</body>
</html>