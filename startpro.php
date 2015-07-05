<?php
    $start = '1';
    $end = '2';
    $ch = curl_init();
    $token = $_SESSION['token'];
    $curl_url = "http://123.57.74.122:8888/version_0.2/action/test_self_start.php?token=".$token;
    //var_dump($_SESSION);
    curl_setopt($ch, CURLOPT_URL, $curl_url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);//不直接输出，返回到变量
    $curl_result = curl_exec($ch);
    //var_dump($curl_result);
    $result = json_decode($curl_result);
    curl_close($ch);
    $result = $result->result;
    //var_dump($result);
?>
                <div id="startPro">
                    <div class="fourtab">
                        <div class="tabbable" id="fourtab">
                            <ul class="nav nav-tabs">
                                <li class="active allpro">
                                    <a href="#allList" data-toggle="tab">全部</a>
                                </li>
                                <li>
                                    <a href="#financingList" data-toggle="tab">筹资中</a>
                                </li>
                                <li class="">
                                    <a href="#succeedList" data-toggle="tab">已成功</a>
                                </li>
                                <li>
                                    <a href="#unsucceedList" data-toggle="tab">未成功</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="allList">
                                    <table class="table">
                                        <thead >
                                        <tr class="active">
                                            <th>项目名称 </th>
                                            <th>发起时间</th>
                                            <th>返益时间</th>
                                            <th>进度</th>
                                            <th>状态</th>
                                        </tr>
                                        </thead>
                                        <tbody id="allTables">
                                    <?php
                                    if(empty($result['0']->projName)){
                                        echo "您还没有发起项目";

                                    } else{
                                    foreach ($result as $project) { ?>
                                        <tr class="warning">
                                            <td class="proName">
                                                <div class="row">
                                                    <div class="col-xs-4">
                                                        <img src=<?php echo $project->thumbPho;?> style="width: 80px;margin-left: 20px;">
                                                    </div>
                                                    <div class="col-xs-8">
                                                        <?php echo $project->projName;?>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="proTime">
                                <?php echo date('Y-m-d H:i:s',$project->applyTime)?></td>

                                            <td class="proMoney"> 
                                <?php echo date('Y-m-d H:i:s',$project->rewardTime)?></td>
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
                                                <h1><?php 
                                                if($precent == "100%"){
                                                    echo "已完成筹资";
                                                }else{
                                                    echo "未完成筹资";
                                                }
                                                    ?></h1>
                                            </td>

                                            <td> 
                                                <span class='status'><?php echo $project->status;?></span>
                                                <div class='trans'> <a href='./invest.php'>返回收益</a></div>
                                            </td>

                                        </tr>
                                       <?php   
                                   } 
                               }?>
                                        

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

                                            <td>
                                                <span class='status'>筹资成功</span>
                                                <div class='trans'> <a href='./invest.php'>返回收益</a></div>
                                            </td>

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

                                            <td>
                                                <span class='status'>筹资成功</span>
                                                <div class='trans'> <a href='./invest.php'>返回收益</a></div>
                                            </td>

                                        </tr>

                                        </tbody>
                                    </table>
                                    <div class="holder" style="text-align: center;" id="all-holder">
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
                                <div class="tab-pane " id="financingList">
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

                                            <td> 审核中</td>

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
                                <div class="tab-pane " id="succeedList">
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

                                            <td> 审核中</td>

                                        </tr>



                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane " id="unsucceedList">
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

                                            <td> 审核中</td>

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

                            </div>
                        </div>
                    </div>
                </div>

