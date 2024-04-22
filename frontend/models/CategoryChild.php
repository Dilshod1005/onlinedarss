<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%category_child}}".
 *
 * @property int $id
 * @property string $name
 * @property string|null $keywords
 * @property string|null $date
 * @property int|null $category_id
 * @property string $status
 * @property string|null $file
 *
 * @property Category $category
 * @property Courses[] $courses
 */
class CategoryChild extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%category_child}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['keywords', 'status', 'file'], 'string'],
            [['date'], 'safe'],
            [['category_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::class, 'targetAttribute' => ['category_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'keywords' => Yii::t('app', 'Keywords'),
            'date' => Yii::t('app', 'Date'),
            'category_id' => Yii::t('app', 'Category ID'),
            'status' => Yii::t('app', 'Status'),
            'file' => Yii::t('app', 'File'),
        ];
    }

    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::class, ['id' => 'category_id']);
    }

    /**
     * Gets query for [[Courses]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCourses()
    {
        return $this->hasMany(Courses::class, ['category_child_id' => 'id']);
    }
}
