<?PHP
$projId = $_POST['projId'];
$token = '"'.$_POST['token'].'"';
$commentId = $_POST['commentId'];
$content = '"'.$_POST['content'].'"';
$id = $_POST['id'];
if($id==0){
  $ctype = 0;
}else{
  $ctype = 1;
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

$url = "123.57.74.122:8088/logic/project";
$json = '{
  "method": "add_project_comment",
  "projectId": '.$projId.',
  "content": '.$content.',
  "ctype": '.$ctype.',
  "commentId": '.$commentId.',
  "token": '.$token.'
}';
//echo $json;
$json = request_by_curl($url,$json);
$result = json_decode($json,true);
if(!empty($result) && $result['code'] == "0")
{
    echo $json;
    exit();
}
else
{
    echo $json;
}
?>