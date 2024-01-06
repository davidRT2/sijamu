<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('akun_user', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("kode_akun")->unique();
            $table->string("nomor_registrasi")->nullable();
            $table->foreign("nomor_registrasi")->references("nomor_registrasi")->on('data_user')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->string("password");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('akun_user');
    }
};
