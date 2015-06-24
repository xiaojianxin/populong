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
                            <div class="col-xs-6">
                                <input name="inputProjName" class="form-control" placeholder="不超过20个字" id="inputProjName"/>
                            </div>
                            <div class="col-xs-3">
                                <span class="error-tip" id="projNameError"></span>
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
                            <input type="radio" value="2" id="checkboxInput2" name="inputProjType" style="display: none;"/>
                            <input type="radio" value="3" id="checkboxInput3" name="inputProjType" style="display: none;"/>
                        </div>
                        <div class="row">
                            <div class="col-xs-3">
                                <span>筹集资金：</span>
                            </div>
                            <div class="col-xs-6">
                                <span><input class="form-control" placeholder="不少于10000" name="inputPlanAmount" id="gain_num"
                                             style="width: 90%;float: left;"/>
                                     <span class="text" style="float: left;margin-top: -3px;">元</span>
                                </span>

                            </div>
                            <div class="col-xs-3">
                                <span class="error-tip" id="gainNumError"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-3">
                                <span>筹集天数：</span>
                            </div>
                            <div class="col-xs-6">
                                <input class="form-control" id="inputRaiseDays" name="inputRaiseDays" placeholder="不超过20个字"
                                       style="width: 90%;float: left;"/>
                                <span class="text"style="float: left;margin-top: -3px;">天</span>
                            </div>
                            <div class="col-xs-3">
                                <span class="error-tip" id="raiseDaysError"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-3">
                                <span>项目地点：</span>
                            </div>
                            <div class="col-xs-6 two-input" id="selectCity">

                            </div>
                            <div class="col-xs-3">
                                <span class="error-tip" id="cityError"></span>
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
                                        <input type='text' name="inputProjPho" id='imgurl1' style="display:none"/>
                                        <input type='text' name="inputItemRewardsPho1" id='imgurl2' style="display:none"/>
                                        <input type='text' name="inputItemRewardsPho2" id='imgurl3' style="display:none"/>
                                        <input type='text' name="inputItemRewardsPho3" id='imgurl4' style="display:none"/>
                                        <input type='text' name="inputItemRewardsPho4" id='imgurl5' style="display:none"/>
                                        <input type='text' name="inputFundRewardsPho0" id='imgurl6' style="display:none"/>
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
                            <div class="col-xs-6">
                                <input class="form-control" id="inputProjAbst" name="inputProjAbst" placeholder="不超过20个字"/>

                            </div>
                            <div class="col-xs-3">
                                <span class="error-tip" id="projAbstError"></span>
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

                            <div class="text-left"><input type="checkbox">我已阅读并同意<a href="#detail" data-toggle="modal" data-target="#detail">《泡泡龙网站协议条款》</a></div>
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
                var data1 = data.substring(1,data.length-1);
                $('#showUploadImg').attr("src",data1);
                $('#imgurl1').attr('value',data);
                $('#showUploadImg').show();
                //$('#photo').attr("value",response);
            },
            'onError'          : function(event, queueID, fileObj)
            {
                alert("文件:" + fileObj.name + " 上传失败");
            }
        });

        $('.select-ban').click(function(){
            var id = $(this).attr('id');
            $(".active").removeClass('active');
            $(this).addClass('active');
            return $('#checkboxInput'+id).click();
        });
        var obj=document.getElementById("selectCity");
        var city=new LightManAddressTree;
        city.selectshow(obj,0);
        $("#inputProjName").bind("blur",function(){
            var len=$(this).val().length;
            console.log(len);
            if(len==0)
            {
                $("#projNameError").text("项目名称不能为空");
            }
            else if(len>20)
            {
                $("#projNameError").text("不能超过20个字");
            }
            else
            {
                $("#projNameError").text("");
            }
        });
        $("#inputProjName").bind("focus",function(){

                $("#projNameError").text("");
        });
        $("#gain_num").bind("blur",function(){
            var len=$(this).val().length;
            var num=parseInt($(this).val());
            var error=$("#gainNumError");
            if(len==0)
            {
                error.text("筹集资金不能为空");
            }
            else if(num>=10000)
            {
                error.text("")

            }
            else if(num&&num<10000)
            {
                error.text("不应少于10000");
            }
            else
            {
                error.text("请输入数字");
            }
        });
        $("#gain_num").bind("focus",function(){

            $("#gainNumError").text("");
        });
        $("#inputRaiseDays").bind("blur",function(){
            var len=$(this).val().length;
            var num=parseInt($(this).val());
            var error=$("#raiseDaysError");
            if(len==0)
            {
                error.text("筹集天数不能为空");
            }
            else if(len>20)
            {
                error.text("不超过20个字");
            }
            else if(num==0)
            {
                error.text("天数最少大于1天");
            }
            else if(num>0)
            {
                error.text("");
            }
            else
            {
                error.text("请输入数字");
            }
        });
        $("#inputRaiseDays").bind("focus",function(){

            $("#raiseDaysError").text("");
        });

        $("#inputProjAbst").bind("blur",function(){
            var len=$(this).val().length;
            console.log(len);
            var error=$("#projAbstError");
            if(len==0)
            {
                error.text("项目描述不能为空");
            }
            else if(len>20)
            {
                error.text("不能超过20个字");
            }
            else
            {
                error.text("");
            }
        });
        $("#inputProjAbst").bind("focus",function(){

            $("#projAbstError").text("");
        });
        $("#a_tree1_0").bind("blur",function(){
            var id=$("#a_tree1_0").val();
            var error=$("#cityError");
            if(id=="")
            {
                error.text("项目地点不能为空");
            }

            else
            {
                error.text("");
            }
        });
        $("#a_tree1_0").bind("focus",function(){

            $("#cityError").text("");
        });
    });

</script>
