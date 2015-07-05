
<?PHP
session_start();
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
$url = "123.57.74.122:55555/logic/userinfo";
$json = '{
    "method": "myFans",
    "token": '.$token.'
}';



$result_arr = request_by_curl($url,$json);

//$result_arr = json_decode($json,true);
if(!empty($result_arr))
{

//    $result_arr = json_decode($result_arr["result"],true);
//  foreach($result_arr as $result)
//  {
//      print_r($result);
//  }
    print_r($result_arr);
    exit();
}
else
{
    print_r($result_arr);
}
?>
<div id="self_fans" class="container-fluid">
<div class="row">
    <div class="col-xs-4 fans_card">
        <div class="row">
            <div class="col-xs-4 fans_pic">
                <a href="./others.html" class="fans_pic">
                    <img class="fan" src="./img/fan_01.png" alt="" />
                </a>
            </div>

            <div class="col-xs-6 fans_description">
                <div class="fans_name">张三三</div>
                <div class="fans_introduction">某公司老总</div>
                <div class="fans_introduction">关注11|粉丝20万</div>
                                             <span class="btn btn-default foucus">
                                                <span class="dropdown-toggle" data-toggle="dropdown" >互相关注<span class="glyphicon glyphicon-chevron-up"></span></span>
                                                     <ul class="dropdown-menu">
                                                         <li>
                                                             <a href="#">取消关注</a>
                                                         </li>

                                                     </ul>
                                            </span>
            </div>
        </div>
    </div>

    <div class="col-xs-4 fans_card">
        <div class="row">
            <div class="col-xs-4 fans_pic">
                <a href="./others.html" class="fans_pic">
                    <img class="fan" src="./img/fan_01.png" alt="" />
                </a>
            </div>

            <div class="col-xs-6 fans_description">
                <div class="fans_name">张三三</div>
                <div class="fans_introduction">某公司老总</div>
                <div class="fans_introduction">关注11|粉丝20万</div>
                                            <span class="btn btn-default foucus">
                                            <span class="dropdown-toggle" data-toggle="dropdown" >互相关注<span class="glyphicon glyphicon-chevron-up"></span></span>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="#">取消关注</a>
                                                </li>

                                            </ul>
                                            </span>
            </div>
        </div>
    </div>
    <div class="col-xs-4 fans_card">
        <div class="row">
            <div class="col-xs-4 fans_pic">
                <a href="./others.html" class="fans_pic">
                    <img class="fan" src="./img/fan_01.png" alt="" />
                </a>
            </div>

            <div class="col-xs-6 fans_description">
                <div class="fans_name">张三三</div>
                <div class="fans_introduction">某公司老总</div>
                <div class="fans_introduction">关注11|粉丝20万</div>
                                            <span class="btn btn-default foucus">
                                            <span class="dropdown-toggle" data-toggle="dropdown" >互相关注<span class="glyphicon glyphicon-chevron-up"></span></span>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="#">取消关注</a>
                                                </li>

                                            </ul>
                                            </span>
            </div>
        </div>
    </div>

</div>
<div class="row">
    <div class="col-xs-4 fans_card">
        <div class="row">
            <div class="col-xs-4 fans_pic">
                <a href="./others.html" class="fans_pic">
                    <img class="fan" src="./img/fan_01.png" alt="" />
                </a>
            </div>

            <div class="col-xs-6 fans_description">
                <div class="fans_name">张三三</div>
                <div class="fans_introduction">某公司老总</div>
                <div class="fans_introduction">关注11|粉丝20万</div>
                                             <span class="btn btn-default foucus">
                                                <span class="dropdown-toggle" data-toggle="dropdown" >互相关注<span class="glyphicon glyphicon-chevron-up"></span></span>
                                                     <ul class="dropdown-menu">
                                                         <li>
                                                             <a href="#">取消关注</a>
                                                         </li>

                                                     </ul>
                                            </span>
            </div>
        </div>
    </div>

    <div class="col-xs-4 fans_card">
        <div class="row">
            <div class="col-xs-4 fans_pic">
                <a href="./others.html" class="fans_pic">
                    <img class="fan" src="./img/fan_01.png" alt="" />
                </a>
            </div>

            <div class="col-xs-6 fans_description">
                <div class="fans_name">张三三</div>
                <div class="fans_introduction">某公司老总</div>
                <div class="fans_introduction">关注11|粉丝20万</div>
                                            <span class="btn btn-default foucus">
                                            <span class="dropdown-toggle" data-toggle="dropdown" >互相关注<span class="glyphicon glyphicon-chevron-up"></span></span>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="#">取消关注</a>
                                                </li>

                                            </ul>
                                            </span>
            </div>
        </div>
    </div>
    <div class="col-xs-4 fans_card">
        <div class="row">
            <div class="col-xs-4 fans_pic">
                <a href="./others.html" class="fans_pic">
                    <img class="fan" src="./img/fan_01.png" alt="" />
                </a>
            </div>

            <div class="col-xs-6 fans_description">
                <div class="fans_name">张三三</div>
                <div class="fans_introduction">某公司老总</div>
                <div class="fans_introduction">关注11|粉丝20万</div>
                                            <span class="btn btn-default foucus">
                                            <span class="dropdown-toggle" data-toggle="dropdown" >互相关注<span class="glyphicon glyphicon-chevron-up"></span></span>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="#">取消关注</a>
                                                </li>

                                            </ul>
                                            </span>
            </div>
        </div>
    </div>

</div>

<div class="row">
    <div class="col-xs-4 fans_card">
        <div class="row">
            <div class="col-xs-4 fans_pic">
                <a href="./others.html" class="fans_pic">
                    <img class="fan" src="./img/fan_01.png" alt="" />
                </a>
            </div>

            <div class="col-xs-6 fans_description">
                <div class="fans_name">张三三</div>
                <div class="fans_introduction">某公司老总</div>
                <div class="fans_introduction">关注11|粉丝20万</div>
                                             <span class="btn btn-default foucus">
                                                <span class="dropdown-toggle" data-toggle="dropdown" >互相关注<span class="glyphicon glyphicon-chevron-up"></span></span>
                                                     <ul class="dropdown-menu">
                                                         <li>
                                                             <a href="#">取消关注</a>
                                                         </li>

                                                     </ul>
                                            </span>
            </div>
        </div>
    </div>

    <div class="col-xs-4 fans_card">
        <div class="row">
            <div class="col-xs-4 fans_pic">
                <a href="./others.html" class="fans_pic">
                    <img class="fan" src="./img/fan_01.png" alt="" />
                </a>
            </div>

            <div class="col-xs-6 fans_description">
                <div class="fans_name">张三三</div>
                <div class="fans_introduction">某公司老总</div>
                <div class="fans_introduction">关注11|粉丝20万</div>
                                            <span class="btn btn-default foucus">
                                            <span class="dropdown-toggle" data-toggle="dropdown" >互相关注<span class="glyphicon glyphicon-chevron-up"></span></span>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="#">取消关注</a>
                                                </li>

                                            </ul>
                                            </span>
            </div>
        </div>
    </div>
    <div class="col-xs-4 fans_card">
        <div class="row">
            <div class="col-xs-4 fans_pic">
                <a href="./others.html" class="fans_pic">
                    <img class="fan" src="./img/fan_01.png" alt="" />
                </a>
            </div>

            <div class="col-xs-6 fans_description">
                <div class="fans_name">张三三</div>
                <div class="fans_introduction">某公司老总</div>
                <div class="fans_introduction">关注11|粉丝20万</div>
                                            <span class="btn btn-default foucus">
                                            <span class="dropdown-toggle" data-toggle="dropdown" >互相关注<span class="glyphicon glyphicon-chevron-up"></span></span>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="#">取消关注</a>
                                                </li>

                                            </ul>
                                            </span>
            </div>
        </div>
    </div>

</div>

<div class="row">
    <div class="col-xs-4 fans_card">
        <div class="row">
            <div class="col-xs-4 fans_pic">
                <a href="./others.html" class="fans_pic">
                    <img class="fan" src="./img/fan_01.png" alt="" />
                </a>
            </div>

            <div class="col-xs-6 fans_description">
                <div class="fans_name">张三三</div>
                <div class="fans_introduction">某公司老总</div>
                <div class="fans_introduction">关注11|粉丝20万</div>
                                             <span class="btn btn-default foucus">
                                                <span class="dropdown-toggle" data-toggle="dropdown" >互相关注<span class="glyphicon glyphicon-chevron-up"></span></span>
                                                     <ul class="dropdown-menu">
                                                         <li>
                                                             <a href="#">取消关注</a>
                                                         </li>

                                                     </ul>
                                            </span>
            </div>
        </div>
    </div>

    <div class="col-xs-4 fans_card">
        <div class="row">
            <div class="col-xs-4 fans_pic">
                <a href="./others.html" class="fans_pic">
                    <img class="fan" src="./img/fan_01.png" alt="" />
                </a>
            </div>

            <div class="col-xs-6 fans_description">
                <div class="fans_name">张三三</div>
                <div class="fans_introduction">某公司老总</div>
                <div class="fans_introduction">关注11|粉丝20万</div>
                                            <span class="btn btn-default foucus">
                                            <span class="dropdown-toggle" data-toggle="dropdown" >互相关注<span class="glyphicon glyphicon-chevron-up"></span></span>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="#">取消关注</a>
                                                </li>

                                            </ul>
                                            </span>
            </div>
        </div>
    </div>
    <div class="col-xs-4 fans_card">
        <div class="row">
            <div class="col-xs-4 fans_pic">
                <a href="./others.html" class="fans_pic">
                    <img class="fan" src="./img/fan_01.png" alt="" />
                </a>
            </div>

            <div class="col-xs-6 fans_description">
                <div class="fans_name">张三三</div>
                <div class="fans_introduction">某公司老总</div>
                <div class="fans_introduction">关注11|粉丝20万</div>
                                            <span class="btn btn-default foucus">
                                            <span class="dropdown-toggle" data-toggle="dropdown" >互相关注<span class="glyphicon glyphicon-chevron-up"></span></span>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="#">取消关注</a>
                                                </li>

                                            </ul>
                                            </span>
            </div>
        </div>
    </div>

</div>
<div class="seemore"><a>查看更多</a></div>
</div>