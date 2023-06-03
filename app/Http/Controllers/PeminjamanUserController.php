<?php

namespace App\Http\Controllers;

use App\Models\peminjaman;
use App\Models\SaranaPrasarana;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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
        $validatedData = $request->validate([
            'id_user' => 'required',
            'id_sarana_prasarana' => 'required',
            'dokumen' => 'required|file|max:1024',
            'kegiatan' => 'required',
            'penanggung_jawab' => 'required',
            'tanggal_mulai' => [
                'required',
                'date',
                Rule::unique('peminjaman')->where(function ($query) use ($request) {
                    return $query->where('id_sarana_prasarana', $request->id_sarana_prasarana)
                        ->where('tanggal_selesai', '>=', $request->tanggal_mulai);
                })
            ],
            'tanggal_selesai' => [
                'required',
                'date',
                'after_or_equal:tanggal_mulai'
            ],
        ]);

        $validatedData['status'] = 'Proses';

        if ($request->file('dokumen')) {
            $validatedData['dokumen'] = $request->file('dokumen')->store('dokumen');
        }

        Peminjaman::create($validatedData);
        return redirect('history-user')->with('success', 'Peminjaman berhasil ditambahkan!');
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
