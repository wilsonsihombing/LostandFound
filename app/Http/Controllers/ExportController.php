<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel; // Tambahkan ini
use App\Exports\LostItemsExport; // Dan ini
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use App\Models\LostItem;


class ExportController extends Controller
{
    public function export()
    {
        // Ambil data dari database (misalnya data barang hilang)
        $lostItems = LostItem::all();
        // dd($lostItems);

        // Buat objek Spreadsheet baru
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Set header kolom
        $sheet->setCellValue('A1', 'Nama Pelapor');
        $sheet->setCellValue('B1', 'Nama Barang');
        $sheet->setCellValue('C1', 'Deskripsi Barang');
        $sheet->setCellValue('D1', 'Lokasi Hilang');
        $sheet->setCellValue('E1', 'Tanggal Hilang');
        $sheet->setCellValue('F1', 'Kategori');

        // Mengisi data dari database ke dalam sheet
        $row = 2; // Mulai dari baris kedua
        foreach ($lostItems as $item) {
            $sheet->setCellValue('A' . $row, $item->nama_pelapor);
            $sheet->setCellValue('B' . $row, $item->nama_barang);
            $sheet->setCellValue('C' . $row, $item->deskripsi_barang);
            $sheet->setCellValue('D' . $row, $item->lokasi_hilang);
            $sheet->setCellValue('E' . $row, $item->tanggal_hilang);
            $sheet->setCellValue('F' . $row, $item->kategori_barang);
            $row++;
        }

        // Simpan spreadsheet ke dalam file
        $writer = new Xlsx($spreadsheet);
        $fileName = 'lost_items_.'.now().'.xlsx';
        $temp_file = tempnam(sys_get_temp_dir(), $fileName);

        // Simpan file ke sistem sementara
        $writer->save($temp_file);

        // Mengunduh file
        return response()->download($temp_file, $fileName)->deleteFileAfterSend(true);
    }

    
}
