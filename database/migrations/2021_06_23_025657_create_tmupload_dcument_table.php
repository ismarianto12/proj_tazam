<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTmuploadDcumentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tmupload_dcument', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('tmparameter_id', 14);
			$table->string('no_aplikasi', 30)->nullable();
			$table->string('keterangan_file', 30)->nullable();
			$table->string('nama_file', 40)->nullable();
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
		Schema::drop('tmupload_dcument');
	}

}
