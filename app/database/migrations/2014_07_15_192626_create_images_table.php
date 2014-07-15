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
		Schema::table('images', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('img_title', 100);
			$table->string('img_path', 200)->nullable();
			$table->integer('img_id')->unsigned();
		    $table->foreign('img_id')->references('id')->on('profiles');
			$table->string('img_desc', 200);
			$table->decimal('price', 6, 2);
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
		 Schema::drop('images');
	}

}
