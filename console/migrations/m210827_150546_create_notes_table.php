<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%notes}}`.
 */
class m210827_150546_create_notes_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('{{%notes}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(11)->notNull(),
            'note' => $this->string(6000),
            'created_date' => $this->dateTime()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%notes}}');
    }
}
