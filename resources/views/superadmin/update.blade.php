@extends('layouts.app')

@section('title', 'Menu Kelola Sarana-Prasarana Admin')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>User</h1>
        </div>

        <div class="section-body">
            <div id="layoutSidenav_content">
                <main>
                    <!-- Main page content-->
                    <div class="container-xl px-4 mt-n10">
                        <div class="card mb-4">
                            <div class="card-header bg-whitesmoke"><h4>Data Sarana & Prasarana</h4></div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                    <tr>
                                        <th>Nama User</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>Nama User</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Action</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    <tr>
                                        <td>RISPOL</td>
                                        <td>rispol@gmail.com</td>
                                        <td>rispol</td>
                                        <td class="d-flex justify-content-center">
                                            <a href="{{route('edit.admin')}}">
                                                <button class="btn btn-success" type="button">
                                                    <i class="fas fa-edit"></i> Edit
                                                </button>
                                            </a>
                                            <a href="{{route('edit.admin')}}">
                                                <button class="btn btn-success" type="button">
                                                    <i class="fas fa-edit"></i> Delete
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Graha Polinema</td>
                                        <td>JTI</td>
                                        <td>meja 10 kursi 10</td>
                                        <td class="d-flex justify-content-center">
                                            <a href="{{route('edit.admin')}}">
                                            <button class="btn btn-success" type="button">
                                                <i class="fas fa-edit"></i> Edit
                                            </button>
                                            </a>
                                            <button class="btn btn-danger" type="button">
                                                <i class="fas fa-trash"></i> Delete
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Graha Polinema</td>
                                        <td>JTI</td>
                                        <td>meja 10 kursi 10</td>
                                        <td class="d-flex justify-content-center">
                                            <a href="{{route('edit.admin')}}">
                                                <button class="btn btn-success" type="button">
                                                    <i class="fas fa-edit"></i> Edit
                                                </button>
                                            </a>
                                            <button class="btn btn-danger" type="button">
                                                <i class="fas fa-trash"></i> Delete
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Graha Polinema</td>
                                        <td>JTI</td>
                                        <td>meja 10 kursi 10</td>
                                        <td class="d-flex justify-content-center">
                                            <a href="{{route('edit.admin')}}">
                                                <button class="btn btn-success" type="button">
                                                    <i class="fas fa-edit"></i> Edit
                                                </button>
                                            </a>
                                            <button class="btn btn-danger" type="button">
                                                <i class="fas fa-trash"></i> Delete
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Graha Polinema</td>
                                        <td>JTI</td>
                                        <td>meja 10 kursi 10</td>
                                        <td class="d-flex justify-content-center">
                                            <a href="{{route('edit.admin')}}">
                                                <button class="btn btn-success" type="button">
                                                    <i class="fas fa-edit"></i> Edit
                                                </button>
                                            </a>
                                            <button class="btn btn-danger" type="button">
                                                <i class="fas fa-trash"></i> Delete
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