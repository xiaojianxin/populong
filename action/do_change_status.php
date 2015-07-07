<?PHP
//session_start();
$projID = $_POST["projId"];
$token = $_POST['token'];
$newStatus = $_POST['newStatus'];
$userID = $_POST['userID'];
$projName = $_POST['projName'];
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

$url = "123.57.74.122:55555/logic/admin";
if($newStatus==1){
$json = json_encode(array('method'=>'project_changeStatus','projID'=>$projID,'newStatus'=>"1",'token'=>$token));
}else if($newStatus == 2){
$json = json_encode(array('method'=>'send_systemMessage','projID'=>$projID,'userID'=>$userID,'projName'=>$projName,'messageType'=>"1",'token'=>$token));
}
$json = request_by_curl($url,$json);

$result = json_decode($json,true);
if(!empty($result) && $result['code'] == "0")
{   
    //$_SESSION['admin'] = $result['nickname'];
    //$_SESSION['admin_token'] = $result['token'];
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