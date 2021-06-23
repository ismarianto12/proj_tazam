<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrjurnalTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trjurnal', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('keterangan', 25)->nullable();
			$table->string('nomor_rekening', 25)->nullable();
			$table->string('ref', 25)->nullable();
			$table->string('jenis_transaksi', 25)->nullable();
			$table->string('nominal_transaksi', 25)->nullable();
			$table->string('type_rekening', 25)->nullable();
			$table->string('users_id', 25)->nullable();
			$table->string('created_at', 25)->nullable();
			$table->string('updated_at', 25)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('trjurnal');
	}

}
