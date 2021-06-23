<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTmstatusAplikasiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tmstatus_aplikasi', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('kode', 20)->nullable();
			$table->string('keterangan_status', 20)->nullable();
			$table->string('users_id', 30)->nullable();
			$table->string('created_at', 20)->nullable();
			$table->string('updated_at', 20)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tmstatus_aplikasi');
	}

}
