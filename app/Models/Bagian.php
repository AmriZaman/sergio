<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bagian extends Model
{
    use HasFactory;

    protected $table = 'bagians';

    protected $guarded = ['id'];

    public function departemen ()
    {
        return $this->belongsTo(Departemen::class);
    }

    public function inovasi ()
    {
        return $this->hasMany(Inovasi::class);
    }

    public function profile ()
    {
        return $this->hasMany(Profile::class);
    }

}
