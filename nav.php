  <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">泡泡龙</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
        	<ul class="nav navbar-nav">
	            <li class="chooseli"><a href="./index.php">首页热门</a></li>
      				<li><a href="./help.php">青年助梦</a></li>
      				<li><a href="./together.php">与你同行</a></li>
      				<li><a href="./ido.php">我做你投</a></li>
	        </ul>
          <ul class="nav navbar-nav navbar-right">

                  <li><a href="#login" data-toggle="modal" data-target="#login" >登录</a></li>

                  <li><a href="./regist_1.php">注册</a></li>
          </ul>
          <form class='navbar-form navbar-right' action="">
                <div class="btn btn-inverse">
                    <span class="glyphicon glyphicon-search" style="color: white"></span>
                </div>
                <input type="text" class="form-control" placeholder="Search..." style="background-color: black;color: white">
          </form>
          	
         
        </div><!--/.navbar-collapse -->
      </div>
</nav>
<!--  <div class="modal fade" id="login" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">-->
<!--      <div class="modal-dialog">-->
<!--          <div class="modal-content">-->
<!--              <div class="modal-header">-->
<!--                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>-->
<!--                  <h4 class="modal-title" id="myModalLabel">-->
<!--                      <img src="./img/login_01.png" alt="" />-->
<!--                      登陆-->
<!--                  </h4>-->
<!--              </div>-->
<!--              <div class="modal-body">-->
<!--                  <form action="">-->
<!---->
<!--                      <div class="form-group">-->
<!--                          <input type="email" class="form-control login_username" placeholder="邮箱/手机">-->
<!--                      </div>-->
<!--                      <div class="form-group">-->
<!--                          <input type="password" class="form-control login_passwd" placeholder="密码">-->
<!--                      </div>-->
<!--                      <div class="checkbox">-->
<!--                          <label>-->
<!--                              <input type="checkbox">记住用户名-->
<!--                          </label>-->
<!--                      </div>-->
<!--                      <div class="forget" style="margin-top: 10px;">-->
<!--                          <div class="row">-->
<!--                              <div class="col-sm-6" style="margin-top: 20px">-->
<!--                                  <a id="tofind1" href="#forgetPW" data-toggle="modal" data-target="#forgetPW">忘记密码</a>-->
<!--                                  <span>&nbsp;|&nbsp;</span>-->
<!--                                  <a id="toregist"href="./regist_1.html">快速注册</a>-->
<!--                              </div>-->
<!--                              <div class="col-sm-6 ">-->
<!--                                  <button type="submit" class="btn btn-lg checklogin pull-right">登陆</button>-->
<!--                              </div>-->
<!--                          </div>-->
<!--                      </div>-->
<!---->
<!---->
<!---->
<!--                  </form>-->
<!--              </div>-->
<!---->
<!--          </div>-->
<!---->
<!--      </div>-->
<!---->
<!--  </div>-->
<!--  <div class="modal fade" id="forgetPW" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">-->
<!--      <div class="modal-dialog">-->
<!--          <div class="modal-content">-->
<!--              <div class="modal-header">-->
<!--                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>-->
<!--                  <h4 class="modal-title" id="myModalLabel">-->
<!--                      <span class="glyphicon glyphicon-arrow-right"></span>-->
<!--                      找回密码-->
<!--                  </h4>-->
<!--              </div>-->
<!--              <div class="modal-body">-->
<!--                  <form action="">-->
<!---->
<!--                      <div class="form-group">-->
<!--                          <input type="email" class="form-control findAccount" placeholder="注册时的邮箱或者手机号码">-->
<!--                      </div>-->
<!--                      <div class="form-group">-->
<!---->
<!--                          <div class="row">-->
<!--                              <div class="col-xs-6">-->
<!--                                  <input type="text" class="form-control checkCode" placeholder="验证码">-->
<!--                              </div>-->
<!--                              <div class="col-xs-6">-->
<!--                                  <input type="text" class="form-control checkEmail" placeholder="1 2 3 4"/>-->
<!--                              </div>-->
<!--                          </div>-->
<!---->
<!--                      </div>-->
<!--                      <div class="row">-->
<!--                          <div class="col-sm-10"></div>-->
<!--                          <div class="col-sm-2">-->
<!--                              <div id="nextFind" class="btn nextStep btn-lg pull-right" >-->
<!--                                  <a href="#inputCode"-->
<!--                                     data-toggle="modal" data-target="#inputCode">下一步</a>-->
<!--                              </div>-->
<!--                          </div>-->
<!---->
<!--                      </div>-->
<!---->
<!---->
<!--                  </form>-->
<!--              </div>-->
<!---->
<!--          </div>-->
<!---->
<!--      </div>-->
<!---->
<!--  </div>-->
<!--  <div class="modal fade" id="inputCode" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">-->
<!--      <div class="modal-dialog">-->
<!--          <div class="modal-content">-->
<!--              <div class="modal-header">-->
<!--                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>-->
<!--                  <h4 class="modal-title" id="myModalLabel">-->
<!--                      <span class="glyphicon glyphicon-arrow-right"></span>-->
<!--                      找回密码-->
<!--                  </h4>-->
<!--              </div>-->
<!--              <div class="modal-body">-->
<!--                  <h2>已向13000000000发送手机验证码：</h2>-->
<!--                  <div class="form-group">-->
<!---->
<!--                      <div class="row">-->
<!--                          <div class="col-xs-6">-->
<!--                              <input type="text" class="form-control checkCode" placeholder="验证码">-->
<!--                          </div>-->
<!--                          <div class="col-xs-6">-->
<!--                              <div class="btn btn-default btn-lg">60s后再次发送</div>-->
<!--                          </div>-->
<!--                      </div>-->
<!--                      <div class="row">-->
<!--                          <div class="col-sm-10"></div>-->
<!--                          <div class="col-sm-2">-->
<!--                              <div id="submitFind" class="btn nextStep pull-right btn-lg" >-->
<!--                                  <a href="#sendCode"-->
<!--                                     data-toggle="modal" data-target="#sendCode">提交</a>-->
<!--                              </div>-->
<!--                          </div>-->
<!---->
<!--                      </div>-->
<!---->
<!--                  </div>-->
<!--              </div>-->
<!---->
<!--          </div>-->
<!---->
<!--      </div>-->
<!---->
<!--  </div>-->
<!---->
<!--  <div class="modal fade" id="sendCode" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">-->
<!--      <div class="modal-dialog">-->
<!--          <div class="modal-content">-->
<!--              <div class="modal-header">-->
<!--                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>-->
<!--                  <h4 class="modal-title" id="myModalLabel">-->
<!--                      <span class="glyphicon glyphicon-arrow-right"></span>-->
<!--                      找回密码-->
<!--                  </h4>-->
<!--              </div>-->
<!--              <div class="modal-body">-->
<!--                  <h2>已将验证地址发送到您的手机，请查收</h2>-->
<!---->
<!--                  <div class="row">-->
<!--                      <div class="col-sm-4">-->
<!---->
<!--                      </div>-->
<!--                      <div class="col-sm-4">-->
<!--                          <div class="btn btn-lg gotoEmail"><a href="">现在去邮箱</a></div>-->
<!--                      </div>-->
<!--                      <div class="col-sm-4">-->
<!---->
<!--                      </div>-->
<!--                  </div>-->
<!---->
<!--              </div>-->
<!---->
<!--          </div>-->
<!---->
<!--      </div>-->
<!---->
<!--  </div>-->
<!--  <script>-->
<!--      $("#tofind1").click(function(){-->
<!--          $('#login').modal('hide');-->
<!---->
<!--      });-->
<!--      $("#nextFind").click(function(){-->
<!--          $("#forgetPW").modal('hide');-->
<!--      });-->
<!--      $("#submitFind").click(function(){-->
<!--          $("#inputCode").modal('hide');-->
<!--      })-->
<!--  </script>-->
