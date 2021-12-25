<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auths', function (Blueprint $table) {
            $table-> id();
            $table-> string('nik',50)->references('nik')->on('profiles');
            $table-> string('kode_periode_sg',6)->references('kode')->on('sg_periode');
            $table-> string('kode_periode_srg',6)->references('kode')->on('srg_periode');
            $table-> string('kode_jenis',50)->references('id')->on('auth_jenis');
            $table-> string('password',30);
            $table->timestamps();

            // $table->foreign('nik')->references('nik')->on('profiles');
            // $table->foreign('kode_periode_sg')->references('kode')->on('sg_periode');
            // $table->foreign('kode_periode_srg')->references('kode')->on('srg_periode');
            // $table->foreign('kode_jenis')->references('id')->on('auth_jenis');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('auths');
    }
}
