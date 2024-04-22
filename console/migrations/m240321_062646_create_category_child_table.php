<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%category_child}}`.
 */
class m240321_062646_create_category_child_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%category_child}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'keywords' => $this->text(),
            'date'=>$this->date(),
            'category_id'=>$this->integer(),
            'status' => "ENUM('10','9') NOT NULL DEFAULT '10'",

        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%category_child}}');
    }
}
