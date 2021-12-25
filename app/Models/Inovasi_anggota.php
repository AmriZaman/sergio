<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inovasi_anggota extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    
    public function profile ()
    {
        return $this->belongsTo(Profile::class);
    }
    public function inovasi ()
    {
        return $this->belongsTo(Inovasi::class);
    }
}
