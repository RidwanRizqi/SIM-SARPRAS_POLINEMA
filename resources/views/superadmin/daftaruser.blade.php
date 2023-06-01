@extends('layouts.app')

@section('title', 'Menu Kelola User SuperAdmin')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Kelola Data Pengguna</h1>
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
                            <h4>Daftar Pengguna</h4>
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
                                        <th>Nama User</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Telepon</th>
                                        <th>Action</th>
                                    </tr>
                                    @forelse($users as $user)
                                        <tr>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->role }}</td>
                                            <td>{{ $user->phone }}</td>
                                            <td class="d-flex justify-content-center">
                                                <a href="{{route('users.edit', ['user' => $user->id]) }}">
                                                    <button class="btn btn-success mt-2 mr-2" type="button">
                                                        <i class="fas fa-user-cog"></i> Edit
                                                    </button>
                                                </a>
                                                <form action="{{ route('users.destroy', ['user' => $user->id]) }}" method="POST" class="d-inline">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button class="btn btn-danger border-0 mt-2" onclick="return confirm('Yakin Menghapus User?')"><i class="fas fa-user-times"></i> Delete</button>
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
                                        {{ $users->withQueryString()->links() }}
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
    <li><a href="{{route('kelola.superadmin')}}" class="nav-link"><i
                class="fas fa-file-alt"></i><span>Kelola Pengguna</span></a></li>
@endsection
