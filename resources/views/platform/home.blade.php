@extends('layout.dashboard')

@section('pageTitle', $title)

@section('dashboard')

    @php
    use App\Models\Challenge;

    $challenges = Challenge::all();
    @endphp

    <section class="home">
        @foreach($challenges as $item)
            <x-challenge-card
                :title="$item->question"
                :category="$item->category"
            >
            </x-challenge-card>
        @endforeach
    </section>

@stop
