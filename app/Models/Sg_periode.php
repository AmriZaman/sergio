<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sg_periode extends Model
{
    use HasFactory;

    public function auth ()
    {
        return $this->hasMany(Auth::class);
    }

    public function gagasan ()
    {
        return $this->hasMany(Gagasan::class);
    }


}
