<?PHP
session_start();
$projName = $_POST["inputProjName"];
$thumbPho = 0;
$projType = $_POST["inputProjType"];
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
$rewordClassCode = 0;//未定义$_POST["inputRewordClassCode"];
$amountPer = $_POST["inputAmountPer"];
$quota = $_POST["inputQuota"];
$explainPic = $_POST["inputItemRewardsPho1"];//等待
$explainText = $_POST["inputExplainText"];
$rewardTime = $_POST["inputRewardTime"];


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
        'token' => $_SESSION["token"],
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
echo $projPho."<br>";
echo $json;
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

