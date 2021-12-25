<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGagasanVerifiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gagasan_verifies', function (Blueprint $table) {
            $table-> id();
            $table-> string('id_gagasan')->references('id')->on('gagasans');
            // $table-> string('id_dep');
            $table-> tinyinteger('fl_status');
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
        Schema::dropIfExists('gagasan_verifies');
    }
}
