<?php

namespace backend\modules\api\v1\models\news;

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
 * @property CcTeacher $author
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
            [['AuthorID'], 'exist', 'skipOnError' => true, 'targetClass' => CcTeacher::className(), 'targetAttribute' => ['AuthorID' => 'TID']],
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
        return $this->hasOne(CcTeacher::className(), ['TID' => 'AuthorID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCcNewsAttachments()
    {
        return $this->hasMany(NewsAttachmentModel::className(), ['NewsID' => 'NID']);
    }
}
