<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	public function up()
	{
		Schema::create('users', function(Blueprint $table) {
			$table->increments('id');
			$table->string('username', 6);
			$table->string('password');
			$table->string('email');
			$table->boolean('admin');
			$table->rememberToken();
		});
	}

	public function down()
	{
		Schema::drop('users');
	}
}