<?php

    $start = '1';
    $end = '2';
    $ch = curl_init();
    $curl_url = "http://123.57.74.122:8888/version_0.2/action/test_query.php?start=".$start.
    "&end=".$end;
    curl_setopt($ch, CURLOPT_URL, $curl_url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);//不直接输出，返回到变量
    $curl_result = curl_exec($ch);
    $result = explode(',', $curl_result);
    curl_close($ch);
    print_r($result);
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

                                            <td class="proMoney"> 2015.01.22 13:55</td>
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


<!--<script type="text/javascript">-->
<!--    $(function(){-->
<!--        $("div.holder").jPages({-->
<!--            containerID : "deal-list"-->
<!--        });-->
<!--    });-->
<!--</script>-->
