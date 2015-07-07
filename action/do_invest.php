<?PHP
$token = $_POST['token'];
$projectID = $_POST["projId"];
//$ordID = $_POST["OrdID"];
$investNum = 1;
$investAmount = $_POST['investAmount'];
$rewardCode = $_POST["rewardCode"];
$address = $_POST["address"];
$serviceCode = $_POST["serviceCode"];

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

$url = "123.57.74.122:9999/logic/invest";
$json = json_encode(array('method'=>'invest',
        'token' => $token,
        'projectID'=>$projectID,
		'investNum'=>$investNum,
		'investAmount'=>$investAmount,
		'rewardCode'=>$rewardCode,
		'address'=>$address,
		'serviceCode'=>$serviceCode,
		));
		
$json = request_by_curl($url,$json);
$result = json_decode($json,true);

if(isset($result)&&$result['code'] == 0)
{
    $url = "123.57.74.122:9999/logic/invest";
    $json = json_encode(array('method'=>'succeed_invest',
        'ordId'=>$result['ordId']
        ));
    $json = request_by_curl($url,$json);
    print_r($json);
	exit();
}
else
{
	print_r($result);
}
?>

