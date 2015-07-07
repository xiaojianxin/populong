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
$token = '"'.$_SESSION['token'].'"';
$url = "123.57.74.122:9999/logic/bankcard";

//var_dump($json);
$json1 = '{
    "method": "sdpBindCard_query",
    "token": '.$token.'
}';

$result_arr1 = request_by_curl($url,$json1);


//var_dump($result_arr1);

$result_arr1 = json_decode($result_arr1,true);
//var_dump($result_arr1);

$result = $result_arr1['result'];

$money = $result_arr1['balance'];
?>
                <div id="withdrawBox">
                    <div id="withdrawTitle">
                        <div class="record-title">
                            <div class="title">提现</div>
                        </div>
                    </div>
                    <div id="withdrawForm">
                        <div style="height: 40px;"></div>
                        <div class="row">
                            <form>
                            <div class="col-xs-1"></div>
                            <div class="col-xs-2">                            
                                <span>提现金额</span>
                                <span class="red-mark">*</span>
                            </div>
                            <div class="col-xs-6">
                                <div style="height: 5px;"></div>
                                <input name="encashAmount" class="form-control encashAmount" /><br/>
                            </div>
                        </div>
                         <div class="row">
                                <div class="col-xs-1"></div>
                                <div class="col-xs-2">                            
                                <span>账户选择</span>
                                <span class="red-mark">*</span>
                            </div>

                                <div class="col-xs-6">
                                        <span>
                                            <select class="form-control" name="bankcard">
                                                <option selected>请选择银行</option>
                                                <?php foreach ($result as $bank) {?>
                                                    <option value="<?php echo $bank['OpenAcctId'];?>"><?php echo $bank['OpenAcctId'];?></option>
                                                <?php }?>
                                                
                                            </select>
                                        </span>
                                </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-1"></div>
                            <div class="col-xs-2">

                                <span>可用金额</span>
                            </div>
                            <div class="col-xs-6">
                                <span class="red-mark"><?php echo $money;?></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-1"></div>
                            <div class="col-xs-2">
                                <span>提现费用</span>
                            </div>
                            <div class="col-xs-6">
                                <span id="encashNum">0.00</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-1"></div>
                            <div class="col-xs-2">
                                <span >预计到款时间</span>
                            </div>
                            <div class="col-xs-6">
                                <span ><?php echo date('Y-m-d',$result_arr1['currentTime'])?>  1-2个工作日（双休日和法定节假日除外）之内到账</span>
                            </div>
                        </div>
                        
                    </div>
                    <div style="height: 20px"></div>
                    <div id="chargeBox">
                        <div class="record-title">
                            <div class="title">提现</div>
                        </div>

                        <div id="withdrawArea">
                            <input type="text" name="token" style="display:none" value="<?php echo $_SESSION['token'];?>">
                            <div class="btn btn-success" id="withdrawbutton">
                                提现
                            </div>
                        </div>
                    </form>
                        <div id="withdrawDes">
                            <h1>温馨提示:</h1>
                            <h1>   1.为了您的账户安全,请在充值前进行身份认证、手机绑定以及提现密码设 置。</h1>
                            <h1>   2.您的账户资金将由第三方平台托管。</h1>
                            <h1>   3.请注意您的银行卡充值限制,以免造成不便;每日的充值限额依据各银行 限额为准。</h1>
                            <h1>    4.禁止洗钱、虚假交易等行为,一经发现并确认,将终止该账户的使用。</h1>
                            <h1>   5.如果充值金额没有及时到账,请联系客服电话:4009-099-888</h1>
                        </div>
                        <div style="height: 50px;"></div>
                    </div>

                </div>
<script>
   $("input[name='encashAmount']").blur(function(){

        var num=$("input[name='encashAmount']").val();
        var isNum=parseInt(num);
        if(num=="")
        {
            $("#encashNum").html("0.00");
        }
        else
        {
            $("#encashNum").html(parseInt(num)*0.02);
        }
    });
$('#withdrawbutton').click(function(){

        var data = $("form").serialize();
        //alert(data);
        $.ajax({
            cache: false,
            type:"POST",
            url:"./action/do_withdraw.php",
            data:data,
            success:function(data){
                //alert(data);
                var dataobj = eval("("+data+")");
                if(dataobj.code == '10006'){
                    $("#login .error-tip").html('用户名不存在');
                }else if(dataobj.code == '10005'){
                    $("#login .error-tip").html('密码错误');
                }
                else if(dataobj.code == "0")
                {

                    toastr.success("提现成功");
                    $("#login").fadeOut();

                    setTimeout(function(){window.location.href=window.location.href;},1000);



                }
            },
            error:function(){
                alert("登录失败");
            }
        })
     });

</script>