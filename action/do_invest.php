<?PHP
$token = 0;
$projectID = $_POST["ProjectID"];
$ordID = $_POST["OrdID"];
$investNum = $_POST["InvestNum"];
$investAmount = 0;
$rewardCode = $_POST["rewardCode"];
$address = $_POST["inputAddress"];
$serviceCode = $_POST["inputServiceCode"];

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

$url = "123.57.74.122/logic/invest";
$json = json_encode(array('method'=>'invest',
        'token' => $token,
        'projectID'=>$projName,
        'ordID'=>$projType,
		'investNum'=>$cityCode,
		'investAmount'=>$fieldCode,
		'rewardCode'=>$planAmount,
		'address'=>$projAbst,
		'serviceCode'=>$projIntro,
		));
		
$json = request_by_curl($url,$json);
$result = json_decode($json,true);

if(isset($result)&&$result['code'] == 0)
{
	$url = "../regist_2.html";  
    echo "<script language='javascript' type='text/javascript'>";  
    echo "window.location.href='$url'";  
    echo "</script>";  
	exit();
}
else
{
	print_r($result);
}
?>

