@extends('layouts.app')

@section('title', 'Menu Validasi User')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Peminjaman User</h1>
        </div>

        <div class="section-body">
            <div id="layoutSidenav_content">
                <main>
                    <!-- Main page content-->
                    <div class="container-xl px-4 mt-5">
                        <div class="card mb-4">
                            <div class="card-header bg-whitesmoke"><h4>Data Sarana Prasarana</h4></div>
                            <div class="card-body">
                                <table id="datatablesSimple" class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Gedung</th>
                                        <th>Ruangan</th>
                                        <th>Pengurus</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>Gedung</th>
                                        <th>Ruangan</th>
                                        <th>Pengurus</th>
                                        <th>Actions</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    <tr>
                                        <td>Graha Polinema</td>
                                        <td>Graha Polinema</td>
                                        <td>Admin Pusat</td>
                                        <td class="text-center justify-content-center">
                                            <a href="{{route('form.user')}}"><button class="btn btn-primary" type="button">
                                                Pinjam
                                            </button></a>
                                            <button class="btn btn-info" type="button">
                                                Fasilitas
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Aula Pertamina</td>
                                        <td>Aula Pertamina</td>
                                        <td>Admin Pusat</td>
                                        <td class="text-center justify-content-center">
                                            <a href="{{route('form.user')}}"><button class="btn btn-primary" type="button">
                                                Pinjam
                                            </button></a>
                                            <button class="btn btn-info" type="button">
                                                Fasilitas
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>JTI</td>
                                        <td>RT01</td>
                                        <td>Admin Jurusan</td>
                                        <td class="text-center justify-content-center">
                                            <a href="{{route('form.user')}}"><button class="btn btn-primary" type="button">
                                                Pinjam
                                            </button></a>
                                            <button class="btn btn-info" type="button">
                                                Fasilitas
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>JTI</td>
                                        <td>RT02</td>
                                        <td>Admin Jurusan</td>
                                        <td class="text-center justify-content-center">
                                            <a href="{{route('form.user')}}"><button class="btn btn-primary" type="button">
                                                    Pinjam
                                                </button></a>
                                            <button class="btn btn-info" type="button">
                                                Fasilitas
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>JTI</td>
                                        <td>RT03</td>
                                        <td>Admin Jurusan</td>
                                        <td class="text-center justify-content-center">
                                            <a href="{{route('form.user')}}"><button class="btn btn-primary" type="button">
                                                    Pinjam
                                                </button></a>
                                            <button class="btn btn-info" type="button">
                                                Fasilitas
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>JTI</td>
                                        <td>RT04</td>
                                        <td>Admin Jurusan</td>
                                        <td class="text-center justify-content-center">
                                            <a href="{{route('form.user')}}"><button class="btn btn-primary" type="button">
                                                    Pinjam
                                                </button></a>
                                            <button class="btn btn-info" type="button">
                                                Fasilitas
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>JTI</td>
                                        <td>RT05</td>
                                        <td>Admin Jurusan</td>
                                        <td class="text-center justify-content-center">
                                            <a href="{{route('form.user')}}"><button class="btn btn-primary" type="button">
                                                    Pinjam
                                                </button></a>
                                            <button class="btn btn-info" type="button">
                                                Fasilitas
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>JTI</td>
                                        <td>RT06</td>
                                        <td>Admin Jurusan</td>
                                        <td class="text-center justify-content-center">
                                            <a href="{{route('form.user')}}"><button class="btn btn-primary" type="button">
                                                    Pinjam
                                                </button></a>
                                            <button class="btn btn-info" type="button">
                                                Fasilitas
                                            </button>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
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
    <li class="nav-item dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-file-alt"></i><span>Peminjaman</span></a>
        <ul class="dropdown-menu">
            <li>
                <a class="nav-link" href="{{route('daftarsaranaprasarana.user')}}">Daftar Sarana Prasarana</a>
            </li>
            <li>
                <a class="nav-link" href="{{route('history.user')}}">History User</a>
            </li>
        </ul>
    </li>
@endsection
