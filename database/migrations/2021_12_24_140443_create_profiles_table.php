<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table-> string('nik',50)->primary();
            $table-> string('nama',50);
            $table-> string('bagian',50)->references('id')->on('bagians')->nullable();
            $table-> string('nik_fasilitator',50)->nullable();
            $table-> string('email_1')->nullable();
            $table-> string('email_2')->nullable();
            $table-> string('ext',10)->nullable();
            $table-> tinyinteger('is_notif_email1')->nullable(); 
            $table-> tinyinteger('is_notif_email2')->nullable();
            $table-> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
