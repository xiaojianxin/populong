

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
	<script src="./js/jquery-1.10.1.js"></script>
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
                                    $token = '"'.$_SESSION['admin_token'].'"';
                                    $json = '{"method": "check_project_info", "projID": '.$projectId.',"token": '.$token.'}';
                                    $url = "123.57.74.122:55555/logic/admin";
                                    
                                    //var_dump($json);

                                    $result_arr = request_by_curl($url,$json);
                                    
                                    $result_arr = json_decode($result_arr);

                                    $result = $result_arr->result;
                					 var_dump($result);
                                    $project = $result->projBasic;
                                    //var_dump($result_content);
                                    $rewards = $result->reward;
                                   
                                    //$projIntro  = $result->projIntro;
                                    //var_dump($isfocus)
                                    
                                    //var_dump($projectId);

                              ?>  
					
                        <input id="projectid" value=<?php echo $projectId;?> style="display:none"/>
                        <input id="userid" value=<?php echo $project[0]->userID;?> style="display:none"/>
                        <input id="projName" value=<?php echo $project[0]->projName;?> style="display:none"/>
                        <input id="token" value="<?php echo $_SESSION['admin_token'];?>" style="display:none"/>    
					<div class='title'>1.项目信息</div>
					<div class="content">
						<div class="content-detail row">
								<div class='col-xs-2'>项目名称:</div>
								<div class='col-xs-4'><?php echo $project[0]->projName;?></div>
						</div>
						<div class="content-detail row">
								<div class='col-xs-2'>模块选择:</div>
								<div class='col-xs-4'><?php  if ($project[0]->projType==1) {
									echo "青年筑梦";
								}else if($project[0]->projType==2){
									echo "与你同行";
								}else if($project[0]->projType==3){
									echo "我做你投";
								}?></div>
						</div>
						<div class="content-detail row">
								<div class='col-xs-2'>筹集金额:</div>
								<div class='col-xs-4'><?php echo $project[0]->planAmount;?>元</div>
						</div>
						<div class="content-detail row">
								<div class='col-xs-2'>筹集天数:</div>
								<div class='col-xs-4'><?php echo $project[0]->raiseDays?>天</div>
						</div>
						<div class="content-detail row">
								<div class='col-xs-2'>项目地点:</div>
								<div class='col-xs-4'><?php echo $project[0]->cityName?></div>
						</div>	
						<div class="content-detail row">
								<div class='col-xs-2'>项目封面:</div>
								<div class='col-xs-6'><img class="project"src=<?php echo $project[0]->projPho?>alt="2" style="width:100%" /></div>
						</div>
						<div class="content-detail row">
								<div class='col-xs-2'>路演视频:</div>
								<div class='col-xs-4'><a style="color:red"><?php echo $project[0]->vadioLink?></a></div>
						</div>
						<div class="content-detail row">
								<div class='col-xs-2'>项目简介:</div>
								<div class='col-xs-4'><?php echo $project[0]->projAbst?></div>
						</div>
						<div class="content-detail row">
								<div class='col-xs-2'>详情介绍:</div>
								<div class='col-xs-6'>   <?php

                        $ch = curl_init();
                        $url = $project[0]->projIntro;
                        $curl_url = $url;
                        curl_setopt($ch, CURLOPT_URL, $curl_url);
                        curl_setopt($ch, CURLOPT_POST, 1);
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);//不直接输出，返回到变量
                        $curl_result = curl_exec($ch);
                        curl_close($ch);
                        print_r($curl_result);
                        //$a = json_decode($nickname);
                        //var_dump($a);
                        //$a = $nickname['result'];
                        //print_r($a);
                ?></div>
						</div>
						<?php $i=1; foreach ($rewards as $reward) {?>
							<div class="content-detail row">
								<div class='col-xs-2'>回报0<?php echo $i;?>:</div>
								<div class='col-xs-4'><?php if ($reward->rewardClassCode==1) {
									echo "资金回报";
								}elseif ($reward->rewardClassCode==2) {
									echo "实物回报";
								};?></div>
						</div>
						<div class="content-detail row">
								<div class='col-xs-2'>投资比例:</div>
								<div class='col-xs-4'>1%=<?php echo $reward->amountPer/100;?>元</div>
						</div>
						<div class="content-detail row">
								<div class='col-xs-2'>限定名额:</div>
								<div class='col-xs-4'>20个</div>
						</div>
						<div class="content-detail row">
								<div class='col-xs-2'>说明图片:</div>
								<div class='col-xs-6'><img class="project"src=<?php echo $reward->explainPic;?> alt="2" style="width:100%" /></div>
						</div>
						<div class="content-detail row">
								<div class='col-xs-2'>回报描述:</div>
								<div class='col-xs-6'><?php echo $reward->explainText;?> </div>
						</div>
						<div class="content-detail row">
								<div class='col-xs-2'>回报时间:</div>
								<div class='col-xs-4'><?php echo $reward->rewardTime;?></div>
						</div>
						<?php $i++;}?>
						<div class="content-detail row">
								<div class='col-xs-2'>增值服务</div>
								<div class='col-xs-4'></div>
						</div>
						<div class="content-detail row">
								<div class='col-xs-2'>进行路演:</div>
								<div class='col-xs-4'><?php if($project[0]->isVadio==0){
									echo "否";
								}else{
									echo "是 收费200元";
								}?></div>
						</div>
						<div class="content-detail row">
								<div class='col-xs-2'>热门推送:</div>
								<div class='col-xs-4'><?php if($project[0]->isPush==0){
									echo "否";
								}else{
									echo "是 收费200元";
								}?></div>
						</div>
						<div class="content-detail row">
								<div class='col-xs-2'>行业顾问:</div>
								<div class='col-xs-4'><?php if($project[0]->isFieldCoun==0){
									echo "否";
								}else{
									echo "是 收费200元";
								}?></div>
						</div>
						<div class="content-detail row">
								<div class='col-xs-2'>投资顾问:</div>
								<div class='col-xs-4'><?php if($project[0]->isInvCoun==0){
									echo "否";
								}else{
									echo "是 收费200元";
								}?></div>
						</div>

					</div>
				</div>

				<div id="maincontainer2">
					<div class='title'>2.发起人信息</div>
					<div class='content'>
						<div class="content-detail row">
							<div class='col-xs-2'>昵称:</div>
							<div class='col-xs-4'><a  href="./others.php"><?php echo $project[0]->nickName ;?></a></div>
						</div>
						<div class="content-detail row">
							<div class='col-xs-2'>真实姓名:</div>
							<div class='col-xs-4'><?php echo $project[0]->realName;?></div>
						</div>	
						<div class="content-detail row">
							<div class='col-xs-2'>身份证号:</div>
							<div class='col-xs-4'><?php echo $project[0]->IDCard;?></div>
						</div>	
						<div class="content-detail row">
							<div class='col-xs-2'>手机号:</div>
							<div class='col-xs-4'><?php echo $project[0]->mobilephone;?></div>
						</div>	
						<div class="content-detail row">
							<div class='col-xs-2'>邮箱:</div>
							<div class='col-xs-4'><?php echo $project[0]->email;?></div>
						</div>		
					</div>
				</div>
				<div id="maincontainer3">
					<div class="title">3.项目审核付费</div>
					<div class='content'>
						<form>
						<div class="content-detail row">
							<div class='col-xs-2'>审核状态:</div>
							<div class='col-xs-4'><?php if ($project[0]->projStatus==0) {
								echo "未审核";
								echo " </div></div>
								<div class='content-detail row'>
									<div class='col-xs-2'><a class='btn btn-success check'>审核项目</a></div>
		
								</div>  ";
								echo "</form></div></div>";
							}else{
								echo "已审核";
							?></div>
						</div>	
						<div class="content-detail row">
							<div class='col-xs-2'>审核时间:</div>
							<div class='col-xs-4'><?php echo date('Y-m-d',$project[0]->checkTime)?></div>
						</div>	
						<div class="content-detail row">
							<div class='col-xs-2'>付费状态:</div>
							<div class='col-xs-4'><?php if ($project[0]->projStatus==1) {
								echo "未付费";
								echo " </div></div>
								<div class='content-detail row'>
									<div class='col-xs-2'><a class='btn btn-success systemMsg'>提醒付费</a></div>
		
								</div>  ";
								echo "</form></div></div>";
							}else{
								echo "已付费";
							?></div>
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
				<?php }}?>
			</div>
			
		</div>
		
		<?php  require('./footer.php') ?>
	</div>

	<script>
	$(".check").click(function(){
		var projectId = $('#projectid').val();
		var token  = $("#token").val();
		//alert(token);
		 $.ajax({
                  type:"POST",
                  url:"./action/do_change_status.php",
                  data:"projId="+projectId+"&newStatus=1"+"&token="+token,
                  success:function(data){
                   // alert(data);
                    var dataobj = eval("("+data+")");
                    if (dataobj.code==0) {
                     window.location.reload();
                    };
                  },
                  error:function(){
                      alert("注册失败");
                  }
                });

	});
		$(".systemMsg").click(function(){
		var projectId = $('#projectid').val();
		var projName = $('#projName').val();
		var userID = $('#userid').val();
		var token  = $("#token").val();
		//alert(token);
		 $.ajax({
                  type:"POST",
                  url:"./action/do_change_status.php",
                  data:"projId="+projectId+"&newStatus=2"+"&token="+token+"&userID="+userID+"&projName="+projName,
                  success:function(data){
                    //alert(data);
                    var dataobj = eval("("+data+")");
                    if (dataobj.code==0) {
                     alert("发送成功");
                     window.location.reload();
                    };
                  },
                  error:function(){
                      alert("注册失败");
                  }
                });

	});
	</script>
</body>
</html>