<?php

namespace Database\Seeders;


use App\Models\Panduan;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PanduanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('panduan_inovasi')->insert([
        //     'judul' => 'coba',
        //     'deskripsi' => 'ini deskripsi',
        //     'file_path' => 'filepathnya',
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);
        Panduan::create([
            'judul' => 'coba',
            'deskripsi' => 'ini deskripsi',
            'file_path' => 'filepathnya',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
