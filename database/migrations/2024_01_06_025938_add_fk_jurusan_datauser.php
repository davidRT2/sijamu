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
        //
        // Schema::table('data_user', function (Blueprint $table) {
        //     // $table->dropColumn('kode_jurusan');
        //     $table->string('kode_jurusan');
        //     $table->foreign('kode_jurusan')->references('kode_jurusan')->on('data_jurusan');
        // });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        // Schema::table('data_user', function (Blueprint $table){
        //     $table->dropForeign(['kode_jurusan']);
        //     $table->dropColumn('kode_jurusan');
        // });
    }
};
