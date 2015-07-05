<?PHP
//session_start();
$account = $_POST["inputAdminName"];
$password = md5($_POST["inputAdminPassword"]);
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

$url = "123.57.74.122:55555/logic/admin";
$json = json_encode(array('method'=>'login','nickname'=>$account,'password'=>$password));
$json = request_by_curl($url,$json);
//var_dump($json);
$result = json_decode($json,true);
if(!empty($result) && $result['code'] == "0")
{   
    $_SESSION['admin'] = $result['nickname'];
    $_SESSION['admin_token'] = $result['token'];
	// echo "<script language='javascript' type='text/javascript'>";
    //    echo "window.location.href='$url'";
    //    echo "</script>";
    //echo $url;
    print_r($json);
    exit();
}
else
{
    echo $json;
}
?>