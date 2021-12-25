<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInovasiFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inovasi_files', function (Blueprint $table) {
            $table-> id('file_id');
            $table-> string('doc_id', 50);
            $table-> integer('i_doc_id');
            $table-> string('id_inovasi')->references('id')->on('inovasis');
            $table-> string('id_dokumen')->references('id')->on('dokumens');
            $table-> string('file_path');
            $table-> string('file_name');
            $table-> string('file_name_saved');
            $table-> float('file_size')-> nullable();
            $table-> string('file_type')-> nullable();
            $table-> string('kode_periode',50);
            $table-> string('jenis',50)-> nullable();
            $table-> string('tahapan',50)-> nullable();
            $table-> timestamp('tanggal')-> nullable();
            $table-> string('final_judul_abstrak')-> nullable();
            $table-> string('final_isi_abstrak')-> nullable();
            $table-> string('ik_nomor')-> nullable();
            $table-> string('ik_judul')-> nullable();
            $table-> string('kode_standarisasi')-> references('kode')->on('standarisasis');
            $table-> tinyinteger('fl_type')-> nullable();
            $table->timestamps();

            // $table-> foreign('id_inovasi')->references('id')->on('srg_inovasi');
            // $table-> foreign('id_dokumen')->references('id')->on('srg_dokumen');
            // $table-> foreign('kode_standarisasi')-> references('kode')->on('standarisasis');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inovasi_files');
    }
}
