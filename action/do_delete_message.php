<?PHP
//session_start();
$commentId = $_POST["messageId"];
$token= $_POST["token"];
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

$url = "123.57.74.122:8088/logic/message";
$json = json_encode(array('method'=>'delete_comment','commentId'=>$commentId,'token'=>$token));
//echo($json);
$json = request_by_curl($url,$json);
//var_dump($json);
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