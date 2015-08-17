<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInterviewsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('interviews', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('candidate_id')->unsigned();
			$table->integer('leadership');
			$table->integer('solidarity');
			$table->integer('personality');
			$table->integer('problem_solving');
			$table->integer('seriousness');
			$table->integer('finance');
			$table->float('total_interview');
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
		Schema::drop('interviews');
	}

}
