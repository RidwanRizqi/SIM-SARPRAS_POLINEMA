<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Wewenang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $users = User::when($request->input('search'), function ($query, $search) {
            $query->where('name', 'like', '%' . $search . '%')
                ->orWhere('email', 'like', '%' . $search . '%');
        })
            ->paginate(5);
        return view('superadmin.daftaruser', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('superadmin.formtambahuser', [
            'wewenangs' => Wewenang::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:50|min:3',
            'email' => 'required|unique:users|max:50|min:3',
            'password' => 'required|max:50|min:3',
            'role' => 'required|max:50|min:4',
            'phone' =>'required|max:50|min:1',
            'id_wewenang' => 'required|max:50|min:1',
            'nama_pj' => 'required|max:50|min:3',
            'ninduk_pj' => 'required|unique:users|max:50|min:10',
            'ttd_pj' => 'required|file|max:1024',
            'nama_dpk' => 'max:50|min:3',
            'nip_dpk' => 'unique:users|max:50|min:10',
            'ttd_dpk' => 'file|max:1024',
            'logo' => 'file|max:1024',
        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);

        if ($request->file('ttd_pj')) {
            $validatedData['ttd_pj'] = $request->file('ttd_pj')->store('ttdpj');
        }
        if ($request->file('ttd_dpk')) {
            $validatedData['ttd_dpk'] = $request->file('ttd_dpk')->store('ttdpk');
        }
        if ($request->file('logo')) {
            $validatedData['logo'] = $request->file('logo')->store('logoUser');
        }

        User::create($validatedData);

        return redirect('kelola-superadmin')->with('success', 'User berhasil ditambahkan!');
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
    public function edit(User $user)
    {
        return view('superadmin.formedituser', [
            'user' => $user,
            'wewenangs' => Wewenang::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules = [
            'name' => 'required|max:50|min:3',
            'password' => 'required|max:50|min:3',
            'role' => 'required|max:50|min:4',
            'phone' =>'required|max:50|min:1',
            'id_wewenang' => 'required|max:50|min:1',
            'nama_pj' => 'required|max:50|min:3',
            'ninduk_pj' => 'required|max:50|min:3',
            'ttd_pj' => 'required|max:50|min:3',
        ];

//        check if email not same as before
        if ($request->email != User::findOrFail($id)->email) {
            $rules['email'] = 'required|unique:users|max:50|min:3';
        }

        $validatedData = $request->validate($rules);
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::where('id', $id)
            ->update($validatedData);

        return redirect(route('users.index'))->with('success', 'User berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->back()->with('success', 'User berhasil dihapus.');
    }
}
