<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateResumesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contents', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('type')->default('client');
			$table->integer('section_id')->unsigned();
			$table->foreign('section_id')->references('id')->on('sections');
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users');
			$table->integer('resume_id')->unsigned();
			$table->foreign('resume_id')->references('id')->on('resumes');
			$table->integer('template_id')->unsigned();
			$table->foreign('template_id')->references('id')->on('templates');
			$table->string('content')->nullable();
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
		Schema::drop('contents');
	}

}
