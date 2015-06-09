

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
	<title>注册界面填写账户信息</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="布尔教育 http://www.itbool.com" />
	<link rel="stylesheet"  href="./css/reset.css"/>
	<link rel="stylesheet" type="text/css" href="./css/check.css">
	<link rel="stylesheet" type="text/css" href="./css/headfoot.css">
	<script type="text/javascript" src="./js/start.js"></script>
</head>
<body>
	<div id="container">
		<div id="header">
			<img class="logo"src=""alt="logo">
			<ul class="nav">
				<li class="chooseli"><a href="./index.php">首页热门</a></li>
				<li><a href="./help.html">青年助梦</a></li>
				<li><a href="./together.html">与你同行</a></li>
				<li><a href="./ido.html">我做你投</a></li>
			</ul>
			<ul style="float:right;margin-right:11%;">
				<li><a href="./index.php">登录</a></li>
				<li><a href="./regist_1.html">注册</a></li>
			</ul>
			<div class="search" style="float:right">
				<form action="">
					<input class="btn" type="submit" value=""/>
					<input class="text" type="text1"/>
				</form>
			</div>
		</div>
		<div id="main">
				<div id="maincontainer1">
					<div id="main_bottom">
						<div id="left">
							<li>
								<h1>项目名称:</h1>
							</li>
							<li>
								<h1>模块选择:</h1>
							</li>
							<li>
								<h1>筹集金额:</h1>
							</li>
							<li>
								<h1>筹集天数:</h1>
							</li>
							<li>
								<h1>项目地点:</h1>
							</li>
							<li>
								<h1>项目封面:</h1>
							</li>
							<li>
								<h1>路演视频:</h1>
							</li>
							<li>
								<h1>项目简介:</h1>
							</li>
							<li>
								<h1>详情介绍:</h1>
							</li>
						</div>
						<div id="center">
							<li>
								<input type="text" name="inputProjName" placeholder="不超过20个字" />
							</li>
							<li>
								<div id="centerLeft"><input name="inputProjType" type="radio" value="1" /><h1>青年助梦</h1></div>
								<div id="centerCenter"><input name="inputProjType" type="radio" value="2" /><h1>与你同行</h1></div>
								<div id="centerRight"><input name="inputProjType" type="radio" value="3" /><h1>我做你投</h1></div>
							</li>
							<li>
								<input  type="text" name="inputPlanAmount" placeholder=" 不少于10000元">
								<h1>元</h1>
							</li>
							<li>
								<input  type="text" name="inputRaiseDays">
								<h1>天</h1>
							</li>
							<li>
								<input  type="text" name="inputProvinceCode"id="province">
								<h1>省</h1>
								<input  type="text" name="inputCityCode" id="province">
								<h1>市</h1>
							</li>
							<li>
								<input  type="text" name="inputProjPho" placeholder="上传封面"id="province">
								<h2>支持jpg.png格式，大小不超过2M</h2>
							</li>
							<li>
								<input  type="text" name="inputVadioLink" placeholder=" 路演视频">
							</li>
							<li>
								<input  type="text" name="inputProjAbst" placeholder=" 项目简介">
							</li>
							<li id="contentli">
								<input  type="text" name="inputProjIntro" placeholder=" 项目详情" id="morecontent">
							</li>
							<li>
								<input type="checkbox"id="checkagree">
								<h2>我已阅读并同意《泡泡龙网站服务协议》</h2>

							</li>
						</div>
						<div id="right">
						</div>
					</div>
				</div>
				<div id="maincontainer2">
					<div id="main_bottom">
						<div class="return">
							<div class="return_top">
								<h1>回报01</h1>
							</div>
							<div class="return_bottom">
								<li>
									<h1>类型选择:</h1>
									<input name="inputRewordClassCode" type="radio" value="1"class="rewardcheck"/>
									<h4>实物回报</h4>
									<input name="inputRewordClassCode" type="radio" value="2"class="rewardcheck"/>
									<h4>资金回报</h4>
								</li>
								<li>
									<h1>每份金额:</h1>
									<input name="inputAmountPer" type="text" />
									<h2>元</h2>
								</li>
								<li>
									<h1>限定名额:</h1>
									<input name="inputQuota" type="text" />
									<h2>个 0为不限定名额</h2>
								</li>
								<li>
									<h1>说明图片:</h1>
									<input name="inputExplainPic" type="file"/>
									<h2>（选填）支持jpg.png格式，大小不超过2M</h2>
								</li>
								<li id="profitLi">
									<h1>回报收益:</h1>
									<input name="inputExplainText" type="text" /id="profit">
								</li>
								<li>
									<h1>回报时间:</h1>
									<input name="inputRewardTime" type="text" />
								</li>
								<li>
									<input type="button"id="save" value="保存"/>
								</li>
							</div>
						</div>
						<div class="return">
							<div class="return_top">
								<h1>回报02</h1>
							</div>
							<div class="return_bottom">
								<li>
									<h1>类型选择:</h1>
									<input name="inputRewordClassCode" type="radio" value="1"class="rewardcheck"/>
									<h4>实物回报</h4>
									<input name="inputRewordClassCode" type="radio" value="2"class="rewardcheck"/>
									<h4>资金回报</h4>
								</li>
								<li>
									<h1>最低金额:</h1>
									<input type="text" />
									<h2>元</h2>
								</li>
								<li>
									<h1>限定名额:</h1>
									<input type="text" />
									<h2>个 0为不限定名额</h2>
								</li>
								<li>
									<h1>说明图片:</h1>
									<h3>上传图片</h3>
									<h2>（选填）支持jpg.png格式，大小不超过2M</h2>
								</li>
								<li id="profitLi">
									<h1>回报收益:</h1>
									<input type="text" /id="profit">
								</li>
								<li>
									<h1>回报时间:</h1>
									<input type="text" />
									<h2>（选填）支持jpg.png格式，大小不超过2M</h2>
								</li>
								<li>
									<input type="button"id="save" value="保存"/>
								</li>
							</div>
						</div>
						<div class="return">
							<div class="return_top">
								<h1>回报03</h1>
							</div>
							<div class="return_bottom">
								<li>
									<h1>类型选择:</h1>
									<input name="inputRewordClassCode" type="radio" value="1"class="rewardcheck"/>
									<h4>实物回报</h4>
									<input name="inputRewordClassCode" type="radio" value="2"class="rewardcheck"/>
									<h4>资金回报</h4>
								</li>
								<li>
									<h1>每份金额:</h1>
									<input type="text" />
									<h2>元</h2>
								</li>
								<li>
									<h1>限定名额:</h1>
									<input type="text" />
									<h2>个 0为不限定名额</h2>
								</li>
								<li>
									<h1>说明图片:</h1>
									<h3>上传图片</h3>
									<h2>（选填）支持jpg.png格式，大小不超过2M</h2>
								</li>
								<li id="profitLi">
									<h1>回报收益:</h1>
									<input type="text" /id="profit">
								</li>
								<li>
									<h1>回报时间:</h1>
									<input type="text" />
								</li>
								<li>
									<input type="button"id="save" value="保存"/>
								</li>
							</div>
						</div>
						<div class="return">
							<div class="return_top">
								<h1>回报04</h1>
							</div>
							<div class="return_bottom">
								<li>
									<h1>类型选择:</h1>
									<input name="inputRewordClassCode" type="radio" value="1"class="rewardcheck"/>
									<h4>实物回报</h4>
									<input name="inputRewordClassCode" type="radio" value="2"class="rewardcheck"/>
									<h4>资金回报</h4>
								</li>
								<li>
									<h1>每份金额:</h1>
									<input type="text" />
									<h2>元</h2>
								</li>
								<li>
									<h1>限定名额:</h1>
									<input type="text" />
									<h2>个 0为不限定名额</h2>
								</li>
								<li>
									<h1>说明图片:</h1>
									<h3>上传图片</h3>
									<h2>（选填）支持jpg.png格式，大小不超过2M</h2>
								</li>
								<li id="profitLi">
									<h1>回报收益:</h1>
									<input type="text" /id="profit">
								</li>
								<li>
									<h1>回报时间:</h1>
									<input type="text" />
									<h2>（选填）支持jpg.png格式，大小不超过2M</h2>
								</li>
							</div>
						</div>
					</div>
				</div>
				<div id="maincontainer3">
					<div id="main_bottom">
						<div class="return">
							<div class="return_top">
								<h1>账户设置</h1>
							</div>
							<div class="return_bottom">
								<li>
									<h1>进行路演:</h1>
									<h2>是</h2>
									<input type="checkbox" />
									<h2>否</h2>
									<input type="checkbox" />
									<h3>收费标准：200元</h3>
								</li>
								<li>
									<h1>热门推送:</h1>
									<h2>是</h2>
									<input type="checkbox" />
									<h2>否</h2>
									<input type="checkbox" />
									<h3>收费标准：200元</h3>
								</li>
								<li>
									<h1>行业顾问:</h1>
									<h2>是</h2>
									<input type="checkbox" />
									<h2>否</h2>
									<input type="checkbox" />
									<h3>收费标准：200元</h3>
								</li>
								<li>
									<h1>投资顾问:</h1>
									<h2>是</h2>
									<input type="checkbox" />
									<h2>否</h2>
									<input type="checkbox" />
									<h3>收费标准：200元</h3>
								</li>
							</div>
						</div>
					</div>
				</div>
					<h2>审核通过:</h2>
					<input type="radio"class="passcheck" value="0" name="is_verified"/>
                    <h2>审核不通过:</h2>
					<input type="radio"class="passcheck" value="0" name="is_verified"/>
                    
            <form action="./action/do_verify.php" method="post">
					<input type="submit"id="publish" />
			</form>
		</div>
		<div id="footer">
			<div id="footercontainer">
				<h1> <a href="http://www.bolongruncheng.com/"> 京伯隆润成投资有限公司</a></h1>
				<h1>投资有风险，本平台投资行为责任用户自理，所有投资行为最终解释权归本公司所有</h1>
			</div>
		</div>
	</div>
</body>
</html>