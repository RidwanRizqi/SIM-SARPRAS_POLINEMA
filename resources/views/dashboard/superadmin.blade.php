@extends('layouts.app')

@section('title', 'Dashboard Super Admin')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Dashboard Super Admin</h1>
        </div>

        <div class="section-body"></div>
    </section>
@endsection

@section('sidebar')
    @parent
    <li><a href="{{route('daftaruser.superadmin')}}" class="nav-link"><i class="fas fa-file-alt"></i><span>Kelola Pengguna</span></a></li>
@endsection
