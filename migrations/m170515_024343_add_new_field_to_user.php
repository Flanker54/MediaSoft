<?php

use yii\db\Migration;
use yii\db\Schema;

class m170515_024343_add_new_field_to_user extends Migration
{
    public function up()
    {
	$this->addColumn('{{%user}}', 'status', Schema::TYPE_STRING);
    }

    public function down()
    {
	$this->dropColumn('{{%user}}', 'status');
        return false;
    }
}
