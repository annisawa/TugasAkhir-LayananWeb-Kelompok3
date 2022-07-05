<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;

    public $primaryKey = 'id';
    protected $fillable = ['id_siswa', 'id_ortu', 'id_nilai', 'id_sekolah', 'id_jurusan'];

    public function siswa(){
        return $this->belongsTo(Siswa::class, 'id_siswa');
    }

    public function ortu(){
        return $this->belongsTo(OrangTua::class, 'id_ortu');
    }

    public function nilai(){
        return $this->belongsTo(Nilai::class, 'id_nilai');
    }

    public function sekolah(){
        return $this->belongsTo(Sekolah::class, 'id_sekolah');
    }

    public function jurusan(){
        return $this->belongsTo(Jurusan::class, 'id_jurusan');
    }

    public function buktipembayaran(){
        return $this->hasOne(BuktiPembayaran::class, 'id_pendaftaran');
    }

    public function pengumuman(){
        return $this->hasOne(Pengumuman::class, 'id_pendaftaran');
    }
}