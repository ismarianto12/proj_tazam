<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTmparameterTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tmparameter', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('kode');
			$table->string('nama_prog', 50)->nullable();
			$table->string('trpicoveride_id', 20)->nullable();
			$table->string('trparameterslikhasil_id', 50)->nullable();
			$table->string('usia_peserta_min', 50)->nullable();
			$table->string('usia_peserta_max', 50)->nullable();
			$table->string('usia_penerima_manmin', 50)->nullable();
			$table->string('usia_penerima_manmax', 50)->nullable();
			$table->string('hubungan_p_penerimamanfaat', 23)->nullable();
			$table->string('setoran_awal_program', 23)->nullable();
			$table->string('nilai_manfaat', 23)->nullable();
			$table->string('indikasi_hadiah', 23)->nullable();
			$table->string('pajak_hadiah', 40)->nullable();
			$table->string('jangka_waktu_program', 30)->nullable();
			$table->string('kode_prouduk_induk', 23)->nullable();
			$table->string('cara_pembukaan', 23)->nullable();
			$table->string('pemilik_rekening', 23)->nullable();
			$table->string('kode_prouduk_rencana', 23)->nullable();
			$table->string('kode_produk_manfaat', 23)->nullable();
			$table->string('kode_produk_manfaat1', 23)->nullable();
			$table->string('kode_produk_manfaat2', 23)->nullable();
			$table->string('setoran_awal', 23)->nullable();
			$table->string('setoran_rutin', 23)->nullable();
			$table->string('saldo_rencana', 23)->nullable();
			$table->string('jangka_waktu', 23)->nullable();
			$table->string('tgl_pendebetan', 23)->nullable();
			$table->string('setoran_awwal_lanjutan', 23)->nullable();
			$table->string('jenis_amortisasi', 40)->nullable();
			$table->string('biayahadiah', 23)->nullable();
			$table->string('biayapengurusan', 50)->nullable();
			$table->string('biayaperencanaan', 50)->nullable();
			$table->string('biayapenutupanprog', 50)->nullable();
			$table->string('biayapenutupanprek', 50)->nullable();
			$table->string('beban_pajak', 40)->nullable();
			$table->string('jenis_hadiah', 40)->nullable();
			$table->string('document_peserta', 40)->nullable();
			$table->string('document_penerima_manfaat', 40)->nullable();
			$table->string('document_jaminan', 40)->nullable();
			$table->string('otomatis_slik', 40)->nullable();
			$table->string('waktu_slik', 40)->nullable();
			$table->string('insetif_awal_marketing', 50)->nullable();
			$table->string('insetif_awal_pihak3', 50)->nullable();
			$table->string('insetif_bulanan_marketing', 50)->nullable();
			$table->string('insetif_bulanan_pihak3', 50)->nullable();
			$table->string('users_id', 30)->nullable();
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
		Schema::drop('tmparameter');
	}

}
