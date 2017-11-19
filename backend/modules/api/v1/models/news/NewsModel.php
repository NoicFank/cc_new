<?php

namespace backend\modules\api\v1\models\news;

use backend\modules\api\v1\models\teachers\TeachersModel;
use Yii;
use \backend\modules\api\v1\models\base\BaseModel;
/**
 * This is the model class for table "cc_news".
 *
 * @property integer $NID
 * @property string $Title
 * @property string $Keywords
 * @property integer $TypeID
 * @property integer $AuthorID
 * @property string $PublishTime
 * @property string $Content
 * @property integer $Hits
 * @property boolean $CheckStatus
 *
 * @property NewsTypeModel $type
 * @property TeachersModel $author
 * @property NewsAttachmentModel $ccNewsAttachments
 */
class NewsModel extends BaseModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cc_news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Title', 'TypeID', 'AuthorID', 'PublishTime', 'Content'], 'required'],
            [['TypeID', 'AuthorID', 'Hits'], 'integer'],
            [['PublishTime'], 'safe'],
            [['Content'], 'string'],
            [['CheckStatus'], 'boolean'],
            [['Title', 'Keywords'], 'string', 'max' => 255],
            [['TypeID'], 'exist', 'skipOnError' => true, 'targetClass' => NewsTypeModel::className(), 'targetAttribute' => ['TypeID' => 'NTID']],
            [['AuthorID'], 'exist', 'skipOnError' => true, 'targetClass' => TeachersModel::className(), 'targetAttribute' => ['AuthorID' => 'TID']],
        ];
    }

    public function fields()
    {
        $fields = parent::fields();

        // 删除一些包含敏感信息的字段
        // unset($fields['NID'],$fields['Title']);
        return $fields;
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'NID' => Yii::t('app', 'Nid'),
            'Title' => Yii::t('app', 'Title'),
            'Keywords' => Yii::t('app', 'Keywords'),
            'TypeID' => Yii::t('app', 'Type ID'),
            'AuthorID' => Yii::t('app', 'Author ID'),
            'PublishTime' => Yii::t('app', 'Publish Time'),
            'Content' => Yii::t('app', 'Content'),
            'Hits' => Yii::t('app', 'Hits'),
            'CheckStatus' => Yii::t('app', 'Check Status'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getType()
    {
        return $this->hasOne(NewsTypeModel::className(), ['NTID' => 'TypeID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthor()
    {
        return $this->hasOne(TeachersModel::className(), ['TID' => 'AuthorID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCcNewsAttachments()
    {
        return $this->hasMany(NewsAttachmentModel::className(), ['NewsID' => 'NID']);
    }

    /*
     * 获取首页显示的所有新闻简介
     * 获取不同类型的新闻的前4条
     * 包括新闻的ID，Title，PublishTime
     * 一定保证CheckStatus为1 保证该条数据为可以看到的数据
     * 按照首页的从左到右 从上到下顺序返回，即 最新动态为0
     */
    public static function getHomeNews(){
        $res = [];
        for($i=1;$i<10;$i++){
            $res[$i-1] = self::find()
                           ->select(['NID','Title','PublishTime'])
                           ->where(['TypeID'=>$i,'CheckStatus'=>'1'])
                           ->orderBy('PublishTime desc')
                           ->limit(4)
                           ->asArray()
                           ->all();
        }
        return $res;
    }

    /*
     * 根据NID获取新闻的具体信息
     * 获取Title，AuthorName,PublishTime,Content,Hits
     * 需要联合cc_teacher 表(TeachersModel) 和 NewsModel
     */
    public static function getNewsDetail($NID){
       return  $res = self::find()
            ->where(['NID'=>$NID])
            ->asArray()
            ->all();

        //var_dump($res); exit();
    }
}
