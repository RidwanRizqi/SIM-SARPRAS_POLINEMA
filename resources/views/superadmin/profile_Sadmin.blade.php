@extends('layouts.app')

@section('title', 'Edit Profile')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Profile</h1>
        </div>

        <div class="section-body">
                <div class="container-xl px-4 mt-4">
                    <hr class="mt-0 mb-4" />
                    <div class="row">
                        <div class="col-xl-4">
                            <!-- Profile picture card-->
                            <div class="card mb-4 mb-xl-0">
                                <div class="card-header bg-whitesmoke"><h4>Foto Profil</h4></div>
                                <div class="card-body text-center">
                                    <!-- Profile picture image-->
                                    <img class="img-account-profile rounded-circle mb-2" src="https://sb-admin-pro.startbootstrap.com/assets/img/illustrations/profiles/profile-1.png" alt="" style="width: 12rem"/>
                                    <!-- Profile picture help block-->
                                    <div class="small font-italic text-muted mb-4">JPG / PNG < 5 MB</div>
                                    <!-- Profile picture upload button-->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <!-- Account details card-->
                            <div class="card mb-4">
                                <div class="card-header bg-whitesmoke"><h4>Detail Akun</h4></div>
                                <div class="card-body">
                                    <form class="row g-3">
                                        <!-- Form Group (username)-->
                                        <div class="mb-3 col-md-4">
                                            <label class="small mb-1" for="inputUsername">Username</label>
                                            <input class="form-control" id="inputUsername" type="text" placeholder="Enter your username" value="{{ auth()->user()->name }}"  disabled readonly/>
                                        </div>
                                        <!-- Form Group (email address)-->
                                        <!-- Form Row-->
                                            <!-- Form Group (phone number)-->
                                            <div class="mb-3 col-md-8">
                                                <label class="small mb-1" for="inputEmailAddress">Email</label>
                                                <input class="form-control" id="inputEmailAddress" type="email" placeholder="Enter your email address" value="{{ auth()->user()->email }}" disabled readonly/>
                                            </div>
                                            <div class="mb-3 col-md-8">
                                                <label class="small mb-1" for="pj">Penanggung Jawab</label>
                                                <input class="form-control" id="inputPhone" type="tel" placeholder="Enter your phone number" value="{{ auth()->user()->nama_pj }}" disabled readonly />
                                            </div>
                                        <div class="mb-3 col-md-4">
                                            <label class="small mb-1" for="pj">NIP</label>
                                            <input class="form-control" id="inputPhone" type="tel" placeholder="Enter your phone number" value="{{ auth()->user()->ninduk_pj }}" disabled readonly />
                                        </div>
                                        <!-- Save changes button-->

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </section>
@endsection

@section('sidebar')
    @parent
    <li class="nav-item {{ request()->is('kelola-superadmin', 'users*') ? 'active' : '' }}"><a href="{{route('kelola.superadmin')}}" class="nav-link"><i class="fas fa-users"></i><span>Kelola Pengguna</span></a></li>
@endsection
