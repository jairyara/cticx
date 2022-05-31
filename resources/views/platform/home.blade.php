@extends('layout.dashboard')

@section('pageTitle', $title)

@section('dashboard')

    @php
    use App\Models\Challenge;

    $challenges = Challenge::all();
    @endphp

@stop
