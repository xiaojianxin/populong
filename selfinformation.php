<?PHP
//session_start();
function request_by_curl($remote_server, $json_string)
{
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$remote_server);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$json_string);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
}
$token = '"'.$_SESSION['token'].'"';

$url = "123.57.74.122:8088/logic/Userinfo";
$json = '{"method":"userinfo","token":'.$token.'}';
//print_r($json);

$result_arr = request_by_curl($url,$json);
$result_arr = json_decode($result_arr,true);
$result = $result_arr['result'];
$result = $result[0];
//var_dump($result);

?>
            <div id="informationBox">
                <div class="record-title">
                    <div class="title">个人资料</div>
                </div>
                <div class="btn btn-success pull-right edit-info" id="editInformation">
                    <span class="glyphicon glyphicon-edit"><a  href="./self.php?id=14">修改信息</a></span>
                </div>
                
                <div class="container-fluid self-info">
                    <div class="row">
                        <div class="col-xs-3">
                            <img   src=<?php echo $result['headImg'];?> style="width:100px;height:100px;">
                           
                        </div>
                        <div class="col-xs-9 user-information">
                             <div class="row">
                                 <div class="col-xs-3">
                                     <span >昵称:</span>
                                     <span class="red-mark">*</span>

                                 </div>
                                 <div class="col-xs-6">
                                     <span class="user-name"><?php echo $result['nickname'] ?></span>
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
                                    <span class="user-name"><?php echo $result['realName'] ?></span>
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
                                    <span class="user-identity"><?php echo $result['IDCard'] ?></span>
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
                                    <span class="user-phone"><?php echo $result['mobilephone'] ?></span>
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
                                    <span class="user-email"><?php echo $result['email'] ?></span>
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
                                    <span>最高学历：</span>
                                </div>
                                 <div class="col-xs-6">
                                    <span class="user-email"><?php echo $result['degree'] ?></span>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-xs-3">
                                    <span>毕业院校：</span>
                                </div>
                                 <div class="col-xs-6">
                                    <span class="user-borntime"><?php echo $result['school'] ?></span>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-xs-3">
                                    <span>居住地区：</span>
                                </div>
                                 <div class="col-xs-6">
                                    <span class="user-email"><?php echo $result['address'] ?></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-3">
                                    <span>公司行业：</span>
                                </div>
                                <div class="col-xs-6">
                                    <span class="user-email"><?php echo $result['companyFeild'] ?></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-3">
                                    <span>公司规模：</span>
                                </div>
                                <div class="col-xs-6">
                                    <span class="user-email"><?php echo $result['companySize'] ?></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-3">
                                    <span>职位：</span>
                                </div>
                                 <div class="col-xs-6">
                                    <span class="user-email"><?php echo $result['position'] ?></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-3">
                                    <span>月收入：</span>
                                </div>
                                 <div class="col-xs-6">
                                    <span class="user-email"><?php echo $result['monthlyIncome'] ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
