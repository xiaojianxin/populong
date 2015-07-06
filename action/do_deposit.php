<?PHP
//session_start();

$openAcctId = $_POST["bankcard"];
$token = $_POST['token'];
$rechgAmount = $_POST['rechgAmount'];

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

$url = "123.57.74.122:9999/logic/recharge";

    $json = json_encode(array('method'=>'recharge','token'=>$token,'openAcctId'=>$openAcctId,'rechgAmount'=>$rechgAmount));
//echo $json;
$json = request_by_curl($url,$json);

$result = json_decode($json,true);
if(!empty($result) && $result['code'] == "0")
{   
	// echo "<script language='javascript' type='text/javascript'>";
    //    echo "window.location.href='$url'";
    //    echo "</script>";
    //echo $url;
    print_r($json);
    exit();
}
else
{
    echo $json;
}
?>