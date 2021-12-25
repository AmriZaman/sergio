<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGagasansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gagasans', function (Blueprint $table) {
            $table-> id();
            $table-> string('nik_ketua', 50)->references('nik')->on('profiles');
            // $table-> foreign('nik_fasilitator', 50)->references('nik_fasilitator')->on('sg_profile');
            $table-> string('kode_periode', 6)->references('kode')->on('sg_periode');
            $table-> string('id_departemen_asal', 50)->references('id')->on('departemens');
            $table-> string('id_departemen_tujuan', 50)->references('id')->on('departemens');
            $table-> string('judul')->unique();
            $table-> string('kondisi_awal');
            $table-> string('perbaikan');
            $table-> string('manfaat');
            $table-> text('catatan_fasilitator');
            $table-> text('catatan_manager');
            $table-> string('i_reg_sg', 4);
            $table-> string('no_reg_sg');
            $table-> timestamp('tgl_kirim');
            $table-> timestamp('tgl_catatan_fasilitator');
            $table-> timestamp('tgl_catatan_manager');
            $table-> string('kode_mtd_fasilitator',50);
            $table-> string('kode_mtd_manager',50);
            $table-> tinyinteger('fl_status');
            $table-> string('ket_status',50);
            $table-> tinyinteger('is_imported');
            $table-> tinyinteger('is_recreated');
            $table-> timestamp('tgl_kirim_prev');
            $table-> string('kode_periode_prev', 6);
            $table-> string('i_reg_sg_prev', 6);
            $table-> tinyinteger('is_verify_by_dep');
            $table->timestamps();

            // $table-> foreign('nik_ketua')->references('nik')->on('sg_profile');
            // $table-> foreign('kode_periode')->references('kode')->on('sg_periode');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gagasans');
    }
}
