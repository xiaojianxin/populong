// 加载后直接运行的函数
window.onload=function(){
	invChoose();
	collection();
	proChoose();
	Progray(container,'progreen','txt1');
	comment();
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
// 点击收藏
function collection(){
	var oDivc1=document.getElementById('toCollection');
	var oDivc2=document.getElementById('collection');
	// var a=oDivc2.style.display;
	// var b='block';
	if(oDivc2.style.display='none')
	// if(a==b)
	{
		oDivc1.onclick=function ()
		{
			oDivc2.style.display='block';
			// oDivc1.align="center";
		}
	}
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

// 选择项目下方展示内容
function proChoose()
{
	var oDivd1=document.getElementById('toChooseContent');
	var oDivd2=document.getElementById('toChooseComment');
	var oDivd3=document.getElementById('toChooseInvestor');
	var oDivd4=document.getElementById('toChooseIndustryMaster');
	var oDivd5=document.getElementById('toChooseInvestorMaster');
	var oDivd6=document.getElementById('toChooseFollow');
	var oDivd7=document.getElementById('chooseContent');
	var oDivd8=document.getElementById('chooseComment');
	var oDivd9=document.getElementById('chooseInvestor');
	var oDivd10=document.getElementById('chooseIndustryMaster');
	var oDivd11=document.getElementById('chooseInvestorMaster');
	var oDivd12=document.getElementById('chooseFollow');
	
	oDivd1.onmouseover=function ()
	{
		oDivd7.style.display='block';
		oDivd8.style.display='none';
		oDivd9.style.display='none';
		oDivd10.style.display='none';
		oDivd11.style.display='none';
		oDivd12.style.display='none';
	};
	oDivd2.onmouseover=function ()
	{
		oDivd7.style.display='none';
		oDivd8.style.display='block';
		oDivd9.style.display='none';
		oDivd10.style.display='none';
		oDivd11.style.display='none';
		oDivd12.style.display='none';
	};
	oDivd3.onmouseover=function ()
	{
		oDivd7.style.display='none';
		oDivd8.style.display='none';
		oDivd9.style.display='block';
		oDivd10.style.display='none';
		oDivd11.style.display='none';
		oDivd12.style.display='none';
	};
	oDivd4.onmouseover=function ()
	{
		oDivd7.style.display='none';
		oDivd8.style.display='none';
		oDivd9.style.display='none';
		oDivd10.style.display='block';
		oDivd11.style.display='none';
		oDivd12.style.display='none';
	};
	oDivd5.onmouseover=function ()
	{
		oDivd7.style.display='none';
		oDivd8.style.display='none';
		oDivd9.style.display='none';
		oDivd10.style.display='none';
		oDivd11.style.display='block';
		oDivd12.style.display='none';
	};
	oDivd6.onmouseover=function ()
	{
		oDivd7.style.display='none';
		oDivd8.style.display='none';
		oDivd9.style.display='none';
		oDivd10.style.display='none';
		oDivd11.style.display='none';
		oDivd12.style.display='block';
	};
}


// move2
function getStyle(obj, name)
{
	if(obj.currentStyle)
	{
		return obj.currentStyle[name];
	}
	else
	{
		return getComputedStyle(obj, false)[name];
	}
}


//startMove(oDiv, {width: 400, height: 400})


function startMove(obj, json, fnEnd)
{
	clearInterval(obj.timer);
	obj.timer=setInterval(function (){
		var bStop=true;		//假设：所有值都已经到了
		
		for(var attr in json)
		{
			var cur=0;
			
			if(attr=='opacity')
			{
				cur=Math.round(parseFloat(getStyle(obj, attr))*100);
			}
			else
			{
				cur=parseInt(getStyle(obj, attr));
			}
			
			var speed=(json[attr]-cur)/6;
			speed=speed>0?Math.ceil(speed):Math.floor(speed);
			
			if(cur!=json[attr])
				bStop=false;
			
			if(attr=='opacity')
			{
				obj.style.filter='alpha(opacity:'+(cur+speed)+')';
				obj.style.opacity=(cur+speed)/100;
			}
			else
			{
				obj.style[attr]=cur+speed+'px';
			}
		}
		
		if(bStop)
		{
			clearInterval(obj.timer);

			if(fnEnd)fnEnd();
		}
	}, 30);
}
// 点击添加评论
function comment()
	{
		var oBtn=document.getElementById('btn1');
		var oUl=document.getElementById('ul1');
		var oTxt=document.getElementById('txt2');

		oBtn.onclick=function ()
		{
			var oLi=document.createElement('li');

			oLi.innerHTML=oTxt.value;
			oTxt.value='';

			if(oUl.children.length>0)
			{
				oUl.insertBefore(oLi, oUl.children[0]);
			}
			else
			{
				oUl.appendChild(oLi);
			}

		//运动
		var iHeight=oLi.offsetHeight;
		
		oLi.style.height='0';
		
		startMove(oLi, {height: iHeight}, function (){
			startMove(oLi, {opacity: 100});
		});
		//alert(iHeight);
	};
};