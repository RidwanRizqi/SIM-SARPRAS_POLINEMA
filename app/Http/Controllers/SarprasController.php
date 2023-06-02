<?php

namespace App\Http\Controllers;

use App\Models\SaranaPrasarana;
use App\Models\Wewenang;
use Illuminate\Http\Request;

class SarprasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sarpras = SaranaPrasarana::when(request('search'), function ($query) {
            $query->where('nama', 'like', '%' . request('search') . '%');
        })->paginate(5);

        return view('admin.update', compact('sarpras'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tambah', [
            'wewenangs' => Wewenang::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:50|min:3',
            'kapasitas' => 'required',
            'id_wewenang' => 'required',
            'fasilitas' => 'required'
        ]);

        SaranaPrasarana::create($validatedData);

        return redirect('kelola-ruang')->with('success', 'Sarana Prasarana berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SaranaPrasarana $sarpras)
    {
        return view('admin.edit', [
            'sarpras' => $sarpras,
            'wewenangs' => Wewenang::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sarpras = SaranaPrasarana::findOrFail($id);
        $sarpras->delete();

        return redirect()->back()->with('success', 'Sarana Prasarana berhasil dihapus!');
    }
}
