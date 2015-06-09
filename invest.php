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
					<div class="main_top_top">
						<div class='title'>确认收货地址</div>
					</div>
					<div id="main_top_bottom">
						<a href=""><img src="./img/invest_01.png" alt="" /></a>
						<h1>北京市海淀区颐和园路5号北京大学芙蓉里小区  张小姐 11110002222（默认地址）</h1>
						<h2>使用新地址</h2>
					</div>
				</div>
				
				<div id="main_center">
					<div class="main_top_top">
						<div class='title'>确认支付详情</div>
					</div>
					<div id="paycontent">
						<h1>投资金额</h1>
						<input type="text" />
						<h2>元  /当前可用金额：</h2>
						<h3>0.00元</h3>
						<h4>支付平台</h4>
						<img src="./img/invest_02.png" alt="" />
					</div>
				</div>
				<div id="main_bottom">
					<div class="main_top_top">
						<div class='title title_lg'>备注信息：（选填）</div>
					</div>
					<div id="main_center_bottom">
						 <input type="checkbox">
						 <h1>是否需要提供人员线下交流</h1>
						 <input type="checkbox"class="investcheck">
						 <h2>是否需要提供人员线下交流</h2>
						 <input type="text" class="investcontent"/>
					</div>
				</div>
				<div id="main_foot">
					<h1>总金额</h1>
					<h2>￥1000</h2>
					<a href=""><h3>确认付款</h3></a>
				</div>
				<div id="main_nail"></div>
		</div>
		
	</div>
	 <?php require('./footer.php')?>
</body>
</html>