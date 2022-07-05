<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPribadi extends Model
{
    use HasFactory;

    protected $fillable = ['nip', 'nik', 'nama', 'jk', 'tempat_lahir', 'tgl_lahir', 'status', 'no_hp', 'email', 'alamat', 'pendidikan_terakhir', 'tempat_pendidikan', 'tahun_masuk', 'tahun_lulus'];

    public function pegawai(){
        return $this->hasOne(Pegawai::class, 'id_identitas');
    }
}
