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
    <script type="text/javascript" src="./js/jquery-1.10.1.js"></script>
	<script type="text/javascript" src="./js/invest.js"></script>
</head>
<body>
	<?php require('./nav.php')?>
	<div id="container">
		<div id="main" class='container'>
				<div id="main_top">
				<form action='./1.php' method='post'>
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
                                                <img src="./img/index_01.png" style="width:100%;float: right;">
                                            </div>
                                            <div class="col-xs-7">
                                                英特尔三十周年英特尔三十周年英特尔三十周年英特尔三十周年英特尔三十周年英特尔三十周年英特尔三十周年
                                            </div>
                                        </div>
                                    </td>
                                    <td class="proMoney">
                                        <span class="text-red">￥1000</span>
                                    </td>

                                    <td class="proGain">
                                        <div class="proGainText">
                                            <h1>1.支持后您将获得</h1>
                                            <h1>1.支持后您将获得</h1>
                                            <h1>1.支持后您将获得</h1>
                                            <h1>1.支持后您将获得</h1>
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
                    <div class="checkbox">
                        <input type="checkbox" value="1" id="checkboxInput1" name="checkbox1" style="display: none;"/>
                        <label for="checkboxInput1"></label>
                        <span class='check-content'>是否需要提供人员线下交流</span>
                    </div>
                    <div class='checkbox' >
                        <input type="checkbox"value="2" id="checkboxInput2" name="checkbox2" style="display: none;">
                        <label for="checkboxInput2"></label>
                        <span class='check-content'>是否需要安排与发起人线下交流</span>
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
						<div class='col-xs-2 totel-money'>总金额:<span>￥1000</span></div>
					</div>
					
					
					<input type='submit' class='btn btn-danger confirm' value='确认付款'/>
				</div>
				<div id="main_nail"></div>
				</form>
		</div>
		
	</div>
	 <?php require('./footer.php')?>
<script type="text/javascript">
    $("#saveAddress").click(function(){
        var address=$("#inputAddress").val();
        $("#showAddress").html("");
        var str="";
        str+="<div class='first-row'>"+address+"</div>";
        $("#showAddress").prepend(str);
        alert("增加成功");
    });
</script>
</body>
</html>