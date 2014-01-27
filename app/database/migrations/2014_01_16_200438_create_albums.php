<?php

use Illuminate\Database\Migrations\Migration;

class CreateAlbums extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('albums', function($table)
		{
			$table->increments('id');
			$table->string('title', 256);
			$table->string('artist', 256);
			$table->string('genre', 128);
			$table->integer('year');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('albums');
	}

}