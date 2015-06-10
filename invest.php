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
	<script type="text/javascript" src="./js/invest.js"></script>
</head>
<body>
	<?php require('./nav.php')?>
	<div id="container">
		<div id="main" class='container'>
				<div id="main_top">
				<form action='./1.php' method='post'>
					<div class="main_top_top">
						<div class='title'>确认收货地址</div>
					</div>
					<div class="main_top_bottom row">
						<a class="col-xs-1 first-row" href=""><img class="img" src="./img/invest_01.png" alt="" /></a>
						<div class="col-xs-11 first-row">北京市海淀区颐和园路5号北京大学芙蓉里小区  张小姐 11110002222（默认地址）</div>
						<div class='second-row'> <a href="#">使用新地址</a></div>		
					</div>
				
				</div>
				
				
				<div id="main_center">
					<div class="main_top_top">
						<div class='title title_lg'>备注信息：（选填）</div>
					</div>
					<div id="main_center_bottom ">
						 <div class="checkbox">
						 <input type="checkbox" style="display:none">
						 <label for="checkboxInput"></label>
						 <span class='check-content'>是否需要提供人员线下交流</span>
						 </div>
						 <div class='checkbox' >
						 <input type="checkbox"style="display:none">
						 <label for="checkboxInput"></label>
						 <span class='check-content'>是否需要提供人员线下交流</span>
						 </div>
						 <textarea placeholder="最多不超过50字"></textarea>
					</div>
				</div>
				<div id="main_top_bottom ">
					<div class="main_top_top">
						<div class='title'>确认支付详情</div>
					</div>
					<div class="paycontent">
						<h1>投资金额</h1>
						<div class='row'>
						<div class='col-xs-4'>	<input type="text" class='form-control'  /></div>
					
						<div class='col-xs-4 pay-discription'>元  /当前可用金额：<span>0.00</span>&nbsp;元</div>
						</div>
						
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
</body>
</html>