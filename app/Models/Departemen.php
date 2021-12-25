<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departemen extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function kompartemen ()
    {
        return $this->belongsTo(Kompartemen::class);
    }

    public function bagian ()
    {
        return $this->hasMany(Bagian::class);
    }
    public function gagasan ()
    {
        return $this->hasMany(Gagasan::class);
    }
}
