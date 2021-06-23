<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTmjurnalKategoriTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tmjurnal_kategori', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('nmketegori_jr', 50)->nullable();
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
		Schema::drop('tmjurnal_kategori');
	}

}
