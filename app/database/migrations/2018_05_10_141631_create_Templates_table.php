<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTemplatesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Templates', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->double('cost', 5,2)->default(0);
			$table->string('thumb')->nullable();
			$table->string('layout')->default('default');
			$table->integer('use_count')->default(0);
			$table->string('border_top_type')->nullable();
			$table->string('border_top_size')->nullable();
			$table->string('border_top_color')->nullable();
			$table->string('border_bottom_type')->nullable();
			$table->string('border_bottom_size')->nullable();
			$table->string('border_bottom_color')->nullable();
			$table->string('border_right_type')->nullable();
			$table->string('border_right_size')->nullable();
			$table->string('border_right_color')->nullable();
			$table->string('border_left_type')->nullable();
			$table->string('border_left_size')->nullable();
			$table->string('border_left_color')->nullable();
			$table->string('text_body_color')->nullable();
			$table->string('text_body_fontsize')->nullable();
			$table->string('text_body_fontfamily')->nullable();
			$table->string('text_body_fontweight')->nullable();
			$table->string('text_header_color')->nullable();
			$table->string('text_header_fontsize')->nullable();
			$table->string('text_header_fontfamily')->nullable();
			$table->string('text_header_fontweight')->nullable();
			$table->boolean('is_disabled')->default(0);
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
		Schema::drop('Templates');
	}

}
