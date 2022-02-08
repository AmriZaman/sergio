<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kategori::create([
            'nama' => 'Perkantoran',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Kategori::create([
            'nama' => 'Manufaktur',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
