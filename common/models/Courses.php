<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "courses".
 *
 * @property int $id
 * @property string $name
 * @property string|null $keywords
 * @property string|null $date
 * @property string $status
 * @property int|null $category_child_id
 * @property int|null $sum
 * @property string|null $teacher
 * @property string|null $description
 *
 * @property CategoryChild $categoryChild
 * @property Tulov[] $tulovs
 */
class Courses extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'courses';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['keywords', 'status', 'description'], 'string'],
            [['date'], 'safe'],
            [['category_child_id', 'sum'], 'integer'],
            [['name', 'teacher'], 'string', 'max' => 255],
            [['category_child_id'], 'exist', 'skipOnError' => true, 'targetClass' => CategoryChild::class, 'targetAttribute' => ['category_child_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'keywords' => 'Keywords',
            'date' => 'Date',
            'status' => 'Status',
            'category_child_id' => 'Category Child ID',
            'sum' => 'Sum',
            'teacher' => 'Teacher',
            'description' => 'Description',
        ];
    }

    /**
     * Gets query for [[CategoryChild]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategoryChild()
    {
        return $this->hasOne(CategoryChild::class, ['id' => 'category_child_id']);
    }

    /**
     * Gets query for [[Tulovs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTulovs()
    {
        return $this->hasMany(Tulov::class, ['courses_id' => 'id']);
    }
}
