<?php

use yii\db\Migration;

/**
 * Class m240513_115256_change_courses_table
 */
class m240513_115256_change_courses_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        // "file_nom" ustunini o'chirish
        $this->dropColumn('{{%courses}}', 'file');
        // "kurs_haqida" ustunini "description" ga o'zgartirish
        $this->renameColumn('{{%courses}}', 'kurs_haqida', 'description');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240513_115256_change_courses_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240513_115256_change_courses_table cannot be reverted.\n";

        return false;
    }
    */
}
