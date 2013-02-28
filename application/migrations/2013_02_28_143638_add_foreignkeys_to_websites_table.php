<?php

class Add_Foreignkeys_To_Websites_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('websites', function($table) {
			$table->foreign('user_id')->references('id')->on('users');
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('websites', function($table){
			$table->drop_index('websites_user_id_foreign');
			$table->drop_foreign('websites_user_id_foreign');
		});
	}
}