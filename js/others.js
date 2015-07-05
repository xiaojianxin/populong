// 加载后直接运行的函数
window.onload=function(){
	Progray(container,'progreen','percentage-text');
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