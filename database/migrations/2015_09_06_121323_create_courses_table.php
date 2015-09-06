<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('courses', function(Blueprint $table)
		{
			$table->string('id')->unique();
            $table->string('id_1');
            $table->string('id_2');
            $table->string('id_3');
            $table->string('id_4');
            $table->string('name');
            $table->string('author');
            $table->string('introduction');
            $table->string('body');
            $table->string('pay_type');
            $table->string('score');
            $table->string('ava_dir');
            $table->string('vid_dir');
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
		Schema::drop('courses');
	}

}
