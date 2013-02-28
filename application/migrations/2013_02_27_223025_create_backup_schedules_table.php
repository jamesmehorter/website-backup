<?php

class Create_Backup_Schedules_Table {    

	public function up()
    {
		Schema::create('backup_schedules', function($table) {
			$table->increments('id');
			$table->integer('website_id')->unsigned();
			$table->integer('frequency');
			$table->string('interval');
			$table->date('created_at');
			$table->date('updated_at');
		});
    }    

	public function down()
    {
		Schema::drop('backup_schedules');
    }
}