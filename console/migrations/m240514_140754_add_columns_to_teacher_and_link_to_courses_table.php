<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%teacher_and_link_to_courses}}`.
 */
class m240514_140754_add_columns_to_teacher_and_link_to_courses_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%teacher}}', 'img', $this->string());
        $this->addColumn('{{%teacher}}', 'courses_id', $this->integer());

        // Courses jadvaliga bog'lanish
        $this->addForeignKey('fk-teacher-courses_id', '{{%teacher}}', 'courses_id', '{{%courses}}', 'id', 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%teacher}}', 'img');
        $this->dropColumn('{{%teacher}}', 'courses_id');

        // Bog'lanishni olib tashlash
        $this->dropForeignKey('fk-teacher-courses_id', '{{%teacher}}');
    }
}
