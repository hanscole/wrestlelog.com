<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%meal_log}}`.
 */
class m210824_202351_create_meal_log_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%meal_log}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(11)->notNull(),
            'meal' => $this->string(1024),
            'created_date' => $this->dateTime(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%meal_log}}');
    }
}
