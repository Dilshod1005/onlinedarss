<?php

use yii\db\Migration;

/**
 * Class m240322_062650_add_foreign_key_to_tulov_table
 */
class m240322_062650_add_foreign_key_to_tulov_table extends Migration
{
    public function safeUp()
    {
        $this->addForeignKey(
            'fk-tulov-user_id',
            'tulov',
            'user_id',
            'user',
            'id',
            'CASCADE'
        );
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk-tulov-user_id', 'tulov');
    }

}
