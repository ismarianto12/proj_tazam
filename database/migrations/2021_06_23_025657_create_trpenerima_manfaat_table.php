<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrpenerimaManfaatTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trpenerima_manfaat', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('no_aplikasi', 24)->nullable();
			$table->string('nama', 24)->nullable();
			$table->string('usia', 24)->nullable();
			$table->string('hubungan', 24)->nullable();
			$table->string('pilihan_hadiah', 24)->nullable();
			$table->string('no_hp', 24)->nullable();
			$table->string('email', 24)->nullable();
			$table->string('alamat', 24)->nullable();
			$table->string('users_id', 24)->nullable();
			$table->string('created_at', 24)->nullable();
			$table->string('updated_at', 24)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('trpenerima_manfaat');
	}

}
