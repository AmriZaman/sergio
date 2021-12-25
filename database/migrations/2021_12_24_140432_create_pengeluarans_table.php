<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengeluaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengeluarans', function (Blueprint $table) {
            $table-> id();
            $table-> string('id_inovasi_files')->references('id')->on('inovasi_files');
            $table-> text('keterangan')->nullable();
            // $table-> ('nilai'); money [not null]
            $table-> decimal('nilai');
            $table-> tinyinteger('fl_type')->nullable();
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
        Schema::dropIfExists('pengeluarans');
    }
}
