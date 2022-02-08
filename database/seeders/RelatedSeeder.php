<?php

namespace Database\Seeders;

use App\Models\Related;
use Illuminate\Database\Seeder;

class RelatedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Related::create([
            'nama' => 'Meningkatkan Kualitas Produk',
            'urut' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Related::create([
            'nama' => 'Menghilangkan Denda',
            'urut' => '2',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Related::create([
            'nama' => 'Menghemat Kebutuhan ATK',
            'urut' => '3',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Related::create([
            'nama' => 'Pemanfaatan Limbah',
            'urut' => '4',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Related::create([
            'nama' => 'Pemanfaatan Limbah',
            'urut' => '5',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Related::create([
            'nama' => 'Security',
            'urut' => '6',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Related::create([
            'nama' => 'Menghemat Energi (Listrik, batubara, BBM) dan Air',
            'urut' => '7',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Related::create([
            'nama' => 'Product / Jasa Baru',
            'urut' => '8',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Related::create([
            'nama' => 'Laba',
            'urut' => '9',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Related::create([
            'nama' => 'Safety & Health',
            'urut' => '10',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Related::create([
            'nama' => 'Mempercepat Waktu',
            'urut' => '11',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Related::create([
            'nama' => 'Omzet',
            'urut' => '12',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Related::create([
            'nama' => 'Lain-lain',
            'urut' => '99',
            'created_at' => now(),
            'updated_at' => now()
        ]);

    }
}
