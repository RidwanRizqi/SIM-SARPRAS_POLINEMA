@extends('layouts.app')

@section('title', 'Menu Kelola Sarana-Prasarana Admin')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Kelola Sarana-Prasarana</h1>
        </div>

        @if(session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div

        @endif

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Data Sarana & Prasarana</h4>
                        </div>
                        <div class="card-body">
                            <div class="float-right">
                                <form method="GET">
                                    <div class="input-group">
                                        <input name="search" type="text" class="form-control" placeholder="Search">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="clearfix mb-3"></div>

                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <tr>
                                        <th>Nama Ruangan</th>
                                        <th>Kategori</th>
                                        <th>Fasilitas</th>
                                        <th>Action</th>
                                    </tr>
                                    @forelse($sarpras as $sarpra)
                                        <tr>
                                            <td>{{ $sarpra->nama }}</td>
                                            <td>{{ $sarpra->wewenang->name }}</td>
                                            <td>{{ $sarpra->fasilitas }}</td>
                                            <td class="d-flex justify-content-center">
                                                <a href="{{route('sarpras.edit', ['sarpra' => $sarpra->id]) }}">
                                                    <button class="badge bg-success border-0 mt-3 mr-2 text-white"
                                                            type="button">
                                                        <i class="fas fa-user-cog"></i> Edit
                                                    </button>
                                                </a>
                                                <form action="{{ route('sarpras.destroy', ['sarpra' => $sarpra->id]) }}"
                                                      method="POST" class="d-inline">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button class="badge bg-danger border-0 mt-3 text-white"
                                                            onclick="return confirm('Yakin Menghapus Sarana Prasarana?')"><i
                                                            class="fas fa-user-times"></i> Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="text-center">Tidak ada data</td>
                                        </tr>
                                    @endforelse
                                </table>
                            </div>
                            <div class="float-right">
                                <nav>
                                    <ul class="pagination">
                                        {{ $sarpras->withQueryString()->links() }}
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('sidebar')
    @parent
    <li><a href="{{route('kelola.admin')}}" class="nav-link"><i class="fas fa-file-alt"></i><span>Kelola Sarana Prasarana</span></a></li>
    <li class="nav-item dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-file-alt"></i><span>Peminjaman</span></a>
        <ul class="dropdown-menu">
            <li>
                <a class="nav-link" href="{{ route('daftarsaranaprasarana.admin') }}">Pinjam Sarpras</a>
            </li>
            <li>
                <a class="nav-link" href="{{route('peminjaman-admin.index')}}">History Admin</a>
            </li>
            <li>
                <a class="nav-link" href="{{route('validasi.index')}}">Validasi User</a>
            </li>
        </ul>
    </li>
    <li><a href="{{route('pelaporan.admin')}}" class="nav-link"><i class="fas fa-file-alt"></i><span>Pelaporan</span></a></li>
@endsection
