<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTmmodulTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tmmodul', function (Blueprint $table) {
			$table->integer('id', true);
			$table->string('id_parent', 35)->nullable();
			$table->string('nama_menu', 35)->nullable();
			$table->string('icon', 35)->nullable();
			$table->string('link', 35)->nullable();
			$table->string('aktif', 35)->nullable();
			$table->string('urutan', 35)->nullable();
			$table->string('position', 35)->nullable();
			$table->string('level', 35)->nullable();

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
		Schema::drop('tmmodul');
	}
}
