<?php

use yii\db\Migration;

/**
 * Class m240321_083602_add_foreign_key_to_courses_table
 */
class m240321_083602_add_foreign_key_to_courses_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addForeignKey(
            'fk-courses-category_child_id', // Qo'shish nomi
            'courses',                       // Asosiy jadva nomi
            'category_child_id',             // Qo'shish uchun ustun nomi
            'category_child',                // Manba jadva nomi
            'id',                            // Manba ustun nomi
            'CASCADE',                       // O'chirilganda qo'shimcha amal
            'CASCADE'                        // O'chirilganda qo'shimcha amal
        );
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk-courses-category_child_id', 'courses');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240321_083602_add_foreign_key_to_courses_table cannot be reverted.\n";

        return false;
    }
    */
}
