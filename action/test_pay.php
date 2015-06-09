<?PHP
session_start();
if(isset($_POST["MerId"])){
echo $_POST["MerId"]."<br>";
echo $_POST["CmdId"]."<br>";
echo $_POST["RespCode"]."<br>";
echo $_POST["TrxId"]."<br>";
echo $_POST["OrdAmt"]."<br>";
echo $_POST["CurCode"]."<br>";
echo $_POST["OrdId"]."<br>";
echo $_POST["RetType"]."<br>";
echo $_POST["GateId"]."<br>";
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
$url = "123.57.74.122:8080/pnr/pay";

$params  ="Version=10&CmdId=Buy&MerId=510783&OrdID=666666090020&OrdAmt=123.55&CurCode=RMB&RetUrl=http://123.57.74.122:8888/version_0.2/action/test_pay.php&BgRetUrl=http://123.57.74.122:8080/pnr/buy";

$result = request_by_curl($url,$params);
echo $result."<br>";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<form method="post" action="https://test.chinapnr.com/gar/RecvMerchant.do">
<input type="hidden" name="Version" value="10" />
<input type="hidden" name="CmdId" value="Buy" />
<input type="hidden" name="MerId" value="510783" />
<input type="hidden" name="OrdId" value="666666090020" />
<input type="input"  name="OrdAmt" value="123.55" />
<input type="hidden" name="CurCode" value="RMB" />
<input type="hidden" name="RetUrl" value="http://123.57.74.122:8888/version_0.2/action/test_pay.php" />
<input type="hidden" name="BgRetUrl" value="http://123.57.74.122:8080/pnr/buy" />
<input type="hidden" name="ChkValue" value=<?PHP echo $result ?> />
<input type="submit" value="支付"/>
</form>
<body>
</body>
</html>
