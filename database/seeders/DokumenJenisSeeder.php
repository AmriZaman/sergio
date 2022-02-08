<?php

namespace Database\Seeders;

use App\Models\Dokumen_jenis;
use Illuminate\Database\Seeder;

class DokumenJenisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dokumen_jenis::create([
            'kode' => 'FINAL',
            'nama' => 'Makalah Final',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Dokumen_jenis::create([
            'kode' => 'HEMAT',
            'nama' => 'Penghematan',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Dokumen_jenis::create([
            'kode' => 'INSTRUKSI',
            'nama' => 'Instruksi Kerja',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Dokumen_jenis::create([
            'kode' => 'MAKALAH',
            'nama' => 'Makalah Progress',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Dokumen_jenis::create([
            'kode' => 'NOTULEN',
            'nama' => 'Notulen Rapat',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
