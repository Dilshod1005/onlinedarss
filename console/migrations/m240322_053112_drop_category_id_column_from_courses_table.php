<?php

use yii\db\Migration;

/**
 * Handles dropping columns from table `{{%courses}}`.
 */
class m240322_053112_drop_category_id_column_from_courses_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('{{%courses}}', 'category_id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->addColumn('{{%courses}}', 'category_id', $this->integer());
    }
}
