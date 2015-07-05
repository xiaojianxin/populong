    <?php

    $ch = curl_init();
    $curl_url = "http://123.57.74.122:8888/version_0.2/action/test_userinfo.php";
    curl_setopt($ch, CURLOPT_URL, $curl_url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);//不直接输出，返回到变量
    $curl_result = curl_exec($ch);
    curl_close($ch);
    $result = json_decode($curl_result);
    $result = $result->result[0];
    //var_dump($result);
    $nickname = $result->nickname;
    $email = $result->email;
    $mobilephone = $result->mobilephone;
    //$a = json_decode($nickname);
    //var_dump($a);
    //$a = $nickname['result'];
    //print_r($a);
?>
            <div id="informationBox">
                <div class="record-title">
                    <div class="title">个人资料</div>
                </div>
                <div class="btn btn-success pull-right edit-info" id="editInformation">
                    <span class="glyphicon glyphicon-edit"><a href='./self.php?id=8'>取消修改</a></span>
                </div>
                
                <div class="container-fluid self-info">
                    <div class="row">
                      <form>
                        <div class="col-xs-3">
                            <img src=<?php echo $result->headImg;?> id="self-logo" style="width: 100%;">
                             <div style="width:100px; margin: 0 auto;">
                                <input type="file" name="file-pic" id="file_pic"/>
                                <input type="text" name="headImg" id="self_imgurl" style="display:none"/>
                            </div>
                        </div>
                        <div class="col-xs-9 user-information">
                             <div class="row">
                                 <div class="col-xs-3">
                                     <span >昵称:</span>
                                     <span class="red-mark">*</span>

                                 </div>
                                 <div class="col-xs-6">
                                     <span class="user-name"><?php echo $nickname ?></span>
                                 </div>
                                 <div class="col-xs-2">
                                     <span class="green-tip"><img src="./img/others_01.png"> </span>
                                     <span class="text-green">已认证</span>
                                 </div>
                             </div>
                            <div class="row">
                                <div class="col-xs-3">
                                    <span >真实姓名:</span>
                                    <span class="red-mark">*</span>

                                </div>
                                <div class="col-xs-6">
                                    <span class="user-name">*研</span>
                                </div>
                                <div class="col-xs-2">
                                    <span class="green-tip"><img src="./img/others_01.png"> </span>
                                    <span class="text-green">已认证</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-3">
                                    <span >身份证号码:</span>
                                    <span class="red-mark">*</span>

                                </div>
                                <div class="col-xs-6">
                                    <span class="user-identity">139***************</span>
                                </div>
                                <div class="col-xs-2">
                                    <span class="green-tip"><img src="./img/others_01.png"> </span>
                                    <span class="text-green">已认证</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-3">

                                    <span>手机号码:</span>
                                    <span class="red-mark">*</span>

                                </div>
                                <div class="col-xs-6">
                                    <span class="user-phone"><?php echo $mobilephone?></span>
                                </div>
                                <div class="col-xs-2">
                                    <span class="green-tip"><img src="./img/others_01.png"> </span>
                                    <span class="text-green">已认证</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-3">

                                    <span>邮箱地址:</span>
                                    <span class="red-mark">*</span>

                                </div>
                                <div class="col-xs-6">
                                    <span class="user-email"><?php echo $email; ?></span>
                                </div>
                                <div class="col-xs-2">
                                    <span class="green-tip"><img src="./img/others_01.png"> </span>
                                    <span class="text-green">已认证</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-3">

                                    <span>性别：</span>


                                </div>
                                <div class="col-xs-6">
                                    <span class="user-sex">女</span>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-xs-3">

                                    <span>出生日期：</span>


                                </div>
                                <div class="col-xs-6">
                                    <span class="user-borntime">20141111</span>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-xs-3">
                                    <div style="height:5px;"></div>
                                    <span>最高学历：</span>
                                </div>
                                 <div class="col-xs-3">
                                    <input name="degree" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-3">
                                     <div style="height:5px;"></div>
                                    <span>毕业院校：</span>
                                </div>
                                  <div class="col-xs-3">
                               <!--     <select class="form-control">
                                      <option>1</option>
                                      <option>2</option>
                                      <option>3</option>
                                      <option>4</option>
                                      <option>5</option>
                                    </select> -->
                                  <input name="school" class='form-control' type="text" >
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-3">
                                    <div style="height:5px;"></div>
                                    <span>居住地区：</span>
                                </div>
                                 <div class="col-xs-4">
                                    <input name="address" type="text" class='form-control'/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-3">
                                     <div style="height:5px;"></div>
                                    <span>公司行业：</span>
                                </div>

                                 <div class="col-xs-3">
                                  <input name="companyField" class="form-control">
                                </div>

                                 
                            </div>
                            <div class="row">
                                <div class="col-xs-3">
                                     <div style="height:5px;"></div>
                                    <span>公司规模：</span>
                                </div>

                                  <div class="col-xs-3">
                                    <input name="companySize" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-3">
                                    <div style="height:5px;"></div>
                                    <span>职位：</span>
                                </div>

                                <div class="col-xs-3">
                                    <input name="position" type="text" class='form-control'/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-3">
                                    <div style="height:5px;"></div>
                                    <span>月收入：</span>
                                </div>

                                <div class="col-xs-3">
                                    <input name="salary" type="text" class='form-control'/>
                                </div>
                            </div>

                                    <input name="token" type="text" style="display:none" value="<?PHP echo $_SESSION['token'];?>" >
                            <div class='row'>
                                <div style="height:20px;"></div>
                                <div class='col-xs-6'>
                                    <a  class='btn btn-success edit-self-info' style="width:200px; float:right; margin-bottom:20px;" >保存</a>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>

            <script>
            $(".edit-self-info").click(function(){

                  var data = $("form").serialize();
                  alert(data);
                  $.ajax({
                  cache: false,
                  type:"POST",
                  url:"./action/do_edit_selfinfo.php",
                  data:data,
                  success:function(data){
                      alert(data);
                      var dataobj = eval("("+data+")");
                      if(dataobj.code == '10006'){
                          $("#login .error-tip").html('用户名不存在');
                      }else if(dataobj.code == '10005'){
                          $("#login .error-tip").html('密码错误');
                      }
                      else if(dataobj.code == "0")
                      {

                          toastr.success("修改成功");
                          $("#login").fadeOut();

                          setTimeout(function(){window.location.href="./self.php?id=8";},1000);



                      }
                  },
                  error:function(){
                      alert("修改失败");
                  }
              })
            });
            </script>