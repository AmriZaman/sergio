<?php

namespace Database\Seeders;

use App\Models\Bagian;
use Illuminate\Database\Seeder;

class BagianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bagian::create([
            'id_departemen' => '1',
            'nama_bagian' => 'Inovasi',
        ]);
        Bagian::create([
            'id_departemen' => '1',
            'nama_bagian' => 'Sistem Manajemen',
        ]);
    }
}
