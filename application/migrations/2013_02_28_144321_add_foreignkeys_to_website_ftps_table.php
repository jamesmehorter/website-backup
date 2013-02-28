<?php

class Add_Foreignkeys_To_Website_Ftps_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('website_ftps', function($table) {
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
		Schema::table('website_ftps', function($table){
			$table->drop_index('website_ftps_website_id_foreign');
			$table->drop_foreign('website_ftps_website_id_foreign');
		});
	}
}