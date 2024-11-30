<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesananTable extends Migration
{
    public function up()
    {
        Schema::create('pesanan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_pelanggan')->constrained('pelanggan')->cascadeOnDelete();
            $table->string('nama');
            $table->string('email');
            $table->string('phone');
            $table->string('kabupaten');
            $table->string('kecamatan');
            $table->string('alamat');
            $table->text('catatan')->nullable();
            $table->decimal('total_harga', 10, 2);
            $table->string('payment_method');
            $table->enum('status', ['pending','success', 'expired', 'canceled'])->default('pending');
            $table->timestamps();
            
        });
    }

    public function down()
    {
        Schema::dropIfExists('pesanan');
    }
}
