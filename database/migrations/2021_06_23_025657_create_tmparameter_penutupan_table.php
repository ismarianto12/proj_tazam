<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTmparameterPenutupanTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tmparameter_penutupan', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('tmparameter_id', 25);
			$table->string('bulan', 25);
			$table->string('nominal', 46);
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
		Schema::drop('tmparameter_penutupan');
	}

}
