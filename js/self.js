
$(function(){
    $(function(){
            var  id = $.urlGet();
            $('ul .active').removeClass('active');
            //alert(id);
            if (id == '') {
                
                $('.personalpage').addClass('active');

            }else
            {
                $(".accordion-inner a").css('color','#333333');
                
                $('#'+id).css('color','#6cc77f');
                $('#'+id).parent().parent().prev().addClass('active');
            }
            
           
        });


    $('#toChoosefans').click(function(e) {

        $(this).css('border-top','1px solid #6cc77f');
        $(this).css('border-left','1px solid #6cc77f');
        $(this).css('border-right','1px solid #6cc77f');
        $(this).css('border-bottom','1px solid #ffffff');

        $('#toChooseone').css('border','1px solid #d2d2d2');

        $("#fans").attr('class',"tab-pane active");
        $("#concern").attr('class',"tab-pane");
    });
$('#toChooseone').click(function(e) {

    $(this).css('border-top','1px solid #6cc77f');
    $(this).css('border-left','1px solid #6cc77f');
    $(this).css('border-right','1px solid #6cc77f');
    $(this).css('border-bottom','1px solid #ffffff');


    $('#toChoosefans').css('border','1px solid #d2d2d2');

    $("#concern").attr('class',"tab-pane active");
    $("#fans").attr('class',"tab-pane");
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
            location.href = './self.php?'+'id='+id;
            
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


$('.change-status').click(function(){
    var text = $(this).html();
    $(this).html($(this).parent().parent().prev().children(':eq(0)').html());  
   $(this).parent().parent().prev().children(':eq(0)').html(text);

});

});