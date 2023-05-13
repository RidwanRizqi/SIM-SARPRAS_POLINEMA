@extends('layouts.app')

@section('title', 'Menu History User')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>History Peminjaman</h1>
        </div>

        <div class="section-body">
            <div id="layoutSidenav_content">
                <main>
                    <!-- Main page content-->
                    <div class="container-xl px-4 mt-n10">
                        <div class="card mb-4">
                            <div class="card-header bg-whitesmoke"><h4>Data History Peminjaman</h4></div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                    <tr>
                                        <th>Peminjam</th>
                                        <th>Ruangan</th>
                                        <th>Tanggal Peminjaman</th>
                                        <th>Proposal</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>Peminjam</th>
                                        <th>Ruangan</th>
                                        <th>Tanggal Peminjaman</th>
                                        <th>Proposal</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    <tr>
                                        <td>OKI 1</td>
                                        <td>Graha Polinema</td>
                                        <td>2022-12-12</td>
                                        <td class="d-flex justify-content-center">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-file-alt"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>OKI 1</td>
                                        <td>Graha Polinema</td>
                                        <td>2022-12-12</td>
                                        <td class="d-flex justify-content-center">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-file-alt"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>OKI 1</td>
                                        <td>Graha Polinema</td>
                                        <td>2022-12-12</td>
                                        <td class="d-flex justify-content-center">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-file-alt"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>OKI 1</td>
                                        <td>Graha Polinema</td>
                                        <td>2022-12-12</td>
                                        <td class="d-flex justify-content-center">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-file-alt"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>OKI 1</td>
                                        <td>Graha Polinema</td>
                                        <td>2022-12-12</td>
                                        <td class="d-flex justify-content-center">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-file-alt"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>OKI 1</td>
                                        <td>Graha Polinema</td>
                                        <td>2022-12-12</td>
                                        <td class="d-flex justify-content-center">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-file-alt"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>OKI 1</td>
                                        <td>Graha Polinema</td>
                                        <td>2022-12-12</td>
                                        <td class="d-flex justify-content-center">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-file-alt"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>OKI 1</td>
                                        <td>Graha Teater</td>
                                        <td>2022-12-12</td>
                                        <td class="d-flex justify-content-center">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-file-alt"></i>
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
        <a href="{{route('kelola.admin')}}" class="nav-link"><i class="fas fa-file-alt"></i><span>Kelola Sarana Prasarana</span></a>
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-file-alt"></i><span>Peminjaman</span></a>
        <ul class="dropdown-menu">
            <li>
                <a class="nav-link" href="{{route('history.admin')}}">History User</a>
            </li>
            <li>
                <a class="nav-link" href="{{route('validasi.admin')}}">Validasi User</a>
            </li>
        </ul>
        <a href="{{route('pelaporan.admin')}}" class="nav-link"><i class="fas fa-file-alt"></i><span>Pelaporan</span></a>
    </li>
@endsection
