<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTmparameterApiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tmparameter_api', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('api_key', 54)->nullable();
			$table->string('url', 15)->nullable();
			$table->string('parmater_key', 15)->nullable();
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
		Schema::drop('tmparameter_api');
	}

}
