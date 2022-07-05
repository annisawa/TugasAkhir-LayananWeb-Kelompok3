<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $fillable = ['nisn', 'nik', 'nama', 'jk', 'tempat_lahir', 'tgl_lahir', 'agama', 'no_hp', 'email', 'alamat'];

    public function pendaftaran(){
        return $this->hasOne(Pendaftaran::class, 'id_siswa');
    }

    public function buktipembayaran(){
        return $this->hasOne(BuktiPembayaran::class, 'id_siswa');
    }

    public function pengumuman(){
        return $this->hasOne(Pengumuman::class, 'id_siswa');
    }

}
