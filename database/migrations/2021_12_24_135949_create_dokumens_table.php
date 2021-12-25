<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDokumensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dokumens', function (Blueprint $table) {
            $table-> id();
            $table-> string('kode_tahapan')->references('kode')->on('tahapans');
            $table-> string('kode_jenis')->references('kode')->on('dokumen_jenis');
            $table->timestamps();

            // $table-> foreign('kode_tahapan')->references('kode')->on('srg_tahapan');
            // $table-> foreign('kode_jenis')->references('kode')->on('srg_dokumen_jenis');     
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dokumens');
    }
}
