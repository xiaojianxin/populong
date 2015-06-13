$(function(){
    $(function(){
            var  id = $.urlGet();
            $('ul .active').removeClass('active');
            //alert(id);
            if (id == '') {
                
                $('.personalpage').addClass('active');

            }else if (id == '14') 
            {
                $(".accordion-inner a").css('color','#333333');
                
                $('#8').css('color','#6cc77f');
                $('#8').parent().parent().prev().addClass('active');}
            else
            {
                $(".accordion-inner a").css('color','#333333');
                
                $('#'+id).css('color','#6cc77f');
                $('#'+id).parent().parent().prev().addClass('active');
            }
            
           
        });


$('#leftnav a').click(function(e){
    //$('.nav li').removeClass('active');
    var judge = $(this).attr('class');
    if(judge=="accordion-toggle" || judge=="accordion-toggle collapsed"){
        $('ul .active').removeClass('active');
        $(this).parent().addClass('active');
    }
    else{
        var id = $(this).attr('id');
            location.href = './admin.php?'+'id='+id;
            
    }
});

// jQuery url get parameters function [获取URL的GET参数值]
// <code>
//     var GET = $.urlGet(); //获取URL的Get参数
//     var id = GET['id']; //取得id的值
// </code>
//  url get parameters
//  public
//  return array() 
      
$.extend({       
urlGet:function()
{

    var aQuery = window.location.href.split("?");  //取得Get参数
    var aGET = new Array();
    if(aQuery.length > 1)
    {
        var aBuf = aQuery[1].split("&");
        for(var i=0, iLoop = aBuf.length; i<iLoop; i++)
        {
            var aTmp = aBuf[i].split("=");  //分离key与Value
            aGET[0] = aTmp[1];
        }
     }
     return aGET;
 }
});

});