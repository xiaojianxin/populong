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

$url = "123.57.74.122:8088/logic/invest";
$json = '{
    "method": "invest_transfer",
    "account": 6,
    "invsID": 1,
    "telephone": 121222,
    "bankCardID": "sdfadfad"
}';
		
$json = request_by_curl($url,$json);
echo $json
?>

