<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auth_jenis extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function auth ()
    {
        return $this-> hasMany(Auth::class);
    }
}
