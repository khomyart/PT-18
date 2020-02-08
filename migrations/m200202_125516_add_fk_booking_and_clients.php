<?php

use yii\db\Migration;

/**
 * Class m200202_125516_add_fk_booking_and_clients
 */
class m200202_125516_add_fk_booking_and_clients extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addForeignKey(
            'fk_bookings_clients',
            'bookings',
            'client_id',
            'clients',
            'id',
            'RESTRICT',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_booking_clients','bookings');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200202_125516_add_fk_booking_and_clients cannot be reverted.\n";

        return false;
    }
    */
}
