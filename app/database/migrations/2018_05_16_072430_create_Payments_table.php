<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePaymentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Payments', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('resume_id')->unsigned();
			$table->foreign('resume_id')->references('id')->on('resumes');
			$table->integer('template_id')->unsigned();
			$table->foreign('template_id')->references('id')->on('templates');
			$table->double('cost', 5,2)->default(0);
			$table->double('amount_paid', 5,2)->default(0);
			$table->date('date_paid')->nullable();
			$table->string('channel')->default('mpesa');
			$table->string('transaction_code')->nullable();
			$table->string('phone_number')->nullable();
			$table->string('username')->nullable();
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
		Schema::drop('Payments');
	}

}
