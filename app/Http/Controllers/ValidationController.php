<?php

namespace App\Http\Controllers;

use App\Models\peminjaman;
use Illuminate\Http\Request;

class ValidationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $peminjamans = Peminjaman::where('id_wewenang', auth()->user()->id_wewenang)->when($request->input('search'), function ($query, $search) {
            $query->where('kegiatan', 'like', '%' . $search . '%');
        })
            ->paginate(5);
        return view('admin.validasi', compact('peminjamans'));
    }

    /**
     * Show the form for creating a new resource.
     */
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
    public function show(peminjaman $validasi)
    {
        return view('admin.detail-peminjaman', compact('validasi'));
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
    public function update(Request $request, peminjaman $validasi)
    {
        $peminjaman = Peminjaman::findOrFail($validasi->id);

        if ($request->has('catatan_admin')) {
            $peminjaman->catatan_admin = $request->input('catatan_admin');
            $peminjaman->status = 'Ditolak';
            $peminjaman->save();
            return redirect()->back()->with('success', 'Peminjaman ditolak');
        } else {
            $peminjaman->status = 'Valid';
            $peminjaman->save();
            return redirect(route('validasi.index'))->with('success', 'Peminjaman disetujui');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(peminjaman $peminjaman)
    {
        //
    }
}
