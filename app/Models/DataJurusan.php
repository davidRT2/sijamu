<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataJurusan extends Model
{
    use HasFactory;
    protected $table = "data_jurusan";
    protected $fillable = ['kode_jurusan', 'nama_jurusan'];

    public function jurusan(){
        return $this->hasMany(DataUser::class);
    }
}
