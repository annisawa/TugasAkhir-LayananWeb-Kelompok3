<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $fillable = ['kelas'];

    public function pembagiankelas(){
        return $this->hasOne(PembagianKelas::class, 'id_kelas');
    }

    public function jadwal(){
        return $this->hasOne(Jadwal::class, 'id_kelas');
    }
}
