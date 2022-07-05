<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    protected $fillable = ['id_identitas','id_kelas', 'id_mapel', 'hari', 'jam'];

    public function kelas(){
        return $this->belongsTo(Kelas::class, 'id_kelas');
    }

    public function mapel(){
        return $this->belongsTo(Mapel::class, 'id_mapel');
    }
}
