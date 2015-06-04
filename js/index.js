// 加载后直接运行的函数
window.onload=function(){
	//flash();
	Progray(container,'progreen','percentage-text');
}

// 点击登陆部分
function login()
{
	var oDiv1=document.getElementById('tlogin');

	var oDiv3=document.getElementById('tofind2');
	var oDiv4=document.getElementById('tofind3');
	var oDiv6=document.getElementById('login');
	var oDiv5=document.getElementById('toemail');
	var oDiv7=document.getElementById('find1');
	var oDiv8=document.getElementById('find2');
	var oDiv9=document.getElementById('find3');
	var oDiv10=document.getElementById('back');



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


// move
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

function startMove(obj, attr, iTarget)
{
	clearInterval(obj.timer);
	obj.timer=setInterval(function (){
		var cur=0;
		
		if(attr=='opacity')
		{
			cur=Math.round(parseFloat(getStyle(obj, attr))*100);
		}
		else
		{
			cur=parseInt(getStyle(obj, attr));
		}
		
		var speed=(iTarget-cur)/6;
		speed=speed>0?Math.ceil(speed):Math.floor(speed);
		
		if(cur==iTarget)
		{
			clearInterval(obj.timer);
		}
		else
		{
			if(attr=='opacity')
			{
				obj.style.filter='alpha(opacity:'+(cur+speed)+')';
				obj.style.opacity=(cur+speed)/100;
				
				// document.getElementById('txt1').value=obj.style.opacity;
			}
			else
			{
				obj.style[attr]=cur+speed+'px';
			}
		}
	}, 30);
}





// flash部分
	// 根据class获取元素封装函数
	function getByClass(oParent, sClass)
	{
		var aEle=oParent.getElementsByTagName('*');
		var aResult=[];

		for(var i=0;i<aEle.length;i++)
		{
			if(aEle[i].className==sClass)
			{
				aResult.push(aEle[i]);
			}
		}

		return aResult;
	}
            // 滑动门部分主函数
	function flash()
	{
		var oDiv=document.getElementById('playimages');
		var oBtnPrev=getByClass(oDiv, 'prev')[0];
		var oBtnNext=getByClass(oDiv, 'next')[0];
		var oMarkLeft=getByClass(oDiv, 'mark_left')[0];
		var oMarkRight=getByClass(oDiv, 'mark_right')[0];

		var oDivSmall=getByClass(oDiv, 'small_pic')[0];
		var oUlSmall=oDivSmall.getElementsByTagName('ul')[0];
		var aLiSmall=oDivSmall.getElementsByTagName('li');

		var oUlBig=getByClass(oDiv, 'big_pic')[0];
		var aLiBig=oUlBig.getElementsByTagName('li');

		var nowZIndex=2;

		var now=0;

		oUlSmall.style.width=aLiSmall.length*aLiSmall[0].offsetWidth+'px';

	//左右按钮
	oBtnPrev.onmouseover=oMarkLeft.onmouseover=function ()
	{
		startMove(oBtnPrev, 'opacity', 100);
	};
	oBtnPrev.onmouseout=oMarkLeft.onmouseout=function ()
	{
		startMove(oBtnPrev, 'opacity', 0);
	};
	oBtnNext.onmouseover=oMarkRight.onmouseover=function ()
	{
		startMove(oBtnNext, 'opacity', 100);
	};
	oBtnNext.onmouseout=oMarkRight.onmouseout=function ()
	{
		startMove(oBtnNext, 'opacity', 0);
	};

	//大图切换
	for(var i=0;i<aLiSmall.length;i++)
	{
		aLiSmall[i].index=i;
		aLiSmall[i].onclick=function ()
		{
			if(this.index==now)return;

			now=this.index;

			tab();
		};

		aLiSmall[i].onmouseover=function ()
		{
			startMove(this, 'opacity', 100);
		};
		aLiSmall[i].onmouseout=function ()
		{
			if(this.index!=now)
			{
				startMove(this, 'opacity', 60);
			}
		};
	}

	function tab()
	{
		aLiBig[now].style.zIndex=nowZIndex++;

		for(var i=0;i<aLiSmall.length;i++)
		{
			startMove(aLiSmall[i], 'opacity', 60);
		}

		startMove(aLiSmall[now], 'opacity', 100);

		aLiBig[now].style.height=0;
		startMove(aLiBig[now], 'height', 374);

		if(now==0)
		{
			startMove(oUlSmall, 'left', 0);
		}
		else if(now==aLiSmall.length-1)
		{
			startMove(oUlSmall, 'left', -(now-2)*aLiSmall[0].offsetWidth);
		}
		else
		{
			startMove(oUlSmall, 'left', -(now-1)*aLiSmall[0].offsetWidth);
		}
	}

	oBtnPrev.onclick=function ()
	{
		now--;
		if(now==-1)
		{
			now=aLiSmall.length-1;
		}

		tab();
	};

	oBtnNext.onclick=function ()
	{
		now++;
		if(now==aLiSmall.length)
		{
			now=0;
		}

		tab();
	};

	var timer=setInterval(oBtnNext.onclick, 2000);

	oDiv.onmouseover=function ()
	{
		clearInterval(timer);
	};
	oDiv.onmouseout=function ()
	{
		timer=setInterval(oBtnNext.onclick, 2000);
	};
};
