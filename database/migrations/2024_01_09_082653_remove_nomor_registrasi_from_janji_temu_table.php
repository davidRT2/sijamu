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
        Schema::table('janji_temu', function (Blueprint $table) {
            //
            $table->dropForeign(['nomor_registrasi']);
            $table->dropColumn('nomor_registrasi');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('janji_temu', function (Blueprint $table) {
            //
            $table->foreign('nomor_registrasi')->references('nomor_registrasi')->on('data_user')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
    }
};
