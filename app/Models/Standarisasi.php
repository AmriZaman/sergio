<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Standarisasi extends Model
{
    use HasFactory;

    public function inovasi_file ()
    {
        return $this->hasMany(Inovasi_file::class);
    }
}
