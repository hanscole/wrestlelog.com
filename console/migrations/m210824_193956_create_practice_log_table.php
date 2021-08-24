<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%practice_log}}`.
 */
class m210824_193956_create_practice_log_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%practice_log}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(11)->notNull(),
            'date' => $this->dateTime()->notNull(),
            'hours' => $this->integer(11),
            'minutes' => $this->integer(11),
            'created_date' => $this->dateTime(),


        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%practice_log}}');
    }
}
