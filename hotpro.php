<?PHP
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
    <title>更多热门项目</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="布尔教育 http://www.itbool.com" />
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/swiper.min.css">
    <link rel="stylesheet"  href="./css/reset.css"/>
    <link rel="stylesheet" href="./css/help.css"/>
    <link rel="stylesheet" href="./css/animate.css"/>
    <link rel="stylesheet" href="./css/jPages.css"/>
    <link rel="stylesheet" href="./css/footer.css"/>

    <script type="text/javascript" src="./js/jquery-1.10.1.js"></script>
    <script type="text/javascript" src="./js/index.js"></script>
    <script type="text/javascript" src="./bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="./js/swiper3.07.min.js"></script>
    <script type="text/javascript" src="./js/jPages.min.js"></script>

    <!--[if lt IE 9]>
    <script src="http://apps.bdimg.com/libs/html5shiv/3.7/html5shiv.min.js"></script>
    <script src="http://apps.bdimg.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<?php require('./nav.php') ?>
<div id="container">
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
    $start=1;
    $end=9;
    $url = "123.57.74.122/logic/Query";
    $json3 = '{"method":"query_hot_proj", "start":'.$start.',"end":'.$end.'}';//part=due指即将到期，part=hotInvs指热门投资，part=hotProj指热门项目
    $result_arr = request_by_curl($url,$json3);
    //$result_arr = json_decode($json,true);

    $curl_result = json_decode($result_arr,true);
    $result = json_decode($curl_result['result']);
    ?>


    <div class="container">
        <h2 style="margin-bottom: 5px;font-size: 1.5em;">热门投资</h2>
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="row">
                        <div class="col-sm-7 bigpic">
                            <img src="img/index_01.png" />
                        </div>
                        <div class="col-sm-5">
                            <div class="content-main">
                                <h1>MICLE傲血顶级订制主机</h1>
                                <h2><a href="0">由Lilith发起</a></h2>
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
											<img class="place" src="./img/index_details1.png" alt="地点" style="width: 100%;"/>
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
                                    <div class="row" style="margin-top: 10px;">
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

                </div>
                <div class="swiper-slide">
                    <div class="row">
                        <div class="col-sm-7 bigpic">
                            <img src="img/index_02.png" />
                        </div>
                        <div class="col-sm-5">
                            <div class="content-main">
                                <h1>MICLE傲血顶级订制主机</h1>
                                <h2><a href="0">由Lilith发起</a></h2>
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
											<img class="place" src="./img/index_details1.png" alt="地点" style="width: 100%;"/>
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
                                                <img class="investor" src="./img/index_details3.png" alt="投资者" />
                                            </span>
                                            <span>
                                                 投资者：220
                                            </span>
                                    </div>
                                    <div class="col-xs-6 pull-right">
                                            <span >
                                                <img class="follower" src="./img/index_details4.png" alt="关注者" />
                                            </span>
                                            <span>
                                                关注者：1500
                                            </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>

    <!-- <div id="header">
			<img class="logo"src=""alt="logo">
			<ul class="nav">
				<li><a href="./index.php">首页热门</a></li>
				<li class="chooseli"><a href="./help.html">青年助梦</a></li>
				<li><a href="./together.html">与你同行</a></li>
				<li><a href="./ido.html">我做你投</a></li>
			</ul>
			<?PHP
    if (isset($_SESSION["token"]))
    {

        ?>

				<?PHP
    }else
    {
        ?>

				<?PHP
    }
    ?>

		</div> -->

    <div id="main">
        <div class="container">
            <div id="selectBox">
                &nbsp;&nbsp;&nbsp;&nbsp;<span>关注度</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <span class="btn-group">
                        <span class="dropdown-toggle" data-toggle="dropdown" >城市选择<span class="glyphicon glyphicon-chevron-up"></span></span>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#">操作</a>
                            </li>

                            <li class="divider">
                            </li>

                        </ul>
                    </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <span>时间最新</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <span class="btn-group">
                        <span class="dropdown-toggle" data-toggle="dropdown">行业<span class="glyphicon glyphicon-chevron-up"></span></span>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#">操作</a>
                            </li>

                            <li class="divider">
                            </li>

                        </ul>
                    </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <span>推荐关注</span>
                <div >


                </div>
            </div>
        </div>

        <div class="container">
            <div id="boxList">
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
                               <h2><a href="./pro.php?projId=<?php echo $project->projID;?>"><?php echo $project->projName ?></a></h2>
                               <a href="./others.php?userID=<?php echo $project->userID?>">
                                   <h3>发起人:孙总</h3>
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
                   <?php } ?>

               </div>
            </div>
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
        <?php require('./footer.php')?>
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
            $(function(){
                $("div.holder").jPages({
                    containerID : "boxList",
                    previous : "←",
                    next : "→",
                    perPage : 9
                });
            });
        </script>
</body>
</html>