<?php

use yii\db\Migration;

/**
 * Class m210827_134010_drop_date_on_practice
 */
class m210827_134010_drop_date_on_practice extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
$this->dropColumn('{{%practice_log}}', 'date');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210827_134010_drop_date_on_practice cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210827_134010_drop_date_on_practice cannot be reverted.\n";

        return false;
    }
    */
}
