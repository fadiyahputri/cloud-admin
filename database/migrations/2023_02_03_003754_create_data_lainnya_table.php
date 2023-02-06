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
        Schema::create('data_lainnya', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kepala_sekolah');
            $table->integer('jumlah_rombongan_belajar');
            $table->integer('jumlah_ruang_kelas');
            $table->integer('jumlah_laboratorium');
            $table->string('penerapan_mbs');
            $table->integer('jumlah_guru');
            $table->integer('jumlah_siswa');
            $table->integer('jumlah_staf_tata_usaha');
            $table->integer('jumlah_operator_sim_sekolah');
            $table->integer('jumlah_labroran');
            $table->integer('jumlah_pustakawan');
            $table->integer('jumlah_penjaga_sekolah');
            $table->integer('jumlah_tukang_kebersihan');
            $table->integer('jumlah_supir');
            $table->string('bidang_studi_keahlian');
            $table->string('program_studi_keahlian');
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
        Schema::dropIfExists('data_lainnya');
    }
};
