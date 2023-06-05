@extends('layouts.app')

@section('title', 'Form Daftar')

@section('content')
    <section class="section">

        <div class="section-body ">
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-xl px-4 mt-5">
                        <div class="card mb-4">
                            <div class="card-header bg-whitesmoke"><h4>Form Edit User</h4></div>
                            <div class="card-body ps-5 pe-15">
                                <form method="POST" action="{{ route('users.update', ['user' => $user->id]) }}">
                                    @method('PUT')
                                    @csrf
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Nama User</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                               id="name" name="name" value="{{ old('name', $user->name) }}">
                                        @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-lg-6 col-sm-6">
                                            <label for="email" class="form-label">Email User</label>
                                            <input type="email"
                                                   class="form-control @error('email') is-invalid @enderror" id="email"
                                                   name="email" value="{{ old('email', $user->email) }}">
                                            @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6 col-sm-6">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password"
                                                   class="form-control @error('password') is-invalid @enderror"
                                                   id="password"
                                                   name="password">
                                            @error('password')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-lg-4 col-sm-4">
                                            <label for="phone" class="form-label">Nomor Telepon</label>
                                            <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                                   id="phone" name="phone" value="{{ old('phone', $user->phone) }}">
                                            @error('phone')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-lg-4 col-sn-4">
                                            <label for="jurusan" class="form-label">Jurusan</label>
                                            <select class="form-control" name="id_wewenang">
                                                @foreach($wewenangs as $wewenang)
                                                    @if(old('wewenang_id', $user->id_wewenang) == $wewenang->id)
                                                        <option value="{{$wewenang->id}}"
                                                                selected>{{$wewenang->name}}</option>
                                                    @endif
                                                    <option value="{{$wewenang->id}}">{{$wewenang->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-lg-4 col-sm-4">
                                            <label for="Role" class="form-label">Role</label>
                                            <select class="form-control" name="role">
                                                <option>User</option>
                                                <option>Super Admin</option>
                                                <option>Admin</option>
                                            </select>
                                        </div>
                                    </div>


                                    <button type="submit" class="btn btn-primary mt-5">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </section>
@endsection

@section('sidebar')
    @parent
    <li class="nav-item {{ request()->is('kelola-superadmin', 'users*') ? 'active' : '' }}"><a href="{{route('kelola.superadmin')}}" class="nav-link"><i class="fas fa-users"></i><span>Kelola Pengguna</span></a></li>
@endsection
