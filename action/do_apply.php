<?PHP
session_start();
$projName = $_POST["inputProjName"];
$thumbPho = 0;
$projType = 1;//$_POST["inputProjType"];
$cityCode = 0;//未定义$_POST["inputCityCode"];
$fieldCode = 0;//未定义
$planAmount = $_POST["inputPlanAmount"];
$projAbst = $_POST["inputProjAbst"];
$projIntro = $_POST["inputProjIntro"];
$projPho = $_POST["inputProjPho"];
$countryCode = 0;//未定义
$provinceCode = 0;//未定义$_POST["inputProvinceCode"];
$vadioLink = $_POST["inputVadioLink"];
$creditRanting = 0;//未定义
$raiseDays = $_POST["inputRaiseDays"];
$charge = $planAmount*0.02 + 200*($_POST["isVadio"] + $_POST["isPush"] + $_POST["isFieldCoun"] +$_POST["isInvCoun"]);
$projAuthy = $_POST["isVadio"] + ($_POST["isPush"]<<1) + ($_POST["isFieldCoun"]<<2) + ($_POST["isInvCoun"]<<3);


if($_POST["inputAmountPer0"] != NULL)
{
	echo "11";
	$rewordClassCode[0] = 1;
	$amountPer[0] = $_POST["inputAmountPer0"]; 
    $explainPic[0] = $_POST["inputFundRewardsPho0"];//等待
	$quota[0] = 0;//无
    $explainText[0] = $_POST["inputExplainText0"];
    $rewardTime[0] = $_POST["inputRewardTime0"];
}
else
{
	for($i = 1; $i< 5; $i++)
	{
		echo "00";
		$rewordClassCode[$i] = 2;
		$amountPer[$i-1] = $_POST["inputAmountPer".$i]; 
  		$quota[$i-1] = $_POST["inputQuota".$i];
    	$explainPic[$i-1] = $_POST["inputItemRewardsPho".$i];//等待
    	$explainText[$i-1] = $_POST["inputExplainText".$i];
    	$rewardTime[$i-1] = $_POST["inputRewardTime".$i];
	}
}

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
$url = "123.57.74.122/logic/apply";
$json = json_encode(array(
		'method'=>'apply',
        'projName'=>$projName,
		'thumbPho'=>$thumbPho,
		'projPho'=>$projPho,
        'projType'=>$projType,
		'cityCode'=>$cityCode,
		'fieldCode'=>$fieldCode,
		'planAmount'=>$planAmount,
		'projAbst'=>$projAbst,
		'projIntro'=>$projIntro,
		'planAmount'=>$planAmount,
		'countryCode'=>$countryCode,
		'provinceCode'=>$provinceCode,
		'vadioLink'=>$vadioLink,
		'creditRanting'=>$creditRanting,
		'raiseDays'=>$raiseDays,
		'charge'=>$charge,
		'projAuthy'=>$projAuthy,
		'rewordClassCode'=>$rewordClassCode,
		'amountPer'=>$amountPer,
		'quota'=>$quota,
		'explainPic'=>$explainPic,
		'explainText'=>$explainText,
		'rewardTime'=>$rewardTime
		));
		
$json = request_by_curl($url,$json);
//echo $projPho."<br>";
//echo $json;
$result = json_decode($json,true);

if(isset($result)&&$result['code'] == 0)
{
	$url = "../start-success.php";
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

