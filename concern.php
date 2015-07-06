
<div id="self_fans" class="container-fluid">
    <div class="row">
        <?php foreach ($idols as $result) {?>
            <div class="col-xs-4">
                <div class="fans_card">
                    <div class="row">
                        <div class="col-xs-4 fans_pic">
                            <a href="./others.php?userId=<?php echo $result->userID ?>" class="fans_pic">
                                <img class="fan img-circle" src=<?php echo $result->headImg?> alt="" />
                            </a>
                        </div>
                        <div class="col-xs-6 fans_description">
                            <div class="fans_name"><?php echo $result->nickname?></div>
                            <div class="fans_introduction"><?php echo $result->companyFeild?></div>
                            <div class="fans_introduction">关注<?php echo $result->idolNum?>|粉丝<?php echo $result->fanNum?></div>
                            <span class="btn btn-default foucus">
                                <span class="dropdown-toggle" data-toggle="dropdown" >互相关注
                                    <span class="glyphicon glyphicon-chevron-up"></span>
                                </span>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">取消关注</a>
                                    </li>

                                </ul>
                            </span>
                        </div>
                    </div>
                </div>

            </div>
        <?php } ?>
    </div>
    <div class="seemore"><a>查看更多</a></div>
</div>