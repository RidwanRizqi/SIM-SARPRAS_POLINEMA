@extends('layouts.app')

@section('title', 'Form Daftar')

@section('content')
    <section class="section">

        <div class="section-body ">
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-xl px-4 mt-5">
                        <div class="card mb-4">
                            <div class="card-header bg-whitesmoke"><h4>Form Edit User</h4></div>
                            <div class="card-body ps-5 pe-15">
                                <form>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Nama User</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-lg-6 col-sm-6">
                                            <label for="exampleInputEmail1" class="form-label">Email User</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        </div>
                                        <div class="col-lg-6 col-sm-6">
                                            <label for="exampleInputEmail1" class="form-label">Password</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-lg-6 col-sm-6">
                                            <label for="exampleInputEmail1" class="form-label">Nomor Telepon</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        </div>
                                        <div class="col-lg-6 col-sm-6">
                                            <label for="exampleInputEmail1" class="form-label">Role</label>
                                            <select class="form-control">
                                                <option>Default select</option>
                                                <option>Admin</option>
                                                <option>User</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Bio</label>
                                        <textarea type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" rows="3"></textarea>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
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
