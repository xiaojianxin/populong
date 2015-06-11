// 加载后直接运行的函数
window.onload=function(){
	Progray(container,'progreen','percentageText');
	invChoose();
	toEmail();
}
// 展示进程小图标

function Progray(oParent,sClass,mClass)
{
	var aEle=oParent.getElementsByTagName('*');
	var aResult=[];
	var bResult=[];
	for(var i=0;i<aEle.length;i++)
	{
		if(aEle[i].className==sClass)
		{
			aResult.push(aEle[i]);
		}

		else if(aEle[i].className==mClass)
		{
			bResult.push(aEle[i]);
		}
	}
	for(var i=0;i<aResult.length;i++){
		aResult[i].style.width=bResult[i].innerText;
	}
}

// 选择推荐投资金额部分1/10/100/1000
function invChoose()
{
	var oDivp1=document.getElementById('toChooseOne');
	var oDivp2=document.getElementById('toChooseTwo');
	var oDivp3=document.getElementById('toChooseThree');
	var oDivp4=document.getElementById('toChooseFour');
	var oDivp5=document.getElementById('ChooseOne');
	var oDivp6=document.getElementById('ChooseTwo');
	var oDivp7=document.getElementById('ChooseThree');
	var oDivp8=document.getElementById('ChooseFour');
	
	oDivp1.onmouseover=function ()
	{
		oDivp5.style.display='block';
		oDivp6.style.display='none';
		oDivp7.style.display='none';
		oDivp8.style.display='none';
	};
	oDivp2.onmouseover=function ()
	{
		oDivp5.style.display='none';
		oDivp6.style.display='block';
		oDivp7.style.display='none';
		oDivp8.style.display='none';
	};
	oDivp3.onmouseover=function ()
	{
		oDivp5.style.display='none';
		oDivp6.style.display='none';
		oDivp7.style.display='block';
		oDivp8.style.display='none';
	};
	oDivp4.onmouseover=function ()
	{
		oDivp5.style.display='none';
		oDivp6.style.display='none';
		oDivp7.style.display='none';
		oDivp8.style.display='block';
	};
}
// 点击发送私信
function toEmail()
{
	var oDive1=document.getElementById('toSendEmail');
	var oDive2=document.getElementById('send');
	var oDive3=document.getElementById('cancel');
	var oDive4=document.getElementById('sendSuccess');
	var oDive5=document.getElementById('toSendEmail1');
	var oDive6=document.getElementById('toSendEmail2');
	var oDive7=document.getElementById('back2');


	oDive1.onclick=function ()
	{
		// 点击“发私信”进入toSendEmail1窗口
		oDive5.style.display='block';
		oDive7.style.display='block';
	};
	oDive2.onclick=function ()
	{
		// 点击“发送”进入toSendEmail2窗口
		oDive5.style.display='none';
		oDive6.style.display='block';
	};
	oDive3.onclick=function ()
	{
		// 点击“取消”关闭所有弹出窗口
		oDive5.style.display='none';
		oDive6.style.display='none';
		oDive7.style.display='none';
	};
	oDive4.onclick=function ()
	{
		// 点击“发送成功”退出
		oDive5.style.display='none';
		oDive6.style.display='none';
		oDive7.style.display='none';
	};
	oDive7.onclick=function ()
	{
		// 点击“黑色部分”退出
		oDive5.style.display='none';
		oDive6.style.display='none';
		oDive7.style.display='none';
	};
}
