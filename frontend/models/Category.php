<?php

namespace app\models;

use Yii;


class Category extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%category}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['keywords', 'status'], 'string'],
            [['name'], 'string', 'max' => 255],
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
            'status' => Yii::t('app', 'Status'),
        ];
    }

    /**
     * Gets query for [[CategoryChildren]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategoryChildren()
    {
        return $this->hasMany(CategoryChild::class, ['category_id' => 'id']);
    }
}
