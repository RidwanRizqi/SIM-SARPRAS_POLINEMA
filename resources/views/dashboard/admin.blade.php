@extends('layouts.app')

@section('title', 'Dashboard Admin')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Dashboard Admin</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-xl-6 mb-4">
                    <!-- Dashboard example card 1-->
                    <a class="card lift h-100" href="#!">
                        <div class="card-body d-flex justify-content-center flex-column">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="me-3">
                                    <i class="feather-xl text-primary mb-3" data-feather="grid"></i>
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
                                    <i class="feather-xl text-secondary mb-3" data-feather="file"></i>
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
                    <div class="card bg-success text-white h-100">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="me-3">
                                    <div class="text-white-75 small">Proposal Valid</div>
                                    <div class="text-lg fw-bold">24</div>
                                </div>
                                <i class="feather-xl text-white-50" data-feather="check-square"></i>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between small">
                            <a class="text-white stretched-link" href="#!">Detail</a>
                            <div class="text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 mb-4">
                    <div class="card bg-danger text-white h-100">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="me-3">
                                    <div class="text-white-75 small">Proposal Panding</div>
                                    <div class="text-lg fw-bold">17</div>
                                </div>
                                <i class="feather-xl text-white-50" data-feather="message-circle"></i>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between small">
                            <a class="text-white stretched-link" href="#!">Detail</a>
                            <div class="text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 mb-4">
                    <div class="card bg-primary border-0">
                        <div class="card-body">
                            <h5 class="text-white-50">Rata-rata peminjaman</h5>
                            <div class="mb-4">
                                <span class="display-4 text-white">100</span>
                                <span class="text-white-50">per tahun</span>
                            </div>
                            <div class="progress bg-white-25 rounded-pill" style="height: 0.5rem"><div class="progress-bar bg-white w-100 rounded-pill" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div></div>
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
        <a href="#" class="nav-link"><i class="fas fa-file-alt"></i><span>Pelaporan</span></a>
        <a href="#" class="nav-link"><i class="fas fa-file-alt"></i><span>Peminjaman</span></a>
        <a href="#" class="nav-link"><i class="fas fa-file-alt"></i><span>Pelaporan</span></a>
    </li>
@endsection
