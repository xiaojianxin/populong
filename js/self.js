// 加载后直接运行的函数
window.onload=function(){
	selfChoose();
	leftChoose();
	personChoose();
	tradeChoose();
}

// #selfRight1中选择发起的项目/关注的项目/关注者/粉丝
function selfChoose()
{
	var oDivs1=document.getElementById('toChooseOne');
	var oDivs2=document.getElementById('toChooseTwo');
	var oDivs3=document.getElementById('toChooseThree');
	var oDivs4=document.getElementById('toChooseFour');
	var oDivs5=document.getElementById('self_right_bottom1');
	var oDivs6=document.getElementById('self_right_bottom2');
	var oDivs7=document.getElementById('self_right_bottom3');
	var oDivs8=document.getElementById('self_right_bottom4');
	
	oDivs1.onmouseover=function ()
	{
		oDivs5.style.display='block';
		oDivs6.style.display='none';
		oDivs7.style.display='none';
		oDivs8.style.display='none';
	};
	oDivs2.onmouseover=function ()
	{
		oDivs5.style.display='none';
		oDivs6.style.display='block';
		oDivs7.style.display='none';
		oDivs8.style.display='none';
	};
	oDivs3.onmouseover=function ()
	{
		oDivs5.style.display='none';
		oDivs6.style.display='none';
		oDivs7.style.display='block';
		oDivs8.style.display='none';
	};
	oDivs4.onmouseover=function ()
	{
		oDivs5.style.display='none';
		oDivs6.style.display='none';
		oDivs7.style.display='none';
		oDivs8.style.display='block';
	};
}

// 左侧点击
function leftChoose()
{
	var oDivl1=document.getElementById('left1');
	var oDivl2=document.getElementById('left2');
	var oDivl3=document.getElementById('left3');
	var oDivl4=document.getElementById('left4');
	var oDivl5=document.getElementById('left5');
	var oDivl6=document.getElementById('left6');
	var oDivl7=document.getElementById('left7');
	var oDivl8=document.getElementById('left8');
	var oDivl9=document.getElementById('left9');
	var oDivl10=document.getElementById('left10');
	var oDivl11=document.getElementById('left11');
	var oDivl12=document.getElementById('left12');
	var oDivl13=document.getElementById('selfRight1');
	var oDivl14=document.getElementById('selfRight2');
	var oDivl15=document.getElementById('selfRight3');
	var oDivl16=document.getElementById('selfRight4');
	var oDivl17=document.getElementById('selfRight5');
	var oDivl18=document.getElementById('selfRight6');
	var oDivl19=document.getElementById('selfRight7');
	var oDivl20=document.getElementById('selfRight8');
	var oDivl21=document.getElementById('selfRight9');
	var oDivl22=document.getElementById('selfRight10');
	var oDivl23=document.getElementById('selfRight11');
	var oDivl24=document.getElementById('selfRight12');
	
	oDivl1.onclick=function ()
	{
		oDivl13.style.display='block';
		oDivl14.style.display='none';
		oDivl15.style.display='none';
		oDivl16.style.display='none';
		oDivl17.style.display='none';
		oDivl18.style.display='none';
		oDivl19.style.display='none';
		oDivl20.style.display='none';
		oDivl21.style.display='none';
		oDivl22.style.display='none';
		oDivl23.style.display='none';
		oDivl24.style.display='none';
	};
	oDivl2.onclick=function ()
	{
		oDivl13.style.display='none';
		oDivl14.style.display='block';
		oDivl15.style.display='none';
		oDivl16.style.display='none';
		oDivl17.style.display='none';
		oDivl18.style.display='none';
		oDivl19.style.display='none';
		oDivl20.style.display='none';
		oDivl21.style.display='none';
		oDivl22.style.display='none';
		oDivl23.style.display='none';
		oDivl24.style.display='none';
	};
	oDivl3.onclick=function ()
	{
		oDivl13.style.display='none';
		oDivl14.style.display='none';
		oDivl15.style.display='block';
		oDivl16.style.display='none';
		oDivl17.style.display='none';
		oDivl18.style.display='none';
		oDivl19.style.display='none';
		oDivl20.style.display='none';
		oDivl21.style.display='none';
		oDivl22.style.display='none';
		oDivl23.style.display='none';
		oDivl24.style.display='none';
	};
	oDivl4.onclick=function ()
	{
		oDivl13.style.display='none';
		oDivl14.style.display='none';
		oDivl15.style.display='none';
		oDivl16.style.display='block';
		oDivl17.style.display='none';
		oDivl18.style.display='none';
		oDivl19.style.display='none';
		oDivl20.style.display='none';
		oDivl21.style.display='none';
		oDivl22.style.display='none';
		oDivl23.style.display='none';
		oDivl24.style.display='none';
	};
	oDivl5.onclick=function ()
	{
		oDivl13.style.display='none';
		oDivl14.style.display='none';
		oDivl15.style.display='none';
		oDivl16.style.display='none';
		oDivl17.style.display='block';
		oDivl18.style.display='none';
		oDivl19.style.display='none';
		oDivl20.style.display='none';
		oDivl21.style.display='none';
		oDivl22.style.display='none';
		oDivl23.style.display='none';
		oDivl24.style.display='none';
	};
	oDivl6.onclick=function ()
	{
		oDivl13.style.display='none';
		oDivl14.style.display='none';
		oDivl15.style.display='none';
		oDivl16.style.display='none';
		oDivl17.style.display='none';
		oDivl18.style.display='block';
		oDivl19.style.display='none';
		oDivl20.style.display='none';
		oDivl21.style.display='none';
		oDivl22.style.display='none';
		oDivl23.style.display='none';
		oDivl24.style.display='none';
	};
	oDivl7.onclick=function ()
	{
		oDivl13.style.display='none';
		oDivl14.style.display='none';
		oDivl15.style.display='none';
		oDivl16.style.display='none';
		oDivl17.style.display='none';
		oDivl18.style.display='none';
		oDivl19.style.display='block';
		oDivl20.style.display='none';
		oDivl21.style.display='none';
		oDivl22.style.display='none';
		oDivl23.style.display='none';
		oDivl24.style.display='none';
	};
	oDivl8.onclick=function ()
	{
		oDivl13.style.display='none';
		oDivl14.style.display='none';
		oDivl15.style.display='none';
		oDivl16.style.display='none';
		oDivl17.style.display='none';
		oDivl18.style.display='none';
		oDivl19.style.display='none';
		oDivl20.style.display='block';
		oDivl21.style.display='none';
		oDivl22.style.display='none';
		oDivl23.style.display='none';
		oDivl24.style.display='none';
	};
	oDivl9.onclick=function ()
	{
		oDivl13.style.display='none';
		oDivl14.style.display='none';
		oDivl15.style.display='none';
		oDivl16.style.display='none';
		oDivl17.style.display='none';
		oDivl18.style.display='none';
		oDivl19.style.display='none';
		oDivl20.style.display='none';
		oDivl21.style.display='block';
		oDivl22.style.display='none';
		oDivl23.style.display='none';
		oDivl24.style.display='none';
	};
	oDivl10.onclick=function ()
	{
		oDivl13.style.display='none';
		oDivl14.style.display='none';
		oDivl15.style.display='none';
		oDivl16.style.display='none';
		oDivl17.style.display='none';
		oDivl18.style.display='none';
		oDivl19.style.display='none';
		oDivl20.style.display='none';
		oDivl21.style.display='none';
		oDivl22.style.display='block';
		oDivl23.style.display='none';
		oDivl24.style.display='none';
	};
	oDivl11.onclick=function ()
	{
		oDivl13.style.display='none';
		oDivl14.style.display='none';
		oDivl15.style.display='none';
		oDivl16.style.display='none';
		oDivl17.style.display='none';
		oDivl18.style.display='none';
		oDivl19.style.display='none';
		oDivl20.style.display='none';
		oDivl21.style.display='none';
		oDivl22.style.display='none';
		oDivl23.style.display='block';
		oDivl24.style.display='none';
	};
	oDivl12.onclick=function ()
	{
		oDivl13.style.display='none';
		oDivl14.style.display='none';
		oDivl15.style.display='none';
		oDivl16.style.display='none';
		oDivl17.style.display='none';
		oDivl18.style.display='none';
		oDivl19.style.display='none';
		oDivl20.style.display='none';
		oDivl21.style.display='none';
		oDivl22.style.display='none';
		oDivl23.style.display='none';
		oDivl24.style.display='block';
	};

	
}
// #selfRight2中选择查看全部 充值 提现 投资 收益记录
function tradeChoose()
{
	var oDivt1=document.getElementById('toTradetype1');
	var oDivt2=document.getElementById('toTradetype2');
	var oDivt3=document.getElementById('toTradetype3');
	var oDivt4=document.getElementById('toTradetype4');
	var oDivt5=document.getElementById('toTradetype5');
	var oDivt6=document.getElementById('tradeType1');
	var oDivt7=document.getElementById('tradeType2');
	var oDivt8=document.getElementById('tradeType3');
	var oDivt9=document.getElementById('tradeType4');
	var oDivt10=document.getElementById('tradeType5');
	
	oDivt1.onclick=function ()
	{
		oDivt6.style.display='block';
		oDivt7.style.display='none';
		oDivt8.style.display='none';
		oDivt9.style.display='none';
		oDivt10.style.display='none';
	};
	oDivt2.onclick=function ()
	{
		oDivt6.style.display='none';
		oDivt7.style.display='block';
		oDivt8.style.display='none';
		oDivt9.style.display='none';
		oDivt10.style.display='none';
	};
	oDivt3.onclick=function ()
	{
		oDivt6.style.display='none';
		oDivt7.style.display='none';
		oDivt8.style.display='block';
		oDivt9.style.display='none';
		oDivt10.style.display='none';
	};
	oDivt4.onclick=function ()
	{
		oDivt6.style.display='none';
		oDivt7.style.display='none';
		oDivt8.style.display='none';
		oDivt9.style.display='block';
		oDivt10.style.display='none';
	};
	oDivt5.onclick=function ()
	{
		oDivt6.style.display='none';
		oDivt7.style.display='none';
		oDivt8.style.display='none';
		oDivt9.style.display='none';
		oDivt10.style.display='block';
	};
}


// #selfRight12点击选择投资人与发起人排行
function personChoose()
{
	var oDivp1=document.getElementById('toChooseStarter');
	var oDivp2=document.getElementById('toChooseInvestor');
	var oDivp3=document.getElementById('selfRight12_starter');
	var oDivp4=document.getElementById('selfRight12_investor');
	oDivp1.onclick=function ()
	{
		oDivp3.style.display='block';
		oDivp4.style.display='none';
	};
	oDivp2.onclick=function ()
	{
		oDivp3.style.display='none';
		oDivp4.style.display='block';
	};
}