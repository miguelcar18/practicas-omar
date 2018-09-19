<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProfilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('profiles', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('user_id')->nullable()->index('user_id');
			$table->string('first_name')->nullable();
			$table->string('last_name')->nullable();
			$table->string('avatar', 100)->nullable();
			$table->date('date_of_birth')->nullable();
			$table->string('work_phone', 20)->nullable();
			$table->string('work_phone_extension', 5)->nullable();
			$table->string('mobile', 20)->nullable();
			$table->string('home', 20)->nullable();
			$table->string('address_line_1')->nullable();
			$table->string('address_line_2')->nullable();
			$table->string('city')->nullable();
			$table->string('state')->nullable();
			$table->string('zipcode', 20)->nullable();
			$table->string('country_id', 10)->nullable();
			$table->string('facebook', 100)->nullable();
			$table->string('twitter', 100)->nullable();
			$table->string('google_plus', 100)->nullable();
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
		Schema::drop('profiles');
	}

}
