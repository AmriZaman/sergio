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
            'judul' => 'Panduan Pengelolaan Inovasi',
            'deskripsi' => 'Panduan Pengelolaan Inovasi adalah...',
            'file_path' => 'filepathnya',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Panduan::create([
            'judul' => 'Panduan Penilaian Inovasi',
            'deskripsi' => 'Panduan Penilaian Inovasi adalah...',
            'file_path' => 'filepathnya',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Panduan::create([
            'judul' => 'Panduan Inisiasi Inovasi',
            'deskripsi' => 'Panduan Inisiasi Inovasi adalah...',
            'file_path' => 'filepathnya',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Panduan::create([
            'judul' => 'Panduan Pengelolaan Sistem Manajemen',
            'deskripsi' => 'Panduan Pengelolaan Sistem Manajemen adalah...',
            'file_path' => 'filepathnya',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Panduan::create([
            'judul' => 'Panduan Pengajuan Sistem Manajemen',
            'deskripsi' => 'Panduan Pengajuan Sistem Manajemen adalah...',
            'file_path' => 'filepathnya',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Panduan::create([
            'judul' => 'Instruksi Kerja Pengajuan Sistem Manajemen',
            'deskripsi' => 'Instruksi Kerja Pengajuan Sistem Manajemen adalah...',
            'file_path' => 'filepathnya',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
