<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLostItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lost_items', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pelapor');
            $table->string('nomor_telepon');
            $table->string('nama_barang');
            $table->text('deskripsi_barang');
            $table->string('lokasi_hilang');
            $table->date('tanggal_hilang');
            $table->string('kategori_barang');
            $table->string('foto_barang'); // Untuk menyimpan path gambar barang
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lost_items');
    }
}
