<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Profile extends Authenticatable
{
    use HasFactory;

    public function auth ()
    {
        return $this->hasMany(Auth::class);
    }

    public function inovasi_anggota ()
    {
        return $this->hasMany(Inovasi_anggota::class);
    }

    public function gagasan ()
    {
        return $this->hasMany(Gagasan::class);
    }

    public function bagian ()
    {
        return $this->belongsTo(Bagian::class);
    }

}
