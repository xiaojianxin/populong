<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
	<title>他人主界面</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="布尔教育 http://www.itbool.com" />
	<link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet"  href="./css/reset.css"/>
	<link rel="stylesheet" href="./css/jPages.css"/>
	<link rel="stylesheet" type="text/css" href="./css/others.css">
	<script type="text/javascript" src="./js/jquery-1.10.1.js"></script>
	<script type="text/javascript" src="./bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="./js/others.js"></script>
    <script type="text/javascript" src="./js/jPages.min.js"></script>
	<body>
     <?php require('./nav.php') ?>
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
		$userId = $_GET['userId'];

		$json = '{"method": "other_user_info", "userId": '.$userId.'}';

		$url = "123.57.74.122:8088/logic/otheruser";

		$result_arr = request_by_curl($url,$json);

		$result_arr = json_decode($result_arr);
		//var_dump($result_arr);
		$result = $result_arr->result;
		$support=$result->projectsInvest;
		$start=$result->projectsSponsor;
		$focus=$result->projectsFocus;
		$result = $result->userInfo[0];
	


		?>
		<div id="intro-panel">
			<div class="container" style="min-width:1080px;">
				<div class="green-line"></div>
				<div class="intro-panel">
					<div class="row">
						<div class="col-xs-4 left-side">
							<div class="row" >
								<div class="col-xs-4 col-xs-offset-1">
									<a href="others.php?userId=<?php echo $_GET['userId']?>"><img class="img-circle pull-right user-pic" src=<?php echo $result->headImg;?> ></a>
								</div>
								<div class="col-xs-7">
									<h3>发起人:<?php echo $result->nickname;?></h3>
									<h3><?php echo $result->mobilephone;?></h3>
									<h3>积分:470</h3>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-4 col-xs-offset-1 detail-line">
									<span class="glyphicon glyphicon-map-marker" style="color: #66cc66;"></span>
									<span style="color: #666666;"><?php echo $result->position;?></span>
								</div>
								<div class="col-xs-7 actionLine">
									<span>操作：</span>
									<span class="btn btn-success"><a href="#sendMsg" data-toggle="modal" data-target="#sendMsg" >发私信</a></span>
								</div>
							</div>
							<div class="divider"></div>
						</div>
						<div class="col-xs-1 verticle-line">
							<img src="./img/vertical-line.jpg">
						</div>
						<div class="col-xs-3">

									<h3>性别：男</h3>
									<h3>出生日期：1990-02-02</h3>
									<h3>最高学历：<?php echo $result->degree;?></h3>
									<h3>毕业院校:<?php echo $result->school;?></h3>



						</div>
						<div class="col-xs-1 verticle-line">
							<img src="./img/vertical-line.jpg">
						</div>
						<div class="col-xs-3">

							<h3>公司行业：<?php echo $result->companyFeild;?></h3>
							<h3>公司规模：<?php echo $result->companySize;?></h3>
							<h3>职位：<?php echo $result->position;?></h3>
							<h3>收入：<?php echo $result->monthlyIncome;?></h3>



						</div>
					</div>

				</div>
			</div>
		</div>
		<div style="height: 20px;"></div>
		<div id="tabList">
				<div class="tabbable" id="tabsArea">
					<div class="container" style="min-width:1080px;">
						<ul class="nav nav-tabs">
							<li>
								<a href="#tabpanel1" data-toggle="tab">支持的项目</a>
							</li>
							<li class="active">
								<a href="#tabpanel2" data-toggle="tab">发起的项目</a>
							</li>
							<li>
								<a href="#tabpanel3" data-toggle="tab">关注的项目</a>
							</li>
							<li>
								<a href="#tabpanel4" data-toggle="tab">项目转让</a>
							</li>
						</ul>
					</div>
					<div id="tabContentArea">
						<div class="tab-content container" style="min-width:1080px;">

							<div class="tab-pane" id="tabpanel1">

								<div class="row" id="jjpage1">
									<?php foreach ($support as $result) {?>
										<div class="col-sm-4">
											<div class="onebox">
												<a href="./pro.php?projId=<?php echo $result->projID?>">
													<img class="project"src=<?php echo $result->projPho?> alt="2" />
												</a>
												<h2><?php echo $result->projName?></h2>
												<a  href="./others.php?userId=<?php echo $result->userID?>">
													<h3>发起人:<?php echo $result->projUserName?></h3>
												</a>
												<h4><?php echo $result->projAbst?></h4>
												<div class="right_center">
													<div class="row">
														<div class="col-xs-6">
															<span>已完成:</span>
															<span class="percentage-text">75%</span>
														</div>
														<div class="col-xs-1">
											<span>
												<img class="place"src="./img/index_details1.png" alt="地点" />
											</span>
														</div>
														<div class="col-xs-3">
															<span><?php echo $result->city?></span>
														</div>
														<div class="col-xs-2">
														</div>
													</div>
													<div class="row">
														<div class="progray">
															<div class="progreen"></div>
														</div>
													</div>
													<div class="row">
														<div class="col-xs-7">
															<span><?php echo $result->planAmount?></span>
														</div>
														<div class="col-xs-5">
											<span>
												<?php echo $result->closeTime?>
											</span>

														</div>

													</div>
													<div class="row">
														<div class="col-xs-7">
															<span>已筹集资金</span>
														</div>
														<div class="col-xs-5">
											<span>
												剩余天数
											</span>

														</div>

													</div>
												</div>
											</div>
										</div>
									<?php } ?>

								</div>
								<div class=" holder holder1" style="text-align: center;"></div>
							</div>
							<div class="tab-pane active" id="tabpanel2">
								<div class="row" id="jjpage2">
									<?php foreach ($start as $result) {?>
										<div class="col-sm-4">
											<div class="onebox">
												<a href="./pro.php?projId=<?php echo $result->projID?>">
													<img class="project"src=<?php echo $result->projPho?> alt="2" />
												</a>
												<h2><?php echo $result->projName?></h2>
												<a  href="./others.php?userId=<?php echo $result->userID?>">
													<h3>发起人:<?php echo $result->projUserName?></h3>
												</a>
												<h4><?php echo $result->projAbst?></h4>
												<div class="right_center">
													<div class="row">
														<div class="col-xs-6">
															<span>已完成:</span>
															<span class="percentage-text">75%</span>
														</div>
														<div class="col-xs-1">
											<span>
												<img class="place"src="./img/index_details1.png" alt="地点" />
											</span>
														</div>
														<div class="col-xs-3">
															<span><?php echo $result->city?></span>
														</div>
														<div class="col-xs-2">
														</div>
													</div>
													<div class="row">
														<div class="progray">
															<div class="progreen"></div>
														</div>
													</div>
													<div class="row">
														<div class="col-xs-7">
															<span><?php echo $result->planAmount?></span>
														</div>
														<div class="col-xs-5">
											<span>
												<?php echo $result->closeTime?>
											</span>

														</div>

													</div>
													<div class="row">
														<div class="col-xs-7">
															<span>已筹集资金</span>
														</div>
														<div class="col-xs-5">
											<span>
												剩余天数
											</span>

														</div>

													</div>
												</div>
											</div>
										</div>
									<?php } ?>

								</div>
								<div class="holder holder2" style="text-align: center;"></div>
							</div>
							<div class="tab-pane" id="tabpanel3">
								<div class="row" id="jjpage3">
									<?php foreach ($focus as $result) {?>
										<div class="col-sm-4">
											<div class="onebox">
												<a href="./pro.php?projId=<?php echo $result->projID?>">
													<img class="project"src=<?php echo $result->projPho?> alt="2" />
												</a>
												<h2><?php echo $result->projName?></h2>
												<a  href="./others.php?userId=<?php echo $result->userID?>">
													<h3>发起人:<?php echo $result->projUserName?></h3>
												</a>
												<h4><?php echo $result->projAbst?></h4>
												<div class="right_center">
													<div class="row">
														<div class="col-xs-6">
															<span>已完成:</span>
															<span class="percentage-text">75%</span>
														</div>
														<div class="col-xs-1">
											<span>
												<img class="place"src="./img/index_details1.png" alt="地点" />
											</span>
														</div>
														<div class="col-xs-3">
															<span><?php echo $result->city?></span>
														</div>
														<div class="col-xs-2">
														</div>
													</div>
													<div class="row">
														<div class="progray">
															<div class="progreen"></div>
														</div>
													</div>
													<div class="row">
														<div class="col-xs-7">
															<span><?php echo $result->planAmount?></span>
														</div>
														<div class="col-xs-5">
											<span>
												<?php echo $result->closeTime?>
											</span>

														</div>

													</div>
													<div class="row">
														<div class="col-xs-7">
															<span>已筹集资金</span>
														</div>
														<div class="col-xs-5">
											<span>
												剩余天数
											</span>

														</div>

													</div>
												</div>
											</div>
										</div>
									<?php } ?>

								</div>
								<div class="holder holder3" style="text-align: center;"></div>
							</div>
							<div class="tab-pane" id="tabpanel4">
								<div class="row" id="jjpage4">
									<?php foreach ($focus as $result) {?>
										<div class="col-sm-4">
											<div class="onebox">
												<a href="./pro.php?projId=<?php echo $result->projID?>">
													<img class="project"src=<?php echo $result->projPho?> alt="2" />
												</a>
												<h2><?php echo $result->projName?></h2>
												<a  href="./others.php?userId=<?php echo $result->userID?>">
													<h3>发起人:<?php echo $result->projUserName?></h3>
												</a>
												<h4><?php echo $result->projAbst?></h4>
												<div class="right_center">
													<div class="row">
														<div class="col-xs-6">
															<span>已完成:</span>
															<span class="percentage-text">75%</span>
														</div>
														<div class="col-xs-1">
											<span>
												<img class="place"src="./img/index_details1.png" alt="地点" />
											</span>
														</div>
														<div class="col-xs-3">
															<span><?php echo $result->city?></span>
														</div>
														<div class="col-xs-2">
														</div>
													</div>
													<div class="row">
														<div class="progray">
															<div class="progreen"></div>
														</div>
													</div>
													<div class="row">
														<div class="col-xs-7">
															<span><?php echo $result->planAmount?></span>
														</div>
														<div class="col-xs-5">
											<span>
												<?php echo $result->closeTime?>
											</span>

														</div>

													</div>
													<div class="row">
														<div class="col-xs-7">
															<span>已筹集资金</span>
														</div>
														<div class="col-xs-5">
											<span>
												剩余天数
											</span>

														</div>

													</div>
												</div>
											</div>
										</div>
									<?php } ?>

								</div>
								<div class="holder holder4" style="text-align: center;"></div>
							</div>
						</div>

						<div style="height: 50px;"></div>
					</div>

				</div>

		</div>
	</div>
<script type="text/javascript">
	$(function(){
		$("div.holder1").jPages({
			containerID : "jjpage1",
			previous : "←",
			next : "→",
			perPage : 9
		});
		$("div.holder2").jPages({
			containerID : "jjpage2",
			previous : "←",
			next : "→",
			perPage : 9
		});
		$("div.holder3").jPages({
			containerID : "jjpage3",
			previous : "←",
			next : "→",
			perPage : 9
		});
		$("div.holder4").jPages({
			containerID : "jjpage4",
			previous : "←",
			next : "→",
			perPage : 9
		});

	});
	</script>

	</body>
	</html>	