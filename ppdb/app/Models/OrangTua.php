<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrangTua extends Model
{
    use HasFactory;

    protected $fillable = ['nik_ayah', 'nama_ayah', 'pendidikan_ayah', 'pekerjaan_ayah', 'penghasilan_ayah', 'nohp_ayah','nik_ibu', 'nama_ibu', 'pendidikan_ibu', 'pekerjaan_ibu', 'penghasilan_ibu', 'nohp_ibu'];

    public function pendaftaran(){
        return $this->hasOne(Pendaftaran::class, 'id_ortu');
    }
}
