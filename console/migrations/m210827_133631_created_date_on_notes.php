<?php

use yii\db\Migration;

/**
 * Class m210827_133631_created_date_on_notes
 */
class m210827_133631_created_date_on_notes extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->dropColumn('{{%notes}}', 'created_at');
        $this->addColumn('{{%notes}}', 'created_date',
            $this->dateTime()->notNull()->defaultExpression('CURRENT_TIMESTAMP'));

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210827_133631_created_date_on_notes cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210827_133631_created_date_on_notes cannot be reverted.\n";

        return false;
    }
    */
}
