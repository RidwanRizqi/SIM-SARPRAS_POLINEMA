@extends('layouts.app')

@section('title', 'Menu Kelola User SuperAdmin')

@section('content')
    <section class="section">

        <div class="section-body">
            <div id="layoutSidenav_content">
                <main>
                    <!-- Main page content-->
                    <div class="container-xl px-4 mt-5">
                        <div class="card mb-4">
                            <div class="card-header bg-whitesmoke"><h4>Data Pengguna</h4></div>
                            <div class="card-body">
                                <table id="datatablesSimple" class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Nama User</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Role</th>
                                        <th>Telepon</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>RISPOL</td>
                                        <td>rispol@gmail.com</td>
                                        <td>rispol</td>
                                        <td>User</td>
                                        <td>+62-813-2131-8942</td>
                                        <td class="d-flex justify-content-center">
                                            <a href="{{route('update.superadmin')}}">
                                                <button class="btn btn-success" type="button">
                                                    <i class="fas fa-user-cog"></i> Edit
                                                </button>
                                            </a>
                                            <a href="#">
                                                <button class="btn btn-danger" type="button">
                                                    <i class="fas fa-user-times"></i> Delete
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>PP</td>
                                        <td>pppolinema@gmail.com</td>
                                        <td>pendidikan_penalaran</td>
                                        <td>User</td>
                                        <td>+62-813-2131-8942</td>
                                        <td class="d-flex justify-content-center">
                                            <a href="{{route('update.superadmin')}}">
                                                <button class="btn btn-success" type="button">
                                                    <i class="fas fa-user-cog"></i> Edit
                                                </button>
                                            </a>
                                            <a href="#">
                                                <button class="btn btn-danger" type="button">
                                                    <i class="fas fa-user-times"></i> Delete
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Theatrisic</td>
                                        <td>theatrisicpolinema@gmail.com</td>
                                        <td>theatrisicpolinema</td>
                                        <td>User</td>
                                        <td>+62-813-2131-8942</td>
                                        <td class="d-flex justify-content-center">
                                            <a href="{{route('update.superadmin')}}">
                                                <button class="btn btn-success" type="button">
                                                    <i class="fas fa-user-cog"></i> Edit
                                                </button>
                                            </a>
                                            <a href="#">
                                                <button class="btn btn-danger" type="button">
                                                    <i class="fas fa-user-times"></i> Delete
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>OR</td>
                                        <td>orpolinema@gmail.com</td>
                                        <td>orpol</td>
                                        <td>User</td>
                                        <td>+62-813-2131-8942</td>
                                        <td class="d-flex justify-content-center">
                                            <a href="{{route('update.superadmin')}}">
                                                <button class="btn btn-success" type="button">
                                                    <i class="fas fa-user-cog"></i> Edit
                                                </button>
                                            </a>
                                            <a href="#">
                                                <button class="btn btn-danger" type="button">
                                                    <i class="fas fa-user-times"></i> Delete
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Menwa</td>
                                        <td>menwapolinema@gmail.com</td>
                                        <td>menwapol</td>
                                        <td>User</td>
                                        <td>+62-813-2131-8942</td>
                                        <td class="d-flex justify-content-center">
                                            <a href="{{route('update.superadmin')}}">
                                                <button class="btn btn-success" type="button">
                                                    <i class="fas fa-user-cog"></i> Edit
                                                </button>
                                            </a>
                                            <a href="#">
                                                <button class="btn btn-danger" type="button">
                                                    <i class="fas fa-user-times"></i> Delete
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>PASTI</td>
                                        <td>pastipolinema@gmail.com</td>
                                        <td>pastipol</td>
                                        <td>User</td>
                                        <td>+62-813-2131-8942</td>
                                    <td class="d-flex justify-content-center">
                                        <a href="{{route('update.superadmin')}}">
                                            <button class="btn btn-success" type="button">
                                                <i class="fas fa-user-cog"></i> Edit
                                            </button>
                                        </a>
                                        <a href="#">
                                            <button class="btn btn-danger" type="button">
                                                <i class="fas fa-user-times"></i> Delete
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
    <li><a href="{{route('kelola.superadmin')}}" class="nav-link"><i class="fas fa-file-alt"></i><span>Kelola Pengguna</span></a></li>
@endsection
