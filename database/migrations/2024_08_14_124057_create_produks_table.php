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
        Schema::create('produks', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('id_user');
            $table->string('nama_produk');
            $table->unsignedBigInteger('kategoris_id');
            $table->foreign('kategoris_id')->references('id')->on('kategoris')->cascadeOnDelete()->cascadeOnUpdate();
            // $table->foreign('users_id')->references('id')->on('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->integer('jumlah');
            $table->integer('harga');
            $table->string('foto');
            $table->string('stok');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produks');
    }
};
