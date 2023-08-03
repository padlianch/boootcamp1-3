<?php

use yii\db\Migration;

/**
 * Class m230803_114023_goto_gutu
 */
class m230803_114023_goto_gutu extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('guru', 'foto_guru', $this->string());

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230803_114023_goto_gutu cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230803_114023_goto_gutu cannot be reverted.\n";

        return false;
    }
    */
}
