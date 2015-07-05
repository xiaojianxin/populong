<?PHP
session_start();
date_default_timezone_set("PRC");
?>
  <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="./index.php">泡泡龙管理员系统</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
        	<ul class="nav navbar-nav" style="width: 50%;">
	        </ul>
            <ul class="nav navbar-nav navbar-right" style="width: 20%;">
                <?php if(empty($_SESSION["admin"])){
                    ?>
                    <li><a href="./admin_regist.php">注册</a></li>

                <?PHP
                }
                else{
                    ?>
                    <li class="user-nav">
                        <a class="dropdown-toggle operator-name" data-toggle="dropdown"><img src="./img/head.png" alt=""class="img-circle"/><?PHP echo  $_SESSION["admin"]?></a>
                        <ul class="dropdown-menu self-menu">
                        <li>
                                <a id="navSignOut"><span class="glyphicon glyphicon-log-out"></span>&nbsp;&nbsp;退出</a>

                       </li>
                     </ul>
                    </li>
                <?PHP
                }
                ?>


            </ul>

          <form class='navbar-form navbar-right' action="" style="width: 20%;">
                <div class="btn btn-inverse" >
                    <a href="searchresult.php"><span class="glyphicon glyphicon-search" style="color: white;width:20%;"></span></a>
                    <input type="text" class="form-control" placeholder="Search..." style="width:80%;background-color: black;color: white">
                </div>

          </form>
          	
         
        </div><!--/.navbar-collapse -->
      </div>
</nav>
<script>
   $("#navSignOut").click(function(){
        $.ajax({
            type:"GET",
            url:"./action/do_admin_logout.php",
            dataType:"Json",
            success:function(data){
                toastr.success("注销成功");

                setTimeout(function(){window.location.href=window.location.href;},1000);
            },
            error:function(){
                toastr.error("注销失败");
            }
        })
    });
   </script>