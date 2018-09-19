<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMessagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('messages', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('token', 100)->nullable()->unique('token');
			$table->integer('is_draft')->default(0);
			$table->integer('from_user_id')->nullable()->index('from_user_id');
			$table->integer('to_user_id')->nullable()->index('to_user_id');
			$table->string('subject', 1000)->nullable();
			$table->text('body', 65535)->nullable();
			$table->integer('is_starred_sender')->default(0);
			$table->integer('is_starred_receiver')->default(0);
			$table->integer('is_read')->default(0);
			$table->integer('delete_sender')->default(0);
			$table->integer('delete_receiver')->default(0);
			$table->integer('reply_id')->nullable()->index('reply_id');
			$table->string('attachments', 100)->nullable();
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
		Schema::drop('messages');
	}

}
