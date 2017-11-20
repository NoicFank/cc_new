<?php
/**
 * Created by PhpStorm.
 * User: noicfank
 * Date: 2017/11/19
 * Time: 9:40
 */
$this->registerCssFile('@web/statics/css/news/newsDetail.css', ['depends' => ['frontend\assets\AppAsset']]);
?>

<div class="body-news">
<div>
    <h2><?= $new[0]['Title']?></h2>
</div>
    <div class="split"></div>
<div>
    <h4>
        <span >南开大学计算机与控制工程学院<span>
        <span class="important"><?= $new[0]['PublishTime']?></span>
        <span>来源:</span>
        <span class="important">研究生办公室</span>
    </h4>
</div>
<div>
    <h4>
        <span>发布人:<span>
        <span  class="important"><?= $new[0]['AuthorID']?></span>
        <span>浏览次数：</span>
        <span class="important"><?= $new[0]['Hits']?></span>
    </h4>
</div>

    <div class="split"></div>

<div class="body-news-detail">
    <p>
    <h4>
        <?= $new[0]['Content']?>
    </h4>
    </p>
</div>
</div>