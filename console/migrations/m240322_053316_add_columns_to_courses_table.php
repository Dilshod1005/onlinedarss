<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%courses}}`.
 */
class m240322_053316_add_columns_to_courses_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%courses}}', 'sum', $this->integer());
        $this->addColumn('{{%courses}}', 'teacher', $this->string());
        $this->addColumn('{{%courses}}', 'file', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%courses}}', 'sum');
        $this->dropColumn('{{%courses}}', 'teacher');
        $this->dropColumn('{{%courses}}', 'file');
    }
}
