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
    //var_dump($result);
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
                    <span class="active showAll">&nbsp;全部&nbsp;</span>
                    <span class="showRecharge">&nbsp;充值&nbsp;</span>
                    <span class="showEncash">&nbsp;提现&nbsp;</span>
                    <span class="showInvest">&nbsp;投资&nbsp;</span>
                    <span class="showGain">&nbsp;收益&nbsp;</span>
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
                        <tbody class="tbody1">

                        <?php foreach ($result as $dealcontent) { ?>    
                        <tr class="warning">
                            <td><?php $time = $dealcontent->time ;
                            echo date('Y-m-d H:i:s',$time)
                            ?></td>
                            <td> <?php echo $dealcontent->tradeType ?></td>
                            <td><a href="./pro.php?id=<?php echo $dealcontent->amount?>"><?php echo $dealcontent->projName ?></a></td>
                            <td style="color: #6cc87f"> <?php echo $dealcontent->amount;?></td>
                            <td><?php echo $dealcontent->comment ?></td>
                        </tr>
                        <?php } ?>

                        </tbody>
                        <tbody class="tbody2" style="display: none;">

                        <?php foreach ($result as $dealcontent)
                        if($dealcontent->tradeType=="充值")
                        { ?>
                            <tr class="warning">
                                <td><?php $time = $dealcontent->time ;
                                    echo date('Y-m-d H:i:s',$time)
                                    ?></td>
                                <td> <?php echo $dealcontent->tradeType ?></td>
                                <td><a href="./pro.php?id=<?php echo $dealcontent->amount?>"><?php echo $dealcontent->projName ?></a></td>
                                <td style="color: #6cc87f"> <?php echo $dealcontent->amount;?></td>
                                <td><?php echo $dealcontent->comment ?></td>
                            </tr>
                        <?php } ?>

                        </tbody>
                        <tbody class="tbody3" style="display: none;">

                        <?php foreach ($result as $dealcontent)
                            if($dealcontent->tradeType=="提现")
                            { ?>
                                <tr class="warning">
                                    <td><?php $time = $dealcontent->time ;
                                        echo date('Y-m-d H:i:s',$time)
                                        ?></td>
                                    <td> <?php echo $dealcontent->tradeType ?></td>
                                    <td><a href="./pro.php?id=<?php echo $dealcontent->amount?>"><?php echo $dealcontent->projName ?></a></td>
                                    <td style="color: #6cc87f"> <?php echo $dealcontent->amount;?></td>
                                    <td><?php echo $dealcontent->comment ?></td>
                                </tr>
                            <?php } ?>

                        </tbody>
                        <tbody class="tbody4" style="display: none;">

                        <?php foreach ($result as $dealcontent)
                            if($dealcontent->tradeType=="投资")
                            { ?>
                                <tr class="warning">
                                    <td><?php $time = $dealcontent->time ;
                                        echo date('Y-m-d H:i:s',$time)
                                        ?></td>
                                    <td> <?php echo $dealcontent->tradeType ?></td>
                                    <td><a href="./pro.php?id=<?php echo $dealcontent->amount?>"><?php echo $dealcontent->projName ?></a></td>
                                    <td style="color: #6cc87f"> <?php echo $dealcontent->amount;?></td>
                                    <td><?php echo $dealcontent->comment ?></td>
                                </tr>
                            <?php } ?>

                        </tbody>
                        <tbody class="tbody5" style="display: none;">

                        <?php foreach ($result as $dealcontent)
                            if($dealcontent->tradeType=="收益")
                            { ?>
                                <tr class="warning">
                                    <td><?php $time = $dealcontent->time ;
                                        echo date('Y-m-d H:i:s',$time)
                                        ?></td>
                                    <td> <?php echo $dealcontent->tradeType ?></td>
                                    <td><a href="./pro.php?id=<?php echo $dealcontent->amount?>"><?php echo $dealcontent->projName ?></a></td>
                                    <td style="color: #6cc87f"> <?php echo $dealcontent->amount;?></td>
                                    <td><?php echo $dealcontent->comment ?></td>
                                </tr>
                            <?php } ?>

                        </tbody>
                    </table>
                </div>
            </div>

<script type="text/javascript">
    // $(function(){
    //     $("div.holder").jPages({
    //         containerID : "deal-list"
    //     });
    // });
    $(".showAll").click(function(){
        $(".dealtype span").each(function(){
            $(this).removeClass("active")
        });

        $(".showAll").addClass("active");
        $(".tbody2").hide();
        $(".tbody3").hide();
        $(".tbody4").hide();
        $(".tbody5").hide();
        $(".tbody1").show();
    });
    $(".showRecharge").click(function(){
        $(".dealtype span").each(function(){
            $(this).removeClass("active")
        });

        $(".showRecharge").addClass("active");
        $(".tbody1").hide();
        $(".tbody3").hide();
        $(".tbody4").hide();
        $(".tbody5").hide();
        $(".tbody2").show();
    });
    $(".showEncash").click(function(){
        $(".dealtype span").each(function(){
            $(this).removeClass("active")
        });

        $(".showEncash").addClass("active");
        $(".tbody1").hide();
        $(".tbody2").hide();
        $(".tbody4").hide();
        $(".tbody5").hide();
        $(".tbody3").show();
    });
    $(".showInvest").click(function(){
        $(".dealtype span").each(function(){
            $(this).removeClass("active")
        });

        $(".showInvest").addClass("active");
        $(".tbody1").hide();
        $(".tbody2").hide();
        $(".tbody3").hide();
        $(".tbody5").hide();
        $(".tbody4").show();
    });
    $(".showGain").click(function(){
        $(".dealtype span").each(function(){
            $(this).removeClass("active")
        });

        $(".showGain").addClass("active");
        $(".tbody1").hide();
        $(".tbody2").hide();
        $(".tbody3").hide();
        $(".tbody4").hide();
        $(".tbody5").show();
    })
</script>