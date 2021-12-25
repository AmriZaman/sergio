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
            'kode' => '',
            'nama_periode' => '',
            'tgl_usul_awal' => '',
            'tgl_usul_akhir',
            'tgl_verifikasi_awal' => '',
            'tgl_verifikasi_akhir' => '',
            'tgl_penilaian_awal' => '',
            'tgl_penilaian_akhir' => ''
        ]);
    }
}
