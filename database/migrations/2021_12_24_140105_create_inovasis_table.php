<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInovasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inovasis', function (Blueprint $table) {
            $table-> id();
            $table-> string('id_gagasan')->references('id')->on('gagasans');
            $table-> string('nik_fasilitator', 50)->references('nik')->on('auths');
            $table-> string('nik_sekretaris', 50)->references('nik')->on('auths');
            $table-> string('kode_periode',6)->references('kode')->on('srg_periode');;
            $table-> string('kode_metodologi',50)->references('kode')->on('metodologis');
            $table-> string('id_kategori')->references('id')->on('kategoris');
            // $table-> string('id_kompartemen',50);
            // $table-> string('id_departemen',50);
            $table-> string('id_bagian',50)->references('id')->on('bagians');
            $table-> string('gugus');
            $table-> string('telp',50);
            $table-> string('tema');
            $table-> string('judul');
            $table-> timestamp('tgl_kirim');
            $table-> string('no_reg');
            $table-> integer('i_no_reg');
            $table-> tinyinteger('fl_status');
            $table-> string('ket_status', 8);
            $table-> text('catatan');
            $table-> timestamp('tgl_awal_p');
            $table-> timestamp('tgl_akhir_p');
            $table-> timestamp('tgl_awal_d');
            $table-> timestamp('tgl_akhir_d');
            $table-> timestamp('tgl_awal_c');
            $table-> timestamp('tgl_akhir_c');
            $table-> timestamp('tgl_awal_a');
            $table-> timestamp('tgl_akhir_a');
            $table-> timestamp('tgl_awal_r1');
            $table-> timestamp('tgl_akhir_r1');
            $table-> timestamp('tgl_awal_r2');
            $table-> timestamp('tgl_akhir_r2');
            $table-> timestamp('tgl_awal_r3');
            $table-> timestamp('tgl_akhir_r3');
            $table-> timestamp('tgl_awal_r4');
            $table-> timestamp('tgl_akhir_r4');
            $table-> timestamp('tgl_awal_r5');
            $table-> timestamp('tgl_akhir_r5');
            $table->timestamps();

            // $table-> foreign('id_gagasan')->references('id')->on('sg_gagasan');
            // $table-> foreign('kode_periode')->references('kode')->on('srg_periode');
            // $table-> foreign('kode_metodologi')->references('kode')->on('srg_metodologi');
            // $table-> foreign('id_kategori')->references('id')->on('srg_kategori');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inovasis');
    }
}
