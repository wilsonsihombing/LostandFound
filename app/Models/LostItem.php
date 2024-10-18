<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LostItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_pelapor', 
        'nomor_telepon', 
        'nama_barang', 
        'deskripsi_barang', 
        'lokasi_hilang', 
        'tanggal_hilang', 
        'kategori_barang', 
        'foto_barang'
    ];
}
