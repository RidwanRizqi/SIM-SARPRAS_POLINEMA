@extends('layouts.app')

@section('title', 'Dashboard Admin')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Dashboard User</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-xl-6 mb-4">
                    <!-- Dashboard example card 1-->
                    <a class="card lift h-100" href="#!">
                        <div class="card-body d-flex justify-content-center flex-column">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="me-3">
                                    <i class="fas fa-database" style="font-size: xxx-large"></i>
                                    <br>
                                    <br>
                                    <h5>Kelola Sarana Prasarana</h5>
                                    <div class="text-muted small">Description</div>
                                </div>
                                <img src="https://sb-admin-pro.startbootstrap.com/assets/img/illustrations/browser-stats.svg"
                                     alt="..." style="width: 8rem"/>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-6 mb-4">
                    <!-- Dashboard example card 2-->
                    <a class="card lift h-100" href="#!">
                        <div class="card-body d-flex justify-content-center flex-column">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="me-3">
                                    <i class="fas fa-file-signature" style="font-size: xxx-large"></i>
                                    <br>
                                    <br>
                                    <h5>Pelaporan</h5>
                                    <div class="text-muted small">Description</div>
                                </div>
                                <img src="https://sb-admin-pro.startbootstrap.com/assets/img/illustrations/browser-stats.svg"
                                     alt="..." style="width: 8rem"/>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-xl-4 mb-4">
                    <div class="card bg-success text-white">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="me-3">
                                    <div><h5>Proposal Valid</h5></div>
                                    <div class="display-4 text-white">24</div>
                                </div>
                                <i class="fas fa-clipboard-check" style="font-size:xx-large"></i>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between small shadow-dark">
                            <a class="text-white stretched-link" href="#!"><h6>Detail</h6></a>
                            <div class="text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 mb-4">
                    <div class="card bg-danger text-white">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="me-3">
                                    <div><h5>Proposal Proses</h5></div>
                                    <div class="display-4 text-white">17</div>
                                </div>
                                <i class="fas fa-envelope-open-text" style="font-size:xx-large"></i>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between small shadow-dark">
                            <a class="text-white stretched-link" href="#!"><h6>Detail</h6></a>
                            <div class="text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 mb-4">
                    <div class="card bg-primary border-0">
                        <div class="card-body">
                            <h5>Rata-rata peminjaman</h5>
                            <div class="mb-3">
                                <span class="display-3 text-white">100</span>
                                <span class="text-white-50">per tahun</span>
                            </div>
                            <div class="progress bg-white-25 rounded-pill" style="height: 0.5rem"><div class="progress-bar bg-white w-100 rounded-pill" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div></div>
                            <br>
                        </div>
                    </div>
                </div>
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
