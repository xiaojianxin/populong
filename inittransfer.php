<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
	<title>发起转让</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet"  href="./css/reset.css"/>
    <link rel="stylesheet" type="text/css" href="./css/footer.css">
    <link rel="stylesheet" type="text/css" href="./css/inittransfer.css">

	<script src="./js/jquery-1.10.1.js"></script>
	<script src="./bootstrap/js/bootstrap.min.js"></script>
	<!--[if lt IE 9]>
	  <script src="http://apps.bdimg.com/libs/html5shiv/3.7/html5shiv.min.js"></script>
	  <script src="http://apps.bdimg.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	
	<?php require('./nav.php') ?>
	<?php require('./agreement.php')?>
		<div class='container'>
			<div class='container-head'>
				<a class="title"><span>+&nbsp</span>发起转让</a>
			</div>
			<div class='container-content'>
				<form>
					<div class="inittransfer row">
						<div class="initransfer-title col-xs-2"><span>发起人:</span></div>
						<input type="text" class="form-control"/>
					</div>
					<div class="inittransfer row">
						<div class="initransfer-title col-xs-2"><span>联系电话:</span></div>
						<input type="text" class="form-control"/>
					</div>
					<div class="inittransfer row">
						<div class="initransfer-title col-xs-2"><span>平台账号:</span></div>
						<input type="text" class="form-control"/>
					</div>
					<div class="inittransfer row">
						<div class="initransfer-title col-xs-2"><span>项目:</span></div>
						<input type="text" class="form-control"/>
					</div>
					<div class="inittransfer row">
						<div class="initransfer-title col-xs-2"><span>金额总计:</span></div>
						<input type="text" class="form-control"/>
					</div>
					<div class="inittransfer row">
						<div class="initransfer-title col-xs-2"><span>平台绑定银行卡号:</span></div>
						<input type="text" class="form-control"/>
					</div>
						<div class="inittransfer row">
							<div class="col-xs-3"></div>
						 <input type="checkbox" style="width:20px;"required="required"> 我已阅读并同意
						 <a href="#detail" data-toggle="modal" data-target="#detail">《泡泡龙网站服务协议》</a>
					</div>
					<div class="inittransfer row">
						<div class="col-xs-8">
							<input type='submit' class="btn btn-success inittransfer-btn" value="发起"/>
						</div>
					</div>
				</form>
			</div>
		</div>
	<?php require('./footer.php')?>	

</body>
</html>