<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesananTable extends Migration
{
    public function up()
    {
        Schema::create('pesanan', function (Blueprint $table) {
            $table->integer('id_pelanggan')->unsigned();
            $table->id();
            $table->string('nama');
            $table->string('email');
            $table->string('phone');
            $table->string('kabupaten');
            $table->string('kecamatan');
            $table->string('alamat');
            $table->text('catatan')->nullable();
            $table->decimal('subtotal', 10, 2);
            $table->string('payment_method');
            $table->timestamps();
            
            $table->foreign('id_pelanggan')->references('id_pelanggan')->on('pelanggan')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('pesanan');
    }
}
