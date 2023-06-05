@extends('layouts.app')

@section('title', 'Menu Kelola Sarana-Prasarana Admin')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Tambah Sarana-Prasarana</h1>
        </div>

        <div class="section-body">
            <div id="layoutSidenav_content">
                <main>
                    <!-- Main page content-->
                    <div class="container-xl px-4 mt-n10">
                        <div class="card mb-4">
                            <div class="card-header bg-whitesmoke"><h4>Tambah Sarana & Prasarana</h4></div>
                            <div class="card-body ps-5 pe-15">
                                <form method="POST" action="{{ route('sarpras.store') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Nama Ruangan</label>
                                        <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                               id="nama" name="nama" value="{{ old('nama') }}">
                                        @error('nama')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-lg-6 col-sm-6">
                                            <label for="kapasitas" class="form-label">Kapasitas</label>
                                            <input type="text"
                                                   class="form-control @error('kapasitas') is-invalid @enderror"
                                                   id="kapasitas" name="kapasitas" value="{{ old('kapasitas') }}">
                                            @error('kapasitas')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6 col-sm-6">
                                            <label for="id_wewenang" class="form-label">Kategori</label>
                                            <select class="form-control select2 select2-hidden-accessible"
                                                    name="id_wewenang">
                                                @foreach($wewenangs as $wewenang)
                                                    @if(old('wewenang_id') == $wewenang->id)
                                                        <option value="{{$wewenang->id}}"
                                                                selected>{{$wewenang->name}}</option>
                                                    @endif
                                                    <option value="{{$wewenang->id}}">{{$wewenang->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="fasilitas" class="form-label">Fasilitas</label>
                                        <textarea type="text" class="form-control @error('fasilitas') is-invalid @enderror"
                                                  id="fasilitas" name="fasilitas" style="height: 72px"></textarea>
                                        @error('fasilitas')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
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
    <li><a href="{{route('kelola.admin')}}" class="nav-link"><i class="fas fa-building"></i><span>Kelola Sarana Prasarana</span></a></li>
    <li class="nav-item dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-calendar-check"></i><span>Peminjaman</span></a>
        <ul class="dropdown-menu">
            <li>
                <a class="nav-link" href="{{ route('daftarsaranaprasarana.admin') }}">Pinjam Sarpras</a>
            </li>
            <li>
                <a class="nav-link" href="{{route('peminjaman-admin.index')}}">History User</a>
            </li>
            <li>
                <a class="nav-link" href="{{route('validasi.index')}}">Validasi User</a>
            </li>
        </ul>
    </li>
    <li><a href="{{route('pelaporan.admin')}}" class="nav-link"><i class="fas fa-file-signature"></i><span>Pelaporan</span></a></li>
@endsection
