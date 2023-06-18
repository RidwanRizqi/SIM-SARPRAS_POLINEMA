<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Wewenang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->user == 'oki') {
            $users = User::where('role', 'user')->when($request->input('search'), function ($query, $search) {
                $query->where('name', 'like', '%' . $search . '%')
                    ->orWhere('email', 'like', '%' . $search . '%');
            })
                ->paginate(5);
        } elseif ($request->user == 'admin') {
            $users = User::where('role', 'admin')->when($request->input('search'), function ($query, $search) {
                $query->where('name', 'like', '%' . $search . '%')
                    ->orWhere('email', 'like', '%' . $search . '%');
            })
                ->paginate(5);
        } else {
            $users = User::when($request->input('search'), function ($query, $search) {
                $query->where('name', 'like', '%' . $search . '%')
                    ->orWhere('email', 'like', '%' . $search . '%');
            })
                ->paginate(5);
        }
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
        $rules = [
            'name' => 'required|max:50|min:3',
            'email' => 'required|unique:users|max:50|min:3',
            'password' => 'required|max:50|min:3',
            'role' => 'required|max:50|min:4',
            'phone' =>'required|max:50|min:1',
            'id_wewenang' => 'required|max:50|min:1',
            'nama_pj' => 'required|max:50|min:3',
            'ninduk_pj' => 'required|unique:users|max:50|min:10',
            'ttd_pj' => 'file|max:1024',
            'logo' => 'file|max:1024',
        ];

        if ($request->id_wewenang == 9) {
            $rules['nama_dpk'] = 'required|max:50|min:3';
            $rules['nip_dpk'] = 'required|unique:users|max:50|min:10';
            $rules['ttd_dpk'] = 'file|max:1024';
        }

        $validatedData = $request->validate($rules);

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

        return redirect(route('users.index'))->with('success', 'User berhasil ditambahkan!');
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
            'ninduk_pj' => 'required|max:50|min:10',
            'ttd_pj' => 'file|max:1024',
            'logo' => 'file|max:1024',
        ];

//        check if email not same as before
        if ($request->email != User::findOrFail($id)->email) {
            $rules['email'] = 'required|unique:users|max:50|min:3';
        }

        if ($request->id_wewenang == 9) {
            $rules['nama_dpk'] = 'required|max:50|min:3';
            $rules['nip_dpk'] = 'required|max:50|min:10';
            $rules['ttd_dpk'] = 'file|max:1024';
        }

        $validatedData = $request->validate($rules);
        $validatedData['password'] = Hash::make($validatedData['password']);

        if ($request->file('ttd_pj')) {
            if ($request->oldttdpj) {
                Storage::delete($request->oldttdpj);
            }
            $validatedData['ttd_pj'] = $request->file('ttd_pj')->store('ttdpj');
        }
        if ($request->file('ttd_dpk')) {
            if ($request->oldttddpk) {
                Storage::delete($request->oldttddpk);
            }
            $validatedData['ttd_dpk'] = $request->file('ttd_dpk')->store('ttdpk');
        }
        if ($request->file('logo')) {
            if ($request->oldLogo) {
                Storage::delete($request->oldLogo);
            }
            $validatedData['logo'] = $request->file('logo')->store('logoUser');
        }

        User::where('id', $id)->update($validatedData);

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
