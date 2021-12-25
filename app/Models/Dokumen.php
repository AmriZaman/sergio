<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokumen extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function inovasi_file ()
    {
        return $this->hasMany(Inovasi_file::class);
    }
    public function tahapan ()
    {
        return $this->hasMany(Tahapan::class);
    }
    public function dokumen_jenis ()
    {
        return $this->hasMany(Dokumen_jenis::class);
    }
}
