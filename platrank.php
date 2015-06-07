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
                <div id="platrank">
                    <div class="twotab">
                        <div class="tabbable" id="twotab">
                            <ul class="nav nav-tabs">
                                <li class="active ">
                                    <a href="#startRank" data-toggle="tab">发起人排行榜</a>
                                </li>
                                <li>
                                    <a href="#investRank" data-toggle="tab">投资人排行榜</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="startRank">
                                    <table class="table">
                                        <thead >
                                        <tr class="active">
                                            <th>名次 </th>
                                            <th>姓名</th>
                                            <th>发起项目数</th>
                                            <th>筹集资金</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="warning">
                                            <td class="randId">1</td>
                                            <td class="proName">
                                                <span>
                                                    <img src="./img/index_04.png"  class="img-circle rank-pic">
                                                </span>
                                                <span>
                                                    Mike
                                                </span>
                                            </td>
                                            <td class="proNum">2000</td>
                                            <td class="proMoney"> 2000</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane " id="investRank">
                                    <table class="table">
                                        <thead >
                                        <tr class="active">
                                            <th>名次 </th>
                                            <th>姓名</th>
                                            <th>发起项目数</th>
                                            <th>筹集资金</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="warning">
                                            <td class="randId">1</td>
                                            <td class="proName">
                                                <div class="row">
                                                    <span>
                                                        <img src="./img/index_06.png"  class="img-circle rank-pic">
                                                    </span>
                                                    <span>
                                                        Mike
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="proTime">2000</td>
                                            <td class="proMoney"> 2000</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
<!--<script type="text/javascript">-->
<!--    $(function(){-->
<!--        $("div.holder").jPages({-->
<!--            containerID : "deal-list"-->
<!--        });-->
<!--    });-->
<!--</script>-->
</body>
</html>