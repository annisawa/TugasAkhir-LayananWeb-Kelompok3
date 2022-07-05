<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    use HasFactory;

    protected $fillable = ['mapel'];

    public function jadwal(){
        return $this->hasOne(Jadwal::class, 'id_mapel');
    }
}
