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
                                <textarea name="inputProjIntro" id="editor1" class="form-control"></textarea>
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
<script type="text/javascript"></script>
