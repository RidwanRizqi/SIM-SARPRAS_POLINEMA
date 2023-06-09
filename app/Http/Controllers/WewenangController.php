<?php

namespace App\Http\Controllers;

use App\Models\wewenang;
use Illuminate\Http\Request;

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
    public function destroy(wewenang $wewenang)
    {
        //
    }
}
