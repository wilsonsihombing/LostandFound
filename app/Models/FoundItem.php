<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoundItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_pelapor',
        'nomor_telepon',
        'nama_barang',
        'deskripsi_barang',
        'lokasi_penemuan',
        'tanggal_penemuan',
        'kategori_barang',
        'foto_barang',
    ];
}
