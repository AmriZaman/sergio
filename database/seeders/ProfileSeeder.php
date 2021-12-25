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
            'nama' => 'Administrator'
            // 'bagian' => 'Inovasi'
        ]);

        //manager
        Profile::create([
            'nik' => '2166422',
            'nama' => 'Amri Zaman',
            // 'bagian' => 'Inovasi',
            'email_1' => 'amri@gmail.com'
        ]);
        Profile::create([
            'nik' => 'T284088',
            'nama' => 'Randy',
            // 'bagian' => 'Pabrik 3A',
            'email_1' => 'randy@gmail.com'
        ]);

        //fasilitator
        Profile::create([
            'nik' => '2166448',
            'nama' => 'Fernaldi',
            // 'bagian' => 'Keamanan',
            'email_1' => 'fernaldi@gmail.com'
        ]);

        //KID
        Profile::create([
            'nik' => 'T284068',
            'nama' => 'Agung',
            // 'bagian' => 'IT',
            'email_1' => 'agung@gmail.com'
        ]);

        //SPTK
        Profile::create([
            'nik' => 'T284092',
            'nama' => 'Aufar',
            // 'bagian' => 'Riset',
            'email_1' => 'aufar@gmail.com'
        ]);

        //Biasa
        Profile::create([
            'nik' => 'T284097',
            'nama' => 'Johan',
            // 'bagian' => 'Riset',
            'email_1' => 'johan@gmail.com'
        ]);

    }
}
