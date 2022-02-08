<?php

namespace Database\Seeders;

use App\Models\Sg_periode;
use Illuminate\Database\Seeder;

class SgPeriodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sg_periode::create([
            'kode' => '21.1',
            'nama_periode' => 'Sumbang Gagasan 2021',
            'tgl_usul_awal' => '12-1-2021',
            'tgl_usul_akhir'=> now(),
            'tgl_verifikasi_awal' => '12-1-2021',
            'tgl_verifikasi_akhir' => now(),
            'tgl_penilaian_awal' => '12-1-2021',
            'tgl_penilaian_akhir' => now()
        ]);

        Sg_periode::create([
            'kode' => '20.1',
            'nama_periode' => 'Sumbang Gagasan 2020',
            'tgl_usul_awal' => '12-1-2020',
            'tgl_usul_akhir'=> '12-12-2020',
            'tgl_verifikasi_awal' => '12-1-2020',
            'tgl_verifikasi_akhir' => '12-12-2020',
            'tgl_penilaian_awal' => '12-1-2020',
            'tgl_penilaian_akhir' => '12-12-2020'
        ]);
    }
}
