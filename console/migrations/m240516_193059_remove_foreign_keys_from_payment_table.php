<?php

use yii\db\Migration;

/**
 * Class m240516_193059_remove_foreign_keys_from_payment_table
 */
class m240516_193059_remove_foreign_keys_from_payment_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addForeignKey(
            'fk_students_id',
            'payment',
            'students_id',
            'students',
            'id',
            'CASCADE'
        );
        $this->addForeignKey(
            'fk_courses_id',
            'payment',
            'courses_id',
            'courses',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_students_id', 'payment');
        $this->dropForeignKey('fk_courses_id', 'payment');

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240516_193059_remove_foreign_keys_from_payment_table cannot be reverted.\n";

        return false;
    }
    */
}
