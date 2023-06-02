<?php

namespace App\Http\Controllers;

use App\Models\SaranaPrasarana;
use Illuminate\Http\Request;

class UserSarprasController extends Controller
{
    public function index(Request $request)
    {
        $sarpras = SaranaPrasarana::when($request->input('search'), function ($query, $search) {
            $query->where('nama', 'like', '%' . $search . '%');
        })
            ->paginate(5);

        return view('user.daftarsaranaprasarana', compact('sarpras'));
    }
}
