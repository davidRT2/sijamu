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
        Schema::create('janji_temu', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nomor_registrasi');
            $table->foreign('nomor_registrasi')->references('nomor_registrasi')->on('data_user')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->string('kode_janji')->unique();
            $table->dateTime('tanggal');
            $table->string('tempat');
            $table->longText('keperluan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('janji_temu');
    }
};
