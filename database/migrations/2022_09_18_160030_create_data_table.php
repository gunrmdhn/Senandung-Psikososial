<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_data', function (Blueprint $table) {
            $table->id();
            $table->string('kategori');
            $table->string('kode_aduan')->unique();

            $table->string('jenis_kasus');
            $table->boolean('cek_jenis_kasus')->default(false);

            $table->string('nik')->nullable();
            $table->boolean('cek_nik')->default(false);

            $table->string('nama');
            $table->boolean('cek_nama')->default(false);

            $table->string('jenis_kelamin');
            $table->boolean('cek_jenis_kelamin')->default(false);

            $table->string('tempat_lahir');
            $table->boolean('cek_tempat_lahir')->default(false);

            $table->string('tanggal_lahir');
            $table->boolean('cek_tanggal_lahir')->default(false);

            $table->string('agama');
            $table->boolean('cek_agama')->default(false);

            $table->string('kabupaten_kota');
            $table->boolean('cek_kabupaten_kota')->default(false);

            $table->string('kecamatan');
            $table->boolean('cek_kecamatan')->default(false);

            $table->string('kelurahan_desa');
            $table->boolean('cek_kelurahan_desa')->default(false);

            $table->string('permasalahan');
            $table->boolean('cek_permasalahan')->default(false);

            $table->string('waktu_kejadian');
            $table->boolean('cek_waktu_kejadian')->default(false);

            $table->string('tempat_kejadian');
            $table->boolean('cek_tempat_kejadian')->default(false);

            $table->string('pekerjaan');
            $table->boolean('cek_pekerjaan')->default(false);

            $table->string('kebutuhan');
            $table->boolean('cek_kebutuhan')->default(false);

            $table->string('nama_pengadu');
            $table->boolean('cek_nama_pengadu')->default(false);

            $table->string('nomor_pengadu');
            $table->boolean('cek_nomor_pengadu')->default(false);

            $table->text('foto');
            $table->boolean('verifikasi_1')->default(false);
            $table->boolean('verifikasi_2')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tabel_data');
    }
};
