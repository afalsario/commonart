<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserTable extends Migration {

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
			$table->string('name', 100);
			$table->boolean('isAdmin');
			$table->string('email', 100)->unique();
			$table->string('password', 100);
			$table->string('img_path', 200)->nullable();
			$table->string('title', 100)->nullable();
			$table->string('mediums', 100);
			$table->text('about_me', 1000);
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
