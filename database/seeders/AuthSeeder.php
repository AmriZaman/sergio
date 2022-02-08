<?php

namespace Database\Seeders;

use App\Models\Auth;
use Illuminate\Database\Seeder;

class AuthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Auth::create ([
            'nik' => '2166422',
            'kode_periode_sg' => '21.1',
            'kode_periode_srg' => '21.1',
            'kode_jenis' => 'VERIFIKATOR_SG',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Auth::create ([
            'nik' => 'T284088',
            'kode_periode_sg' => '21.1',
            'kode_periode_srg' => 'NULL',
            'kode_jenis' => 'VERIFIKATOR_SG',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Auth::create ([
            'nik' => '2166448',
            'kode_periode_sg' => '21.1',
            'kode_periode_srg' => 'NULL',
            'kode_jenis' => 'FASILITATOR_SG',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Auth::create ([
            'nik' => 'T284068',
            'kode_periode_sg' => 'NULL',
            'kode_periode_srg' => '21.1',
            'kode_jenis' => 'KID',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Auth::create ([
            'nik' => 'T284092',
            'kode_periode_sg' => 'NULL',
            'kode_periode_srg' => '21.1',
            'kode_jenis' => 'SPTK',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Auth::create ([
            'nik' => 'T284097',
            'kode_periode_sg' => 'NULL',
            'kode_periode_srg' => 'NULL',
            'kode_jenis' => 'NULL',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        //BOP
        // Auth::create ([
        //     'nik' => 'bop',
        //     'kode_periode_sg' => 'NULL',
        //     'kode_periode_srg' => 'NULL',
        //     'kode_jenis' => 'NULL',
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);
    }
}
