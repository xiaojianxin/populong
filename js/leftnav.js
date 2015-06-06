  $(function() {
        $('.nav li').click(function(e){
            $('.nav li').removeClass('active');
            //alert('111');
            //$(e.target).addClass('active');
            $(this).addClass('active');
        });

    });