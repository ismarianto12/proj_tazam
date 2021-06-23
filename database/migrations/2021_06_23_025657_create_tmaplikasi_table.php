<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTmaplikasiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tmaplikasi', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('no_aplikasi', 24);
			$table->string('tmstatus_aplikasi_id', 14)->nullable();
			$table->string('tmoveride_id', 25)->nullable();
			$table->string('tmprogram_id', 15)->nullable();
			$table->string('pilihan_hadiah', 25)->nullable();
			$table->string('no_cif', 10);
			$table->string('no_rek_induk', 35)->nullable();
			$table->string('no_rek_rencana', 35)->nullable();
			$table->string('no_rek_manfaat', 35)->nullable();
			$table->string('no_rtjh', 35)->nullable();
			$table->string('setoran_awal_rek_induk', 35)->nullable();
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
		Schema::drop('tmaplikasi');
	}

}
