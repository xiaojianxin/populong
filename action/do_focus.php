<?PHP
//session_start();
$token = $_POST["token"];
$proId = $_POST["idolId"];
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

$url = "123.57.74.122:55555/logic/fans";
$json = json_encode(array('method'=>'fans','idolID'=>$proId,'token'=>$token));
//echo $json;
$json = request_by_curl($url,$json);
$result = json_decode($json,true);
if(!empty($result) && $result['code'] == "0")
{  
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