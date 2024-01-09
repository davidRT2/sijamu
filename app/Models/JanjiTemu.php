<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JanjiTemu extends Model
{
    use HasFactory;
    protected $table = 'janji_temu';
    protected $fillable = ['kode_janji', 'tanggal', 'tempat', 'keperluan'];

    public function history(){
        $this->belongsTo(History::class, 'kode_janji');
    }
}
