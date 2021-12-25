<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inovasi extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function gagasan ()
    {
        return $this->belongsTo(Gagasan::class);
    }
    public function bagian ()
    {
        return $this->belongsTo(Bagian::class);
    }
    public function srg_periode ()
    {
        return $this->belongsTo(Srg_periode::class);
    }
    public function metodologi ()
    {
        return $this->belongsTo(Metodologi::class);
    }
    public function kategori ()
    {
        return $this->belongsTo(Kategori::class);
    }
    public function Inovasi_anggota ()
    {
        return $this->hasMany(Inovasi_anggota::class);
    }
    public function inovasi_related ()
    {
        return $this->hasMany(Inovasi_related::class);
    }
    public function inovasi_file ()
    {
        return $this->hasMany(Inovasi_file::class);
    }

}
