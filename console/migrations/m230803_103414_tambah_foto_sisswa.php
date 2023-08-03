<?php

use yii\db\Migration;

/**
 * Class m230803_103414_tambah_foto_sisswa
 */
class m230803_103414_tambah_foto_sisswa extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('siswa', 'foto_siswa', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230803_103414_tambah_foto_sisswa cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230803_103414_tambah_foto_sisswa cannot be reverted.\n";

        return false;
    }
    */
}
