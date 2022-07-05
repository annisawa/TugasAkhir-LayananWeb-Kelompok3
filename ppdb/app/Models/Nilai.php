<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;

    protected $fillable = ['raport_smt1', 'raport_smt2', 'raport_smt3', 'raport_smt4', 'raport_smt5', 'usbn', 'un'];

    public function pendaftaran(){
        return $this->hasOne(Pendaftaran::class, 'id_nilai');
    }
}
