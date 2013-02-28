<?php

class Create_Backup_Logs_Table {    

	public function up()
    {
		Schema::create('backup_logs', function($table) {
			$table->increments('id');
			$table->integer('website_id')->unsigned();
			$table->integer('backup_schedule_id')->unsigned();
			$table->integer('status');
			$table->date('created_at');
			$table->date('updated_at');
		});
    }    

	public function down()
    {
		Schema::drop('backup_logs');
    }
}