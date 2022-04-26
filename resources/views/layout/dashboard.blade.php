@extends('layout.master')

@section('content')
    <main class="dashboard">
        <x-headerDashboard></x-headerDashboard>
        <x-asideDashboard></x-asideDashboard>
        <section class="content">
            @yield('dashboard')
        </section>
    </main>
@stop


<style>
    .dashboard {
        width: 100%;
        height: 100vh;
        display: grid;
        grid-template-areas: 'header header' 'aside content';
        grid-template-columns: 300px 1fr;
        grid-template-rows: 90px 1fr;
    }
</style>
