<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
    <title>泡泡隆首页热门</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <link rel="stylesheet"  href="./css/reset.css"/>
    <link rel="stylesheet" href="./css/swiper.min.css">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link href="./css/toastr.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="./css/index.css">
    <link rel="stylesheet" type="text/css" href="./css/footer.css">
    <link rel="stylesheet" type="text/css" href="./css/nav.css">
    <script src="./js/jquery-1.10.1.js"></script>
    <script type="text/javascript" src="./js/swiper3.07.min.js"></script>
    <script type="text/javascript" src="./js/index.js"></script>
    <script src="./bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="./js/toastr.js"></script>
     <!--[if lt IE 9]>
    <script src="http://apps.bdimg.com/libs/html5shiv/3.7/html5shiv.min.js"></script>
    <script src="http://apps.bdimg.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<?php require('./nav.php') ?>
  
<div id="container">

<div class="swiper-container">
    <div class="swiper-wrapper">
        <div class="swiper-slide"><a href="pro.php"><img src="images/banner1.jpg" /></a></div>
        <div class="swiper-slide"><a href="pro.php"><img src="images/banner2.jpg" /></a></div>
        <div class="swiper-slide"><a href="pro.php"><img src="images/banner3.jpg" /></a></div>
        <div class="swiper-slide"><a href="pro.php"><img src="images/banner4.jpg" /></a></div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>
<div id="main">
<div id="hotpro">
<div class="container">
    <?php
    $start = '1';
    $end = '3';
    $part = 'hotProj';
    $ch = curl_init();
    $curl_url = "http://123.57.74.122:8888/version_0.2/action/test_query.php?part=".$part."&start=".$start."&end".$end;
    curl_setopt($ch, CURLOPT_URL, $curl_url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);//不直接输出，返回到变量
    $curl_result = curl_exec($ch);
    $curl_result = json_decode($curl_result,true);
    $result = json_decode($curl_result['result']);
    //var_dump($result);
    curl_close($ch);
    ?>
<div class="content-top">
    <div class="row">
        <div class="col-xs-4">
            <h1>热门项目</h1>
        </div>
        <div class="col-xs-4 col-xs-offset-4 ">
            <div style="height:20px;"></div>
            <a href="hotpro.php" class="pull-right">查看更多>></a>
        </div>
    </div>
</div>
<div class="content-main">
    <div class="row">
        <div class="col-xs-7">
            <a href="./pro.php?projId=122">
                <img class="project"src="./img/index_01.png" alt="2" style="width:100%" />
            </a>
        </div>
        <div class="col-xs-5">
            <h1><?php ?></h1>
            <h2><a href="others.php">由Lilith发起</a></h2>
            <p>英特尔30周年纪念全球制定机型，高端pc独家强力推荐，MICLE傲血顶级订制主机，值得拥有。</p>
            <div style="height:20px;"></div>
            <div id="right_center">
                <div class="row">
                    <div class="col-xs-4">
                        <span>已完成:</span>
                        <span class="percentage-text">75%</span>
                    </div>
                    <div class="col-xs-1">
										<span>
											<img class="place"src="./img/index_details1.png" alt="地点" />
										</span>
                    </div>
                    <div class="col-xs-3">
                        <span>北京</span>
                    </div>
                    <div class="col-xs-4">
                    </div>
                </div>
                <div class="row">
                    <div class="progray">
                        <div class="progreen"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-5">
                        <span>20,000元</span>
                    </div>
                    <div class="col-xs-5">
										<span>
											10天
										</span>

                    </div>
                    <div class="col-xs-2">
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-5">
                        <span>已筹集资金</span>
                    </div>
                    <div class="col-xs-5">
										<span>
											剩余天数
										</span>

                    </div>
                    <div class="col-xs-2">
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top:20px;">
                <div class="col-xs-6">
									<span class="pull-left">
										<img class="investor"src="./img/index_details3.png" alt="投资者" />
									</span>
									<span>
									投资者：220
									</span>
                </div>
                <div class="col-xs-6 pull-right">
									<span >
										<img class="follower"src="./img/index_details4.png" alt="投资者" />
									</span>
									<span>
									关注者：1500
									</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content-foot">
    <div class="row">
    <?php
        foreach ($result as $project) {
            //var_dump($project);

    ?>
        <div class="col-xs-4">
            <div class="onebox">
                <a href="./pro.php?projId=<?php echo $project->projID;?>">
                    <img class="project"src=<?php echo $project->projPho;?> alt="2" />
                </a>
                <h2><?php echo $project->projName ?></h2>
                <a href="./others.php?userId=<?php echo $project->userID;?>">
                    <h3>发起人:<?php echo $project->nickname?></h3>
                </a>
                <h4><?php echo $project->projAbst;?></h4>
                <div id="right_center">
                    <div class="row">
                        <div class="col-xs-6">
                            <span>已完成:</span>
                            <span class="percentage-text">75%</span>
                        </div>
                        <div class="col-xs-1">

                            <img class="place"src="./img/index_details1.png" alt="地点" />

                        </div>
                        <div class="col-xs-3">
                            <span><?php echo $project->cityName?></span>
                        </div>
                        <div class="col-xs-2">
                        </div>
                    </div>
                    <div class="row">
                        <div class="progray">
                            <div class="progreen"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-7">
                            <span>20,000元</span>
                        </div>
                        <div class="col-xs-5">
                                            <span>
                                                10天
                                            </span>

                        </div>

                    </div>
                    <div class="row">
                        <div class="col-xs-7">
                            <span>已筹集资金</span>
                        </div>
                        <div class="col-xs-5">
                                            <span>
                                                剩余天数
                                            </span>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
  </div>
</div>
<div id="hotinv">
    <div class="container">
            <?php
    $start = '1';
    $end = '3';
    $part = 'hotInvs';
    $ch = curl_init();
    $curl_url = "http://123.57.74.122:8888/version_0.2/action/test_query.php?part=".$part."&start=".$start."&end".$end;
    curl_setopt($ch, CURLOPT_URL, $curl_url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);//不直接输出，返回到变量
    $curl_result = curl_exec($ch);
    $curl_result = json_decode($curl_result,true);
    $result = json_decode($curl_result['result']);
    //var_dump($result['1']);
    curl_close($ch);
    ?>
        <div class="content-top">
            <div class="row">
                <div class="col-xs-4">
                    <h1>热门投资</h1>
                </div>
                <div class="col-xs-4 col-xs-offset-4">
                    <div style="height:20px;"></div>
                    <a href="./hotinv.php" class="pull-right">查看更多>></a>
                </div>
            </div>
        </div>
        <div class="content-foot">
            <div class="row">
               
                            <?php
        foreach ($result as $project) {
            //var_dump($project);

    ?>
        <div class="col-xs-4">
            <div class="onebox">
                <a href="./pro.php?projId=<?php echo $project->projID;?>">
                    <img class="project"src=<?php echo $project->projPho;?> alt="2" />
                </a>
                <h2><?php echo $project->projName ?></h2>
                <a href="./others.php?userId=<?php echo $project->userID;?>">
                    <h3>发起人:<?php echo $project->nickname?></h3>
                </a>
                <h4><?php echo $project->projAbst;?></h4>
                <div id="right_center">
                    <div class="row">
                        <div class="col-xs-6">
                            <span>已完成:</span>
                            <span class="percentage-text">75%</span>
                        </div>
                        <div class="col-xs-1">

                            <img class="place"src="./img/index_details1.png" alt="地点" />

                        </div>
                        <div class="col-xs-3">
                            <span><?php echo $project->cityName?></span>
                        </div>
                        <div class="col-xs-2">
                        </div>
                    </div>
                    <div class="row">
                        <div class="progray">
                            <div class="progreen"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-7">
                            <span>20,000元</span>
                        </div>
                        <div class="col-xs-5">
                                            <span>
                                                10天
                                            </span>

                        </div>

                    </div>
                    <div class="row">
                        <div class="col-xs-7">
                            <span>已筹集资金</span>
                        </div>
                        <div class="col-xs-5">
                                            <span>
                                                剩余天数
                                            </span>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        </div>
    </div>
</div>
<div id="hottime">
    <div class="container">
        <?php
    $start = '1';
    $end = '3';
    $part = 'due';
    $ch = curl_init();
    $curl_url = "http://123.57.74.122:8888/version_0.2/action/test_query.php?part=".$part."&start=".$start."&end".$end;
    curl_setopt($ch, CURLOPT_URL, $curl_url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);//不直接输出，返回到变量
    $curl_result = curl_exec($ch);
    $curl_result = json_decode($curl_result,true);
    $result = json_decode($curl_result['result']);
    //var_dump($result['1']);
    curl_close($ch);
    ?>
        <div class="content-top">
            <div class="row">
                <div class="col-xs-4">
                    <h1>即将到期</h1>
                </div>
                <div class="col-xs-4 col-xs-offset-4">
                    <div style="height:20px;"></div>
                    <a href="./hottime.php" class="pull-right">查看更多>></a>
                </div>
            </div>
        </div>
        <div class="content-foot">
            <div class="row">
               
                            <?php
        foreach ($result as $project) {
            //var_dump($project);

    ?>
        <div class="col-xs-4">
            <div class="onebox">
                <a href="./pro.php?projId=<?php echo $project->projID;?>">
                    <img class="project"src=<?php echo $project->projPho;?> alt="2" />
                </a>
                <h2><?php echo $project->projName ?></h2>
                <a href="./others.php?userId=<?php echo $project->userID;?>">
                    <h3>发起人:<?php echo $project->nickname?></h3>
                </a>
                <h4><?php echo $project->projAbst;?></h4>
                <div id="right_center">
                    <div class="row">
                        <div class="col-xs-6">
                            <span>已完成:</span>
                            <span class="percentage-text">75%</span>
                        </div>
                        <div class="col-xs-1">

                            <img class="place"src="./img/index_details1.png" alt="地点" />

                        </div>
                        <div class="col-xs-3">
                            <span><?php echo $project->cityName?></span>
                        </div>
                        <div class="col-xs-2">
                        </div>
                    </div>
                    <div class="row">
                        <div class="progray">
                            <div class="progreen"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-7">
                            <span>20,000元</span>
                        </div>
                        <div class="col-xs-5">
                                            <span>
                                                10天
                                            </span>

                        </div>

                    </div>
                    <div class="row">
                        <div class="col-xs-7">
                            <span>已筹集资金</span>
                        </div>
                        <div class="col-xs-5">
                                            <span>
                                                剩余天数
                                            </span>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        </div>
    </div>
</div>
<div id="hotvid">
    <div class="container">
        <div class="content-top">
            <div class="row">
                <div class="col-xs-4">
                    <h1>热门路演</h1>
                </div>
                <div class="col-xs-4 col-xs-offset-4">
                    <div style="height:20px;"></div>
                    <a href="./hotvid.php" class="pull-right">查看更多>></a>
                </div>
            </div>
        </div>
        <div class="content-foot">
            <div class="row">
                <div class="col-xs-4">
                    <div class="onebox">
                        <a href="./pro.php">
                            <img class="project"src="./img/index_03.png" alt="2" />
                        </a>
                        <h2>泡泡隆投资平台</h2>
                        <a href="">
                            <h3>发起人:孙总</h3>
                        </a>
                        <h4>最大限度服务投资者，为投资者打造最优投资平台，为有梦想的项目发起者提供展示自我的最佳平台</h4>
                        <div id="right_center">
                            <div class="row">
                                <div class="col-xs-6">
                                    <span>已完成:</span>
                                    <span class="percentage-text">75%</span>
                                </div>
                                <div class="col-xs-1">
											<span>
												<img class="place"src="./img/index_details1.png" alt="地点" />
											</span>
                                </div>
                                <div class="col-xs-3">
                                    <span>北京</span>
                                </div>
                                <div class="col-xs-2">
                                </div>
                            </div>
                            <div class="row">
                                <div class="progray">
                                    <div class="progreen"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-7">
                                    <span>20,000元</span>
                                </div>
                                <div class="col-xs-5">
											<span>
												10天
											</span>

                                </div>

                            </div>
                            <div class="row">
                                <div class="col-xs-7">
                                    <span>已筹集资金</span>
                                </div>
                                <div class="col-xs-5">
											<span>
												剩余天数
											</span>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="onebox">
                        <a href="./pro.php">
                            <img class="project"src="./img/index_06.png" alt="2" />
                        </a>
                        <h2>泡泡隆投资平台</h2>
                        <a href="">
                            <h3>发起人:孙总</h3>
                        </a>
                        <h4>最大限度服务投资者，为投资者打造最优投资平台，为有梦想的项目发起者提供展示自我的最佳平台</h4>
                        <div id="right_center">
                            <div class="row">
                                <div class="col-xs-6">
                                    <span>已完成:</span>
                                    <span class="percentage-text">75%</span>
                                </div>
                                <div class="col-xs-1">
											<span>
												<img class="place"src="./img/index_details1.png" alt="地点" />
											</span>
                                </div>
                                <div class="col-xs-3">
                                    <span>北京</span>
                                </div>
                                <div class="col-xs-2">
                                </div>
                            </div>
                            <div class="row">
                                <div class="progray">
                                    <div class="progreen"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-7">
                                    <span>20,000元</span>
                                </div>
                                <div class="col-xs-5">
											<span>
												10天
											</span>

                                </div>

                            </div>
                            <div class="row">
                                <div class="col-xs-7">
                                    <span>已筹集资金</span>
                                </div>
                                <div class="col-xs-5">
											<span>
												剩余天数
											</span>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="onebox">
                        <a href="./pro.php">
                            <img class="project"src="./img/index_09.png" alt="2" />
                        </a>
                        <h2>泡泡隆投资平台</h2>
                        <a href="">
                            <h3>发起人:孙总</h3>
                        </a>
                        <h4>最大限度服务投资者，为投资者打造最优投资平台，为有梦想的项目发起者提供展示自我的最佳平台</h4>
                        <div id="right_center">
                            <div class="row">
                                <div class="col-xs-6">
                                    <span>已完成:</span>
                                    <span class="percentage-text">75%</span>
                                </div>
                                <div class="col-xs-1">
											<span>
												<img class="place"src="./img/index_details1.png" alt="地点" />
											</span>
                                </div>
                                <div class="col-xs-3">
                                    <span>北京</span>
                                </div>
                                <div class="col-xs-2">
                                </div>
                            </div>
                            <div class="row">
                                <div class="progray">
                                    <div class="progreen"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-7">
                                    <span>20,000元</span>
                                </div>
                                <div class="col-xs-5">
											<span>
												10天
											</span>

                                </div>

                            </div>
                            <div class="row">
                                <div class="col-xs-7">
                                    <span>已筹集资金</span>
                                </div>
                                <div class="col-xs-5">
											<span>
												剩余天数
											</span>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div id="footer" >
    <div class="container">
        <div class="row">
            <div class="col-xs-1 col-xs-offset-4">
                <span>关于我们</span>
                <span class="pull-right">|</span>
            </div>
            <div class="col-xs-1">
                <span>联系我们</span>
                <span class="pull-right">|</span>
            </div>
            <div class="col-xs-1">
                <span>帮助中心</span>
                <span class="pull-right">|</span>
            </div>
            <div class="col-xs-1">
                <span>服务规范</span>
            </div>
        </div>
        <div style="text-align:center">
            <span>如有问题请联系400-000-000</span>
        </div>
    </div>
</div>
</div>

<script type="text/javascript">
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        paginationClickable: true,
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: 2500,
        autoplayDisableOnInteraction: false
    });
    $("#tofind1").click(function(){
        $('#login').modal('hide');

    });
    $("#nextFind").click(function(){
        $("#forgetPW").modal('hide');
    });
    $("#submitFind").click(function(){
        $("#inputCode").modal('hide');
    });
    $("#navbar ul li").each(function(){
        $(this).removeClass('chooseli');
    })
    $("#navbar ul").children("li").eq(0).addClass('chooseli');

</script>
</body>
</html>
