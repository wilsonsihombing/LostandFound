<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LostItem;
use Maatwebsite\Excel\Facades\Excel; // Tambahkan ini
use App\Exports\LostItemsExport; // Dan ini
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;



class LostItemController extends Controller
{
    // Menampilkan form untuk melaporkan kehilangan
    public function create()
    {
        return view('pages.kehilangan'); // Pastikan view ini ada
    }

    // Menyimpan laporan kehilangan ke database
    public function store(Request $request)
    {
        $request->validate([
            'nama_pelapor' => 'required|string',
            'nomor_telepon' => 'required|string',
            'nama_barang' => 'required|string',
            'deskripsi_barang' => 'required|string',
            'lokasi_hilang' => 'required|string',
            'tanggal_hilang' => 'required|date',
            'kategori_barang' => 'required|string',
            'foto_barang' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Menyimpan foto barang dan mendapatkan path-nya
        $path = $request->file('foto_barang')->store('uploads', 'public');

        // Membuat entitas baru di database
        LostItem::create([
            'nama_pelapor' => $request->input('nama_pelapor'),
            'nomor_telepon' => $request->input('nomor_telepon'),
            'nama_barang' => $request->input('nama_barang'),
            'deskripsi_barang' => $request->input('deskripsi_barang'),
            'lokasi_hilang' => $request->input('lokasi_hilang'),
            'tanggal_hilang' => $request->input('tanggal_hilang'),
            'kategori_barang' => $request->input('kategori_barang'),
            'foto_barang' => $path,
        ]);

        return redirect()->route('lost-items.index')->with('success', 'Laporan berhasil dikirim!');
    }

    // Menampilkan semua laporan kehilangan
    public function index()
    {
        $lostItems = LostItem::all(); // Mengambil semua data kehilangan
        return view('pages.datakehilangan', compact('lostItems')); // Pastikan view ini ada
    }

    // public function export()
    // {
    //     return Excel::download(new LostItemsExport, 'data_kehilangan.xlsx');
    // }

    public function show($id)
    {
        $lostItem = LostItem::findOrFail($id);
        return view('pages.lost_item_detail', compact('lostItem'));
    }

    

}
