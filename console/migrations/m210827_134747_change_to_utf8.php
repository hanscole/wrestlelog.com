<?php

use yii\db\Migration;

/**
 * Class m210827_134747_change_to_utf8
 */
class m210827_134747_change_to_utf8 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        preg_match("/dbname=([^;]*)/", $this->db->dsn, $matches);
        $this->execute('ALTER DATABASE ' . $matches[1] . ' CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci');

        $tables =['practice_log', 'meal_log', 'notes'];
        foreach ($tables as $table) {
            //ALTER TABLE mytable CONVERT TO CHARACTER SET utf8mb4
            $this->execute('ALTER TABLE ' . $table . ' CONVERT TO CHARACTER SET utf8mb4');
        }
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210827_134747_change_to_utf8 cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210827_134747_change_to_utf8 cannot be reverted.\n";

        return false;
    }
    */
}
