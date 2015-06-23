
$(function(){
    $(function(){
            var  id = $.urlGet();
            $('#leftnav ul .active').removeClass('active');
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
      $("#leftnav .nav-list li .accordion-group .accordion-heading").click(function(){
          if($(this).parent().children(1).hasClass('in'))
          {
              $(this).children(0).children(0).removeClass('glyphicon-chevron-up');
              $(this).children(0).children(0).addClass('glyphicon-chevron-down');
          }
          else
          {
              $(this).children(0).children(0).removeClass('glyphicon-chevron-down');
              $(this).children(0).children(0).addClass('glyphicon-chevron-up');
          }
      });
  
      $("#popover_bottom1").popover({placement:'bottom'});
      $("#popover_bottom1").click(function(){

         $('.popover-content').html('<div>距下一级还需要：*** ，可直接充值xxx升级，充值金额可用于投资操作，充值金额一个月以内不能提现，一个月以后自由提现</div><div><span class="popover-span">lv3</span><span class="popover-span" style="float:right">lv4</span><div><div class="progress progress-striped active" style="width:85% margin-left:20px;"><div class="progress-bar progress-bar-success " role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"style="width: 40%;"></div></div><a style="float:right;margin-bottom:10px;">去升级</a>');
            
      });
      
    $("#popover_bottom2").popover({placement:'bottom'});
      $("#popover_bottom2").click(function(){

            $('.popover-content').html('<div>距下一级还需要：*** ，可直接充值xxx升级，充值金额可用于投资操作，充值金额一个月以内不能提现，一个月以后自由提现</div><div><span class="popover-span">lv6</span><span class="popover-span" style="float:right">lv7</span><div><div class="progress progress-striped active" style="width:85% margin-left:20px;"><div class="progress-bar progress-bar-success " role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"style="width: 40%;"></div></div><a style="float:right;margin-bottom:10px;">去升级</a>');
           
      });
      
      

    $('#toChoosefans').click(function(e) {

        $(this).css('border-top','1px solid #6cc77f');
        $(this).css('border-left','1px solid #6cc77f');
        $(this).css('border-right','1px solid #6cc77f');
        $(this).css('border-bottom','1px solid #ffffff');

        $('#toChooseone').css('border','1px solid #d2d2d2');

        $("#fans").removeClass('hidden');
        $('#fans').addClass('show');
        $("#concern").removeClass('show');
        $('#concern').addClass('hidden');
    });
$('#toChooseone').click(function(e) {

    $(this).css('border-top','1px solid #6cc77f');
    $(this).css('border-left','1px solid #6cc77f');
    $(this).css('border-right','1px solid #6cc77f');
    $(this).css('border-bottom','1px solid #ffffff');


    $('#toChoosefans').css('border','1px solid #d2d2d2');
        $("#fans").removeClass('show');
        $('#fans').addClass('hidden');
        $("#concern").removeClass('hidden');
        $('#concern').addClass('show');
       
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

        $('#file_pic').uploadify({

           
            'swf'  : 'uploadify.swf',   //指定上传控件的主体文件，默认‘uploader.swf’
            'uploader'    : '/file',       //指定服务器端上传处理文件，默认‘upload.php’
            'auto'      : true,               //选定文件后是否自动上传，默认false
            'folder'    : '/userphoto'   ,     //要上传到的服务器路径，
            'multi'     : false,               //是否允许同时上传多文件，默认false
            'fileExt'   : '*.jpg;*.bmp;*.png;*.gif',      //控制可上传文件的扩展名，启用本项时需同时声明fileDesc
            fileSizeLimit:'2MB',
            'fileObjName': 'file',
            'onUploadSuccess': function(file, data, response) {
                $('#self-logo').attr("src",data);//上传图片的服务器地址
                $('#self-logo').show();
                $('#photo').attr("value",response);
            },
            'onError'          : function(event, queueID, fileObj)
            {
                alert("文件:" + fileObj.name + " 上传失败");
            }
        });




});