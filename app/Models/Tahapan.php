<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tahapan extends Model
{
    use HasFactory;

    public function dokumen ()
    {
        return $this->hasMany(Dokumen::class);
    }
}
