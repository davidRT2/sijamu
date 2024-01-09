<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class create_janji_temu_table extends Model
{
    use HasFactory;
    protected $table = 'janji_temu';
    protected $fillable = ['kode_janji', 'nomor_registrasi', 'tanggal', 'tempat', 'keperluan'];
}
