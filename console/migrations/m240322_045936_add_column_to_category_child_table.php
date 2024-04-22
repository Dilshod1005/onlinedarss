<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%category_child}}`.
 */
class m240322_045936_add_column_to_category_child_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%category_child}}', 'file', $this->text());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%category_child}}', 'file');
    }
}
