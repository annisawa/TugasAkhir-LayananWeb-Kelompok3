<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    public $primaryKey = 'id';
    protected $fillable = ['id_identitas', 'id_pendidikan', 'jabatan', 'pangkat', 'gaji_pokok', 'sumber_gaji'];

    public function datapribadi(){
        return $this->belongsTo(DataPribadi::class, 'id_identitas');
    }
}
