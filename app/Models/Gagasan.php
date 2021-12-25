<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gagasan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function profile ()
    {
        return $this->belongsTo(Profile::class);
    }
    public function sg_periode ()
    {
        return $this->belongsTo(Sg_periode::class);
    }
    public function departemen ()
    {
        return $this->belongsTo(Departemen::class);
    }
    public function gagasan_files ()
    {
        return $this->hasMany(Gagasan_files::class);
    }
    public function gagasan_verify ()
    {
        return $this->hasMany(Gagasan_verify::class);
    }
    public function inovasi ()
    {
        return $this->hasMany(Inovasi::class);
    }
}
