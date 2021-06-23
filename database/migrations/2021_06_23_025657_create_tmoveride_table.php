<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTmoverideTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tmoveride', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('no_aplikasi', 25);
			$table->string('trpicoveride_id', 40)->nullable();
			$table->string('kategori_nasabah', 25);
			$table->string('status', 25)->nullable();
			$table->text('catatan')->nullable();
			$table->string('users_id', 25)->nullable();
			$table->date('created_at')->nullable();
			$table->date('updated_at')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tmoveride');
	}

}
