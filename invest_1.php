<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
	<title>投资界面</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="布尔教育 http://www.itbool.com" />
	<link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet"  href="./css/reset.css"/>
	<link rel="stylesheet"  href="./css/footer.css"/>
	<link rel="stylesheet" type="text/css" href="./css/nav.css">	
	<link rel="stylesheet" type="text/css" href="./css/invest.css">
    <link href="./css/toastr.css" rel="stylesheet"/>
    <script type="text/javascript" src="./js/jquery-1.10.1.js"></script>
    <script type="text/javascript" src="./js/toastr.js"></script>

</head>
<body>
	<?php require('./nav.php')?>
	<div id="container">

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
$rewardId = $_GET['rewardId'];
$projId = $_GET['projId'];
$investAmount = $_GET['investAmount'];
$url = "123.57.74.122:9999/logic/invest";
$json = '{
    "method": "proj_info",
    "projID": '.$projId.',
    "rewardID":'.$rewardId.',
    "token":'.$token.'
}';
//var_dump($json);

$result_arr = request_by_curl($url,$json);


//var_dump($result_arr1);
$result_arr = json_decode($result_arr,true);

//var_dump($result_arr);

//var_dump($result2);
?>
		<div id="main" class='container'>
		<div id="main_top">


            <div class="main_top_top">
                <div class='title'>输入收货地址</div>
            </div>
            <div class="main_top_bottom row inputAddress">
                <input placeholder="输入地址" class="form-control" id="inputAddress"/>
                <div class="btn btn-success" id="saveAddress">保存地址</div>
            </div>
            <div class="main_top_top">
                <div class='title'>确认收货地址</div>
            </div>
            <div class="main_top_bottom row">
                <a class="col-xs-1 first-row" href=""><img class="img" src="./img/invest_01.png" alt="" /></a>
                <div id="showAddress" class="col-xs-11">

                </div>

            </div>

        </div>

            <div id="main_second_top">
                <div class="main_top_top">
                    <div class='title'>确认支付详情</div>
                </div>
                <div id="main_center_bottom ">
         			<div class="paydetail">
                        <div class="thumbnail">
                            <table class="table">
                                <thead >
                                <tr>
                                    <th>项目名称</th>
                                    <th>支持金额</th>
                                    <th>支持后您将获得</th>

                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="proName">
                                        <div class="row">
                                            <div class="col-xs-5">
                                                <img src=<?php echo $result_arr['projPho'];?> style="width:100%;float: right;">
                                            </div>
                                            <div class="col-xs-7">
                                                <?php echo $result_arr['projAbst'];?>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="proMoney">
                                        <span class="text-red" >￥<span id="investamount"><?php echo $investAmount;?></span></span>
                                    </td>

                                    <td class="proGain">
                                        <div class="proGainText">
                                             <?php
                                    $ch = curl_init();
                                    $curl_url = $result_arr['explainText'];
                                    curl_setopt($ch, CURLOPT_URL, $curl_url);
                                    curl_setopt($ch, CURLOPT_POST, 1);
                                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);//不直接输出，返回到变量
                                    $curl_result = curl_exec($ch);
                                    curl_close($ch);
                                    print_r($curl_result); ?>
                                        </div>

                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
         			</div>
                </div>
            </div>
             <div id="main_center">
            <div class="main_top_top">
                <div class='title title_lg'>备注信息：（选填）</div>
            </div>
            <div id="main_center_bottom ">
                <div class="checkbox" id="check1">
                    <input type="checkbox"  id="checkboxInput1" name="checkbox" style="display: none;" />
                    <label for="checkboxInput1"></label>
                    <span class='check-content'>是否需要提供人员线下交流</span>
                </div>
                <div class='checkbox' id="check2">
                    <input type="checkbox"  id="checkboxInput2" name="checkbox" style="display: none;" />
                    <label for="checkboxInput2"></label>
                    <span class='check-content'>是否需要提供人员线下交流</span>
                </div>
                <textarea placeholder="最多不超过50字"></textarea>
            </div>
        </div>
				<div id="main_top_bottom ">
					<div class="main_top_top">
						<div class='title title_lg'>请选择支付方式</div>
					</div>
					<div class="paycontent">		
						<div class='pay-platform row'>
							支付平台
						</div>
						<img src="./img/invest_02.png" alt="" />
					</div>
				</div>
				<div id="main_foot">
					<div class='row'>
						<div class='col-xs-9'></div>
                         <input id="token" value="<?php echo $_SESSION['token'];?>" style="display:none"/> 
                         <input id="projectid" value=<?php echo $projId;?> style="display:none"/>   
						<div class='col-xs-2 totel-money' >总金额:￥<span id="totalNum"><?php echo $investAmount;?></span></div>
					</div>
					
					
					<a  class='btn btn-danger confirm'>确认付款</a>
				</div>
				<div id="main_nail"></div>
		</div>
		
	</div>
	 <?php require('./footer.php')?>
<script type="text/javascript">
     $(function(){
        checkbox={check1:false,check2:false}
        var price=$("#investamount").html();
        //alert(price);
        $("#check1 label").click(function(){

            if(checkbox.check1)
            {
                checkbox.check1=false;
                price=parseInt(price)-parseInt(200);
            }
            else
            {
                checkbox.check1=true;
                 price=parseInt(price)+parseInt(200);
                //alert(1);
            }
            $("#totalNum").html(price);
        });
        $("#check2 label").click(function(){

            if(checkbox.check2)
            {
                checkbox.check2=false;
                 price=parseInt(price)-parseInt(200);
            }
            else
            {
                checkbox.check2=true;
                 price=parseInt(price)+parseInt(200);
            }
            $("#totalNum").html(price);
        });
        $("#saveAddress").click(function(){
            var address=$("#inputAddress").val();
            $("#showAddress").html("");
            var str="";
            str+="<div class='first-row'>"+address+"</div>";
            $("#showAddress").prepend(str);
            alert("增加成功");
        });
        $(".confirm").click(function(){
            var num=parseInt($("#totalNum").html());

            var address=$("#showAddress .first-row").text();
            var code;
            var token = $("#token").val();
            var projectid = $("#projectid").val();
            if(checkbox.check1&&checkbox.check2)
            {
                code=3;
            }
            else if(checkbox.check1&&!checkbox.check2)
            {
                code=1;
            }
            else if(!checkbox.check1&&checkbox.check2)
            {
                code=2;
            }
            else{
                code=0;
            }
            $.ajax({
                async: true,
                type: "POST",
                url: "./action/do_invest.php",
                data:"projId="+projectid+"&rewardCode=1"+"&token="+token+"&investAmount="+num+"&serviceCode="+code+"&address="+address,
                success: function(data){
                    //alert(data);
                    var dataobj = eval("("+data+")");
                    if(dataobj.code==0){
                    toastr.success("投资成功");
                    setTimeout(function(){window.location.href="./pro.php?projId="+projectid;},1000);
                }else {
                    toastr.success("投资失败");
                    setTimeout(function(){window.location.href="./pro.php?projId="+projectid;},1000);
                }
                },
                error: function(xhr, stat, err) {
                }
            })
        });


    })
</script>
</body>
</html>