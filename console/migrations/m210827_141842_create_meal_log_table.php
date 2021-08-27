<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%meal_log}}`.
 */
class m210827_141842_create_meal_log_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    { $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('{{%meal_log}}', [
            'id' => $this->primaryKey(),
            'user_id' =>$this->integer(11)->notNull(),
            'meal' => $this->string(512)->notNull(),
            'created_date' => $this->dateTime()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%meal_log}}');
    }
}
