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

$url = "123.57.74.122/logic/Query";
$json = json_encode(array('method'=>'query_proj'));
$json = request_by_curl($url,$json);
$result = json_decode($json,true);
if(!empty($result))
{
	print_r($result["result"]);
    exit();
}
else
{
    print_r($result);
}
?>

