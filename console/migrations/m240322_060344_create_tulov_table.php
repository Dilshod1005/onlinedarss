<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%tulov}}`.
 */
class m240322_060344_create_tulov_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%tulov}}', [
            'id' => $this->primaryKey(),
            'user_id'=>$this->integer(),
            'courses_id'=>$this->integer(),
            'sum'=>$this->float(),
            'date'=>$this->date()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%tulov}}');
    }
}
