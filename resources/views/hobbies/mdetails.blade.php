@extends('master')

@section('title', 'Hobbies - Music')
@section('content')

@if ($s_lists['genre'] == 'Pop')
    <div id="the-container" class="d-flex">
        <img src="{{ asset('assets/hobbies/' . $s_lists['image']) }}" alt="{{ $s_lists['name'] }}" class="">
        <div class="song-desc card m-auto w-50 p-4 lh-1 fs-5" style="background-color: rgba(255, 255, 255, 0); border: 3px solid gold">
            <div class="card-body rounded p-5 bg-dark" style="color: gold">
                <h3 class="fw-bold">{{ $s_lists['name'] }}</h3>
                <p class="fw-semibold">{{ $s_lists['artist'] }}</p>
                <p>Genre &emsp;: {{ $s_lists['genre'] }}</p>
                <p>Release &nbsp;: {{ $s_lists['release'] }}</p>
            </div>
        </div>
    </div>
@elseif ($s_lists['genre'] == 'R & B')
    <div id="the-container" class="d-flex">
        <img src="{{ asset('assets/hobbies/' . $s_lists['image']) }}" alt="{{ $s_lists['name'] }}" class="">
        <div class="song-desc card m-auto w-50 p-4 lh-1 fs-5" style="background-color: rgba(255, 255, 255, 0); border: 3px solid silver">
            <div class="card-body rounded p-5 bg-dark" style="color: silver">
                <h3 class="fw-bold">{{ $s_lists['name'] }}</h3>
                <p class="fw-semibold">{{ $s_lists['artist'] }}</p>
                <p>Genre &emsp;: {{ $s_lists['genre'] }}</p>
                <p>Release &nbsp;: {{ $s_lists['release'] }}</p>
            </div>
        </div>
    </div>
@elseif ($s_lists['genre'] == 'Classic')
    <div id="the-container" class="d-flex">
        <img src="{{ asset('assets/hobbies/' . $s_lists['image']) }}" alt="{{ $s_lists['name'] }}" class="">
        <div class="song-desc card m-auto w-50 p-4 lh-1 fs-5" style="background-color: rgba(255, 255, 255, 0); border: 3px solid #CD7F32">
            <div class="card-body rounded p-5 bg-dark" style="color: #CD7F32">
                <h3 class="fw-bold">{{ $s_lists['name'] }}</h3>
                <p class="fw-semibold">{{ $s_lists['artist'] }}</p>
                <p>Genre &emsp;: {{ $s_lists['genre'] }}</p>
                <p>Release &nbsp;: {{ $s_lists['release'] }}</p>
            </div>
        </div>
    </div>
@endif

@endsection
