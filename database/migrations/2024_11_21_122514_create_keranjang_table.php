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
        Schema::create('keranjang', function (Blueprint $table) {
            // Kolom untuk id
            $table->id();  // Menghasilkan kolom BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY
            // Kolom untuk id_pelanggan dengan tipe INT(10)
            $table->integer('id_pelanggan')->unsigned();
            // Kolom untuk id_produk dengan tipe INT(10)
            $table->integer('id_produk')->unsigned();
            // Kolom untuk quantity
            $table->integer('quantity');
            // Kolom timestamp untuk created_at dan updated_at
            $table->timestamps();  // Ini otomatis membuat created_at dan updated_at

            // Menambahkan foreign key untuk id_pelanggan
            $table->foreign('id_pelanggan')->references('id_pelanggan')->on('pelanggan')->onDelete('cascade');
            // Menambahkan foreign key untuk id_produk
            $table->foreign('id_produk')->references('id_produk')->on('produk')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Drop tabel keranjang
        Schema::dropIfExists('keranjang');
    }
};
