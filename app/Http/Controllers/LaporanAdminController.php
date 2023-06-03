<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class LaporanAdminController extends Controller
{
    public function generatePDF()
    {
        $data = ['title' => 'Laporan Peminjaman dan Pemanfaatan Sarana Prasarana Politeknik Negeri Malang'];

        $pdf = PDF::loadView('pdf.laporanAdmin', $data);
        return $pdf->stream();
    }
}
