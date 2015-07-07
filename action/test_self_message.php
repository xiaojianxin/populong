<?PHP
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
$status = $_GET['status'];

if ($status == 1) {
   $token = '"'.$_GET['token'].'"';
    $url = "123.57.74.122:55555/logic/message";
    $json = '{
    "method": "get_systemMessage",
    "token": '.$token.'
}';
//echo $json;
}elseif($status == 0){
    $url = "123.57.74.122:8088/logic/message";
    $json = '{
    "method": "get_message",
    "token": '.$token.'
}';
}





$result_arr = request_by_curl($url,$json);
//$result_arr = json_decode($result_arr,true);
if(!empty($result_arr))
{

//    $result_arr = json_decode($result_arr["result"],true);
//	foreach($result_arr as $result)
//	{
//		print_r($result);
//	}
    print_r($result_arr);
    exit();
}
else
{
    print_r($result_arr);
}
?>