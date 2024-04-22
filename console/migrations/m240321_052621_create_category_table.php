<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%category}}`.
 */
class m240321_052621_create_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%category}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'keywords' => $this->text(),
            'status' => "ENUM('10','9') DEFAULT '10' notNULL ",

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%category}}');
    }
}
