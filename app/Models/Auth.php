<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auth extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function profile ()
    {
        return $this->belongsTo(Profile::class);
    }

    public function auth_jenis ()
    {
        return $this->belongsTo(Auth_jenis::class);
    }

    public function sg_periode ()
    {
        return $this->belongsTo(Sg_periode::class);
    }
    public function srg_periode ()
    {
        return $this->belongsTo(Srg_periode::class);
    }
}
