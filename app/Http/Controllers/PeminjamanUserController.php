<?php

namespace App\Http\Controllers;

use App\Models\peminjaman;
use App\Models\SaranaPrasarana;
use Illuminate\Http\Request;

class PeminjamanUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $sarprasId = $request->query('sarpras');
        $sarpras = SaranaPrasarana::find($sarprasId);
        $peminjaman = Peminjaman::select('id', 'tanggal_mulai', 'tanggal_selesai', 'kegiatan')
            ->where('id_sarana_prasarana', $sarpras->id)
            ->where('status', '!=', 'Ditolak')
            ->get();

        return view('user.form', compact('sarpras', 'peminjaman'));
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
    public function show(peminjaman $peminjaman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(peminjaman $peminjaman)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, peminjaman $peminjaman)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(peminjaman $peminjaman)
    {
        //
    }
}
