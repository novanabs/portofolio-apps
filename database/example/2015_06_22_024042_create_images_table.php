<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('images', function(Blueprint $table)
		{
			$table->increments('id');
     		//$table->integer('user_id')->unsigned();
         	$table->string('file');
         	$table->string('caption');
         	$table->text('description');
         	//$table->morphs('imageable');
         	$table->timestamps();

         	//$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
     
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('images');
	}

}
