<?php

namespace frontend\controllers;

use backend\modules\api\v1\models\news\NewsModel;
use frontend\controllers\base\BaseController;

class NewsController extends BaseController
{
    public function actionIndex()
    {
        return $this->render('index');
    }

//    具体的新闻界面
    public function actionNewsDetail(){
        //为了使路由美化之后的news界面的图片的路径正确
        $id = \Yii::$app->request->get('id');
        $res = NewsModel::getNewsDetail($id);
        \Yii::$app->params['header']['pageHead1'] = '../../statics/images/headers/pageHead1.png';
        \Yii::$app->params['header']['pageHead2'] = '../../statics/images/headers/pageHead2.png';
        return $this->render('newsDetail',['new'=>$res]);
    }

}
