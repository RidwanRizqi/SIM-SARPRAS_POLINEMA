<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Models\Wewenang;
use App\Models\User;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Carbon\CarbonInterface;

class CetakSuratController extends Controller
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
        $peminjamanPdf3 = User::where('id',13)->get();
        $pdf = PDF::loadView('pdf.buktipendaftaran', compact('peminjamanPdf', 'peminjamanPdf2','peminjamanPdf3'));
        return $pdf->stream();
    }

    public function generatebuktiUPDF(Request $request)
    {
        $peminjamanId = $request->input('peminjaman_id');
        $peminjamanPdf = Peminjaman::where('id', $peminjamanId)->get();
        $peminjamanPdf2 = Wewenang::where('id',8)->get();
        $peminjamanPdf3 = User::where('id',13)->get();
        $pdf = PDF::loadView('pdf.buktiumum', compact('peminjamanPdf', 'peminjamanPdf2','peminjamanPdf3'));
        return $pdf->stream();
    }

    public function destroy(Peminjaman $peminjaman)
    {
        //
    }

}
