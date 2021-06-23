<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTmnasabahTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tmnasabah', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('no_aplikasi', 50)->nullable();
			$table->string('no_ktp', 16)->nullable();
			$table->string('nama_sesuai_ktp', 50)->nullable();
			$table->string('tempat_lahir_ktp', 50)->nullable();
			$table->string('tanggal_lahir_ktp', 20)->nullable();
			$table->string('jenis_kelamin_ktp', 50)->nullable();
			$table->string('pekerjaan_ktp', 50)->nullable();
			$table->string('status_pernikahan_ktp', 50)->nullable();
			$table->string('alamat_sesuai_ktp', 50)->nullable();
			$table->string('rt_rw_ktp', 50)->nullable();
			$table->string('kelurahan_ktp', 50)->nullable();
			$table->string('kecamatan_ktp', 50)->nullable();
			$table->string('kode_kota_kabupaten_ktp', 50)->nullable();
			$table->string('kota_kabupaten_ktp', 50)->nullable();
			$table->string('kode_provinsi_ktp', 50)->nullable();
			$table->string('provinsi_ktp', 50)->nullable();
			$table->string('kode_pos_ktp', 50)->nullable();
			$table->string('alamat_domisili', 50)->nullable();
			$table->string('rt_rw_domisili', 50)->nullable();
			$table->string('kelurahan_domisili', 50)->nullable();
			$table->string('kecamatan_domisili', 50)->nullable();
			$table->string('kota_kabupaten_domisili', 50)->nullable();
			$table->string('provinsi_domisili', 50)->nullable();
			$table->string('kode_pos_domisili', 50)->nullable();
			$table->string('jenis_penduduk', 50)->nullable();
			$table->string('kewarganegaraan', 50)->nullable();
			$table->string('nama_ibu_kandung_ktp', 50)->nullable();
			$table->string('agama', 50)->nullable();
			$table->string('no_hp', 50)->nullable();
			$table->string('email', 50)->nullable();
			$table->string('tlp_rumah', 50)->nullable();
			$table->string('penghasilan_perbulan', 50)->nullable();
			$table->string('penghasilan_pertahun', 50)->nullable();
			$table->string('pengeluaran_pertahun', 50)->nullable();
			$table->string('status_tempat_tinggal', 50)->nullable();
			$table->string('jumlah_tanggungan', 50)->nullable();
			$table->string('kategori_nasabah', 50)->nullable();
			$table->string('tujuan_penggunaan', 50)->nullable();
			$table->string('nama_kelurahan', 100)->nullable();
			$table->string('nominal_setor_tunai', 50)->nullable();
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
		Schema::drop('tmnasabah');
	}

}
