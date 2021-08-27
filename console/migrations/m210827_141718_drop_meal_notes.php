<?php

use yii\db\Migration;

/**
 * Class m210827_141718_drop_meal_notes
 */
class m210827_141718_drop_meal_notes extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropTable('{{%notes}}');
        $this->dropTable('{{%meal_log}}');


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210827_141718_drop_meal_notes cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210827_141718_drop_meal_notes cannot be reverted.\n";

        return false;
    }
    */
}
