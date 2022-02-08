<?php

namespace Database\Seeders;

use App\Models\Auth_jenis;
use Illuminate\Database\Seeder;

class AuthJenisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Auth_jenis::create([
            'kode' => 'FASILITATOR_SG',
            'jenis' => 'Fasilitator',
            'app_name' => 'SG',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Auth_jenis::create([
            'kode' => 'VERIFIKATOR_SG',
            'jenis' => 'Verifikator',
            'app_name' => 'SG',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Auth_jenis::create([
            'kode' => 'SPTK',
            'jenis' => 'SPTK',
            'app_name' => 'Sergio',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Auth_jenis::create([
            'kode' => 'KID',
            'jenis' => 'KID',
            'app_name' => 'Sergio',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
