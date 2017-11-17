<?php

namespace backend\modules\api\v1\models\news;

use Yii;
use \backend\modules\api\v1\models\base\BaseModel;
/**
 * This is the model class for table "cc_news_type".
 *
 * @property integer $NTID
 * @property string $NewsType
 *
 * @property CcNews[] $ccNews
 */
class NewsTypeModel extends BaseModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cc_news_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['NewsType'], 'required'],
            [['NewsType'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'NTID' => Yii::t('app', 'Ntid'),
            'NewsType' => Yii::t('app', 'News Type'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCcNews()
    {
        return $this->hasMany(CcNews::className(), ['TypeID' => 'NTID']);
    }
}
