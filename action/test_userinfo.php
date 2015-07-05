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
$token = '"'.$_GET['token'].'"';

$url = "123.57.74.122:8088/logic/Userinfo";
$json = '{"method":"userinfo","token":'.$token.'}';
print_r($json);

$result_arr = request_by_curl($url,$json);
//$result_arr = json_decode($json,true);
if(!empty($result_arr))
{
	
	print_r($result_arr);
    exit();
}
else
{
    print_r($result_arr);
}
?>

