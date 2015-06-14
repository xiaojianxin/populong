<div id="container" style="background-color: #eeeff3;">
        <div class="container">
            <div class="row startpic">
                <img src="./img/start_01.png">
            </div>
            <div class="row" id="inputarea">
                    <div class="col-xs-8">
                        <div class="row">
                            <div class="col-xs-3">
                                <span>项目名称：</span>
                            </div>
                            <div class="col-xs-9">
                                <input name="inputProjName" class="form-control" placeholder="不超过20个字"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-3">
                                <span>模块选择：</span>
                            </div>
                            <div class="col-xs-9">
                                <a class="btn btn-success select-ban" id="1"> 青年筑梦</a>
                                <a class="btn btn-success select-ban" id="2" > 我做你投</a>
                                <a class="btn btn-success select-ban" id="3"> 与你同行</a>
                            </div>
                        </div>
                        <div style="height:20px;">
                            <input type="radio" value="1" id="checkboxInput1" name="inputProjType" style="display: none;"/>
                            <input type="radio" value="1" id="checkboxInput2" name="inputProjType" style="display: none;"/>
                            <input type="radio" value="1" id="checkboxInput3" name="inputProjType" style="display: none;"/>
                        </div>
                        <div class="row">
                            <div class="col-xs-3">
                                <span>筹集资金：</span>
                            </div>
                            <div class="col-xs-9">
                                <span><input class="form-control" placeholder="不少于10000" name="inputPlanAmount" id="gain_num"/></span>

                                <span class="text">元</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-3">
                                <span>筹集天数：</span>
                            </div>
                            <div class="col-xs-9">
                                <input class="form-control" name="inputRaiseDays" placeholder="不超过20个字"/>
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

                                        <input type="file" name="inputProjPho" id="file_pic"/>
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
                                        <input class="form-control" name="inputVadioLink" placeholder="视频网址"/>
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
                                <input class="form-control" name="inputProjAbst" placeholder="不超过20个字"/>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-3">
                                <span>详细介绍：</span>
                            </div>
                            <div class="col-xs-9">
                                <textarea name="inputProjIntro" id="editor1"></textarea>
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
                            <div class="btn btn-success" id="nextstep"> 下一步</div>
                        </div>
                     </div>

        </div>
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

           
            'swf'  : 'uploadify.swf',   //指定上传控件的主体文件，默认‘uploader.swf’
            'uploader'    : '/file',       //指定服务器端上传处理文件，默认‘upload.php’
            'auto'      : true,               //选定文件后是否自动上传，默认false
            'folder'    : '/userphoto'   ,     //要上传到的服务器路径，
            'multi'     : false,               //是否允许同时上传多文件，默认false
            'fileExt'   : '*.jpg;*.bmp;*.png;*.gif',      //控制可上传文件的扩展名，启用本项时需同时声明fileDesc
            fileSizeLimit:'2MB',
            'fileObjName': 'file',
            'onUploadSuccess': function(file, data, response) {
                $('#showUploadImg').attr("src",data);//上传图片的服务器地址
                $('#showUploadImg').show();
                $('#photo').attr("value",response);
            },
            'onError'          : function(event, queueID, fileObj)
            {
                alert("文件:" + fileObj.name + " 上传失败");
            }
        });

        $('.select-ban').click(function(){
            var id = $(this).attr('id');

            return $('#checkboxInput'+id).click();
        });

    });
    var obj=document.getElementById("selectCity");
    var city=new LightManAddressTree;
    city.selectshow(obj,0);
</script>
