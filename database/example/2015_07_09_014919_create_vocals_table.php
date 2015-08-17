<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVocalsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vocals', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('candidate_id')->unsigned();
			$table->string('range');
			$table->string('voice_type');
			$table->integer('hearing');
			$table->integer('sight_reading');
			$table->integer('part_singing');
			$table->string('description');
			$table->float('total_vocal');
			$table->timestamps();

			$table->foreign('candidate_id')->references('id')->on('candidates')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('vocals');
	}

}
