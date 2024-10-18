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

        // Buat objek Spreadsheet baru
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Set header kolom
        $sheet->setCellValue('A1', 'Nama Pelapor');
        $sheet->setCellValue('B1', 'Nama Barang');
        $sheet->setCellValue('C1', 'Lokasi Hilang');
        $sheet->setCellValue('D1', 'Tanggal Hilang');
        $sheet->setCellValue('E1', 'Kategori');

        // Mengisi data dari database ke dalam sheet
        $row = 2; // Mulai dari baris kedua
        foreach ($lostItems as $item) {
            $sheet->setCellValue('A' . $row, $item->reporter_name);
            $sheet->setCellValue('B' . $row, $item->item_name);
            $sheet->setCellValue('C' . $row, $item->lost_location);
            $sheet->setCellValue('D' . $row, $item->lost_date);
            $sheet->setCellValue('E' . $row, $item->category);
            $row++;
        }

        // Simpan spreadsheet ke dalam file
        $writer = new Xlsx($spreadsheet);
        $fileName = 'lost_items_.'.now().'xlsx';
        $temp_file = tempnam(sys_get_temp_dir(), $fileName);

        // Simpan file ke sistem sementara
        $writer->save($temp_file);

        // Mengunduh file
        return response()->download($temp_file, $fileName)->deleteFileAfterSend(true);
    }
}
