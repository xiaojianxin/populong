<?PHP
$userId = $_POST['userId'];
$token = '"'.$_POST['token'].'"';
$content = '"'.$_POST['content'].'"';
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
$json = '{
  "method": "send_message",
  "content": '.$content.',
  "toUserId": '.$userId.',
  "token": '.$token.'
}';
//echo $json;
$json = request_by_curl($url,$json);
$result = json_decode($json,true);
if(!empty($result) && $result['code'] == "0")
{
    echo $json;
    exit();
}
else
{
    echo $json;
}
?>