<?php

namespace Database\Seeders;

use App\Models\Metodologi;
use Illuminate\Database\Seeder;

class MetodologiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Metodologi::create([
            'kode' => '5R',
            'nama' => '5R',
            'nama_panjang' => '5R (Ringkas Rapi Resik Rawat Rajin)',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Metodologi::create([
            'kode' => 'GIM',
            'nama' => 'GIM',
            'nama_panjang' => 'GIM	GIM	GIM (Gugus Inovasi Manajemen)',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Metodologi::create([
            'kode' => 'GIO',
            'nama' => 'GIO',
            'nama_panjang' => 'GIO (Gugus Inovasi Operasional)',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Metodologi::create([
            'kode' => 'SS',
            'nama' => 'SS',
            'nama_panjang' => 'SS (Sistem Saran)',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
