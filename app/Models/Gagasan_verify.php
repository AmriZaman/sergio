<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gagasan_verify extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function gagasan ()
    {
        return $this->belongsTo(Gagasan::class);
    }
}
