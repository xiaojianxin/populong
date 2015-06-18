<?PHP
$account = $_POST["inputEmail"];
$password = md5($_POST["inputPassword"]);
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

$url = "123.57.74.122/logic/login";
$json = json_encode(array('method'=>'login','account'=>$account,'password'=>$password));
$form = "method=".$account."&password=".$password;
$json = request_by_curl($url,$json);
$result = json_decode($json,true);
if(!empty($result) && $result['code'] == "0")
{
    $_SESSION["token"] = $result['token'];
    $_SESSION["nickName"] = $result['nickName'];
	if(isset($_GET["from"]))
	{
    	$url = "/version_0.2/".$_GET["from"].".php";
	}
	else
	{
		$url = "/version_0.2/index.php";
	}
	echo "<script language='javascript' type='text/javascript'>";
    echo "window.location.href='$url'";
    echo "</script>";
    exit();
}
else
{
	echo "error<br>";
    print_r($json);
}
?>

