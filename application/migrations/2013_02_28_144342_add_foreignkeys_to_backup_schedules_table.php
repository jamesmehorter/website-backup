<?php

class Add_Foreignkeys_To_Backup_Schedules_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('backup_schedules', function($table) {
			$table->foreign('website_id')->references('id')->on('websites');
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('backup_schedules', function($table){
			$table->drop_index('backup_schedules_website_id_foreign');
			$table->drop_foreign('backup_schedules_website_id_foreign');
		});
	}
}