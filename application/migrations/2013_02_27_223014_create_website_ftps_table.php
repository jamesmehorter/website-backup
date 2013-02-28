<?php

class Create_Website_Ftps_Table {    

	public function up()
    {
		Schema::create('website_ftps', function($table) {
			$table->increments('id');
			$table->integer('website_id')->unsigned();
			$table->string('server', 100);
			$table->integer('port');
			$table->string('path', 200);
			$table->string('username', 100);
			$table->integer('protocol');
			$table->text('password');
			$table->integer('alternate');
		});
    }    

	public function down()
    {
		Schema::drop('website_ftps');
    }
}