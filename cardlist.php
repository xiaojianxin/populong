

<div id="deleteCardModal" class="modal fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">
            标题栏
        </h3>
    </div>
    <div class="modal-body">
        <p>
            显示信息
        </p>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">关闭</button>
        <button class="btn btn-primary">保存设置</button>
    </div>
</div>

<div id="cardlist" class="container">
    <div class="cardTitle">
        <h2>银行卡绑定</h2>
        <div class="divider">
        </div>
    </div>
    <div class="listContent">

        <div class="row">
            <div class="col-xs-3">
                <div class="onecard">
                    <div class="thumbnail">
                        <div class="bankpic">
                            <img src="./img/bank1.jpg">
                        </div>
                        <div class="bankdetail">
                            <div class="banknumber">6213 &nbsp;**** &nbsp;****&nbsp; 9809</div>
                            <div class="divider"></div>
                            <div class="actionBtn">
                                <span class="btn">修改</span>
                                <span class="btn" id="deleteCard"><a href="#deleteCardModal" role="button" class="btn" data-toggle="modal">删除</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-3">
                <div class="onecard">
                    <div class="thumbnail">
                        <div class="bankpic" >
                            <a class="addcard"><span class="glyphicon glyphicon-plus"></span></a>
                        </div>
                        <div class="bankdetail">

                            <div class="divider"></div>
                            <div class="actionBtn">
                                <div style="height: 14px;"></div>
                                <span><a class="addcard">新增至银行卡</a></span>
                                <div style="height: 15px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="cardmanage" class="container" style="display: none;">
    <div class="cardTitle">
        <h2>银行卡绑定</h2>
        <div class="divider">

        </div>
    </div>
    <div class="cardContent">

        <div class="row">
            <div class="col-xs-2 cardleft">
                <span>银行账户类型</span>
                <span class="text-red">&nbsp;*&nbsp;&nbsp;</span>
            </div>
            <div class="col-xs-5 cardmiddle">
                <span>借记卡 不支持提现至引用卡账户</span>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-2 cardleft">
                <span>开户人姓名</span>
                <span class="text-red">&nbsp;*&nbsp;&nbsp;</span>
            </div>
            <div class="col-xs-5 cardmiddle">
                <span>*研</span>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-2 cardleft">
                <span>银行卡号</span>
                <span class="text-red">&nbsp;*&nbsp;&nbsp;</span>
            </div>
            <div class="col-xs-5 cardmiddle">
                <span><input class="form-control"> </span>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-2 cardleft">
                <span>选择银行</span>
                <span class="text-red">&nbsp;*&nbsp;&nbsp;</span>
            </div>
            <div class="col-xs-5 cardmiddle">
                    <span>
                        <select class="form-control">
                            <option selected>请选择银行</option>
                            <option >中国银行</option>
                            <option >中国工商银行</option>
                        </select>
                    </span>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-2 cardleft">
                <span>开户行所在地</span>
                <span class="text-red">&nbsp;*&nbsp;&nbsp;</span>
            </div>
            <div class="col-xs-5 cardmiddle">
                <span><input class="form-control"> </span>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-2 cardleft">
                <span>开户行</span>
                <span class="text-red">&nbsp;*&nbsp;&nbsp;</span>
            </div>
            <div class="col-xs-5 cardmiddle">
                <span><input class="form-control"> </span>
            </div>
            <div class="col-xs-2 cardright">
                <span class="btn btn-success">搜索</span>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-2 cardleft">
                <span>手机验证码</span>
                <span class="text-red">&nbsp;*&nbsp;&nbsp;</span>
            </div>
            <div class="col-xs-6 cardmiddle2">

                <input class="form-control" placeholder="手机验证码">
                <span class="btn btn-success">点击获取手机验证码</span>

            </div>
        </div>
        <div class="actionGroup">
            <span class="btn btn-success" id="addconfirm">确认</span>
            <span class="btn btn-default" id="addcancel">取消</span>
        </div>

    </div>
</div>
<script type="text/javascript">
    $("#cardlist .addcard").click(function(){
        $("#cardlist").hide();
        $("#cardmanage").show();
    });
    $("#cardmanage #addconfirm").click(function(){
        $("#cardlist").show();
        $("#cardmanage").hide();
    });
    $("#cardmanage #addcancel").click(function(){
        $("#cardlist").show();
        $("#cardmanage").hide();
    });

</script>
