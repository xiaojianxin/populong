// 点击登陆部分
function login()
{
	var oDiv1=document.getElementById('tlogin');
	var oDiv2=document.getElementById('tofind1');
	var oDiv3=document.getElementById('tofind2');
	var oDiv4=document.getElementById('tofind3');
	var oDiv6=document.getElementById('login');
	var oDiv5=document.getElementById('toemail');
	var oDiv7=document.getElementById('find1');
	var oDiv8=document.getElementById('find2');
	var oDiv9=document.getElementById('find3');
	var oDiv10=document.getElementById('back');


	oDiv1.onclick=function ()
	{
		// 点击登陆显示登陆框
		oDiv6.style.display='block';
		oDiv10.style.display='block';
	};
	oDiv2.onclick=function ()
	{
		// 点击“忘记密码”进入密码寻找1
		oDiv6.style.display='none';
		oDiv7.style.display='block';
	};
	oDiv3.onclick=function ()
	{
		// 点击“下一步”进入密码寻找2
		oDiv7.style.display='none';
		oDiv8.style.display='block';
	};
	oDiv4.onclick=function ()
	{
		// 点击“提交”进入密码寻找3
		oDiv8.style.display='none';
		oDiv9.style.display='block';
	};
	oDiv10.onclick=function ()
	{
		// 点击背景退出登录框
		oDiv6.style.display='none';
		oDiv7.style.display='none';
		oDiv8.style.display='none';
		oDiv9.style.display='none';
		oDiv10.style.display='none';
	};
}



// 名字下拉菜单部分
function dropdown()
{
	var oDiv11=document.getElementById('name');
	var oDiv22=document.getElementById('dropdown');
	var timer=null;
	
	oDiv22.onmouseover=oDiv11.onmouseover=function ()
	{
		clearTimeout(timer);
		oDiv22.style.display='block';
	};
	oDiv22.onmouseout=oDiv11.onmouseout=function ()
	{
		timer=setTimeout(function (){
			oDiv22.style.display='none';
		}, 500);
	};
	oDiv11.style.backround='blue';
};

