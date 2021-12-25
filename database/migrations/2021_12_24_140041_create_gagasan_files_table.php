<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGagasanFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gagasan_files', function (Blueprint $table) {
            $table-> id();
            $table-> string('id_gagasan')->references('id')->on('gagasans');
            $table-> string('file_path');
            $table-> string('file_name');
            $table-> string('file_name_saved');
            $table-> float('file_size');
            $table-> string('file_type')->nullable();
            $table-> string('desc')->nullable();
            $table->timestamps();

            // $table-> foreign('id_gagasan')->references('id')->on('sg_gagasan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gagasan_files');
    }
}
