<img src="http://123.57.74.122:8080/mongo/55785272cec4de3cb081b0ec" />
<form enctype="multipart/form-data" action="http://123.57.74.122:8888/file", method="post">
<input type="file" name="file"/>
<input type="submit" />
</form>

<?PHP

/*function request_by_curl($remote_server, $json_string)
{
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$remote_server);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$json_string);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
}

echo "yes<br>";

$fp = fopen($_FILES["myFile"]["tmp_name"], 'rb');
$buf = addslashes(fread($fp,$_FILES["myFile"]["size"]));

$url = "123.57.74.122/logic/mongostore";
$json = '{"token":"8fcf736c-0dd6-11e5-9490-00163e001944", "method":"mongostore","mime":"'.$_FILES["myFile"]["type"].'","data":'.$buf.'}';
$result = request_by_curl($url,$json);
echo $result."<br>";
*/
?>