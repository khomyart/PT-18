<?php

use yii\db\Migration;

/**
 * Class m200203_102249_add_column_town_to_bookings
 */
class m200203_102249_add_column_town_to_bookings extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('bookings', 'town', 'string not null');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('bookings', 'town');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200203_102249_add_column_town_to_bookings cannot be reverted.\n";

        return false;
    }
    */
}
