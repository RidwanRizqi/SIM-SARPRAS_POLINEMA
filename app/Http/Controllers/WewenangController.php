<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\wewenang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WewenangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $wewenangs = Wewenang::when($request->input('search'), function ($query, $search) {
            $query->where('nama', 'like', '%' . $search . '%');
        })
            ->paginate(5);
        return view('superadmin.daftarwewenang', compact('wewenangs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('superadmin.formtambahwewenang');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:100|min:3',
            'pj' => 'required|max:200|min:3',
            'jabatan' => 'required|max:50|min:3',
            'nip' =>'required|numeric',
            'ttd' => 'image|mimes:jpeg,png,jpg,svg|max:2048',
        ]);

        if ($request->file('ttd')) {
            $file = $request->file('ttd');
            $filename = 'ttdpj/' . time() . '_' . $file->getClientOriginalName();
            $file->storeAs('', $filename);
            $validatedData['ttd'] = $filename;
        }

        Wewenang::create($validatedData);

        return redirect('kelola-wewenang')->with('success', 'Wewenang berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(wewenang $wewenang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(wewenang $wewenang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, wewenang $wewenang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $wewenang = Wewenang::findOrFail($id);

        // Hapus file terkait jika ada
        if ($wewenang->ttd) {
            Storage::delete($wewenang->ttd);
        }

        $wewenang->delete();

        return redirect()->back()->with('success', 'Wewenang berhasil dihapus!');
    }
}
