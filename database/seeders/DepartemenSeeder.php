<?php

namespace Database\Seeders;

use App\Models\Departemen;
use Illuminate\Database\Seeder;

class DepartemenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Departemen::create([
            'id_kompartemen' => '1',
            'nama_departemen' => 'Inovasi & Sisman',
        ]);
        Departemen::create([
            'id_kompartemen' => '1',
            'nama_departemen' => 'CRM',
        ]);
        Departemen::create([
            'id_kompartemen' => '2',
            'nama_departemen' => 'Keamanan',
        ]);
        Departemen::create([
            'id_kompartemen' => '2',
            'nama_departemen' => 'Cangun',
        ]);
        Departemen::create([
            'id_kompartemen' => '3',
            'nama_departemen' => 'Jaringan',
        ]);
    }
}
