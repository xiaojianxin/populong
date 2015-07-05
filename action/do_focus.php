<?PHP
$idolID = '"'.$_POST['idolId'].'"';
$token = '"'.$_POST['token'].'"';
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

$url = "123.57.75.122:8080/logic/fans";
$json = '{
  "method": "fans",
  "token": '.$token.',
  "idolID": '.$idolID.'

}';
//echo $json;
$json = request_by_curl($url,$json);
$result = json_decode($json,true);
echo $json;
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