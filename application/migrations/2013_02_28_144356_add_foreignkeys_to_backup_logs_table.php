<?php

class Add_Foreignkeys_To_Backup_Logs_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('backup_logs', function($table) {
			$table->foreign('website_id')->references('id')->on('websites');
			$table->foreign('backup_schedule_id')->references('id')->on('backup_schedules');
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('backup_logs', function($table){
			$table->drop_index('backup_logs_website_id_foreign');
			$table->drop_foreign('backup_logs_website_id_foreign');
			$table->drop_index('backup_logs_backup_schedule_id_foreign');
			$table->drop_foreign('backup_logs_backup_schedule_id_foreign');
		});
	}
}