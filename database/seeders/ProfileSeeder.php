<?php

namespace Database\Seeders;


use App\Models\Profile;
use Illuminate\Database\Seeder;


class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //admin
        Profile::create([
            'nik' => 'bop',
            'nama' => 'Administrator',
            'password' => bcrypt('admin')
            // 'bagian' => 'Inovasi'
        ]);

        //manager
        Profile::create([
            'nik' => 'manager_inovasi',
            'nama' => 'Amri Zaman',
            // 'bagian' => 'Inovasi',
            'email_1' => 'amri@gmail.com',
            'password' => bcrypt('manager')
        ]);
        Profile::create([
            'nik' => 'manager_riset',
            'nama' => 'Randy',
            // 'bagian' => 'Pabrik 3A',
            'email_1' => 'randy@gmail.com',
            'password' => bcrypt('manager')
        ]);

        //fasilitator
        Profile::create([
            'nik' => 'fasilitator_inovasi',
            'nama' => 'Fernaldi',
            // 'bagian' => 'Keamanan',
            'email_1' => 'fernaldi@gmail.com',
            'password' => bcrypt('fasilitator')
        ]);

        //KID
        Profile::create([
            'nik' => 'kid_inovasi',
            'nama' => 'Agung',
            // 'bagian' => 'IT',
            'email_1' => 'agung@gmail.com',
            'password' => bcrypt('kid')
        ]);

        //SPTK
        Profile::create([
            'nik' => 'sptk_inovasi',
            'nama' => 'Aufar',
            // 'bagian' => 'Riset',
            'email_1' => 'aufar@gmail.com',
            'password' => bcrypt('sptk')
        ]);

        //Biasa
        Profile::create([
            'nik' => 'pegawai_inovasi',
            'nama' => 'Johan',
            // 'bagian' => 'Riset',
            'email_1' => 'johan@gmail.com',
            'password' => bcrypt('pegawai')
        ]);

    }
}
