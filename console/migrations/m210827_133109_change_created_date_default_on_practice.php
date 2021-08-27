<?php

use yii\db\Migration;

/**
 * Class m210827_133109_change_created_date_default_on_practice
 */
class m210827_133109_change_created_date_default_on_practice extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('{{%practice_log}}', 'created_date');
        $this->addColumn('{{%practice_log}}', 'created_date',
            $this->dateTime()->notNull()->defaultExpression('CURRENT_TIMESTAMP'));

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210827_133109_change_created_date_default_on_practice cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210827_133109_change_created_date_default_on_practice cannot be reverted.\n";

        return false;
    }
    */
}
