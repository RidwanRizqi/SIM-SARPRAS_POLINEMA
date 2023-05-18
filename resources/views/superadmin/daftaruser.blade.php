@extends('layouts.app')

@section('title', 'Menu Kelola User SuperAdmin')

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
                        <div class="card mb-4">
                            <div class="card-header bg-whitesmoke"><h4>Data User</h4></div>
                            <div class="card-body">
                                <table id="datatablesSimple" class="table table-bordered">
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
                                            <a href="{{route('update.superadmin')}}">
                                                <button class="btn btn-success" type="button">
                                                    <i class="fas fa-edit"></i> Edit
                                                </button>
                                            </a>
                                            <a href="#">
                                                <button class="btn btn-danger" type="button">
                                                    <i class="fas fa-trash"></i> Delete
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>PP</td>
                                        <td>pppolinema@gmail.com</td>
                                        <td>pendidikan_penalaran</td>
                                        <td class="d-flex justify-content-center">
                                            <a href="{{route('update.superadmin')}}">
                                                <button class="btn btn-success" type="button">
                                                    <i class="fas fa-edit"></i> Edit
                                                </button>
                                            </a>
                                            <a href="#">
                                                <button class="btn btn-danger" type="button">
                                                    <i class="fas fa-trash"></i> Delete
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Theatrisic</td>
                                        <td>theatrisicpolinema@gmail.com</td>
                                        <td>theatrisicpolinema</td>
                                        <td class="d-flex justify-content-center">
                                            <a href="{{route('update.superadmin')}}">
                                                <button class="btn btn-success" type="button">
                                                    <i class="fas fa-edit"></i> Edit
                                                </button>
                                            </a>
                                            <a href="#">
                                                <button class="btn btn-danger" type="button">
                                                    <i class="fas fa-trash"></i> Delete
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>OR</td>
                                        <td>orpolinema@gmail.com</td>
                                        <td>orpol</td>
                                        <td class="d-flex justify-content-center">
                                            <a href="{{route('update.superadmin')}}">
                                                <button class="btn btn-success" type="button">
                                                    <i class="fas fa-edit"></i> Edit
                                                </button>
                                            </a>
                                            <a href="#">
                                                <button class="btn btn-danger" type="button">
                                                    <i class="fas fa-trash"></i> Delete
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Menwa</td>
                                        <td>menwapolinema@gmail.com</td>
                                        <td>menwapol</td>
                                        <td class="d-flex justify-content-center">
                                            <a href="{{route('update.superadmin')}}">
                                                <button class="btn btn-success" type="button">
                                                    <i class="fas fa-edit"></i> Edit
                                                </button>
                                            </a>
                                            <a href="#">
                                                <button class="btn btn-danger" type="button">
                                                    <i class="fas fa-trash"></i> Delete
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>PASTI</td>
                                        <td>pastipolinema@gmail.com</td>
                                        <td>pastipol</td>
                                    <td class="d-flex justify-content-center">
                                        <a href="{{route('update.superadmin')}}">
                                            <button class="btn btn-success" type="button">
                                                <i class="fas fa-edit"></i> Edit
                                            </button>
                                        </a>
                                        <a href="#">
                                            <button class="btn btn-danger" type="button">
                                                <i class="fas fa-trash"></i> Delete
                                            </button>
                                        </a>
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
    <li><a href="{{route('daftaruser.superadmin')}}" class="nav-link"><i class="fas fa-file-alt"></i><span>Kelola Pengguna</span></a></li>
@endsection
