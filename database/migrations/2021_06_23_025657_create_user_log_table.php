<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserLogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_log', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('username', 54)->nullable();
			$table->text('activity')->nullable();
			$table->string('ip_addr', 15)->nullable();
			$table->string('link', 20)->nullable();
			$table->string('afective_date', 25)->nullable();
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
		Schema::drop('user_log');
	}

}
