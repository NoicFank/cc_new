<?php


/* @var $this yii\web\View */
$this->registerCssFile('@web/statics/css/home.css', ['depends' => ['frontend\assets\AppAsset']]);

$this->title = Yii::$app->name;
?>
<div class="site-index">
    <?php echo $this->render('navigation');?>

    <div class="body-content">
<!--        滚动图模块-->
        <div class="body-content-1 row">
                <div class="col-lg-2 list-group body-list-text">
                    <a href="#" class="list-group-item body-list-text-align">计算机科学与信息安全系</a>
                    <a href="#" class="list-group-item body-list-text-align">自动化与智能科学系</a>
                    <a href="#" class="list-group-item body-list-text-align">机器人与信息自动化研究所</a>
                    <a href="#" class="list-group-item">机器智能研究所</a>
                    <a href="#" class="list-group-item">大数据技术研究所</a>
                    <a href="#" class="list-group-item">国家级虚拟仿真实验教学中心</a>
                    <a href="#" class="list-group-item">公共计算机基础教学部</a>
                </div>
            <div class="col-lg-8">
                <img class="carousel-inner img-responsive img-thumbnail" src="<?= Yii::$app->params['rolling']['rolling1']?>" />
            </div>
            <div class="col-lg-2 ">
                <form class="form-horizontal login-form">
                    <div class="form-group">
<!--                        <label for="inputEmail3" class="col-sm-3 control-label">用户名：</label>-->
                        <div>
                            <input type="" class="form-control" id="inputEmail3" placeholder="用户名">
                        </div>
                    </div>
                    <div class="form-group">
<!--                        <label for="inputPassword3" class="col-sm-3 control-label">密  码：</label>-->
                        <div>
                            <input type="password" class="form-control" id="inputPassword3" placeholder="密码">
                        </div>
                    </div>
                    <div class="form-group">
                        <div >
                            <button type="submit" class="btn btn-primary btn-block">登  录</button>
                        </div>
                    </div>
                </form>

                <form class="login-form">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="信息检索">
                        <span class="input-group-btn">
                   <button class="btn btn-primary" type="button">查找</button>
                        </span>
                    </div>
                </form>
                <div class="list-group body-list-text">
                    <a href="#" class="list-group-item">文档中心</a>
                    <a href="#" class="list-group-item">在职工程硕士系统</a>
                    <a href="#" class="list-group-item">推免生报名系统</a>
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
