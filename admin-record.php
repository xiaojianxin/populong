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
    "method": "trade_query",
    "token": '.$token.'
}';
//var_dump($status);

$result_arr = request_by_curl($url,$json);
$result_arr = json_decode($result_arr,true);
//var_dump($result_arr);
?>
                <div id="recordbox">
                    <div class="record-title"></div>
                <div class="row dealtype">
                  <!--   <span>&nbsp;&nbsp;操作类型:&nbsp;</span>
                    <span class="active type" id="1">&nbsp;未发布&nbsp;</span>
                    <span class=" type" id="2">&nbsp;发布中&nbsp;</span>
                    <span class=" type" id="3">&nbsp;发布后&nbsp;</span>
                    <span class=" type" id="4">&nbsp;版面&nbsp;</span>
                    <span class=" type" id="5">&nbsp;封号&nbsp;</span>
 -->                </div>
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
                            <?php foreach ($result_arr['result'] as $record) {?>
                                <tr class="warning">
                                    <td><?php echo date('Y-m-d H:i:s',$record['time'])?></td>
                                    <td> <?php echo $record['tradeType']?></td>
                                    <td><?php //echo $record['projName']?></td>
                                    <td style="color: #6cc87f"> <?php echo $record['amount']?></td>
                                    <td> <?php echo $record['comment']?></td>
                                </tr>
                            <?php }?>

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
    var record = $('#record').val();
         

            $('.type').click(function(){
                var i = $(this).attr('id');
                 $.ajax({
                  type:"POST",
                  url:"./action/test_admin_trade_query.php",
                  data:"status="+i,
                  success:function(data){
                    alert(data);
                    var dataobj = eval("("+data+")");
                    if (dataobj.code==0) {
                     window.location.reload();
                    };
                  },
                  error:function(){
                      alert("注册失败");
                  }
                });

            });
</script>