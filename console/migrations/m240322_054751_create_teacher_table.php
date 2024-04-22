<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%teacher}}`.
 */
class m240322_054751_create_teacher_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%teacher}}', [
            'id' => $this->primaryKey(),
            'fullname' => $this->string()->notNull(),
            'email' => $this->string()->notNull()->unique(),
            'password' => $this->string()->notNull(),
            'category_id'=>$this->integer(),
            'age'=>$this->integer(),
            'date'=>$this->date(),
            'status' => "ENUM('10','9') NOT NULL DEFAULT '10'",
            'jinsi' => "ENUM('erkak','ayol') NOT NULL ",
            'malumoti'=>$this->string(),
            'manzili'=>$this->string(),
            'keywords'=>$this->text(),
            'fayl'=>$this->string()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%teacher}}');
    }
}
