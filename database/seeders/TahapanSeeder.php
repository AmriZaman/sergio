<?php

namespace Database\Seeders;

use App\Models\Tahapan;
use Illuminate\Database\Seeder;

class TahapanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tahapan::create([
            'kode' => '5RR1',
            'nama' => 'R1',
            'kode_metodologi' => '5R',
            'urut' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Tahapan::create([
            'kode' => '5RR2',
            'nama' => 'R2',
            'kode_metodologi' => '5R',
            'urut' => '2',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Tahapan::create([
            'kode' => '5RR3',
            'nama' => 'R3',
            'kode_metodologi' => '5R',
            'urut' => '3',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Tahapan::create([
            'kode' => '5RR4',
            'nama' => 'R4',
            'kode_metodologi' => '5R',
            'urut' => '4',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Tahapan::create([
            'kode' => '5RR5',
            'nama' => 'R5',
            'kode_metodologi' => '5R',
            'urut' => '5',
            'created_at' => now(),
            'updated_at' => now()
        ]);


        Tahapan::create([
            'kode' => 'GIMP',
            'nama' => 'P',
            'kode_metodologi' => 'GIM',
            'urut' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Tahapan::create([
            'kode' => 'GIMD',
            'nama' => 'D',
            'kode_metodologi' => 'GIM',
            'urut' => '2',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Tahapan::create([
            'kode' => 'GIMC',
            'nama' => 'C',
            'kode_metodologi' => 'GIM',
            'urut' => '3',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Tahapan::create([
            'kode' => 'GIMA',
            'nama' => 'A',
            'kode_metodologi' => 'GIM',
            'urut' => '4',
            'created_at' => now(),
            'updated_at' => now()
        ]);


        Tahapan::create([
            'kode' => 'GIOP',
            'nama' => 'P',
            'kode_metodologi' => 'GIO',
            'urut' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Tahapan::create([
            'kode' => 'GIOD',
            'nama' => 'D',
            'kode_metodologi' => 'GIO',
            'urut' => '2',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Tahapan::create([
            'kode' => 'GIOC',
            'nama' => 'C',
            'kode_metodologi' => 'GIO',
            'urut' => '3',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Tahapan::create([
            'kode' => 'GIOA',
            'nama' => 'A',
            'kode_metodologi' => 'GIO',
            'urut' => '4',
            'created_at' => now(),
            'updated_at' => now()
        ]);


        Tahapan::create([
            'kode' => 'SSP',
            'nama' => 'P',
            'kode_metodologi' => 'SS',
            'urut' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Tahapan::create([
            'kode' => 'SSD',
            'nama' => 'D',
            'kode_metodologi' => 'SS',
            'urut' => '2',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Tahapan::create([
            'kode' => 'SSC',
            'nama' => 'C',
            'kode_metodologi' => 'SS',
            'urut' => '3',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Tahapan::create([
            'kode' => 'SSA',
            'nama' => 'A',
            'kode_metodologi' => 'SS',
            'urut' => '4',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
