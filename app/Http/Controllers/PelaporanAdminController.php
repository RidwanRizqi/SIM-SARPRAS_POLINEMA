<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Models\Wewenang;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PelaporanAdminController extends Controller
{
    public function index(Request $request)
    {
        $startDate = $request->input('startDate');
        $endDate = $request->input('endDate');

        $peminjamans = Peminjaman::when($startDate && $endDate, function ($query) use ($startDate, $endDate) {
            $query->whereBetween('tanggal_mulai', [$startDate, $endDate]);
        })
            ->paginate(5);

        return view('admin.pelaporan', compact('peminjamans'));
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */

    public function show(Peminjaman $peminjaman)
    {
        //
    }

    public function edit(Peminjaman $peminjaman)
    {
        //
    }

    public function update(Request $request, Peminjaman $peminjaman)
    {
        //
    }


    public function generatePDF()
    {
//        $peminjamans = Peminjaman::all();
//        $pdf = PDF::loadview('pdf.laporanAdmin', ['peminjamans' => $peminjamans]);
//        return $pdf->download('laporan-peminjaman.pdf');
        $data = ['title' => 'Laporan Peminjaman dan Pemanfaatan Sarana Prasarana Politeknik Negeri Malang'];
        $pdf = PDF::loadView('pdf.laporanAdmin', $data);
        return $pdf->stream();
    }
    public function generatebuktiPDF(Request $request)
    {
        $peminjamanId = $request->input('peminjaman_id');
        $peminjamanPdf = Peminjaman::where('id', $peminjamanId)->get();
        $peminjamanPdf2 = Wewenang::where('id',9)->get();
        $pdf = PDF::loadView('pdf.buktipendaftaran', compact('peminjamanPdf', 'peminjamanPdf2'));
        return $pdf->stream();
    }

    public function destroy(Peminjaman $peminjaman)
    {
        //
    }

}
