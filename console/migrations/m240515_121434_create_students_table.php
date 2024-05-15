<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%students}}`.
 */
class m240515_121434_create_students_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%students}}', [
            'id' => $this->primaryKey(),
            'first_name' => $this->string(),
            'last_name' => $this->string(),
            'phone' => $this->integer(),
            'middle_name' => $this->integer(),
            'email' => $this->string(),
            'position' => $this->string(),
            'age' => $this->integer(),
            'gender' => "ENUM('male','female')",
            'education_level' => $this->string(),
            'Address' => $this->string(),
            'biography' => $this->string(),
            'img' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%students}}');
    }
}
