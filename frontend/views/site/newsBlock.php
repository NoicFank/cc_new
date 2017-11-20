<?php
/**
 * Created by PhpStorm.
 * User: noicfank
 * Date: 2017/11/18
 * Time: 13:27
 */
use \yii\helpers\StringHelper;
$length=22;
?>

<div class="list-group body-news-block-margin">
    <a href="#" class="list-group-item active"> <i class="fa <?= $iconClass?> body-news-icon"> </i><?= $newsBlockTitle?> </a>
    <a href="./news/news-detail/<?= $news[0]['NID']?>" class="list-group-item row">
        <span><?= StringHelper::truncate($news[0]['Title'],$length,'...',null,true) ?></span>
        <span class="body-home-time"><?= date('Y-m-d',strtotime($news[0]['PublishTime']));?></span>
    </a>
    <a href="./news/news-detail/<?= $news[1]['NID']?>" class="list-group-item row">
        <span><?= StringHelper::truncate($news[1]['Title'],$length,'...',null,true) ?></span>
        <span class="body-home-time"><?= date('Y-m-d',strtotime($news[1]['PublishTime']));?></span>
    </a>
    <a href="./news/news-detail/<?= $news[2]['NID']?>" class="list-group-item row">
        <span><?= StringHelper::truncate($news[2]['Title'],$length,'...',null,true) ?></span>
        <span class="body-home-time"><?= date('Y-m-d',strtotime($news[2]['PublishTime']));?></span>
    </a>
    <a href="./news/news-detail/<?= $news[3]['NID']?>" class="list-group-item row">
        <span><?= StringHelper::truncate($news[3]['Title'],$length,'...',null,true) ?></span>
        <span class="body-home-time"><?= date('Y-m-d',strtotime($news[3]['PublishTime']));?></span>
    </a>
</div>