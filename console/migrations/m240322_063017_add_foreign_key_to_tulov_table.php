<?php

use yii\db\Migration;

/**
 * Class m240322_063017_add_foreign_key_to_tulov_table
 */
class m240322_063017_add_foreign_key_to_tulov_table extends Migration
{
    public function safeUp()
    {

        $this->addForeignKey(
            'fk-tulov-courses_id',
            '{{%tulov}}',
            'courses_id',
            '{{%courses}}',
            'id',
            'CASCADE'
        );
    }


    public function safeDown()
    {
        $this->dropForeignKey(
            'fk-tulov-courses_id',
            '{{%tulov}}'
        );
        
    }
}
