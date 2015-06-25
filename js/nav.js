$(document).ready(function(){
    toastr.options = {
        "closeButton": false,
        "debug": false,
        "positionClass": "toast-bottom-full-width",
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };
    $("#tofind1").click(function(){
        $('#login').modal('hide');

    });
    $("#nextFind").click(function(){
        $("#forgetPW").modal('hide');
    });
    $("#submitFind").click(function(){
        $("#inputCode").modal('hide');
    });

    $('.checklogin').click(function(){
        if(!$('.login_username').val().match(/^[1][358]\d{9}/)){
            $('.login_username').attr('type','email');
            $('.login_username').removeAttr('pattern');

        }
    });
    $('.login_username').bind({
        focus:function(){
            $("#login .error-tip").html('');
        }
    });
    $('.login_passwd').bind({
        focus:function(){
            $("#login .error-tip").html('');
        }
    });
    $("#navSignIn").click(function(){
        var name=$(".login_username").val();
        var psw=$(".login_passwd").val();
        var ischecked=$("#rememberMe").attr("ischecked");
        $.ajax({
            cache: false,
            type:"POST",
            url:"./action/do_login.php",
            data:"inputEmail="+name+"&"+"inputPassword="+psw,
            success:function(data){
                var dataobj = eval("("+data+")");
                if(dataobj.code == '10006'){
                    $("#login .error-tip").html('用户名不存在');
                }else if(dataobj.code == '10005'){
                    $("#login .error-tip").html('密码错误');
                }
                else
                {

                    toastr.success("登录成功");
                    $("#login").fadeOut();
                    setTimeout(function(){window.location.href='./index.php';},1000);


                }
            },
            error:function(){
                alert("登录失败");
            }
        })
    });
    $("#navSignOut").click(function(){
        $.ajax({
            type:"GET",
            url:"./action/do_logout.php",
            dataType:"Json",
            success:function(data){
                toastr.success("注销成功");
                setTimeout(function(){window.location.href='./index.php';},1000);
            },
            error:function(){
                toastr.error("注销失败");
            }
        })
    })

});