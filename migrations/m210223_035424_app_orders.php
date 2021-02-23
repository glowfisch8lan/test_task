<?php

use yii\db\Migration;

/**
 * Class m210223_035424_app_orders
 */
class m210223_035424_app_orders extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('app_orders', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->unique()->notNull(),
            'email' => $this->char(255)->unique()->notNull(),
            'phone' => $this->char(16)->unique()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210223_035424_app_orders cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210223_035424_app_orders cannot be reverted.\n";

        return false;
    }
    */
}
