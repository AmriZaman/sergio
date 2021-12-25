<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Metodologi extends Model
{
    use HasFactory;

    public function inovasi ()
    {
        return $this->hasMany(Inovasi::class);
    }
}
