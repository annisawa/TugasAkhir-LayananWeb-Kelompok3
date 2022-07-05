<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sekolah extends Model
{
    use HasFactory;

    protected $fillable = ['npsn', 'nama_sekolah', 'status', 'alamat', 'tahun_lulus'];

    public function pendaftaran(){
        return $this->hasOne(Pendaftaran::class, 'id_sekolah');
    }
}
