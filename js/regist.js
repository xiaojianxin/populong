// 加载后直接运行的函数
window.onload=function(){
	regist();
}

// 点击登陆部分
function regist()
{
	var oDivr1=document.getElementById('maincontainer1');
	var oDivr2=document.getElementById('nowRegist');
	var oDivr3=document.getElementById('maincontainer2');
	var oDivr4=document.getElementById('registSubmit');
	var oDivr5=document.getElementById('maincontainer3');
	var oDivr6=document.getElementById('nowRegist');


	oDivr6.onclick=function ()
	{
		// 点击显示maincontainer2
		oDivr1.style.display='none';
		oDivr3.style.display='block';
		oDivr5.style.display='none';
	};
	oDivr4.onclick=function ()
	{
		// 点击显示maincontainer3
		oDivr1.style.display='none';
		oDivr3.style.display='none';
		oDivr5.style.display='block';
	};
}