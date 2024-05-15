<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%teacher}}".
 *
 * @property int $id
 * @property string $fullname
 * @property string $email
 * @property string $password
 * @property string|null $category_id
 * @property int|null $age
 * @property string|null $date
 * @property string $status
 * @property string $jinsi
 * @property string|null $malumoti
 * @property string|null $manzili
 * @property string|null $keywords
 * @property string|null $fayl
 * @property string|null $img
 * @property int|null $courses_id
 *
 * @property Courses $courses
 */
class Teacher extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%teacher}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fullname', 'email', 'password', 'jinsi'], 'required'],
            [['age', 'courses_id'], 'integer'],
            [['date'], 'safe'],
            [['status', 'jinsi', 'keywords'], 'string'],
            [['fullname', 'email', 'password', 'category_id', 'malumoti', 'manzili', 'fayl', 'img'], 'string', 'max' => 255],
            [['email'], 'unique'],
            [['courses_id'], 'exist', 'skipOnError' => true, 'targetClass' => Courses::class, 'targetAttribute' => ['courses_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'fullname' => Yii::t('app', 'Fullname'),
            'email' => Yii::t('app', 'Email'),
            'password' => Yii::t('app', 'Password'),
            'category_id' => Yii::t('app', 'Category ID'),
            'age' => Yii::t('app', 'Age'),
            'date' => Yii::t('app', 'Date'),
            'status' => Yii::t('app', 'Status'),
            'jinsi' => Yii::t('app', 'Jinsi'),
            'malumoti' => Yii::t('app', 'Malumoti'),
            'manzili' => Yii::t('app', 'Manzili'),
            'keywords' => Yii::t('app', 'Keywords'),
            'fayl' => Yii::t('app', 'Fayl'),
            'img' => Yii::t('app', 'Img'),
            'courses_id' => Yii::t('app', 'Courses ID'),
        ];
    }

    /**
     * Gets query for [[Courses]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCourses()
    {
        return $this->hasOne(Courses::class, ['id' => 'courses_id']);
    }
}
