<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head class="header">

    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div >
    <img class="img-responsive center-block navbar-fixed-top" src= "<?= YII::$app->params['header']['pageHead1'] ?>"/>
    <img class="img-responsive center-block" role="navigation" src= "<?= YII::$app->params['header']['pageHead1'] ?>"/>
    <div class="content">
    <img class=" img-responsive center-block" src= "<?= YII::$app->params['header']['pageHead2'] ?>"/>
    </div>
</div>

<div class="wrap">
    <div class="content">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="" >Copyright &copy; 2013 - <?= date('Y') ?>,All Rights Reserved 浏览次数: 35860191</p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
