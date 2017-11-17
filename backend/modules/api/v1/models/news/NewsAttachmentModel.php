<?php

namespace backend\modules\api\v1\models\news;

use Yii;
use \backend\modules\api\v1\models\base\BaseModel;

/**
 * This is the model class for table "cc_news_attachment".
 *
 * @property string $NAID
 * @property string $AttachmentName
 * @property string $SaveName
 * @property double $AttachmentSize
 * @property string $AttachmentType
 * @property integer $NewsID
 *
 * @property CcNews $news
 */
class NewsAttachmentModel extends BaseModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cc_news_attachment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['AttachmentSize'], 'number'],
            [['NewsID'], 'required'],
            [['NewsID'], 'integer'],
            [['AttachmentName', 'SaveName', 'AttachmentType'], 'string', 'max' => 255],
            [['NewsID'], 'exist', 'skipOnError' => true, 'targetClass' => NewsModel::className(), 'targetAttribute' => ['NewsID' => 'NID']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'NAID' => Yii::t('app', 'Naid'),
            'AttachmentName' => Yii::t('app', 'Attachment Name'),
            'SaveName' => Yii::t('app', 'Save Name'),
            'AttachmentSize' => Yii::t('app', 'Attachment Size'),
            'AttachmentType' => Yii::t('app', 'Attachment Type'),
            'NewsID' => Yii::t('app', 'News ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNews()
    {
        return $this->hasOne(NewsModel::className(), ['NID' => 'NewsID']);
    }
}
