<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inovasi_file extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function inovasi ()
    {
        return $this->belongsTo(Inovasi::class);
    }
    public function dokumen ()
    {
        return $this->belongsTo(Dokumen::class);
    }
    public function standarisasi ()
    {
        return $this->belongsTo(Standarisasi::class);
    }

    public function pendapatan ()
    {
        return $this->hasMany(Pendapatan::class);
    }
    public function pengeluaran ()
    {
        return $this->hasMany(Pengeluaran::class);
    }
}
