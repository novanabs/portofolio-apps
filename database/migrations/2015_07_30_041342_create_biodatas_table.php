<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBiodatasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('profiles', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->string('full_name');
			$table->string('photo');
			$table->string('birthplace');
			$table->date('birthday');
			$table->string('domisili');
			$table->string('gender');
			$table->string('religion');
			$table->string('status');
			$table->string('occupation');
			$table->string('phone_number');
			$table->string('email');
			$table->timestamps();

		
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('profiles');
	}

}
