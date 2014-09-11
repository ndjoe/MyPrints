<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProfilesTable extends Migration {

	public function up()
	{
		Schema::create('profiles', function(Blueprint $table) {
			$table->increments('id');
			$table->string('username', 6);
			$table->string('alamat');
			$table->string('nohp');
			$table->string('pathfoto');
		});
	}

	public function down()
	{
		Schema::drop('profiles');
	}
}