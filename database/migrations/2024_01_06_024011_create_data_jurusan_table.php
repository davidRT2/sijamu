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
        Schema::create('data_jurusan', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("kode_jurusan")->unique();
            $table->string("nama_jurusan");
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_jurusan');
    }
};
