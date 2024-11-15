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
        Schema::create('hamils', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->integer('nik')->unique();
            $table->integer('umur')->unsigned();
            $table->string('nama_suami');
            $table->text('alamat');
            $table->integer('no_hp')->unsigned();
            $table->integer('gpa');
            $table->integer('jarak_kehamilan');
            $table->integer('hpht');
            $table->integer('tp');
            $table->integer('uk');
            $table->integer('tb');
            $table->integer('bb');
            $table->integer('td');
            $table->integer('lila');
            $table->integer('tinggi_fundus');
            $table->integer('djj');
            $table->integer('tt')->nullable();
            $table->integer('hb')->nullable();
            $table->integer('pro')->nullable();
            $table->integer('glu')->nullable();
            $table->text('keluhan');
            $table->text('terapi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hamils');
    }
};
