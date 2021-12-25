<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
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
