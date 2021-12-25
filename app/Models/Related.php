<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Related extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function inovasi_related ()
    {
        return $this->hasMany(Inovasi_related::class);
    }
}
