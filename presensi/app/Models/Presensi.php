<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presensi extends Model
{
    use HasFactory;
    protected $fillable = ['id_jadwal', 'id_pembagian_kelas', 'id_siswa', 'keterangan'];
}
