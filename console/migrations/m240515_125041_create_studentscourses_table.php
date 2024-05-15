<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%studentscourses}}`.
 */
class m240515_125041_create_studentscourses_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%studentscourses}}', [
            'id' => $this->primaryKey(),
            'students_id'=>$this->integer(),
            'courses_id'=>$this->integer(),
            'create_ad'=>$this->date(),
            'update_ad'=>$this->date(),
        ]);
    }


    public function safeDown()
    {
        $this->dropTable('{{%studentscourses}}');
    }
}
