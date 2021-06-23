<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTmpenutupanTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tmpenutupan', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('no_aplikasi', 14)->nullable();
			$table->string('tmparameter_id', 15)->nullable();
			$table->string('setoran_penutupan', 60)->nullable();
			$table->string('tmstatus_aplikasi_id', 50)->nullable();
			$table->string('kategori_penutupan', 20)->nullable();
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
		Schema::drop('tmpenutupan');
	}

}
