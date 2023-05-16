@extends('layouts.app')

@section('title', 'Form Daftar')

@section('content')
    <section class="section">

        <div class="section-body ">
            <div id="layoutSidenav_content">
                <main>
            <div class="container-xl px-4 mt-5">
                <div class="card mb-4">
                    <div class="card-header bg-whitesmoke"><h4>Form Pendaftaran Peminjaman Sarana &amp; Prasarana</h4></div>
                    <div class="card-body ps-5 pe-15">
                        <form>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama Ruangan</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-6 col-sm-6">
                                    <label for="exampleInputEmail1" class="form-label">Nama Kegiatan</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <label for="exampleInputEmail1" class="form-label">Penanggung Jawab</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-6 col-sm-6">
                                    <label for="startDate" class="form-label">Mulai Tanggal</label>
                                    <input id="startDate" class="form-control" type="date" />
                                    <span id="startDateSelected"></span>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <label for="endDate" class="form-label">Sampai Tanggal</label>
                                    <input id="endDate" class="form-control" type="date" />
                                    <span id="endDateSelected"></span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="uploadproposal" class="form-label">Upload Proposal</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                  </div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Fasilitas</label>
                                <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input" readonly>
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
        <a href="{{route('daftar.user')}}" class="nav-link"><i class="fas fa-file-alt"></i><span>Daftar Sarana &amp; Prasarana</span></a>
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-file-alt"></i><span>Peminjaman</span></a>
        <ul class="dropdown-menu">
            <li>
                <a class="nav-link" href="{{route('history.user')}}">History User</a>
            </li>
            <li>
                <a class="nav-link" href="{{route('validasi.user')}}">Validasi User</a>
            </li>
        </ul>
        <a href="{{route('pelaporan.user')}}" class="nav-link"><i class="fas fa-file-alt"></i><span>Pelaporan</span></a>
    </li>
@endsection
