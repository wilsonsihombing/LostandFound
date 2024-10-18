<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FoundItem; // Pastikan model FoundItem sudah ada

class FoundItemController extends Controller
{
    /**
     * Show the form to create a new found item report.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        // Menampilkan form pelaporan penemuan
        return view('found-items.create');
    }

    /**
     * Store the found item report in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_pelapor' => 'required|string',
            'nomor_telepon' => 'required|string',
            'nama_barang' => 'required|string',
            'deskripsi_barang' => 'required|string',
            'lokasi_penemuan' => 'required|string',
            'tanggal_penemuan' => 'required|date',
            'kategori_barang' => 'required|string',
            'foto_barang' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $path = $request->file('foto_barang')->store('uploads', 'public');

        FoundItem::create([
            'nama_pelapor' => $request->input('nama_pelapor'),
            'nomor_telepon' => $request->input('nomor_telepon'),
            'nama_barang' => $request->input('nama_barang'),
            'deskripsi_barang' => $request->input('deskripsi_barang'),
            'lokasi_penemuan' => $request->input('lokasi_penemuan'),
            'tanggal_penemuan' => $request->input('tanggal_penemuan'),
            'kategori_barang' => $request->input('kategori_barang'),
            'foto_barang' => $path,
        ]);

        return redirect()->route('found-items.index')->with('success', 'Laporan berhasil dikirim!');
    }

    /**
     * Display a listing of the found items.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Mengambil semua data barang hilang dari database
        $foundItems = FoundItem::all();

        // Menampilkan data barang hilang ke dalam view
        return view('found-items.index', compact('foundItems'));
    }
}
