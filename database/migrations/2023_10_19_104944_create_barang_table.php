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
        Schema::create('barang', function (Blueprint $table) {
            $table->increments('id_barang');
            $table->foreign('id_kategori');
            $table->foreign('id_stok');
            $table->string('nama_barang')->unique();
            $table->string('merk')->nullable();
            $table->integer('kuantitas');
            $table->integer('harga_jual');
            $table->integer('stok');
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     * 
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barang');
    }
};
