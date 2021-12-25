<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Srg_periode extends Model
{
    use HasFactory;

    public function auth ()
    {
        return $this->hasMany(Auth::class);
    }

    public function inovasi ()
    {
        return $this->hasMany(Inovasi::class);
    }

}
