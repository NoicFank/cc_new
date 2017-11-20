<?php


/* @var $this yii\web\View */
$this->registerCssFile('@web/statics/css/home.css', ['depends' => ['frontend\assets\AppAsset']]);
//$this->registerJsFile('@web/statics/js/home-image-height.js', ['depends' => ['frontend\assets\AppAsset']]);

$this->title = Yii::$app->name;
?>
<div class="site-index">
    <?php echo $this->render('navigation');?>

    <div  class="body-content">
<!--        滚动图模块-->
        <div class="body-content-1 row">
                <div class="col-lg-2 list-group body-list-text body-height">
                    <a href="#" class="list-group-item body-height-2">计算机科学与信息安全系</a>
                    <a href="#" class="list-group-item body-height-2">自动化与智能科学系</a>
                    <a href="#" class="list-group-item body-height-2">机器人与信息自动化研究所</a>
                    <a href="#" class="list-group-item body-height-2">机器智能研究所</a>
                    <a href="#" class="list-group-item body-height-2">大数据技术研究所</a>
                    <a href="#" class="list-group-item body-height-2">国家级虚拟仿真实验教学中心</a>
                    <a href="#" class="list-group-item body-height-2">公共计算机基础教学部</a>
                </div>
                <div class="col-lg-8 carousel slide body-height" id="carousel-example-generic" >
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" >
                        <div class="item active">
                            <img class="rolling-image img-thumbnail" src="<?= Yii::$app->params['rolling']['rolling1']?>" alt="津南图书馆">
                            <div class="carousel-caption">
                                <h3>津南图书馆</h3>
                            </div>
                        </div>
                        <div class="item">
                            <img class="rolling-image img-thumbnail" src="<?= Yii::$app->params['rolling']['rolling2']?>" alt="计算机控制与工程学院">
                            <div class="carousel-caption">
                                <h3>计算机控制与工程学院</h3>
                            </div>
                        </div>
                        <div class="item">
                            <img class="rolling-image img-thumbnail" src="<?= Yii::$app->params['rolling']['rolling3']?>" alt="全体教师合影">
                            <div class="carousel-caption">
                                <h3>全体教师合影</h3>
                            </div>
                        </div>

                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            <div class="col-lg-2 body-height">
                <form class="form-horizontal body-height-1">
                    <div class="form-group login-form">
<!--                        <label for="inputEmail3" class="col-sm-3 control-label">用户名：</label>-->
                        <div>
                            <input type="" class="form-control" id="inputEmail3" placeholder="用户名">
                        </div>
                    </div>
                    <div class="form-group login-form">
<!--                        <label for="inputPassword3" class="col-sm-3 control-label">密  码：</label>-->
                            <input type="password" class="form-control" id="inputPassword3" placeholder="密码">
                    </div>
                    <div class="form-group login-form">
                        <div >
                            <button type="submit" class="btn btn-primary btn-block">登  录</button>
                        </div>
                    </div>
                </form>

                <form class="body-height-2">
                    <div class="input-group search-form">
                        <input type="text" class="form-control" placeholder="信息检索">
                        <span class="input-group-btn">
                   <button class="btn btn-primary" type="button">查找</button>
                        </span>
                    </div>
                </form>
                <div class="list-group body-list-text body-height-1">
                    <a href="#" class="list-group-item body-height-3">文档中心</a>
                    <a href="#" class="list-group-item body-height-3">在职工程硕士系统</a>
                    <a href="#" class="list-group-item body-height-3">推免生报名系统</a>
                </div>
            </div>
        </div>

<!--        新闻模块-->
        <div class="body-content-2">
            <div class="row">
                <div class="col-lg-4">
                <?php echo $this->render('newsBlock',['news'=>$news[0],'newsBlockTitle'=>'最新动态','iconClass'=>'fa-globe' ]);?>
                </div>
                <div class="col-lg-4">
                    <?php echo $this->render('newsBlock',['news'=>$news[1],'newsBlockTitle'=>'学院公告','iconClass'=>'fa-file-text' ]);?>
                </div>
                <div class="col-lg-4">
                    <?php echo $this->render('newsBlock',['news'=>$news[2],'newsBlockTitle'=>'学生之窗','iconClass'=>'fa-th-list' ]);?>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <?php echo $this->render('newsBlock',['news'=>$news[3],'newsBlockTitle'=>'科研信息','iconClass'=>'fa-magnet' ]);?>
                </div>
                <div class="col-lg-4">
                    <?php echo $this->render('newsBlock',['news'=>$news[4],'newsBlockTitle'=>'本科生教学','iconClass'=>'fa-graduation-cap ' ]);?>
                </div>
                <div class="col-lg-4">
                    <?php echo $this->render('newsBlock',['news'=>$news[5],'newsBlockTitle'=>'党团园地','iconClass'=>'fa-flag' ]);?>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <?php echo $this->render('newsBlock',['news'=>$news[6],'newsBlockTitle'=>'研究生招生','iconClass'=>'fa-cog' ]);?>
                </div>
                <div class="col-lg-4">
                    <?php echo $this->render('newsBlock',['news'=>$news[7],'newsBlockTitle'=>'研究生教学','iconClass'=>'fa-linux' ]);?>
                </div>
                <div class="col-lg-4">
                    <?php echo $this->render('newsBlock',['news'=>$news[8],'newsBlockTitle'=>'就业信息','iconClass'=>'fa-podcast' ]);?>
                </div>
            </div>

        </div>
    </div>
</div>
