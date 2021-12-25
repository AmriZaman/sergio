<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Database\Seeders\PanduanSeeder;
use Database\Seeders\ProfileSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AuthJenisSeeder::class);
        $this->call(AuthSeeder::class);
        $this->call(BagianSeeder::class);
        $this->call(DepartemenSeeder::class);
        $this->call(DokumenJenisSeeder::class);
        $this->call(DokumenSeeder::class);
        $this->call(GagasanFilesSeeder::class);
        $this->call(GagasanSeeder::class);
        $this->call(GagasanVerifySeeder::class);
        $this->call(InovasiAnggotaSeeder::class);
        $this->call(InovasiFileSeeder::class);
        $this->call(InovasiRelatedSeeder::class);
        $this->call(InovasiSeeder::class);
        $this->call(KategoriSeeder::class);
        $this->call(KompartemenSeeder::class);
        $this->call(MetodologiSeeder::class);
        $this->call(PanduanSeeder::class);
        $this->call(PendapatanSeeder::class);
        $this->call(PengeluaranSeeder::class);
        $this->call(ProfileSeeder::class);
        $this->call(RelatedSeeder::class);
        $this->call(SgPeriodeSeeder::class);
        $this->call(SrgPeriodeSeeder::class);
        $this->call(StandarisasiSeeder::class);
        $this->call(TahapanSeeder::class);
















    }
}
