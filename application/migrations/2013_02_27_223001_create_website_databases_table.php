<?php

class Create_Website_Databases_Table {    

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

	public function down()
    {
		Schema::drop('website_databases');
    }
}