<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Penemuan</title>
    <link rel="stylesheet" href="{{url('frontend/styles/datakehilangan.css')}}">
</head>
<body>
    <div class="container">
        <h2>Data Penemuan</h2>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Tambahkan tombol ekspor di sini -->
        <a href="{{ route('lost-items.export') }}" class="btn btn-primary" style="margin-bottom: 20px;">
            Ekspor Data Penemuan
        </a>

        <table>
            <thead>
                <tr>
                    <th>Nama Pelapor</th>
                    <th>Nama Barang</th>
                    <th>Lokasi Hilang</th>
                    <th>Tanggal Hilang</th>
                    <th>Kategori</th>
                    <th>Gambar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($lostItems as $item)
                    <tr>
                        <td>{{ $item->nama_pelapor }}</td>
                        <td>{{ $item->nama_barang }}</td>
                        <td>{{ $item->lokasi_hilang }}</td>
                        <td>{{ $item->tanggal_hilang }}</td>
                        <td>{{ $item->kategori_barang }}</td>
                        <td>
                            <img src="{{ Storage::url($item->foto_barang) }}" alt="{{ $item->nama_barang }}" width="100">
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
