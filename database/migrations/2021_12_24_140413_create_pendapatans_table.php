<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendapatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendapatans', function (Blueprint $table) {
            $table-> id();
            $table-> string('id_inovasi_files')->references('id')->on('inovasi_files');
            // $table-> string('jml_pendapatan')-> nullable(); numeric (18,0)
            $table->decimal('jml_pendapatan',18,0)-> nullable();
            $table-> string('periode_pendapatan',50)-> nullable();
            // $table-> string('total_pendapatan')-> nullable(); money
            $table->decimal('total_pendapatan')-> nullable();
            $table-> tinyinteger('fl_type')-> nullable();
            $table->timestamps();

            // $table-> foreign('id_inovasi_files')->references('id')->on('srg_related');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pendapatans');
    }
}
