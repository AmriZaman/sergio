<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInovasiRelatedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inovasi_relateds', function (Blueprint $table) {
            $table-> id();
            $table-> string('id_inovasi')->references('id')->on('inovasis');
            $table-> string('id_related')->references('id')->on('related');
            $table-> text('keterangan')-> nullable();
            $table->timestamps();

            // $table-> foreign('id_inovasi')->references('id')->on('srg_inovasi');
            // $table-> foreign('id_related')->references('id')->on('srg_related');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inovasi_relateds');
    }
}
