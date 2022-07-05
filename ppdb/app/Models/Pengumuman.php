<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    use HasFactory;

    public $primaryKey = 'id';
    protected $fillable = ['id_pendaftaran', 'id_siswa', 'keterangan'];

    public function pendaftaran(){
        return $this->belongsTo(Pendaftaran::class, 'id_pendaftaran');
    }

    public function siswa(){
        return $this->belongsTo(Siswa::class, 'id_siswa');
    }
}
