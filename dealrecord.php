<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
    <title>个人中心个人界面</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="布尔教育 http://www.itbool.com" />
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"  href="./css/reset.css"/>
    <link rel="stylesheet" type="text/css" href="./css/headfoot.css">
    <link rel="stylesheet" type="text/css" href="./css/self.css">
    <link rel="stylesheet" type="text/css" href="./css/leftnav.css">
    <link rel="stylesheet" href="./css/jPages.css"/>
    <script src="./js/jquery-1.10.1.js"></script>
    <script src="./bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="./js/jPages.min.js"></script>
    <!--[if lt IE 9]>
    <script src="http://apps.bdimg.com/libs/html5shiv/3.7/html5shiv.min.js"></script>
    <script src="http://apps.bdimg.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<div id="topnav">
    <?php require('./nav.php') ?>
</div>
<div id="main">
    <div class="container">
        <div id="self_top" >
            <a  class="btn btn-success" href="start.html">发起项目</a>
        </div>
        <div class="row">
            <div class="col-xs-3">
                <?php require('./leftnav.php') ?>
            </div>
            <div class="col-xs-9">
                <div id="recordbox">
                    <div class="record-title">
                        <div class="title">交易记录</div>
                        <img src="./img/line.jpg">
                    </div>
                </div>
                <div class="row dealtype">
                    <span>&nbsp;&nbsp;交易类型:&nbsp;</span>
                    <span class="active">&nbsp;全部&nbsp;</span>
                    <span>&nbsp;充值&nbsp;</span>
                    <span>&nbsp;提现&nbsp;</span>
                    <span >&nbsp;投资&nbsp;</span>
                    <span >&nbsp;收益&nbsp;</span>
                </div>
                <div id="deal-list">
                    <table class="table">
                        <thead >
                            <tr class="active">
                                <th> 时间 </th>
                                <th>交易类型</th>
                                <th> 交易详情 </th>
                                <th>金额</th>
                                <th>备注</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr class="warning">
                            <td>2015.01.22 13:55</td>
                            <td> 充值</td>
                            <td>交易内容</td>
                            <td style="color: #6cc87f"> 500</td>
                            <td> 无</td>
                        </tr>
                        <tr class="warning">
                            <td>2015.01.22 13:55</td>
                            <td> 充值</td>
                            <td>交易内容</td>
                            <td style="color: #6cc87f"> 500</td>
                            <td> 无</td>
                        </tr>
                        <tr class="warning">
                            <td>2015.01.22 13:55</td>
                            <td> 充值</td>
                            <td>交易内容</td>
                            <td style="color: #6cc87f"> 500</td>
                            <td> 无</td>
                        </tr>
                        <tr class="warning">
                            <td>2015.01.22 13:55</td>
                            <td> 充值事实上事实上身上试试</td>
                            <td>交易内容</td>
                            <td style="color: #6cc87f"> 500</td>
                            <td> 无</td>
                        </tr>
                        <tr class="warning">
                            <td>2015.01.22 13:55</td>
                            <td> 充值</td>
                            <td>交易内容</td>
                            <td style="color: #6cc87f"> 500</td>
                            <td> 无</td>
                        </tr>
                        <tr class="warning">
                            <td>2015.01.22 13:55</td>
                            <td> 充值</td>
                            <td>交易内容</td>
                            <td style="color: #6cc87f"> 500</td>
                            <td> 无</td>
                        </tr>
                        <tr class="warning">
                            <td>2015.01.22 13:55</td>
                            <td> 充值</td>
                            <td>交易内容</td>
                            <td style="color: #6cc87f"> 500</td>
                            <td> 无</td>
                        </tr>

                        </tbody>
                    </table>
                </div>
                <div id="pagination">
                    <div class="holder" style="text-align: center;">
                        <a class="jp-previous jp-disabled">←</a>
                        <a class="jp-current">1</a>
                        <span class="jp-hidden">...</span>
                        <a>2</a>
                        <a>3</a>
                        <a>4</a>
                        <a>5</a>
                        <a class="jp-hidden">6</a>
                        <a class="jp-hidden">7</a>
                        <a class="jp-hidden">8</a>
                        <a class="jp-hidden">9</a>
                        <span>...</span>
                        <a>10</a>
                        <a class="jp-next">→</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<script type="text/javascript">
    $(function(){
        $("div.holder").jPages({
            containerID : "deal-list"
        });
    });
</script>
</body>
</html>