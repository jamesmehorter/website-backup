<?php

class Create_Users_Table {
	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($table) {
		    $table->increments('id');
		    $table->string('name', 25);
		    $table->string('email', 200);
		    $table->text('password');
		    $table->integer('status');
		    $table->timestamps();
		    $table->date('last_seen');
		});
	}
	
	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}
}