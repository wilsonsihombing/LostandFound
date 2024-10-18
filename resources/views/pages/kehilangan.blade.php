<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pengisian Barang Hilang</title>
    <link rel="stylesheet" href="{{url('frontend/styles/kehilangan.css')}}">
</head>

<body>
    <div class="container">
        <h2>Form Pengisian Barang Hilang</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('lost-items.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="namaPelapor">Nama Pelapor:</label>
                <input type="text" id="namaPelapor" name="nama_pelapor" value="{{ old('nama_pelapor') }}" required>
            </div>
            
            <div class="form-group">
                <label for="nomorTelepon">Nomor Telepon:</label>
                <input type="tel" id="nomorTelepon" name="nomor_telepon" value="{{ old('nomor_telepon') }}" required>
            </div>
            <div class="form-group">
                <label for="namaBarang">Nama Barang Hilang:</label>
                <input type="text" id="namaBarang" name="nama_barang" value="{{ old('nama_barang') }}" required>
            </div>
            <div class="form-group">
                <label for="deskripsiBarang">Deskripsi Barang:</label>
                <textarea id="deskripsiBarang" name="deskripsi_barang" rows="4" required>{{ old('deskripsi_barang') }}</textarea>
            </div>
            <div class="form-group">
                <label for="lokasiHilang">Lokasi Kehilangan:</label>
                <input type="text" id="lokasiHilang" name="lokasi_hilang" value="{{ old('lokasi_hilang') }}" required>
            </div>
            <div class="form-group">
                <label for="tanggalHilang">Tanggal Kehilangan:</label>
                <input type="date" id="tanggalHilang" name="tanggal_hilang" value="{{ old('tanggal_hilang') }}" required>
            </div>
            <div class="form-group">
                <label for="kategoriBarang">Kategori Barang:</label>
                <select id="kategoriBarang" name="kategori_barang" required>
                    <option value="">Pilih Kategori</option>
                    <option value="Elektronik" {{ old('kategori_barang') == 'Elektronik' ? 'selected' : '' }}>Elektronik</option>
                    <option value="Dokumen" {{ old('kategori_barang') == 'Dokumen' ? 'selected' : '' }}>Dokumen</option>
                    <option value="Pakaian" {{ old('kategori_barang') == 'Pakaian' ? 'selected' : '' }}>Pakaian</option>
                    <option value="Aksesoris" {{ old('kategori_barang') == 'Aksesoris' ? 'selected' : '' }}>Aksesoris</option>
                    <option value="Lainnya" {{ old('kategori_barang') == 'Lainnya' ? 'selected' : '' }}>Lainnya</option>
                </select>
            </div>
            <div class="form-group">
                <label for="fotoBarang">Upload Gambar Barang:</label>
                <input type="file" id="fotoBarang" name="foto_barang" accept="image/*" required>
            </div>
            <div class="form-group">
                <button type="submit">Kirim Laporan</button>
            </div>
        </form>
    </div>
</body>
</html>
