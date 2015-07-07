<?PHP
//session_start();
$status = $_POST['inputCardType'];
$openAcctId = $_POST["bankcard"];
$openBankPhone = $_POST['mobilephone'];
$openBankId = $_POST['bank'];
$token = $_POST['token'];
$openProvId = $_POST['a_tree1_0'];
if ($openProvId > 4) {
    if($openProvId==32){
            $openAreaId = 5;
        }else if ($openProvId==33) {
            $openAreaId = 6;
        }else{
            $openAreaId = $_POST["a_tree1_1"];
        }   
}else{
    $openAreaId = $openProvId;
}


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

$url = "123.57.74.122:9999/logic/bankcard";
if ($status== 1) {
    $json = json_encode(array('method'=>'whBindCard','token'=>$token,'openAcctId'=>$openAcctId,'openBankPhone'=>$openBankPhone,'openBankId'=>$openBankId));
    //var_dump($json);
}elseif ($status== 2) {
      $json = json_encode(array('method'=>'sdpBindCard','token'=>$token,'openAcctId'=>$openAcctId,'openProvId'=>$openProvId,'openAreaId'=>$openAreaId,'openBankId'=>$openBankId));
}
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