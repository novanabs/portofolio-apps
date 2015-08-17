<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppCategoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('app_categories', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->timestamps();
		});

		Schema::create('apps_categories_pivot', function(Blueprint $table)
		{
			$table->integer('application_id')->unsigned();
			$table->integer('app_category_id')->unsigned();
			
			$table->foreign('application_id')->references('id')->on('applications')->onDelete('cascade');
			$table->foreign('app_category_id')->references('id')->on('app_categories')->onDelete('cascade');

			$table->timestamps();
		});


	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('apps_categories_pivot', function(Blueprint $table)
		{
			$table->dropForeign('apps_categories_pivot_application_id_foreign');
			$table->dropForeign('apps_categories_pivot_app_category_id_foreign');
		});
		
		Schema::drop('app_categories');
		Schema::drop('apps_categories_pivot');
	}

}
