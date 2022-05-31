@extends('layout.master')

@section('content')
    @php
    $session = \Illuminate\Support\Facades\Session::get("user");
    $name = $session->firstname . " " . $session->lastname
    @endphp
    <main class="dashboard">
        <x-headerDashboard :page="$title" :user="$name"></x-headerDashboard>
        <x-asideDashboard></x-asideDashboard>
        <section class="contentDashboard">
            @yield('dashboard')
        </section>
    </main>
@stop

