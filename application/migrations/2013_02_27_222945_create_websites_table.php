<?php

class Create_Websites_Table {    
	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
    {
		Schema::create('websites', function($table) {
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->string('name', 200);
			$table->string('url', 200);
			$table->string('screenshot', 200);
		});
    }    
	
	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
    {
		Schema::drop('websites');
    }
}