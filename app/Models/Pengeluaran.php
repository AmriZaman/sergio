<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengeluaran extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function inovasi_file ()
    {
        return $this->belongsTo(Inovasi_file::class);
    }
}
