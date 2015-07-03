<?PHP
session_start();
$token = '"'.$_SESSION['token'].'"'; 
$degree = $_POST['degree']; 
$school = $_POST['school']; 
$address = $_POST['address']; 
$companyFeild = $_POST['companyField'];
$companySize = $_POST["companySize"];
$position = $_POST['position'];
$monthlyIncome = $_POST['salary'];

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

$url = "123.57.74.122:55555/logic/userinfo";
$json = json_encode(array('method'=>'editUserinfo','token'=>'3a9219e6-2162-11e5-b9d4-00163e001944','degree'=>$degree,'school'=>$school,'address'=>$address,'companyFeild'=>$companyFeild,'companySize'=>$companySize,'position'=>$position,'monthlyIncome'=>$monthlyIncome));
var_dump($json);
$json = request_by_curl($url,$json);

$result = json_decode($json,true);
if(!empty($result) && $result['code'] == "0")
{   
    print_r($json);
    exit();
}
else
{
    echo $json;
}
?>