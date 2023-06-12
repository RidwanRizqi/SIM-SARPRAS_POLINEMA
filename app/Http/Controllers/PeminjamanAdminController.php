<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Models\SaranaPrasarana;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Barryvdh\DomPDF\Facade\Pdf;

class PeminjamanAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $peminjamans = Peminjaman::where('id_user', auth()->user()->id)->when($request->input('search'), function ($query, $search) {
            $query->where('kegiatan', 'like', '%' . $search . '%');
        })
            ->paginate(5);
        return view('admin.history', compact('peminjamans'));
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
            ->get();

        return view('admin.pinjam', compact('sarpras', 'peminjaman'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_user' => 'required',
            'id_sarana_prasarana' => 'required',
            'id_wewenang' => 'required',
            'dokumen' => 'required|file|mimes:pdf|max:5120',
            'kegiatan' => 'required',
            'penanggung_jawab' => 'required',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required',
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
                'after_or_equal:tanggal_mulai',
                function ($attribute, $value, $fail) use ($request) {
                    $existingPeminjaman = Peminjaman::where('id_sarana_prasarana', $request->id_sarana_prasarana)
                        ->where('tanggal_mulai', '<=', $value)
                        ->where('tanggal_selesai', '>=', $request->tanggal_mulai)
                        ->exists();

                    if ($existingPeminjaman) {
                        $fail('Tanggal selesai telah digunakan pada rentang tanggal yang ada dalam database.');
                    }
                }
            ],
        ]);

        $validatedData['status'] = 'Proses';

        if ($request->file('dokumen')) {
            $validatedData['dokumen'] = $request->file('dokumen')->store('dokumen');
        }

        Peminjaman::create($validatedData);
        return redirect(route('peminjaman-admin.index'))->with('success', 'Peminjaman berhasil ditambahkan!');
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
    public function edit(peminjaman $peminjaman_admin)
    {
        $tanggalPeminjaman = Peminjaman::select('id', 'tanggal_mulai', 'tanggal_selesai', 'kegiatan')
            ->where('id_sarana_prasarana', $peminjaman_admin->id_sarana_prasarana)
            ->get();

        return view('admin.edit-peminjaman', compact('tanggalPeminjaman', 'peminjaman_admin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, peminjaman $peminjaman_admin)
    {
        $validatedData = $request->validate([
            'id_user' => 'required',
            'id_sarana_prasarana' => 'required',
            'id_wewenang' => 'required',
            'dokumen' => 'required|file|mimes:pdf|max:5120',
            'kegiatan' => 'required',
            'penanggung_jawab' => 'required',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required',
            'tanggal_mulai' => [
                'required',
                'date',
                Rule::unique('peminjaman')->where(function ($query) use ($request) {
                    return $query->where('id_sarana_prasarana', $request->id_sarana_prasarana)
                        ->where('tanggal_selesai', '>=', $request->tanggal_mulai);
                })->ignore($peminjaman_admin->id)
            ],
            'tanggal_selesai' => [
                'required',
                'date',
                'after_or_equal:tanggal_mulai',
                function ($attribute, $value, $fail) use ($request, $peminjaman_admin) {
                    $existingPeminjaman = Peminjaman::where('id_sarana_prasarana', $request->id_sarana_prasarana)
                        ->where('id', '!=', $peminjaman_admin->id)
                        ->where(function ($query) use ($request) {
                            $query->whereBetween('tanggal_mulai', [$request->tanggal_mulai, $request->tanggal_selesai])
                                ->orWhereBetween('tanggal_selesai', [$request->tanggal_mulai, $request->tanggal_selesai])
                                ->orWhere(function ($query) use ($request) {
                                    $query->where('tanggal_mulai', '<=', $request->tanggal_mulai)
                                        ->where('tanggal_selesai', '>=', $request->tanggal_selesai);
                                });
                        })
                        ->exists();

                    if ($existingPeminjaman) {
                        $fail('Tanggal mulai dan tanggal selesai telah digunakan!');
                    }
                }
            ],
        ]);


        $validatedData['status'] = 'Valid';

        if ($request->file('dokumen')) {
            if ($request->oldDokumen) {
                Storage::delete($request->oldDokumen);
            }
            $validatedData['dokumen'] = $request->file('dokumen')->store('dokumen');
        }

        Peminjaman::where('id', $peminjaman_admin->id)->update($validatedData);

        return redirect()->route('peminjaman-admin.index')->with('success', 'Peminjaman berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(peminjaman $peminjaman_admin)
    {
        if ($peminjaman_admin->dokumen) {
            Storage::delete($peminjaman_admin->dokumen);
        }

        Peminjaman::destroy($peminjaman_admin->id);

        return redirect()->route('peminjaman-admin.index')->with('success', 'Peminjaman berhasil dihapus');
    }
}
