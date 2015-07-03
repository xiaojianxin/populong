

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
	<title>项目操作界面</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="布尔教育 http://www.itbool.com" />
	<link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet"  href="./css/reset.css"/>
	<link rel="stylesheet" type="text/css" href="./css/check.css">
	<link rel="stylesheet" type="text/css" href="./css/footer.css">
	<script src="./bootstrap/js/bootstrap.min.js"></script>
    <!--[if lt IE 9]>
    <script src="http://apps.bdimg.com/libs/html5shiv/3.7/html5shiv.min.js"></script>
    <script src="http://apps.bdimg.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<div id="container">
		<?php require('./admin_nav.php') ?> 
		<div id="main" class='container'>
							
				<div id="maincontainer1">
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
                                    $projectId = $_GET['projID'];
                                    $json = '{"method": "projet_detail", "projectId": '.$projectId.',"token": ""}';
                                    $url = "123.57.74.122:8088/logic/project";
                                    
                                    var_dump($json);

                                    $result_arr = request_by_curl($url,$json);
                                    var_dump($result_arr);
                                    $result_arr = json_decode($result_arr);

                                    $result = $result_arr->result;
                
                                    $result_content = $result->paybacks;
                                    var_dump($result_content);
                                    $isfocus = $result->isFocus;
                                    //$projIntro  = $result->projIntro;
                                    //var_dump($isfocus)
                                    
                                    //var_dump($projectId);

                              ?>    
					<div class='title'>1.项目信息</div>
					<div class="content">
						<div class="content-detail row">
								<div class='col-xs-2'>项目名称:</div>
								<div class='col-xs-4'>开心农场</div>
						</div>
						<div class="content-detail row">
								<div class='col-xs-2'>模块选择:</div>
								<div class='col-xs-4'>青年助梦</div>
						</div>
						<div class="content-detail row">
								<div class='col-xs-2'>筹集金额:</div>
								<div class='col-xs-4'>20000元</div>
						</div>
						<div class="content-detail row">
								<div class='col-xs-2'>筹集天数:</div>
								<div class='col-xs-4'>50天</div>
						</div>
						<div class="content-detail row">
								<div class='col-xs-2'>项目地点:</div>
								<div class='col-xs-4'>北京</div>
						</div>	
						<div class="content-detail row">
								<div class='col-xs-2'>项目封面:</div>
								<div class='col-xs-6'><img class="project"src="./img/index_01.png" alt="2" style="width:100%" /></div>
						</div>
						<div class="content-detail row">
								<div class='col-xs-2'>路演视频:</div>
								<div class='col-xs-4'><a style="color:red">http://www.soku.com</a></div>
						</div>
						<div class="content-detail row">
								<div class='col-xs-2'>项目简介:</div>
								<div class='col-xs-4'>一个有追求有节操的手机品牌</div>
						</div>
						<div class="content-detail row">
								<div class='col-xs-2'>详情介绍:</div>
								<div class='col-xs-6'>小米的LOGO是一个“MI”形，是Mobile Internet的缩写，小米手机 是小米公司（全称北京小米科技有限责任公司）研发的高性能发烧级智能手机。坚持 “为发烧而生”的设计理念，采用线上销售模式。2013年4月9日，米粉节上，搭载高通骁龙600 四核1.7G的小米手机2S在官网销售，小米2A同时发布。2014年3月13日，红米手机在新加坡开始第三轮网上限量销售，被抢购一空</div>
						</div>
						<div class="content-detail row">
								<div class='col-xs-2'>回报01:</div>
								<div class='col-xs-4'>资金回报</div>
						</div>
						<div class="content-detail row">
								<div class='col-xs-2'>投资比例:</div>
								<div class='col-xs-4'>1%=200元</div>
						</div>
						<div class="content-detail row">
								<div class='col-xs-2'>限定名额:</div>
								<div class='col-xs-4'>20个</div>
						</div>
						<div class="content-detail row">
								<div class='col-xs-2'>说明图片:</div>
								<div class='col-xs-6'><img class="project"src="./img/index_01.png" alt="2" style="width:100%" /></div>
						</div>
						<div class="content-detail row">
								<div class='col-xs-2'>回报描述:</div>
								<div class='col-xs-6'>我们会返还您5.7英寸1080P屏幕，比5.5英寸的iPhone6Plus还要大，采用了金属边框加双面曲面玻璃的结构，正面是2.5D玻璃，背部是3D弯曲玻璃。在硬件上采用骁龙801处理器搭配3GB RAM，1300万像素索尼堆栈式主摄像头，并且支持HiFi音效的小米手机一部。</div>
						</div>
						<div class="content-detail row">
								<div class='col-xs-2'>回报时间:</div>
								<div class='col-xs-4'>2015.09.09</div>
						</div>
						<div class="content-detail row">
								<div class='col-xs-2'>回报02:</div>
								<div class='col-xs-4'>实物回报</div>
						</div>
						<div class="content-detail row">
								<div class='col-xs-2'>投资金额:</div>
								<div class='col-xs-4'>200元</div>
						</div>
						<div class="content-detail row">
								<div class='col-xs-2'>限定名额:</div>
								<div class='col-xs-4'>20个</div>
						</div>
						<div class="content-detail row">
								<div class='col-xs-2'>说明图片:</div>
								<div class='col-xs-6'><img class="project"src="./img/index_01.png" alt="2" style="width:100%" /></div>
						</div>
						<div class="content-detail row">
								<div class='col-xs-2'>回报描述:</div>
								<div class='col-xs-6'>我们会返还您5.7英寸1080P屏幕，比5.5英寸的iPhone6Plus还要大，采用了金属边框加双面曲面玻璃的结构，正面是2.5D玻璃，背部是3D弯曲玻璃。在硬件上采用骁龙801处理器搭配3GB RAM，1300万像素索尼堆栈式主摄像头，并且支持HiFi音效的小米手机一部。</div>
						</div>
						<div class="content-detail row">
								<div class='col-xs-2'>回报时间:</div>
								<div class='col-xs-4'>2015.09.09</div>
						</div>
						<div class="content-detail row">
								<div class='col-xs-2'>增值服务</div>
								<div class='col-xs-4'></div>
						</div>
						<div class="content-detail row">
								<div class='col-xs-2'>进行路演:</div>
								<div class='col-xs-4'>是 收费200元</div>
						</div>
						<div class="content-detail row">
								<div class='col-xs-2'>热门推送:</div>
								<div class='col-xs-4'>是 收费200元</div>
						</div>
						<div class="content-detail row">
								<div class='col-xs-2'>行业顾问:</div>
								<div class='col-xs-4'>是 收费200元</div>
						</div>
						<div class="content-detail row">
								<div class='col-xs-2'>投资顾问:</div>
								<div class='col-xs-4'>是 收费200元</div>
						</div>

					</div>
				</div>
				<div id="maincontainer2">
					<div class='title'>2.发起人信息</div>
					<div class='content'>
						<div class="content-detail row">
							<div class='col-xs-2'>昵称:</div>
							<div class='col-xs-4'><a  href="./others.php">孙悟空</a></div>
						</div>
						<div class="content-detail row">
							<div class='col-xs-2'>真实姓名:</div>
							<div class='col-xs-4'>孙行者</div>
						</div>	
						<div class="content-detail row">
							<div class='col-xs-2'>身份证号:</div>
							<div class='col-xs-4'>*************</div>
						</div>	
						<div class="content-detail row">
							<div class='col-xs-2'>手机号:</div>
							<div class='col-xs-4'>13********</div>
						</div>	
						<div class="content-detail row">
							<div class='col-xs-2'>邮箱:</div>
							<div class='col-xs-4'>123@123.com</div>
						</div>		
					</div>
				</div>
				<div id="maincontainer3">
					<div class="title">3.项目审核付费</div>
					<div class='content'>
						<form>
						<div class="content-detail row">
							<div class='col-xs-2'>审核状态:</div>
							<div class='col-xs-4'>审核/未审核</div>
						</div>	
						<div class="content-detail row">
							<div class='col-xs-2'>审核时间:</div>
							<div class='col-xs-4'>2015.6.13</div>
						</div>	
						<div class="content-detail row">
							<div class='col-xs-2'>通过审核:</div>
							<div class='col-xs-5'>如果已经审核显示已审核，如果没有审核显示确认审核按钮</div>
						</div>	
						<div class="content-detail row">
							<div class='col-xs-2'>付费状态:</div>
							<div class='col-xs-4'>未付费/付费**元</div>
						</div>	
						<div class="content-detail row">
							<div class='col-xs-2'>付费时间:</div>
							<div class='col-xs-4'>2015.6.13</div>
						</div>	
						<div class="content-detail row">
							<div class='col-xs-2'>行业顾问:</div>
							<div class='col-xs-4'>说的都是乱起八糟的</div>
						</div>	
						<div class="content-detail row">
							<div class='col-xs-2'>修改:</div>
							<div class='col-xs-3'><input type="text" class="form-control" /></div>
						</div>
						<div class="content-detail row">
							<div class='col-xs-2'>投资顾问:</div>
							<div class='col-xs-4'>说的都是乱起八糟的</div>
						</div>
						<div class="content-detail row">
							<div class='col-xs-2'>修改</div>
							<div class='col-xs-3'><input type="text" class="form-control" /></div>
						</div>
						<div class='content-detail row'>
							<div class='col-xs-4'></div>
							<input type='submit' class='btn btn-success' value="提交" />
						</div>
						</form>	
					</div>
				</div>
				<div id="maincontainer4">
					<div class='title'>4.筹资情况</div>
					<div class='content'>
						<div class="content-detail">
							 <table class="table">
                                        <thead >
                                        <tr class="active">
                                            <th> 投资者 </th>
                                            <th>投资时间</th>
                                            <th>投资金额</th>
                                            <th>投资者账号</th>
                                            <th>退回投资</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="warning">
                                            <td class="proName">
                                               孙悟空
                                            </td>
                                            <td class="proTime">2015.01.22 13:55</td>

                                            <td class="proMoney"> 2000</td>
                                            <td class="proState">
                                                1234567
                                            </td>

                                            <td> 
                                                <a class="btn btn-success">退回投资</a>                  
                                            </td>

                                        </tr>

                                        <tr class="active">
                                            <th> 投资者 </th>
                                            <th>投资时间</th>
                                            <th>投资金额</th>
                                            <th>投资者账号</th>
                                            <th>退回投资</th>
                                        </tr>
                                        </thead>
                            
                                        <tr class="warning">
                                            <td class="proName">
                                               孙悟空
                                            </td>
                                            <td class="proTime">2015.01.22 13:55</td>

                                            <td class="proMoney"> 2000</td>
                                            <td class="proState">
                                                1234567
                                            </td>

                                            <td> 
                                                <a class="btn btn-success">退回投资</a>                  
                                            </td>

                                        </tr>
                                        <tr class="active">
                                            <th> 投资者 </th>
                                            <th>投资时间</th>
                                            <th>投资金额</th>
                                            <th>投资者账号</th>
                                            <th>退回投资</th>
                                        </tr>
                                        </thead>
                                        
                                        <tr class="warning">
                                            <td class="proName">
                                               孙悟空
                                            </td>
                                            <td class="proTime">2015.01.22 13:55</td>

                                            <td class="proMoney"> 2000</td>
                                            <td class="proState">
                                                1234567
                                            </td>

                                            <td> 
                                                <a class="btn btn-success">退回投资</a>                  
                                            </td>

                                        </tr>

                                        </tbody>
                                    </table>
						</div>
						<div class='content-detail row'>
							<div class='col-xs-8'><a class='btn btn-success' style="float:right;">筹资成功</a></div>
							<div class='col-xs-4'><a class='btn btn-success'>筹资失败</a></div>
						</div>
					</div>
					<div id="maincontainer5">
						<div class='title'>5.项目跟进</div>
						<div class='content'>
							<div class="content-detail row">
								<div class='col-xs-2'>项目跟进:</div>
								<div class='col-xs-4'>本平台投资行为责任用户自理</div>
							</div>	
							<div class="content-detail row">
								<div class='col-xs-2'>修改:</div>
								<div class='col-xs-3'><input type="text" class="form-control" /></div>
							</div>
							<div class="content-detail row">
								<div class='col-xs-2'></div>
								<div class='col-xs-4'><a class='btn btn-success'>发放投资</a></div>
							</div>		
						</div>
					</div>
					<div id="maincontainer6">
						<div class='title'>6.返回收益</div>
						<div class='content'>
							<div class="content-detail">
							 <table class="table">
                                        <thead >
                                        <tr class="active">
                                            <th> 投资者 </th>
                                            <th>投资时间</th>
                                            <th>投资金额</th>
                                            <th>投资者账号</th>
                                            <th>退回投资</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="warning">
                                            <td class="proName">
                                               孙悟空
                                            </td>
                                            <td class="proTime">2015.01.22 13:55</td>

                                            <td class="proMoney"> 2000</td>
                                            <td class="proState">
                                                1234567
                                            </td>

                                            <td> 
                                                <a class="btn btn-success">退回投资</a>                  
                                            </td>

                                        </tr>

                                        <tr class="active">
                                            <th> 投资者 </th>
                                            <th>投资时间</th>
                                            <th>投资金额</th>
                                            <th>投资者账号</th>
                                            <th>退回投资</th>
                                        </tr>
                                        </thead>
                                        
                                        <tr class="warning">
                                            <td class="proName">
                                               孙悟空
                                            </td>
                                            <td class="proTime">2015.01.22 13:55</td>

                                            <td class="proMoney"> 2000</td>
                                            <td class="proState">
                                                1234567
                                            </td>

                                            <td> 
                                                <a class="btn btn-success">退回投资</a>                  
                                            </td>

                                        </tr>
                                        <tr class="active">
                                            <th> 投资者 </th>
                                            <th>投资时间</th>
                                            <th>投资金额</th>
                                            <th>投资者账号</th>
                                            <th>退回投资</th>
                                        </tr>
                                        </thead>
                                      
                                        <tr class="warning">
                                            <td class="proName">
                                               孙悟空
                                            </td>
                                            <td class="proTime">2015.01.22 13:55</td>

                                            <td class="proMoney"> 2000</td>
                                            <td class="proState">
                                                1234567
                                            </td>

                                            <td> 
                                                <a class="btn btn-success">退回投资</a>                  
                                            </td>

                                        </tr>

                                        </tbody>
                                    </table>
							</div>
						<div class='content-detail row'>
							<div class='col-xs-7'><a class='btn btn-success' style="float:right;width:200px;">返回收益</a></div>
						</div>
					</div>
				</div>
				<div id="maincontainer7">
					<div class='title'>7.项目结束</div>
					<div class='content'>
						<div class='content-detail row'>
							<div class='col-xs-7'><a class='btn btn-success' style="float:right;width:200px;">项目结束</a></div>
						</div>	
					</div>
				</div>
			</div>
		</div>
		<?php  require('./footer.php') ?>
	</div>
</body>
</html>