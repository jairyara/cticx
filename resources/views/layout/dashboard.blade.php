@extends('layout.master')

@section('content')
    <main class="dashboard">
        <x-headerDashboard :page="$title" :user="$user"></x-headerDashboard>
        <x-asideDashboard></x-asideDashboard>
        <section class="contentDashboard">
            @yield('dashboard')
        </section>
    </main>
@stop

