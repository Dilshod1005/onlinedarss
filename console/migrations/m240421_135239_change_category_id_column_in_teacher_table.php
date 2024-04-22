<?php

use yii\db\Migration;

/**
 * Class m240421_135239_change_category_id_column_in_teacher_table
 */
class m240421_135239_change_category_id_column_in_teacher_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->renameColumn('{{%teacher}}', 'category_id', 'category');
        $this->alterColumn('{{%teacher}}', 'category', $this->string(255));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240421_135239_change_category_id_column_in_teacher_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240421_135239_change_category_id_column_in_teacher_table cannot be reverted.\n";

        return false;
    }
    */
}
