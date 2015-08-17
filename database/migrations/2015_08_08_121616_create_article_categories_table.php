<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleCategoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('article_categories', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->timestamps();
		});

		Schema::create('articles_categories_pivot', function(Blueprint $table)
		{
			$table->integer('article_id')->unsigned();
			$table->integer('article_category_id')->unsigned();
			
			$table->foreign('article_id')->references('id')->on('articles')->onDelete('cascade');
			$table->foreign('article_category_id')->references('id')->on('article_categories')->onDelete('cascade');

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
		Schema::table('articles_categories_pivot', function(Blueprint $table)
		{
			$table->dropForeign('articles_categories_pivot_article_id_foreign');
			$table->dropForeign('articles_categories_pivot_article_category_id_foreign');
		});

		Schema::drop('article_categories');
		Schema::drop('articles_categories_pivot');
	}

}
