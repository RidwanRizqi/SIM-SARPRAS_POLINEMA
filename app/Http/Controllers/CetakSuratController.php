<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Models\Wewenang;
use App\Models\User;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Carbon\CarbonInterface;
use Illuminate\Support\Facades\Auth;

class CetakSuratController extends Controller
{
    public function index(Request $request)
    {
        $startDate = $request->input('startDate');
        $endDate = $request->input('endDate');

        $peminjamans = Peminjaman::when($startDate && $endDate, function ($query) use ($startDate, $endDate) {
            $query->whereBetween('tanggal_mulai', [$startDate, $endDate]);
        })
            ->when(Auth::user()->id_wewenang, function ($query) {
                $query->where('id_wewenang', Auth::user()->id_wewenang);
            })  ->where('status', 'Valid')
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


    public function generatePDF(Request $request)
    {
        $sDate = $request->input('sDate');
        $eDate = $request->input('eDate');

        $peminjamanPdf = Peminjaman::when($sDate && $eDate, function ($query) use ($sDate, $eDate) {
            $query->whereBetween('tanggal_mulai', [$sDate, $eDate]);
        })->when(Auth::user()->id_wewenang, function ($query) {
                $query->where('id_wewenang', Auth::user()->id_wewenang);
            });
        $peminjamanPdf = $peminjamanPdf->where('status', 'Valid')->get();
        // Mengubah format startDate
        $startDateFormatted = Carbon::parse($sDate)->locale('id')->isoFormat('D MMMM Y');

        // Mengubah format endDate
        $endDateFormatted = Carbon::parse($eDate)->locale('id')->isoFormat('D MMMM Y');

        $pdf = PDF::loadView('pdf.laporanAdmin', compact('peminjamanPdf',
            'startDateFormatted', 'endDateFormatted'));
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
        $ttd = Wewenang::where('id',8)->get();
        return $pdf->stream();
    }

    public function destroy(Peminjaman $peminjaman)
    {
        //
    }

}
