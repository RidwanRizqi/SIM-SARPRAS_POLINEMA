@extends('layouts.app')

@section('title', 'Homepage')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Blank Page</h1>
        </div>

        <div class="section-body"></div>
    </section>
@endsection

@section('sidebar')
    @parent
    <li class="menu-header">Dashboard</li>
    <li class="nav-item dropdown">
        <a href="#" class="nav-link has-dropdown"><i
                class="fas fa-fire"></i><span>Dashboard</span></a>
        <ul class="dropdown-menu">
            <li>
                <a class="nav-link" href="index-0.html">General Dashboard</a>
            </li>
            <li>
                <a class="nav-link" href="index.html">Ecommerce Dashboard</a>
            </li>
        </ul>
    </li>
@endsection
