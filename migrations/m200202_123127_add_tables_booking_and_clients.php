<?php

use yii\db\Migration;

/**
 * Class m200202_123127_add_tables_booking_and_clients
 */
class m200202_123127_add_tables_booking_and_clients extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTableBooking();
        $this->createTableClients();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTableBookings();
        $this->dropTableClients();
    }

    protected function createTableBooking() {
        $this->createTable('bookings', [
                'id'            => $this->primaryKey(11)->unsigned()->notNull(),
                'client_id'     => $this->integer(11)->unsigned()->notNull(),
                'total'         => $this->decimal(12,2)->unsigned()->defaultValue(0)->notNull(),
                'create_time'   => $this->timestamp()->notNull(),
                'date_from'     => $this->date()->notNull(),
                'date_to'       => $this->date()->notNull(),
        ]);
    }

    protected function dropTableBookings() {
        $this->dropTable('bookings');
    }

    protected function createTableClients() {
        $this->createTable('clients', [
            'id'            => $this->primaryKey(11)->unsigned()->notNull(),
            'first_name'    => $this->string(128)->defaultValue('')->notNull(),
            'last_name'     => $this->string(128)->defaultValue('')->notNull(),
            'email'         => $this->string(128)->defaultValue('')->notNull(),
            'phone'         => $this->string(64)->defaultValue('')->notNull(),
        ]);
    }

    protected function dropTableClients() {
        $this->dropTable('clients');
    }
    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200202_123127_add_tables_booking_and_clients cannot be reverted.\n";

        return false;
    }
    */
}
