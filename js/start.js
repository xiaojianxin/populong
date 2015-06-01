// 加载后直接运行的函数
window.onload=function(){
	start();
}

// 点击登陆部分
function start()
{
	var oDivs1=document.getElementById('maincontainer1');
	var oDivs2=document.getElementById('toNext1');
	var oDivs3=document.getElementById('maincontainer2');
	var oDivs4=document.getElementById('toNext2');
	var oDivs5=document.getElementById('maincontainer3');
	var oDivs6=document.getElementById('toNext3');
	var oDivs7=document.getElementById('maincontainer4');
	var oDivs8=document.getElementById('toLast2');
	var oDivs9=document.getElementById('toLast3');


	oDivs2.onclick=function ()
	{
		// 点击显示maincontainer2
		oDivs1.style.display='none';
		oDivs3.style.display='block';
		oDivs5.style.display='none';
		oDivs7.style.display='none';
	};
	oDivs4.onclick=function ()
	{
		// 点击显示maincontainer3
		oDivs1.style.display='none';
		oDivs3.style.display='none';
		oDivs5.style.display='block';
		oDivs7.style.display='none';
	};
	oDivs6.onclick=function ()
	{
		// 点击显示maincontainer3
		oDivs1.style.display='none';
		oDivs3.style.display='none';
		oDivs5.style.display='none';
		oDivs7.style.display='block';
	};
	oDivs8.onclick=function ()
	{
		// 点击显示maincontainer3
		oDivs1.style.display='block';
		oDivs3.style.display='none';
		oDivs5.style.display='none';
		oDivs7.style.display='none';
	};
	oDivs9.onclick=function ()
	{
		// 点击显示maincontainer3
		oDivs1.style.display='none';
		oDivs3.style.display='block';
		oDivs5.style.display='none';
		oDivs7.style.display='none';
	};
}