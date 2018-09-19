<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('emails', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->text('to_address', 65535)->nullable();
			$table->string('from_address', 100)->nullable();
			$table->text('subject', 65535)->nullable();
			$table->text('body', 65535)->nullable();
			$table->text('attachments', 65535)->nullable();
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
		Schema::drop('emails');
	}

}
