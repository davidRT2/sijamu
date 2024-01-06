<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataUser extends Model
{
    use HasFactory;
    protected $table = "data_user";
    protected $fillable = ['nama', 'nomor_registrasi', 'jabatan', 'role', 'email', 'nomor_telepon'];

    public function akunUser(){
        return $this->hasOne(AkunUser::class, 'nomor_registrasi');
    }
}
