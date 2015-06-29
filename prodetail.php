<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="布尔教育 http://www.itbool.com" />
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"  href="./css/reset.css"/>
    <link rel="stylesheet" type="text/css" href="./css/hotdetail.css">
    <script src="./js/jquery-1.10.1.js"></script>
    <script type="text/javascript" src="./js/swiper3.07.min.js"></script>
    <script type="text/javascript" src="./js/index.js"></script>
    <script src="./bootstrap/js/bootstrap.min.js"></script>
    <!--[if lt IE 9]>
    <script src="http://apps.bdimg.com/libs/html5shiv/3.7/html5shiv.min.js"></script>
    <script src="http://apps.bdimg.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <![endif]-->
</head>
<body>
<div id="prodetail">
    <div class="container" style="min-width: 720px;">
                    <?PHP
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
                    $json = '{"method": "project_payback", "projectId": 122}';

                    $result_arr = request_by_curl($url,$json);
                    $result_arr = json_decode($result_arr);
                    $result = $result_arr->result;
                    $result_content = $result;
                    $projIntro  = $result['0']->projIntro;
                    echo $projIntro;

                    ?>
         
    </div>

</div>
</body>
</html>