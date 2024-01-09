<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;
    protected $table = 'history';
    protected $fillable = ['kode_janji', 'nip_dosen', 'nim_mahasiswa', 'status'];

    public function janji() {
        return $this->hasOne(JanjiTemu::class, 'kode_janji');
    }

}
