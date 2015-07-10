
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
$json = '{
    "method": "bankcard_query",
    "token": '.$token.'
}';
//var_dump($json);
$json1 = '{
    "method": "whBindCard_query",
    "token": '.$token.'
}';
$json2 = '{
    "method": "sdpBindCard_query",
    "token": '.$token.'
}';

$result_arr = request_by_curl($url,$json);
$result_arr1 = request_by_curl($url,$json1);
$result_arr2 = request_by_curl($url,$json2);

//var_dump($result_arr1);
$result_arr = json_decode($result_arr,true);
$result_arr1 = json_decode($result_arr1,true);
$result_arr2 = json_decode($result_arr2,true);
//var_dump($result_arr);
$result = $result_arr['result'];
$result1 = $result_arr1['result'];
$result2 = $result_arr2['result'];
//var_dump($result2);
?>
<div id="deleteCardModal" class="modal fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    </div>
    <div class="modal-body">
        <div class="question-pic">
            <img src="./img/question.jpg">
        </div>
        <h2>确认删除此银行卡吗？</h2>
        <div class="buttonModal">
            <span class="btn btn-success" >确认</span>
            <span class="btn btn-default" data-dismiss="modal" aria-hidden="true">取消</span>
        </div>
    </div>

</div>

<div id="cardlist">
    <div class="cardTitle">
        <h2>银行卡绑定</h2>
        <div class="divider">
        </div>
    </div>
    <div class="listContent">

        <div class="row">
            <?php foreach ($result1 as $card) {?>
                 <div class="col-xs-4">
                <div class="onecard">
                    <div class="thumbnail">
                        <div class="bankpic">
                           <?php echo $card['bankName'];?>
                        </div>
                        <div class="bankdetail">
                            <div class="banknumber"><?php echo $card['OpenAcctId'];?></div>
                            <div class="divider"></div>
                            <div class="actionBtn">
                                <span class="btn">修改</span>
                                <span class="btn" id="deleteCard"><a href="#deleteCardModal" role="button" class="btn" data-toggle="modal">删除</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           <?php }?>
             <?php foreach ($result2 as $card) {?>
                 <div class="col-xs-4">

                <div class="onecard">
                    <div class="thumbnail">
                        <div class="bankpic">
                           <?php; echo $card['bankName'];?>
                        </div>
                        <div class="bankdetail">
                            <div class="banknumber"><?php echo $card['OpenAcctId'];?></div>
                            <div class="divider"></div>
                            <div class="actionBtn">
                                <span class="btn">修改</span>
                                <span class="btn" id="deleteCard"><a href="#deleteCardModal" role="button" class="btn" data-toggle="modal">删除</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           <?php }?>
           <br/>
            <div class="col-xs-4">
                <div class="onecard addCardBox">
                    <div class="thumbnail">
                        <div class="bankpic" >
                            <a class="addcard"><span class="glyphicon glyphicon-plus"></span></a>
                        </div>
                        <div class="bankdetail">

                            <div class="divider"></div>
                            <div class="actionBtn">
                                <div style="height: 12px;"></div>
                                <span><a class="addcard">新增至银行卡</a></span>
                                <div style="height: 15px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="cardmanage" class="container" style="display: none;">
    <div class="cardTitle">
        <h2>银行卡绑定</h2>
        <div class="divider">

        </div>
    </div>
    <div class="cardContent">
        <form>

        <div class="row">
            <div class="col-xs-2 cardleft">
                <span>银行账户类型</span>
                <span class="text-red">&nbsp;*&nbsp;&nbsp;</span>
            </div>
            <div class="col-xs-5 cardmiddle">
                <span>借记卡 不支持提现至引用卡账户</span>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-2 cardleft">
                <span>选择绑定功能：</span>
                <span class="text-red">&nbsp;*&nbsp;&nbsp;</span>
            </div>
            <div class="col-xs-5 cardmiddle">
                <a class="btn btn-success recharge">充值</a>
                <a class="btn btn-success withdraw">提现</a>
                <input type="radio" value="1" id="checkboxInput1" name="inputCardType" style="display: none;"/>
                <input type="radio" value="2" id="checkboxInput2" name="inputCardType" style="display: none;"/>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-2 cardleft">
                <span>开户人姓名</span>
                <span class="text-red">&nbsp;*&nbsp;&nbsp;</span>
            </div>
            <div class="col-xs-5 cardmiddle">
                <span><?php echo $result_arr['openAcctName'];?></span>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-2 cardleft">
                <span>银行卡号</span>
                <span class="text-red">&nbsp;*&nbsp;&nbsp;</span>
            </div>
            <div class="col-xs-5 cardmiddle">
                <span><input name="bankcard" class="form-control "> </span>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-2 cardleft">
                <span>选择银行</span>
                <span class="text-red">&nbsp;*&nbsp;&nbsp;</span>
            </div>
            <div class="col-xs-5 cardmiddle">
                    <span>
                        <select class="form-control" name="bank">
                            <option selected>请选择银行</option>
                            <?php foreach ($result as $bank) {?>
                                <option value="<?php echo $bank['openBankId'];?>"><?php echo $bank['bank'];?></option>
                            <?php }?>
                            
                        </select>
                    </span>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-2 cardleft">
                <span>开户行所在地</span>
                <span class="text-red">&nbsp;*&nbsp;&nbsp;</span>
            </div>
            <div class="col-xs-5 cardmiddle">
                <div style="margin-top:20px;" id="selectCity">

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-2 cardleft">
                <span>银行预留手机号</span>
                <span class="text-red">&nbsp;*&nbsp;&nbsp;</span>
            </div>
            <div class="col-xs-5 cardmiddle">
                <span><input class="form-control" name="mobilephone"> </span>
            </div>
           
        </div>
      <!--   <div class="row">
            <div class="col-xs-2 cardleft">
                <span>手机验证码</span>
                <span class="text-red">&nbsp;*&nbsp;&nbsp;</span>
            </div>
            <div class="col-xs-6 cardmiddle2">

                <input class="form-control" placeholder="手机验证码">
                <span class="btn btn-success">点击获取手机验证码</span>

            </div>
        </div> -->
        <div class="actionGroup">
            <span class="btn btn-success" id="addconfirm">确认</span>
            <span class="btn btn-default" id="addcancel">取消</span>
        </div>
        <input type="text" name="token" style="display:none" value="<?php echo $_SESSION['token'];?>">
    </form>

    </div>
</div>
<script type="text/javascript">
  var obj=document.getElementById("selectCity");
  var city=new LightManAddressTree;
  city.selectshow(obj,0);
    $("#cardlist .addcard").click(function(){
        $("#cardlist").hide();
        $("#cardmanage").show();
    });
    $("#cardmanage #addconfirm").click(function(){
        $("#cardlist").show();
        $("#cardmanage").hide();
    });
    $("#cardmanage #addcancel").click(function(){
        $("#cardlist").show();
        $("#cardmanage").hide();
    });

    $(".recharge").click(function(){
        $(".active").removeClass('active');
        $(this).addClass('active');
        return $('#checkboxInput1').click();
    });
     $(".withdraw").click(function(){
        $(".active").removeClass('active');
        $(this).addClass('active');
        return $('#checkboxInput2').click();
    });
     $('#addconfirm').click(function(){

        var data = $("form").serialize();
        alert(data);
        $.ajax({
            cache: false,
            type:"POST",
            url:"./action/do_bankcard_Binding.php",
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

                    toastr.success("绑定成功");
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
