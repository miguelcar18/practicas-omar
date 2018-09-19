<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomFieldsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('custom_fields', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('form', 200)->nullable();
			$table->string('name', 200)->nullable();
			$table->string('title', 200)->nullable();
			$table->string('type', 50)->nullable();
			$table->text('options', 65535)->nullable();
			$table->integer('is_required')->default(0);
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
		Schema::drop('custom_fields');
	}

}
