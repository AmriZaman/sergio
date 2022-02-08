<?php

namespace Database\Seeders;

use App\Models\Standarisasi;
use Illuminate\Database\Seeder;

class StandarisasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Standarisasi::create([
            'kode' => 'IK',
            'nama' => 'IK (Instruksi Kerja)',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Standarisasi::create([
            'kode' => 'PD',
            'nama' => 'PD (Pedoman)',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Standarisasi::create([
            'kode' => 'PR',
            'nama' => 'PR (Prosedur)',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Standarisasi::create([
            'kode' => 'SD',
            'nama' => 'SD (Standar)',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
