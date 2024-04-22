<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%courses}}`.
 */
class m240321_083312_create_courses_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%courses}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'keywords' => $this->text(),
            'date'=>$this->date(),
            'category_id'=>$this->integer(),
            'status' => "ENUM('10','9') NOT NULL DEFAULT '10'",
            'category_child_id'=>$this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%courses}}');
    }
}
