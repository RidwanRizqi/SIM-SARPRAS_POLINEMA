@extends('layouts.app')

@section('title', 'Menu Kelola User')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Kelola User</h1>
        </div>

        <div class="section-body">
            <div id="layoutSidenav_content">
                <main>
                    <!-- Main page content-->
                    <div class="container-xl px-4 mt-n10">
                        <div class="row">
                            <div class="col-xl-6 mb-4">
                                <!-- Dashboard example card 1-->
                                <a class="card lift h-100" href="{{route('formtambahuser.superadmin')}}">
                                    <div class="card-body d-flex justify-content-center flex-column">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="me-3">
                                                <i class="fas fa-user-plus" style="font-size: xx-large"></i>
                                                <br><br>
                                                <h5>Tambah User</h5>
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
                                <a class="card lift h-100" href="{{route('daftaruser.superadmin')}}">
                                    <div class="card-body d-flex justify-content-center flex-column">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="me-3">
                                                <i class="fas fa-user-edit" style="font-size: xx-large"></i>
                                                <br><br>
                                                <h5>Update User</h5>
                                                <div class="text-muted small">Description</div>
                                            </div>
                                            <img src="https://sb-admin-pro.startbootstrap.com/assets/img/illustrations/browser-stats.svg"
                                                 alt="..." style="width: 8rem"/>
                                        </div>
                                    </div>
                                </a>
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
    <li><a href="{{route('kelola.superadmin')}}" class="nav-link"><i class="fas fa-file-alt"></i><span>Kelola Pengguna</span></a></li>
@endsection