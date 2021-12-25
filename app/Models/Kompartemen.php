<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kompartemen extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function departemen ()
    {
        return $this->hasMany(Departemen::class);
    }
}
