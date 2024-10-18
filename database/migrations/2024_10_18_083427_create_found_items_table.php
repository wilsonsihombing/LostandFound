<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoundItemsTable extends Migration
{
    public function up()
    {
        Schema::create('found_items', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pelapor');
            $table->string('nomor_telepon');
            $table->string('nama_barang');
            $table->text('deskripsi_barang');
            $table->string('lokasi_penemuan');
            $table->date('tanggal_penemuan');
            $table->string('kategori_barang');
            $table->string('foto_barang');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('found_items');
    }
}
