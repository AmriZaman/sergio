<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSrgPeriodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('srg_periodes', function (Blueprint $table) {
            $table-> string('kode',6)-> primary()->unique();
            $table-> string('nama_periode');
            $table-> timestamp('tgl_usul_awal');
            $table-> timestamp('tgl_usul_akhir');
            $table-> timestamp('tgl_verifikasi_awal');
            $table-> timestamp('tgl_verifikasi_akhir');
            $table-> timestamp('tgl_penilaian_awal');
            $table-> timestamp('tgl_penilaian_akhir');
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
        Schema::dropIfExists('srg_periodes');
    }
}
