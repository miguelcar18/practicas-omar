<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

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
			$table->integer('id', true);
			$table->integer('is_hidden')->default(0);
			$table->string('email')->nullable();
			$table->string('username')->nullable();
			$table->string('password')->nullable();
			$table->string('remember_token', 100)->nullable();
			$table->string('activation_token')->nullable();
			$table->string('provider', 50)->nullable();
			$table->string('provider_unique_id', 100)->nullable();
			$table->string('status')->nullable();
			$table->timestamps();
			$table->dateTime('last_login')->nullable();
			$table->string('last_login_ip', 64)->nullable();
			$table->dateTime('last_login_now')->nullable();
			$table->string('last_login_ip_now', 64)->nullable();
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
