@extends('layouts.app')

@section('title', 'Form Edit Peminjaman')
@push('customCSS')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/fullcalendar.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    {{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>--}}
    {{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/fullcalendar.min.js"></script>--}}
@endpush
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Edit Peminjaman</h1>
        </div>

        <div class="section-body ">
            <div class="row">
                <div class="col-xl-6 mb-4">
                    <!-- Dashboard example card 1-->
                    <a class="card lift">
                        <div class="card-header bg-whitesmoke"><h4>Daftar Peminjaman Pada
                                Ruang {{ $peminjaman_admin->saranaPrasarana->nama }}</h4></div>
                        <div class="card-body">
                            <div id='calendar'></div>
                            <script>
                                $(document).ready(function () {
                                    $('#calendar').fullCalendar({
                                        defaultView: 'month',
                                        events: [
                                                @foreach ($tanggalPeminjaman as $item)
                                            {
                                                title: '{{ $item->kegiatan }}',
                                                start: '{{ $item->tanggal_mulai }}',
                                                end: '{{ date('Y-m-d', strtotime($item->tanggal_selesai.' +1 day')) }}',
                                                color: 'green', // Ganti dengan warna blok yang diinginkan
                                                textColor: 'white' // Ganti dengan warna font yang diinginkan
                                            },
                                            @endforeach
                                        ]
                                    });
                                });
                            </script>
                        </div>
                    </a>
                </div>
                <div class="col-xl-6 mb-4">
                    <!-- Dashboard example card 1-->
                    <a class="card lift h-100">
                        <div class="card-header bg-whitesmoke"><h4>Form Pendaftaran Peminjaman Sarana &amp;
                                Prasarana</h4></div>
                        <div class="card-body d-flex justify-content-center flex-column">
                            <form method="POST" action="{{ route('peminjaman-admin.update' , ['peminjaman_admin' => $peminjaman_admin->id]) }}"
                                  enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="mb-3">
                                    <label for="namaRuang" class="form-label">Nama Ruangan</label>
                                    <input type="text" class="form-control" id="namaRuang" value="{{ $peminjaman_admin->saranaPrasarana->nama }}"
                                           readonly>
                                </div>
                                <input type="text" class="form-control" id="id_user" value="{{ Auth::user()->id }}"
                                       name="id_user" readonly hidden>
                                <input type="text" class="form-control" id="id_sarana_prasarana"
                                       value="{{ $peminjaman_admin->id_sarana_prasarana }}"
                                       name="id_sarana_prasarana" readonly hidden>
                                <input type="text" class="form-control" id="id_wewenang"
                                       value="{{ $peminjaman_admin->id_wewenang }}"
                                       name="id_wewenang" readonly hidden>
                                <div class="mb-3">
                                    <label for="kegiatan" class="form-label">Nama Kegiatan</label>
                                    <input type="text" class="form-control @error('kegiatan') is-invalid @enderror"
                                           id="kegiatan" name="kegiatan" value="{{ old('kegiatan', $peminjaman_admin->kegiatan) }}">
                                    @error('kegiatan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-6 col-sm-6">
                                        <label for="penanggung_jawab" class="form-label">Penanggung Jawab</label>
                                        <input type="text"
                                               class="form-control @error('penanggung_jawab') is-invalid @enderror"
                                               id="penanggung_jawab" name="penanggung_jawab" value="{{ old('penanggung_jawab', $peminjaman_admin->penanggung_jawab) }}">
                                        @error('penanggung_jawab')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <label for="daya_listrik" class="form-label">Daya Listrik</label>
                                        <select class="form-control" name="daya_listrik">
                                            @if($peminjaman_admin->daya_listrik == 'Ya')
                                                <option selected>Ya</option>
                                                <option>Tidak</option>
                                            @else
                                                <option>Ya</option>
                                                <option selected>Tidak</option>
                                            @endif
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-6 col-sm-6">
                                        <label for="tanggal_mulai" class="form-label">Mulai Tanggal</label>
                                        <input id="tanggal_mulai"
                                               class="form-control @error('tanggal_selesai') is-invalid @enderror"
                                               type="date" name="tanggal_mulai" value="{{ old('tanggal_mulai', $peminjaman_admin->tanggal_mulai) }}">
                                        @error('tanggal_mulai')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                        <span id="startDateSelected"></span>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <label for="tanggal_selesai" class="form-label">Sampai Tanggal</label>
                                        <input id="tanggal_selesai"
                                               class="form-control @error('tanggal_selesai') is-invalid @enderror"
                                               type="date"
                                               name="tanggal_selesai" value="{{ old('tanggal_selesai', $peminjaman_admin->tanggal_selesai) }}">
                                        {{--                                        @error('tanggal_selesai')--}}
                                        {{--                                        <div class="invalid-feedback">--}}
                                        {{--                                            {{ $message }}--}}
                                        {{--                                        </div>--}}
                                        {{--                                        @enderror--}}
                                        <span id="endDateSelected"></span>
                                    </div>
                                    @if($errors->has(['tanggal_selesai']))
                                        <div class="col-lg-12">
                                            <div class="alert alert-danger mt-3">
                                                Tanggal mulai dan tanggal selesai telah digunakan!.
                                            </div>
                                        </div>
                                    @endif
                                </div>
                                {{--                                <div class="mb-3">--}}
                                {{--                                    <label for="dokumen" class="form-label">Upload Proposal</label>--}}
                                {{--                                    <div class="custom-file">--}}
                                {{--                                        <input type="file" class="custom-file-input @error('dokumen') is-invalid @enderror" id="dokumen" name="dokumen">--}}
                                {{--                                        <label class="custom-file-label" for="dokumen">Choose file</label>--}}
                                {{--                                        @error('dokumen')--}}
                                {{--                                        <div class="invalid-feedback">{{ $message }}</div>--}}
                                {{--                                        @enderror--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}
                                <input type="hidden" name="oldDokumen" value="{{ $peminjaman_admin->dokumen }}">
                                <div class="mb-3">
                                    <label for="dokumen" class="form-label">Upload Proposal</label>
                                    <input class="form-control @error('dokumen') is-invalid @enderror" type="file"
                                           id="dokumen" name="dokumen">
                                    @error('dokumen')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="fasilitas" class="form-label">Fasilitas</label>
                                    <textarea type="text" class="form-control @error('fasilitas') is-invalid @enderror"
                                              id="fasilitas" readonly style="height: 72px">{{ $peminjaman_admin->saranaPrasarana->fasilitas }}</textarea>
                                    @error('fasilitas')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </a>
                </div>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-xl px-4 mt-5">
                        <div class="card mb-4">
                            {{--                            <div class="card-header bg-whitesmoke"><h4>Daftar Peminjaman Pada Ruang {{ $sarpras->nama }}</h4></div>--}}
                            {{--                            <div class="card-body ps-5 pe-15">--}}
                            {{--                                <div id='calendar'></div>--}}
                            {{--                                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>--}}
                            {{--                                <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>--}}
                            {{--                                <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/fullcalendar.min.js"></script>--}}
                            {{--                                <script>--}}
                            {{--                                    $(document).ready(function() {--}}
                            {{--                                        $('#calendar').fullCalendar({--}}
                            {{--                                            defaultView: 'month',--}}
                            {{--                                            events: [--}}
                            {{--                                                    @foreach ($peminjaman as $item)--}}
                            {{--                                                {--}}
                            {{--                                                    title: '{{ $item->kegiatan }} - {{ $item->penanggung_jawab }}',--}}
                            {{--                                                    start: '{{ $item->tanggal_mulai }}',--}}
                            {{--                                                    end: '{{ $item->tanggal_selesai }}',--}}
                            {{--                                                    color: 'green', // Ganti dengan warna blok yang diinginkan--}}
                            {{--                                                    textColor: 'white' // Ganti dengan warna font yang diinginkan--}}
                            {{--                                                },--}}
                            {{--                                                @endforeach--}}
                            {{--                                            ]--}}
                            {{--                                        });--}}
                            {{--                                    });--}}
                            {{--                                </script>--}}
                            {{--                            </div>--}}
                            {{--                            <div class="card-header bg-whitesmoke"><h4>Form Pendaftaran Peminjaman Sarana &amp;--}}
                            {{--                                    Prasarana</h4></div>--}}
                            {{--                            <div class="card-body ps-5 pe-15">--}}
                            {{--                                <form>--}}
                            {{--                                    <div class="mb-3">--}}
                            {{--                                        <label for="exampleInputEmail1" class="form-label">Nama Ruangan</label>--}}
                            {{--                                        <input type="text" class="form-control" id="exampleInputEmail1"--}}
                            {{--                                               aria-describedby="emailHelp">--}}
                            {{--                                    </div>--}}
                            {{--                                    <div class="row mb-3">--}}
                            {{--                                        <div class="col-lg-6 col-sm-6">--}}
                            {{--                                            <label for="exampleInputEmail1" class="form-label">Nama Kegiatan</label>--}}
                            {{--                                            <input type="text" class="form-control" id="exampleInputEmail1"--}}
                            {{--                                                   aria-describedby="emailHelp">--}}
                            {{--                                        </div>--}}
                            {{--                                        <div class="col-lg-6 col-sm-6">--}}
                            {{--                                            <label for="exampleInputEmail1" class="form-label">Penanggung Jawab</label>--}}
                            {{--                                            <input type="text" class="form-control" id="exampleInputEmail1"--}}
                            {{--                                                   aria-describedby="emailHelp">--}}
                            {{--                                        </div>--}}
                            {{--                                    </div>--}}
                            {{--                                    <div class="row mb-3">--}}
                            {{--                                        <div class="col-lg-6 col-sm-6">--}}
                            {{--                                            <label for="startDate" class="form-label">Mulai Tanggal</label>--}}
                            {{--                                            <input id="startDate" class="form-control" type="date"/>--}}
                            {{--                                            <span id="startDateSelected"></span>--}}
                            {{--                                        </div>--}}
                            {{--                                        <div class="col-lg-6 col-sm-6">--}}
                            {{--                                            <label for="endDate" class="form-label">Sampai Tanggal</label>--}}
                            {{--                                            <input id="endDate" class="form-control" type="date"/>--}}
                            {{--                                            <span id="endDateSelected"></span>--}}
                            {{--                                        </div>--}}
                            {{--                                    </div>--}}
                            {{--                                    <div class="mb-3">--}}
                            {{--                                        <label for="uploadproposal" class="form-label">Upload Proposal</label>--}}
                            {{--                                        <div class="custom-file">--}}
                            {{--                                            <input type="file" class="custom-file-input" id="customFile">--}}
                            {{--                                            <label class="custom-file-label" for="customFile">Choose file</label>--}}
                            {{--                                        </div>--}}
                            {{--                                    </div>--}}
                            {{--                                    <div class="mb-3">--}}
                            {{--                                        <label for="exampleInputPassword1" class="form-label">Fasilitas</label>--}}
                            {{--                                        <input type="text" id="disabledTextInput" class="form-control"--}}
                            {{--                                               placeholder="Disabled input" readonly>--}}
                            {{--                                    </div>--}}

                            {{--                                    <button type="submit" class="btn btn-primary">Submit</button>--}}
                            {{--                                </form>--}}
                            {{--                            </div>--}}
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </section>
@endsection
@push('customJS')
    {{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/fullcalendar.min.js"></script>
@endpush
@section('sidebar')
    @parent
    <li><a href="{{route('kelola.admin')}}" class="nav-link"><i class="fas fa-file-alt"></i><span>Kelola Sarana Prasarana</span></a></li>
    <li class="nav-item dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-file-alt"></i><span>Peminjaman</span></a>
        <ul class="dropdown-menu">
            <li>
                <a class="nav-link" href="{{ route('daftarsaranaprasarana.admin') }}">Pinjam Sarpras</a>
            </li>
            <li>
                <a class="nav-link" href="{{route('peminjaman-admin.index')}}">History Admin</a>
            </li>
            <li>
                <a class="nav-link" href="{{route('validasi.admin')}}">Validasi User</a>
            </li>
        </ul>
    </li>
    <li><a href="{{route('pelaporan.admin')}}" class="nav-link"><i class="fas fa-file-alt"></i><span>Pelaporan</span></a></li>
@endsection