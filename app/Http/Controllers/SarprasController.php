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
    public function index(Request $request)
    {
        $sarpras = SaranaPrasarana::where('id_wewenang', auth()->user()->wewenang->id)->when($request->input('search'), function ($query, $search) {
            $query->where('nama', 'like', '%' . $search . '%');
        })
            ->paginate(5);

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
    public function edit($id)
    {
        $sarpras = SaranaPrasarana::findOrFail($id);

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
        $validatedData = $request->validate([
            'nama' => 'required|max:50|min:3',
            'kapasitas' => 'required',
            'id_wewenang' => 'required',
            'fasilitas' => 'required'
        ]);

        SaranaPrasarana::whereId($id)->update($validatedData);

        return redirect(route('sarpras.index'))->with('success', 'Sarana Prasarana berhasil diubah!');
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

    public function user(Request $request)
    {
        $sarpras = SaranaPrasarana::when($request->input('search'), function ($query, $search) {
            $query->where('nama', 'like', '%' . $search . '%');
        })
            ->paginate(5);

        return view('user.daftarsaranaprasarana', compact('sarpras'));
    }

    public function admin(Request $request)
    {
        $sarpras = SaranaPrasarana::where('id_wewenang', auth()->user()->id_wewenang)->when($request->input('search'), function ($query, $search) {
            $query->where('nama', 'like', '%' . $search . '%');
        })
            ->paginate(5);

        return view('admin.daftarsaranaprasarana', compact('sarpras'));
    }
}
