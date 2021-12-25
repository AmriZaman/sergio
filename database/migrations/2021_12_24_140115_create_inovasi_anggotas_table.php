<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInovasiAnggotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inovasi_anggotas', function (Blueprint $table) {
            $table-> id();
            $table-> string('id_inovasi')->references('id')->on('inovasis');
            $table-> string('nik',50)->references('nik')->on('profiles');
            $table->timestamps();

            // $table-> foreign('id_inovasi')->references('id')->on('srg_inovasi');
            // $table-> foreign('nik')->references('nik')->on('sg_profile');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inovasi_anggotas');
    }
}
