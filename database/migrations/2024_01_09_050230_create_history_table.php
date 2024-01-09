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
        Schema::create('history', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('kode_janji');
            $table->foreign('kode_janji')->references('kode_janji')
            ->on('janji_temu')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->string('nip_dosen');
            $table->string('nim_mahasiswa');
            $table->foreign('nip_dosen')->references('nomor_registrasi')->on('data_user')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreign('nim_mahasiswa')->references('nomor_registrasi')->on('data_user')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->string('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('history');
    }
};
