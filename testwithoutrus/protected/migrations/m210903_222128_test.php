<?php

class m210903_222128_test extends CDbMigration
{
	public function up()
	{
        $this -> createTable('tbl_news', array(
            'id' => 'pk',
            'title' => 'string NOT NULL',
            'content' => 'text',
        ));
	}

	public function down()
	{
        $this -> dropTable('tbl_news');
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}