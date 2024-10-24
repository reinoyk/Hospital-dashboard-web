<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('cache', function (Blueprint $table) {
            $table->string('key')->unique();     // Kunci unik untuk data cache
            $table->text('value');               // Nilai yang disimpan dalam cache (dalam bentuk teks/serialisasi)
            $table->integer('expiration');       // Waktu kedaluwarsa dalam bentuk timestamp UNIX
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('cache');
    }
};
