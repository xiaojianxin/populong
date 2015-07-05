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
$token = '"'.$_SESSION['admin_token'].'"';
//var_dump($token);
$url = "123.57.74.122:55555/logic/admin";
$json = '{
    "method": "project_query",
    "token": '.$token.',
    "status":"1"
}';
//var_dump($status);

$result_arr = request_by_curl($url,$json);
$result_arr = json_decode($result_arr,true);
//var_dump($result_arr);
?>
                <div id="startPro">
                    <div class="fourtab">
                        <div class="tabbable" id="fourtab">
                            <ul class="nav nav-tabs">
                                    <a data-toggle="tab">未交费的项目</a>
                            </ul>
                              <div class="tab-content">
                                <div class="tab-pane active" id="allList">
                                    <table class="table" >
                                        <thead >
                                        <tr class="active">
                                            <th> 项目名称 </th>
                                            <th>发起人</th>
                                            <th>目标金额</th>
                                            <th>时间</th>
                                            <th>项目状态</th>
                                        </tr>
                                        </thead>
                                        <tbody id="allTables">
                                    <?php foreach ($result_arr['result'] as $project) {?>
                                        <tr class="warning">
                                            <td class="proName">
                                              <div class="row">
                                                    <div class="col-xs-4">
                                                    <a href="./pro.php?projID=<?php echo $project['projID'] ; ?>">
                                                        <img src=<?php echo $project['projPho'];?> style="width: 80px;float: right;">
                                                    </a>
                                                    </div>
                                                    <div class="col-xs-8">
                                                    <a href="./check.php?projID=<?php echo $project['projID'];?>">
                                                        <?php echo $project['projName'];?>
                                                    </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="proPreson"><?php echo $project['projUserName'];?></td>

                                            <td class="proMoney"> <?php echo $project['planAmount']?></td>
                                            <td class="proTime">
                                              <?php echo date('Y-m-d H:i:s',$project['applyTime']) ?>
                                            </td>

                                            <td>未交费</td>

                                        </tr>
                                    <?php }?>

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
