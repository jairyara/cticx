@extends('layout.master')

@section('content')
    @include('components.headerLanding')
    @yield('landing')
    @include('components.footerLanding')
@stop
