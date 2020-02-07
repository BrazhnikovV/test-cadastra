<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%cadastra}}`.
 */
class m200207_121703_create_cadastra_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%cadastra}}', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%cadastra}}');
    }
}
