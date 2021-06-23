<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrsaldonasabahTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trsaldonasabah', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('no_aplikasi', 24);
			$table->string('saldo_akhir_induk', 35)->nullable();
			$table->string('saldo_rata2_rek_rencana', 35)->nullable();
			$table->string('saldo_akhir_penerima_haji', 100)->nullable();
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
		Schema::drop('trsaldonasabah');
	}

}
