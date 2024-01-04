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
        Schema::create('pelanggans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_gol');
            $table->string('no_pelanggan', 20);
            $table->string('no_kamar', 20);
            $table->string('nama', 50);
            $table->string('no_hp', 20);
            $table->unsignedBigInteger('id_user');
            $table->enum('status', ['Aktif', 'Tidak Aktif'])->dafault('Aktif');
            $table->foreign('id_gol')->references('id')->on('golongans');
            $table->foreign('id_user')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelanggans');
    }
};
