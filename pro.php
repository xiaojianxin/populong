<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
    <title>泡泡隆首页热门</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="布尔教育 http://www.itbool.com" />
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"  href="./css/reset.css"/>
    <link rel="stylesheet" type="text/css" href="./css/hotdetail.css">
    <script src="./js/jquery-1.10.1.js"></script>
    <script type="text/javascript" src="./js/swiper3.07.min.js"></script>
    <script type="text/javascript" src="./js/index.js"></script>
    <script src="./bootstrap/js/bootstrap.min.js"></script>
    <script src="http://api.html5media.info/1.1.4/html5media.min.js"></script>
    <!--[if lt IE 9]>
    <script src="http://apps.bdimg.com/libs/html5shiv/3.7/html5shiv.min.js"></script>
    <script src="http://apps.bdimg.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <![endif]-->
</head>
<body>
<div id="container">
<?php require('./nav.php') ?>
    <div class="modal fade" id="sendMsg" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">
                       <span class="glyphicon glyphicon-envelope"></span>发送私信
                    </h4>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                       <h3>发件人：张三丰</h3>
                        <textarea class="form-control" placeholder="请输入私信内容，内容控制在2000字以内"></textarea>
                    </form>
                </div>
                <div class="modal-footer">
                    <span class="btn btn-default" data-dismiss="modal" aria-hidden="true">关闭</span>
                    <span class="btn btn-success" id="sendMsgButton">发送</span>
                </div>

            </div>

        </div>

    </div>
   <div class="container">
       <div id="hotproTitle">
           <h2>泡泡龙项目</h2>
           <div class="row">
               <div class="col-xs-6">
                   <span>发起人:郭总</span>
                   <span class="titlemargin">地点：北京</span>
                   <span class="titlemargin"><img src="./img/star.png" class="stars"> </span>
               </div>
               <div class="col-xs-1 col-xs-offset-2">
                   <div class="btn btn-success collection" style="margin-top: -30px;"><span class="glyphicon glyphicon-heart-empty">点击收藏</span></div>

               </div>

           </div>
       </div>
       <div id="tabPrice">
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
                                    var_dump($result);

                              ?>
           <div class="tabbable" id="tabs-1">
               <ul class="nav nav-tabs ">
                <?php $i = 1;
                      foreach ($result as $reword) { ?>
                   <li >
                       <a href="#panel-<?php echo $i; ?>"    <?php if($i == 1){echo 'class="active"';} ?>data-toggle="tab">￥1</a>
                   </li>
                <?php 
                  $i++;
                }?>
               </ul>
               <div class="tab-content">
                <?php $i = 1;
                      foreach ($result_content as $content) {
                        ?>
                   <div class="tab-pane  <?php if($i == 1){echo "active";}?>" id="panel-<?php echo $i; ?>">
                       <div style="height: 20px;background-color: #a9ddac;"></div>
                       <div class="thumbnail">
                           <div class="row box-introduce">
                               <div class="col-xs-4">
                                   <img src="<?php echo $content->explainPic ?>" alt="...">
                               </div>
                               <div class="col-xs-5">
                                    <h1>支持后您将获得</h1>
                                   <p>
                                    <?php echo $content->explainText;?>
                                   </p>
                               </div>
                               <div class="col-xs-3">
                                   <div style="height: 20px;"></div>
                                    <div class="row">

                                            <span>支持金额:</span>
                                            <span class="text-red"><?php echo $content->amountPer;?>元</span>

                                    </div>
                                   <div style="height: 20px;"></div>
                                   <div class="row">
                                       <span class="glyphicon glyphicon-user" style="background-color:#9ab26b; "></span>
                                       <span><?php echo $content->quota;?></span>
                                       <span>|</span>
                                       <span>剩余</span>
                                       <span class="text-red"><?php echo $content->quotaRemain;?></span>
                                       <span>个名额</span>
                                   </div>
                                   <div style="height: 20px;"></div>
                                   <div class="btn invest_button"><a href="invest_1.php">投资￥<?php echo $content->amountPer;?></a></div>
                               </div>
                           </div>
                       </div>
                       <div style="height: 20px;background-color: #a9ddac;"></div>
                   </div>
                   <?php 
                  $i++;
                }?>
               </div>
           </div>
       </div>
   </div>
   <div id="videoPart">
      <div class="container">
          <div class="row">
              <div class="col-sm-8 video-play" >
                  <video width="100%"controls autobuffer autoplay="autoplay">
                      <source src="http://videos.mozilla.org/serv/webmademovies/wtfpopcorn.ogv">
                  </video>
              </div>
              <div class="col-sm-4 video-boss">
                  <div class="first-part" style="height: 40%;margin-top: 5%">
                      <div class="row" >
                          <div class="col-xs-4">
                              <a href="others.html"><img src="./img/fan_15.png" class="img-circle pull-right"></a>
                          </div>
                          <div class="col-xs-8">
                              <h3>发起人:郭总</h3>
                              <h3>130****0000</h3>
                              <h3>积分:471</h3>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-xs-4 detail-line">
                              <span class="glyphicon glyphicon-map-marker" style="color: #66cc66;"></span>
                              <span style="color: #666666;">北京</span>
                          </div>
                          <div class="col-xs-8">
                              <span>操作：</span>
                              <span class="btn btn-success"><a href="#sendMsg" data-toggle="modal" data-target="#sendMsg" >发私信</a></span>
                          </div>
                      </div>
                      <div class="divider"></div>
                  </div>

                  <div class="num-detail">
                      <div class="row">
                          <div class="col-xs-6">
                              <span class="num-text center-block">70%</span>
                          </div>
                          <div class="col-xs-6">
                              <span class="num-text center-block">10天</span>
                          </div>

                      </div>
                  </div>
                  <div class="num-detail">
                      <div class="row">
                          <div class="col-xs-6">
                              <span class="center-block">已完成</span>
                          </div>
                          <div class="col-xs-6">
                              <span class="center-block">剩余天数</span>
                          </div>

                      </div>
                  </div>
                  <div class="row">
                      <div class="progray">
                          <div class="progreen"></div>
                      </div>
                  </div>
                  <h5 class="text-red">￥1000</h5>
                  <h6>已筹集资金</h6>
              </div>
              <div style="height: 30px;"></div>
          </div>
      </div>
   </div>
    <div id="thirdPane">
       <div class="container">
           <div class="row">
               <div class="col-xs-8">
                   <div id="L-third">
                       <div id="tabItem">
                           <div class="tabbable" id="tabs-2">
                               <ul class="nav nav-tabs ">
                                   <li class="active" >
                                       <a href="#box-1" data-toggle="tab">项目概况</a>
                                   </li>
                                   <li>
                                       <a href="#box-2" data-toggle="tab">评论</a>
                                   </li>
                                   <li>
                                       <a href="#box-3" data-toggle="tab">项目跟进</a>
                                   </li>
                                   <li>
                                       <a href="#box-4" data-toggle="tab">投资者</a>
                                   </li>
                                   <li>
                                       <a href="#box-5" data-toggle="tab">行业顾问</a>
                                   </li>
                                   <li>
                                       <a href="#box-6" data-toggle="tab">投资顾问</a>
                                   </li>
                               </ul>
                               <div class="tab-content">
                                   <div class="tab-pane active" id="box-1">
                                       <iframe src="prodetail.php" class="mainframe" name="mainiframe1" width="100%"   frameborder="0" scrolling="no" marginwidth="0" marginheight="0"></iframe>
                                   </div>
                                   <div class="tab-pane" id="box-2">
                                       <iframe src="comment.html" class="mainframe" name="mainiframe2" width="100%"   frameborder="0" scrolling="no" marginwidth="0" marginheight="0"></iframe>
                                   </div>
                                   <div class="tab-pane" id="box-3">
                                       <iframe src="processPro.html" class="mainframe" name="mainiframe3" width="100%"   frameborder="0" scrolling="no" marginwidth="0" marginheight="0"></iframe>
                                   </div>
                                   <div class="tab-pane" id="box-4">
                                       <iframe src="investers.html" class="mainframe" name="mainiframe4" width="100%"   frameborder="0" scrolling="no" marginwidth="0" marginheight="0"></iframe>
                                   </div>
                                   <div class="tab-pane" id="box-5">
                                       <iframe src="subbusiness.html" class="mainframe" name="mainiframe4" width="100%"   frameborder="0" scrolling="no" marginwidth="0" marginheight="0"></iframe>
                                   </div>
                                   <div class="tab-pane" id="box-6">
                                       <iframe src="subinvest.html" class="mainframe" name="mainiframe4" width="100%"   frameborder="0" scrolling="no" marginwidth="0" marginheight="0"></iframe>
                                   </div>

                               </div>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="col-xs-4">
                   <div id="R-third">
                       <div style="height: 12px"></div>
                        <div class="title">
                            二级市场
                        </div>
                       <div class="divider"></div>
                       <div id="market-list">
                           <div class="one-market">

                                <img src="./img/fan_08.png" class="img-circle">


                               <h2>转让此项目</h2>
                               <h3>130****0000</h3>
                               <h3 class="text-red">￥1000</h3>
                               <div class="btn accept-btn"><a href="invest.php">接受投资</a> </div>
                           </div>
                           <div class="one-market">

                               <img src="./img/fan_08.png" class="img-circle">


                               <h2>转让此项目</h2>
                               <h3>130****0000</h3>
                               <h3 class="text-red">￥1000</h3>
                               <div class="btn accept-btn"><a href="invest.php">接受投资</a></div>
                           </div>
                           <div class="one-market">

                               <img src="./img/fan_08.png" class="img-circle">


                               <h2>转让此项目</h2>
                               <h3>130****0000</h3>
                               <h3 class="text-red">￥1000</h3>
                               <div class="btn accept-btn"><a href="invest.php">接受投资</a></div>
                           </div>
                           <div class="one-market">

                               <img src="./img/fan_08.png" class="img-circle">


                               <h2>转让此项目</h2>
                               <h3>130****0000</h3>
                               <h3 class="text-red">￥1000</h3>
                               <div class="btn accept-btn"><a href="invest.php">接受投资</a></div>
                           </div>
                           <div class="one-market">

                               <img src="./img/fan_08.png" class="img-circle">


                               <h2>转让此项目</h2>
                               <h3>130****0000</h3>
                               <h3 class="text-red">￥1000</h3>
                               <div class="btn accept-btn"><a href="invest.php">接受投资</a></div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
    </div>

</div>
<script language="javascript" type="text/javascript">
    $(document).ready(function(){
        $(".mainframe").load(function(){
            $(this).height(0); //用于每次刷新时控制IFRAME高度初始化
            var height = $(this).contents().height() + 10;
            $(this).height( height < 1200 ? 1200 : height );
            var width=$("#L-third").width;
            $(this).width(width);
        });
        $('.collection').click(function(){
            $(this).html('<span class="glyphicon glyphicon-heart-empty">&nbsp已收藏</span>')
        });
    });

</script>
</body>
</html>