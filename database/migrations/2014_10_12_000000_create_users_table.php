<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			
			$table->increments('id');
			$table->string('name');
			$table->string('email')->unique();
			$table->string('password', 60);
			$table->boolean('is_admin')->default(0);
			$table->boolean('pay_type')->default('0');
			$table->string('avatar')->default('');
			$table->string('position')->default('');
			$table->integer('followers')->default(0);
			$table->integer('followings')->default(0);
			$table->string('phone')->default('');  #手机 默认为空(不是可以为空,值为'')
        	$table->string('sex')->default('');    #性别 同上
			$table->rememberToken();
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
		Schema::drop('users');
	}

}
