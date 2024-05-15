<?php

use yii\db\Migration;

/**
 * Class m240509_092942_add_sum_to_courses_table
 */
class m240509_092942_add_sum_to_courses_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%courses}}', 'kurs_haqida', $this->text());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240509_092942_add_sum_to_courses_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240509_092942_add_sum_to_courses_table cannot be reverted.\n";

        return false;
    }
    */
}
