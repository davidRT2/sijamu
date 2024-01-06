<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AkunUser extends Model
{
    use HasFactory;
    protected $table = 'akun_user';
    protected $fillable = ['kode_akun', 'nomor_registrasi', 'password'];

    public function dataUser()
    {
        return $this->belongsTo(DataUser::class, 'nomor_registrasi');
    }
}