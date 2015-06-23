<?PHP
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

$url = "123.57.74.122/logic/Query";
//$json = '{"method":"query_proj_for_self", "start":'.$_GET['start'].', "end":'.$_GET['end'].'}';

//$json2 = '{"method":"query_due_proj", "start":'.$_GET['start'].', "end":'.$_GET['end'].'}';

$json3 = '{"method":"query_proj_for_home", "part":"'.$_GET['part'].'"}';//part=due指即将到期，part=hotInvs指热门投资，part=hotProj指热门项目

//$json4 = '{"method":"query_hot_proj", "start":'.$_GET['start'].', "end":'.$_GET['end'].'}';

//$json5 = '{"method":"query_hotInvs_proj", "start":'.$_GET['start'].', "end":'.$_GET['end'].'}';


$result_arr = request_by_curl($url,$json3);
//$result_arr = json_decode($json,true);
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

