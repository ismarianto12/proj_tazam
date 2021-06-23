<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableLogSmsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('table_log_sms', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->text('notify')->nullable();
			$table->string('users_id', 40)->nullable();
			$table->string('created_at', 30)->nullable();
			$table->string('updated_at', 30)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('table_log_sms');
	}

}
