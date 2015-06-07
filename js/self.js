
$(function(){
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
        if(typeof (id) == "undefined")
        {
            $('ul .active').removeClass('active');
            $(this).parent().addClass('active');
            $('div .col-xs-9 .show').attr('class','hidden');
            $('div #selfindex').attr('class','show');
            $(".accordion-inner a").css('color','#333333');
        }else{
            $(".accordion-inner a").css('color','#333333');
            $('ul .active').removeClass('active');
            $(this).parent().parent().prev().addClass('active');
            $(this).css('color','#6cc77f');
            //$(e.target).addClass('active');
            //$(this).addClass('active');
            $('div .col-xs-9 .show').attr('class','hidden');
            $("div #"+id).attr('class','show');
        }
    }
});
});