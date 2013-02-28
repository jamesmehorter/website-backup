<?php

class Create_Users_Table {

	public function up()
	{
		Schema::create('users', function($table) {
		    $table->increments('id');
		    $table->string('email', 200);
		    $table->text('password');
		    $table->date('created_at');
		    $table->date('last_seen');
		});
	}

	public function down()
	{
		Schema::drop('users');
	}
}