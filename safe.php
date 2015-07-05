<div class="container-fluid safe">
	<div id="safe-title">
		安全认证
	</div>
	<div id='safe-content'>
		<div class='row safe-content-detail'>
			<div class='col-xs-1'>
				<div class="glyphicon glyphicon-user"></div>
			</div>
			<div class="col-xs-2 content-title">
				昵称
			</div>
			<div class="col-xs-6">
				已设置
			</div>
			<div class="col-xs-2">
				shi美腻
			</div>
		</div>
		<div class='row safe-content-detail'>
			<div class='col-xs-1'>
				<div class="glyphicon glyphicon-credit-card"></div>
			</div>
			<div class="col-xs-2 content-title">
				实名认证
			</div>
			<div class="col-xs-6">
				43** **** **** **** ****
			</div>
			<div class="col-xs-2">
				*研
			</div>
		</div>
		<div class='row safe-content-detail'>
			<div class='col-xs-1'>
				<div class="glyphicon glyphicon-envelope"></div>
			</div>
			<div class="col-xs-2 content-title">
				邮箱验证
			</div>
			<div class="col-xs-6">
				33*******@qq.com
			</div>
			<div class="col-xs-2">
				<a id="edit-email">修改</a>
			</div>
			<div class='tianchong' style="height:40px;"></div>
			<div class='row edit edit-email hidden'>
				<div class='col-xs-2'></div>
				<div class="col-xs-2"><div class='edit-title'>已绑定邮箱</div></div>
				<div class="col-xs-4">33*******@qq.com</div>
			</div>
			<form action='' method="post">
			<div class='row edit edit-email hidden'>
				<div class='col-xs-2'></div>
				<div class="col-xs-2 edit-title"><div class='edit-title'><span class="glyphicon glyphicon-star warning"></span>&nbsp已绑定邮箱</div></div>
				<div class="col-xs-4">
					<input class='form-control' placeholder="请输入邮箱"/>
				</div>
				<div class="col-xs-4">
					<img class="pic-password" src="./img/regist_05.png" alt="" />
					<a class="refresh">刷新</a>
				</div>
			</div>
			<div class='row edit edit-email2 hidden'>
				<div class='col-xs-2'></div>
				<div class="col-xs-2 edit-title"><div class='edit-title'><span class="glyphicon glyphicon-star warning"></span>&nbsp已绑定邮箱</div></div>
				<div class="col-xs-4">
					<input class='form-control' placeholder="请输入邮箱"/>
				</div>
			</div>
			<div class='row edit edit-email hidden'>
				<div class='col-xs-4'></div>
				<div class="col-xs-4"><a class='btn btn-success to-email2' style="color:white;">发送验证邮件</a></div>
			</div>
			<div class='row edit edit-email2 hidden'>
				<div class='col-xs-4'></div>
				<div class="col-xs-4"><input type='submit' class='btn btn-success' value='下一步' /></div>
			</div>
		</form>
		</div>
		<div class='row safe-content-detail'>
			<div class='col-xs-1'>
				<div class="glyphicon glyphicon-earphone"></div>
			</div>
			<div class="col-xs-2 content-title">
				绑定手机
			</div>
			<div class="col-xs-6">
				133********
			</div>
			<div class="col-xs-2">
				<a id="edit-telephone">修改</a>
			</div>
			<div class='tianchong' style="height:40px;"></div>
			<div class='row edit-telephone hidden'>
				<div class='col-xs-2'></div>
				<div class="col-xs-2"><div class='edit-title'>已绑定手机</div></div>
				<div class="col-xs-4">13*******</div>
			</div>
			<form action='' method='post'>
			<div class='row edit edit-telephone hidden'>
				<div class='col-xs-2'></div>
				<div class="col-xs-2 edit-title"><div class='edit-title'><span class="glyphicon glyphicon-star warning"></span>&nbsp手机验证码</div></div>
				<div class="col-xs-4">
					<input class='form-control' placeholder="请输入验证码"/>
				</div>
				<div class="col-xs-4">
					<a class='btn btn-success' style="color:white; float:left">点击获取验证码</a>
				</div>
			</div>
			<div class='row edit edit-telephone hidden'>
				<div class='col-xs-2'></div>
				<div class="col-xs-2 edit-title"><div class='edit-title'><span class="glyphicon glyphicon-star warning"></span>&nbsp;填写新手机</div></div>
				<div class="col-xs-4">
					<input class='form-control' placeholder="请输入手机号"/>
				</div>
			</div>
			<div class='row edit edit-telephone hidden'>
				<div class='col-xs-4'></div>
				<div class="col-xs-4"><input type='submit' class='btn btn-success' value='下一步' /></div>
			</div>
			</form>
		</div>
		<div class='row safe-content-detail'>
			<div class='col-xs-1'>
				<div class="glyphicon glyphicon-lock"></div>
			</div>
			<div class="col-xs-2 content-title">
				登陆密码
			</div>
			<div class="col-xs-6">
				<span class="warning">未设置</span>
			</div>
			<div class="col-xs-2">
				<a>设置</a>
			</div>
		</div>
		<div class='row safe-content-detail'>
			<div class='col-xs-1'>
				<div class="glyphicon glyphicon-lock"></div>
			</div>
			<div class="col-xs-2 content-title">
				交易密码
			</div>
			<div class="col-xs-6">
				<span class="warning">未设置</span>
			</div>
			<div class="col-xs-2">
				<a>设置</a>
			</div>
		</div>
	</div>
</div>
<script>
var judge = 0;
$('#edit-email').click(function(){
	
	if (judge == 0)
	{
		$(this).html('取消修改');
		$('.edit-email').removeClass('hidden');
		judge = 1;
	}else if(judge == 1) {
		$(this).html('修改');
		$('.edit-email').addClass('hidden');
		judge = 0;
	};
});
$('#edit-telephone').click(function(){
	
	if (judge == 0)
	{
		$(this).html('取消修改');
		$('.edit-telephone').removeClass('hidden');
		judge = 1;
	}else if(judge == 1) {
		$(this).html('修改');
		$('.edit-telephone').addClass('hidden');
		judge = 0;
	};
});
$('.to-email2').click(function(){
	
		$('.edit-email').addClass('hidden');
		$('.edit-email2').removeClass('hidden');
	
});
</script>