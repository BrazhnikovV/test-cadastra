<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%news}}`.
 */
class m200207_115146_create_news_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        // yii migrate --migrationPath=@app/modules/forum/migrations --interactive=0
        $this->createTable('{{%news}}', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%news}}');
    }
}
