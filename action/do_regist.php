<?PHP
session_start();
echo $_POST["isInitiator"];
if($_POST["isInitiator"] == '1')
    $role = "2"; //initiator
elseif ($_POST["isInvestor"] == '1')
    $role = "1"; //investor
else
    $role = "0";
$nickname = $_POST["inputNickname"];
$password = md5($_POST["inputPassword"]);
$phoCode = $_POST["inputPhoCode"];
$checknum = $_POST['inputchecknum'];
//$verification = json_encode($_SESSION['verification']);
if ($_SESSION["verification"] == md5($checknum)) {
    $email = $_POST["inputEmail"];
    $mobilePhone = $_POST["inputMobilePhone"];
    $msgCode = $_POST["inputMsgCode"];
    $realName = $_POST["inputRealName"];
    $IdCard = $_POST["inputIdCard"];

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
    $url = "123.57.74.122:55555/logic/registe";
    $json = json_encode(array('method'=>'registe',
            'role'=>$role,
            'nickname'=>$nickname,
            'password'=>$password,
            'phoCode'=>$phoCode,
            'email'=>$email,
            'mobilePhone'=>$mobilePhone,
            'msgCode'=>$msgCode,
            'realName'=>$realName,
            'IDCard'=>$IdCard
            ));
            
    $json = request_by_curl($url,$json);
    $result = json_decode($json,true);
    if(isset($result)&&$result['code'] == 0)
    {
        //$url = "././success.php";  
    //    echo "<script language='javascript' type='text/javascript'>";
    //    echo "window.location.href='$url'";
    //    echo "</script>";
        echo $json;
        exit();
    }
    else
    {
        echo $json;
    }
}else{
    $result = 0;
    print_r($result);
}


?>

