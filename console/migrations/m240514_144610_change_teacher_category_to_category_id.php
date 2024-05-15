<?php

use yii\db\Migration;

/**
 * Class m240514_144610_change_teacher_category_to_category_id
 */
class m240514_144610_change_teacher_category_to_category_id extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->renameColumn('{{%teacher}}', 'category', 'category_id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->renameColumn('{{%teacher}}', 'category_id', 'category');
    }


}
