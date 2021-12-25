<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inovasi_related extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function inovasi ()
    {
        return $this->belongsTo(Inovasi::class);
    }
    public function related ()
    {
        return $this->belongsTo(Related::class);
    }
}
