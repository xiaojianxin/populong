<?php
    $start = '1';
    $end = '2';
    $ch = curl_init();
    $token = $_SESSION['token'];
    $curl_url = "http://123.57.74.122:8888/version_0.2/action/test_self_invest.php?token=".$token;
    curl_setopt($ch, CURLOPT_URL, $curl_url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);//不直接输出，返回到变量
    $curl_result = curl_exec($ch);
    //var_dump($curl_result);
    $result = json_decode($curl_result);
    //var_dump($result);

    curl_close($ch);
    $result = $result->result;
    
?>
                <div id="investProList">
                    <div class="fourtab">
                        <div class="tabbable" id="threetab">
                            <ul class="nav nav-tabs">
                                <li class="active allpro">
                                    <a href="#allPro" data-toggle="tab">全部</a>
                                </li>
                                <li>
                                    <a href="#unfinishedPro" data-toggle="tab">未完成项目</a>
                                </li>
                                <li>
                                    <a href="#finishedPro" data-toggle="tab">已完成项目</a>
                                </li>

                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="allPro">
                                    <table class="table">
                                        <thead >
                                        <tr class="active">
                                            <th> 项目 </th>
                                            <th>投资时机</th>
                                            <th> 投资金额</th>
                                            <th>进度</th>
                                            <th>状态</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                    <?php
                                    if(empty($result['0']->projName)){
                                        echo "您还没有投资记录";

                                    } else{ 
                                     foreach ($result as $project) { ?>
                                        <tr class="warning">
                                            <td class="proName">
                                                <div class="row">
                                                    <div class="col-xs-4">
                                                    <a href="./pro.php?projId=<?php echo $project->projID;?>">
                                                        <img src=<?php echo $project->projPho;?> style="width: 80px;float: right;">
                                                    </a>
                                                    </div>
                                                    <div class="col-xs-8">
                                                    <a href="./pro.php?projId=<?php echo $project->projID;?>">
                                                        <?php echo $project->projName;?>
                                                    </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="proTime">
                                                <?php 
                                                $time = $project->applyTime ;
                                                $str = (string)$time;  // 将int型转换成string
                                                $arr = str_split($str, 4);
                                                $year = $arr['0'];
                                                $datearr = str_split($arr['1'],2); 
                                                $mouth = $datearr['0'];
                                                $day = $datearr['1'];
                                                $time = $year.'.'.$mouth.'.'.$day.' '.$arr['2']; 
                                                 echo $time; // 结构输出?>
                                            </td>

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
                                    <?php
                                        } 
                                     } ?> 

                                        </tbody>
                                    </table>

                                </div>
                                <div class="tab-pane" id="unfinishedPro">
                                    <table class="table">
                                        <thead >
                                        <tr class="active">
                                            <th> 项目 </th>
                                            <th>投资时机</th>
                                            <th> 投资金额</th>
                                            <th>进度</th>
                                            <th>状态</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                         <?php
                                    if(empty($result['0']->projName)){
                                        echo "您还没有投资记录";

                                    } else{ 
                                     foreach ($result as $project) { ?>
                                        <tr class="warning">
                                            <td class="proName">
                                                <div class="row">
                                                    <div class="col-xs-4">
                                                    <a href="./pro.php?projId=<?php echo $project->projID;?>">
                                                        <img src=<?php echo $project->projPho;?> style="width: 80px;float: right;">
                                                    </a>
                                                    </div>
                                                    <div class="col-xs-8">
                                                    <a href="./pro.php?projId=<?php echo $project->projID;?>">
                                                        <?php echo $project->projName;?>
                                                    </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="proTime">
                                                <?php 
                                                $time = $project->applyTime ;
                                                $str = (string)$time;  // 将int型转换成string
                                                $arr = str_split($str, 4);
                                                $year = $arr['0'];
                                                $datearr = str_split($arr['1'],2); 
                                                $mouth = $datearr['0'];
                                                $day = $datearr['1'];
                                                $time = $year.'.'.$mouth.'.'.$day.' '.$arr['2']; 
                                                 echo $time; // 结构输出?>
                                            </td>

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
                                    <?php
                                        } 
                                     } ?> 

                                        </tbody>
                                    </table>

                                </div>
                                <div class="tab-pane" id="finishedPro">
                                    <table class="table">
                                        <thead >
                                        <tr class="active">
                                            <th> 项目 </th>
                                            <th>投资时机</th>
                                            <th> 投资金额</th>
                                            <th>进度</th>
                                            <th>状态</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="warning">
                                            <td class="proName">
                                                <div class="row">
                                                    <div class="col-xs-4">
                                                        <img src="./img/index_04.png" style="width: 80px;float: right;">
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

                                            <td> 
                                                <span class='status'>进行中</span>
                                                <div class='trans'> <a href='./inittransfer.php'>转让</a></div>
                                            </td>

                                        </tr>

                                        <tr class="warning">
                                            <td class="proName">
                                                <div class="row">
                                                    <div class="col-xs-4">
                                                        <img src="./img/index_04.png" style="width: 80px;float: right;">
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

                                            <td> 
                                                <span class='status'>进行中</span>
                                                <div class='trans'> <a href='./inittransfer.php'>转让</a></div>
                                            </td>

                                        </tr>
                                        <tr class="warning">
                                            <td class="proName">
                                                <div class="row">
                                                    <div class="col-xs-4">
                                                        <img src="./img/index_04.png" style="width: 80px;float: right;">
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

                                            <td> 
                                                <span class='status'>进行中</span>
                                                <div class='trans'> <a href='./inittransfer.php'>转让</a></div>
                                            </td>

                                        </tr>

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
