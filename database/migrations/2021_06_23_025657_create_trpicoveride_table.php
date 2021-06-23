<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrpicoverideTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trpicoveride', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('kode', 30)->nullable();
			$table->string('username', 30)->nullable();
			$table->string('nama', 20)->nullable();
			$table->string('jabatan', 20)->nullable();
			$table->string('users_id', 30)->nullable();
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
		Schema::drop('trpicoveride');
	}

}
