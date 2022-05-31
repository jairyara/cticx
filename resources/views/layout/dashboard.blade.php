@extends('layout.master')

@section('content')
    @php
    $session = \Illuminate\Support\Facades\Session::get("user");
    var_dump($session)
    @endphp
    <main class="dashboard">
        <x-headerDashboard :page="$title" :user="$user"></x-headerDashboard>
        <x-asideDashboard></x-asideDashboard>
        <section class="contentDashboard">
            @yield('dashboard')
        </section>
    </main>
@stop

