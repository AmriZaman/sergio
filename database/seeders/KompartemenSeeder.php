<?php

namespace Database\Seeders;

use App\Models\Kompartemen;
use Illuminate\Database\Seeder;

class KompartemenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kompartemen::create([
            'nama_kompartemen' => 'Sumber Daya Manusia'
        ]);
        Kompartemen::create([
            'nama_kompartemen' => 'Umum'
        ]);
        Kompartemen::create([
            'nama_kompartemen' => 'Teknologi'
        ]);
    }
}
