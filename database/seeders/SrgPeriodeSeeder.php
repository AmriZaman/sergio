<?php

namespace Database\Seeders;

use App\Models\Srg_periode;
use Illuminate\Database\Seeder;

class SrgPeriodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Srg_periode::create([
            'kode' => '21.1',
            'nama_periode' => 'Sergio Periode 2021',
            'tgl_usul_awal' => '12-1-2021',
            'tgl_usul_akhir'=> now(),
            'tgl_verifikasi_awal' => '12-1-2021',
            'tgl_verifikasi_akhir' => now(),
            'tgl_penilaian_awal' => '12-1-2021',
            'tgl_penilaian_akhir' => now()
        ]);
        Srg_periode::create([
            'kode' => '20.1',
            'nama_periode' => 'Sergio 2020',
            'tgl_usul_awal' => '12-1-2020',
            'tgl_usul_akhir'=> '12-12-2020',
            'tgl_verifikasi_awal' => '12-1-2020',
            'tgl_verifikasi_akhir' => '12-12-2020',
            'tgl_penilaian_awal' => '12-1-2020',
            'tgl_penilaian_akhir' => '12-12-2020'
        ]);
    }
}
