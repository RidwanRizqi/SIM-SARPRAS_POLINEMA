@extends('layouts.app')

@section('title', 'Menu Kelola Sarana-Prasarana Admin')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Update Sarana-Prasarana</h1>
        </div>

        <div class="section-body">
            <div id="layoutSidenav_content">
                <main>
                    <!-- Main page content-->
                    <div class="container-xl px-4 mt-n10">
                        <div class="card mb-4">
                            <div class="card-header bg-whitesmoke"><h4>Tambah Sarana & Prasarana</h4></div>
                            <div class="card-body ps-5 pe-15">
                                <form>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Nama Ruangan</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Kategori</label>
                                        <select class="form-control select2 select2-hidden-accessible" aria-label="Default select example">
                                            <option selected>Pilih Kategori</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Fasilitas</label>
                                        <textarea type="password" class="form-control" id="exampleInputPassword1"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="container-xl px-4">
                        <div class="card mb-4">
                            <div class="card-header bg-whitesmoke"> <h4>Data Sarana & Prasarana</h4></div>
                            <div class="card-body">
                                <table id="datatablesSimple" class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Nama Ruangan</th>
                                        <th>Kategori</th>
                                        <th>Fasilitas</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>Nama Ruangan</th>
                                        <th>Kategori</th>
                                        <th>Fasilitas</th>
                                        <th>Action</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    <tr>
                                        <td>Graha Polinema</td>
                                        <td>JTI</td>
                                        <td>meja 10 kursi 10</td>
                                        <td>
                                            <button class="btn btn-success" type="button">
                                                <i class="fas fa-edit"></i> Edit
                                            </button>
                                            <button class="btn btn-danger" type="button">
                                                <i class="fas fa-trash"></i> Delete
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Graha Polinema</td>
                                        <td>JTI</td>
                                        <td>meja 10 kursi 10</td>
                                        <td>
                                            <button class="btn btn-success" type="button">
                                                <i class="fas fa-edit"></i> Edit
                                            </button>
                                            <button class="btn btn-danger" type="button">
                                                <i class="fas fa-trash"></i> Delete
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Graha Polinema</td>
                                        <td>JTI</td>
                                        <td>meja 10 kursi 10</td>
                                        <td>
                                            <button class="btn btn-success" type="button">
                                                <i class="fas fa-edit"></i> Edit
                                            </button>
                                            <button class="btn btn-danger" type="button">
                                                <i class="fas fa-trash"></i> Delete
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Graha Polinema</td>
                                        <td>JTI</td>
                                        <td>meja 10 kursi 10</td>
                                        <td>
                                            <button class="btn btn-success" type="button">
                                                <i class="fas fa-edit"></i> Edit
                                            </button>
                                            <button class="btn btn-danger" type="button">
                                                <i class="fas fa-trash"></i> Delete
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Graha Polinema</td>
                                        <td>JTI</td>
                                        <td>meja 10 kursi 10</td>
                                        <td>
                                            <button class="btn btn-success" type="button">
                                                <i class="fas fa-edit"></i> Edit
                                            </button>
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
    <li><a href="{{route('kelola.admin')}}" class="nav-link"><i class="fas fa-file-alt"></i><span>Kelola Sarana Prasarana</span></a></li>
    <li class="nav-item dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-file-alt"></i><span>Peminjaman</span></a>
        <ul class="dropdown-menu">
            <li>
                <a class="nav-link" href="{{route('history.admin')}}">History User</a>
            </li>
            <li>
                <a class="nav-link" href="{{route('validasi.admin')}}">Validasi User</a>
            </li>
        </ul>
    </li>
    <li><a href="{{route('pelaporan.admin')}}" class="nav-link"><i class="fas fa-file-alt"></i><span>Pelaporan</span></a></li>
@endsection
