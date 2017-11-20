<?php

namespace backend\modules\api\v1\models\teachers;

use Yii;

/**
 * This is the model class for table "cc_teacher".
 *
 * @property integer $TID
 * @property string $account
 * @property string $password
 * @property string $TeacherName
 * @property string $Sex
 * @property string $Nation
 * @property string $GraduationSchool
 * @property integer $DID
 * @property integer $SID
 * @property string $IDNumber
 * @property string $Birthday
 * @property string $Email
 * @property string $Phone
 * @property string $OfficePhone
 * @property string $OfficeAddress
 * @property integer $FullTimeTeacher
 * @property string $HireDate
 * @property integer $AdministrativePost
 * @property integer $PositionalPost
 * @property string $PoliticalVisage
 * @property integer $DegreeID
 * @property string $OtherTitles
 * @property string $ResearchDirection
 * @property string $PersonalProfile
 * @property string $PersonalAchievements
 * @property string $SocialAppointments
 * @property string $CoursesGiven
 *
 * @property CcLessonTeacher[] $ccLessonTeachers
 * @property CcLesson[] $lessons
 * @property CcMajor[] $ccMajors
 * @property CcMajor[] $ccMajors0
 * @property CcMajor[] $ccMajors1
 * @property CcNews[] $ccNews
 * @property CcProject[] $ccProjects
 * @property CcStudent[] $ccStudents
 * @property CcDepartment $d
 * @property CcSubject $s
 */
class TeachersModel extends \backend\modules\api\v1\models\base\BaseModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cc_teacher';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Sex'], 'required'],
            [['DID', 'SID', 'FullTimeTeacher', 'AdministrativePost', 'PositionalPost', 'DegreeID'], 'integer'],
            [['Birthday', 'HireDate'], 'safe'],
            [['PersonalProfile', 'PersonalAchievements', 'SocialAppointments', 'CoursesGiven'], 'string'],
            [['account'], 'string', 'max' => 11],
            [['password', 'TeacherName', 'GraduationSchool', 'Email', 'PoliticalVisage', 'OtherTitles', 'ResearchDirection'], 'string', 'max' => 255],
            [['Sex'], 'string', 'max' => 2],
            [['Nation'], 'string', 'max' => 15],
            [['IDNumber'], 'string', 'max' => 18],
            [['Phone'], 'string', 'max' => 12],
            [['OfficePhone', 'OfficeAddress'], 'string', 'max' => 20],
            [['DID'], 'exist', 'skipOnError' => true, 'targetClass' => CcDepartment::className(), 'targetAttribute' => ['DID' => 'DID']],
            [['SID'], 'exist', 'skipOnError' => true, 'targetClass' => CcSubject::className(), 'targetAttribute' => ['SID' => 'SID']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'TID' => Yii::t('app', 'Tid'),
            'account' => Yii::t('app', 'Account'),
            'password' => Yii::t('app', 'Password'),
            'TeacherName' => Yii::t('app', 'Teacher Name'),
            'Sex' => Yii::t('app', 'Sex'),
            'Nation' => Yii::t('app', 'Nation'),
            'GraduationSchool' => Yii::t('app', 'Graduation School'),
            'DID' => Yii::t('app', 'Did'),
            'SID' => Yii::t('app', 'Sid'),
            'IDNumber' => Yii::t('app', 'Idnumber'),
            'Birthday' => Yii::t('app', 'Birthday'),
            'Email' => Yii::t('app', 'Email'),
            'Phone' => Yii::t('app', 'Phone'),
            'OfficePhone' => Yii::t('app', 'Office Phone'),
            'OfficeAddress' => Yii::t('app', 'Office Address'),
            'FullTimeTeacher' => Yii::t('app', 'Full Time Teacher'),
            'HireDate' => Yii::t('app', 'Hire Date'),
            'AdministrativePost' => Yii::t('app', 'Administrative Post'),
            'PositionalPost' => Yii::t('app', 'Positional Post'),
            'PoliticalVisage' => Yii::t('app', 'Political Visage'),
            'DegreeID' => Yii::t('app', 'Degree ID'),
            'OtherTitles' => Yii::t('app', 'Other Titles'),
            'ResearchDirection' => Yii::t('app', 'Research Direction'),
            'PersonalProfile' => Yii::t('app', 'Personal Profile'),
            'PersonalAchievements' => Yii::t('app', 'Personal Achievements'),
            'SocialAppointments' => Yii::t('app', 'Social Appointments'),
            'CoursesGiven' => Yii::t('app', 'Courses Given'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCcLessonTeachers()
    {
        return $this->hasMany(CcLessonTeacher::className(), ['TeacherID' => 'TID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLessons()
    {
        return $this->hasMany(CcLesson::className(), ['LID' => 'LessonID'])->viaTable('cc_lesson_teacher', ['TeacherID' => 'TID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCcMajors()
    {
        return $this->hasMany(CcMajor::className(), ['MajorManagerID_fir' => 'TID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCcMajors0()
    {
        return $this->hasMany(CcMajor::className(), ['MajorManagerID_sec' => 'TID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCcMajors1()
    {
        return $this->hasMany(CcMajor::className(), ['MajorManagerID_thr' => 'TID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCcNews()
    {
        return $this->hasMany(CcNews::className(), ['AuthorID' => 'TID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCcProjects()
    {
        return $this->hasMany(CcProject::className(), ['ChargeID' => 'TID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCcStudents()
    {
        return $this->hasMany(CcStudent::className(), ['TutorID' => 'TID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getD()
    {
        return $this->hasOne(CcDepartment::className(), ['DID' => 'DID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getS()
    {
        return $this->hasOne(CcSubject::className(), ['SID' => 'SID']);
    }
}
