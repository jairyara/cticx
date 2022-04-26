@extends('layout.master')

@section('content')
    <x-headerLanding></x-headerLanding>
    @yield('landing')
    <x-footerLanding></x-footerLanding>
@stop
