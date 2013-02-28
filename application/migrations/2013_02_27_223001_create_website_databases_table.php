<?php

class Create_Website_Databases_Table {    
	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
    {
		Schema::create('website_databases', function($table) {
			$table->increments('id');
			$table->integer('website_id')->unsigned();
			$table->string('server', 200);
			$table->string('database', 200);
			$table->string('username', 200);
			$table->text('password');
		});
    }    
	
	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
    {
		Schema::drop('website_databases');
    }
}