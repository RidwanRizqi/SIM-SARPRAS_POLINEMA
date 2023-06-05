@extends('layouts.app')

@section('title', 'Menu Pelaporan Admin')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Pelaporan</h1>
        </div>

        <div class="section-body">
            <div id="layoutSidenav_content">
                <main>
                    <!-- Main page content-->
                    <div class="container-xl px-4 mt-n10">
                        <div class="card mb-4">
                            <div class="card-header bg-whitesmoke"><h4>Filter Laporan</h4></div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <label for="startDate">Mulai Tanggal</label>
                                        <input id="startDate" class="form-control" type="date" />
                                        <span id="startDateSelected"></span>
                                    </div>
                                    <div class="col-lg-3">
                                        <label for="endDate">Sampai Tanggal</label>
                                        <input id="endDate" class="form-control" type="date" />
                                        <span id="endDateSelected"></span>
                                    </div>
                                    <div class="col-lg-3 mt-4">
                                        <button class="btn btn-primary" type="button">Tampilkan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-xl px-4">
                        <div class="card mb-4">
                            <div class="card-header bg-whitesmoke"><h4>Laporan Peminjaman Ruangan</h4></div>
                            <div class="card-body">
                                <h6>Dari Tanggal ______</h6>
                                <h6 class="mb-4">Sampai Tanggal ______</h6>
                                <a href="{{route('laporan.pdf') }}">
                                <button class="btn btn-success me-2 mb-2" type="button">
                                    <i class="fas fa-file-download"></i> Print PDF
                                </button>
                                </a>
                                <hr>
                                <table id="datatablesSimple" class="table table-bordered">
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
