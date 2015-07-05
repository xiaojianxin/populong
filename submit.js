window.onload=function ()
{
	var oBtn=document.getElementById('btn1');
	
	oBtn.onclick=function ()
	{
		ajax('arr.txt?t='+new Date().getTime(), function (str){
			var arr=eval(str);
			alert(arr[3]);
		}, function (){
			alert('失败');
		});
	};
};
