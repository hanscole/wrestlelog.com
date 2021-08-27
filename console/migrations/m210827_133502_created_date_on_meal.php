<?php

use yii\db\Migration;

/**
 * Class m210827_133502_created_date_on_meal
 */
class m210827_133502_created_date_on_meal extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->dropColumn('{{%meal_log}}', 'created_date');
        $this->addColumn('{{%meal_log}}', 'created_date',
            $this->dateTime()->notNull()->defaultExpression('CURRENT_TIMESTAMP'));

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210827_133502_created_date_on_meal cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210827_133502_created_date_on_meal cannot be reverted.\n";

        return false;
    }
    */
}
