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
        Schema::create('kberencanas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->integer('nik')->unsigned()->unique();
            $table->integer('umur');
            $table->string('nama_suami');
            $table->text('alamat');
            $table->integer('jumlah_anak')->unsigned();
            $table->boolean('is_kondom')->default(false)->nullable();
            $table->boolean('is_pil')->default(false)->nullable();
            $table->boolean('is_suntik_1')->default(false)->nullable();
            $table->boolean('is_suntik_2')->default(false)->nullable();
            $table->boolean('is_suntik_3')->default(false)->nullable();
            $table->boolean('is_implan')->default(false)->nullable();
            $table->boolean('is_iud')->default(false)->nullable();
            $table->boolean('is_mow')->default(false)->nullable();
            $table->boolean('is_mop')->default(false)->nullable();
            $table->integer('td');
            $table->integer('bb');
            $table->date('tanggal_kembali');
            $table->string('keterangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kberencanas');
    }
};
