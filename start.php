<?PHP
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
    <title>发起项目</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"  href="./css/reset.css"/>
   <link rel="stylesheet"  href="./css/uploadify.css"/>
    <link rel="stylesheet" href="./css/start.css"/>
    <script type="text/javascript" src="./js/jquery-1.10.1.js"></script>
 <script type="text/javascript" src="./js/start.js"></script>
    <script type="text/javascript" src="./bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="./js/jquery.uploadify.min.js"></script>

</head>
<body>
<?php require('./nav.php') ?>
	<div id="container" style="background-color: #eeeff3;">
        <div class="container">
            <div class="row startpic">
                <img src="./img/start_01.png">
            </div>
            <div class="row" id="inputarea">
                <form action="" method='post' enctype="multipart/form-data">
                    <div class="col-xs-8">
                        <div class="row">
                            <div class="col-xs-3">
                                <span>项目名称：</span>
                            </div>
                            <div class="col-xs-9">
                                <input class="form-control" placeholder="不超过20个字"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-3">
                                <span>筹集资金：</span>
                            </div>
                            <div class="col-xs-9">
                                <span><input class="form-control" placeholder="不少于10000" id="gain_num"/></span>

                                <span class="text">元</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-3">
                                <span>筹集天数：</span>
                            </div>
                            <div class="col-xs-9">
                                <input class="form-control" placeholder="不超过20个字"/>
                                <span class="text">天</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-3">
                                <span>项目地点：</span>
                            </div>
                            <div class="col-xs-9 two-input" id="selectCity">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-3">
                                <span>项目封面：</span>
                            </div>
                            <div class="col-xs-9">
                                <div class="row">
                                    <div class="col-xs-4 ">

                                        <input type="file" name="file-pic" id="file_pic"/>
                                    </div>
                                    <div class="col-xs-8">
                                        <span class="text">支持jpg,png格式图片，图片大小不超过2M</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-3">
                                <span>路演视频：</span>
                            </div>
                            <div class="col-xs-9">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="btn btn-default">路演视频</div>
                                    </div>
                                    <div class="col-xs-8">
                                        <input class="form-control" placeholder="视频网址"/>
                                        <span class="text">(可选)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-3">
                                <span>项目简介：</span>
                            </div>
                            <div class="col-xs-9">
                                <input class="form-control" placeholder="不超过20个字"/>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-3">
                                <span>详细介绍：</span>
                            </div>
                            <div class="col-xs-9">
                                <textarea id="editor1"></textarea>
                            </div>
                        </div>

                    </div>
                    <div class="col-xs-4">
                        <div class="thumbnail">
                            <a href="#"><img src="./img/fan_06.png" id="showUploadImg"></a>
                        </div>
                        <div class="text-center">预览</div>
                    </div>
                    <div class="row">
                        <div class="col-xs-3"></div>
                        <div class="col-xs-9">

                            <div class="text-left"><input type="checkbox">我已阅读并同意《某某条款》</div>
                           <a href="start2.php"> <div type='submit' class="btn btn-success" id="nextstep"> 下一步</div></a>
                        </div>
                     </div>

            </form>

        </div>
    </div>

<script type="text/javascript" src="./js/tinymce.min.js"></script>
<script type="text/javascript">
    tinymce.init({
        selector: "textarea",
        theme: "modern",
        plugins: [
            "advlist autolink lists link image charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars code fullscreen",
            "insertdatetime media nonbreaking save table contextmenu directionality",
            "emoticons template paste textcolor colorpicker textpattern"
        ],
        toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
        toolbar2: "print preview media | forecolor backcolor emoticons",
        image_advtab: true,
        templates: [
            {title: 'Test template 1', content: 'Test 1'},
            {title: 'Test template 2', content: 'Test 2'}
        ],
        language:'zh_CN'
//        content = tinymce.get('editor1').getContent({format: 'raw'});
    });

    $(function() {
        $('#file_pic').uploadify({

            'uploader'  : './uploadify.swf',   //指定上传控件的主体文件，默认‘uploader.swf’
            'script'    : './Upload.php',       //指定服务器端上传处理文件，默认‘upload.php’
            'auto'      : true,               //选定文件后是否自动上传，默认false
            'folder'    : '/userphoto'   ,     //要上传到的服务器路径，
            'multi'     : false,               //是否允许同时上传多文件，默认false
            'fileExt'   : '*.jpg;*.bmp;*.png;*.gif',      //控制可上传文件的扩展名，启用本项时需同时声明fileDesc
            fileSizeLimit:'2MB',
            'onComplete': function(event,queueID,fileObj,response,data) {
                $('#showUploadImg').attr("src","<%=basePath%>userphoto/"+response);//上传图片的服务器地址
                $('#showUploadImg').show();
                $('#photo').attr("value",response);
            },
            'onError'          : function(event, queueID, fileObj)
            {
                alert("文件:" + fileObj.name + " 上传失败");
            }
        });

    });
    var obj=document.getElementById("selectCity");
    var city=new LightManAddressTree;
    city.selectshow(obj,0);
</script>


</body>
</html>