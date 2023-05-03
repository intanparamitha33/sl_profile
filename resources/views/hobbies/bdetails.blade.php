@extends('master')

@section('title', 'Hobbies - Reading')
@section('content')

@if ($b_lists['genre'] == 'Fantasy')
    <div id="the-container" class="d-flex">
        <img src="{{ asset('assets/hobbies/' . $b_lists['image']) }}" alt="{{ $b_lists['name'] }}" class="w-25">
        <div class="mov-desc card m-auto w-50 p-4 lh-1 fs-5" style="background-color: rgba(255, 255, 255, 0); border: 3px solid gold">
            <div class="card-body rounded p-5 bg-dark" style="color: gold">
                <h3 class="fw-bold">{{ $b_lists['name'] }}</h3>
                <p>Genre &emsp;: {{ $b_lists['genre'] }}</p>
                <p>Release &nbsp;: {{ $b_lists['release'] }}</p>
            </div>
        </div>
    </div>
@elseif ($b_lists['genre'] == 'Action')
    <div id="the-container" class="d-flex">
        <img src="{{ asset('assets/hobbies/' . $b_lists['image']) }}" alt="{{ $b_lists['name'] }}" class="w-25">
        <div class="mov-desc card m-auto w-50 p-4 lh-1 fs-5" style="background-color: rgba(255, 255, 255, 0); border: 3px solid silver">
            <div class="card-body rounded p-5 bg-dark" style="color: silver">
                <h3 class="fw-bold">{{ $b_lists['name'] }}</h3>
                <p>Genre &emsp;: {{ $b_lists['genre'] }}</p>
                <p>Release &nbsp;: {{ $b_lists['release'] }}</p>
            </div>
        </div>
    </div>
@elseif ($b_lists['genre'] == 'Romance')
    <div id="the-container" class="d-flex">
        <img src="{{ asset('assets/hobbies/' . $b_lists['image']) }}" alt="{{ $b_lists['name'] }}" class="w-25">
        <div class="mov-desc card m-auto w-50 p-4 lh-1 fs-5" style="background-color: rgba(255, 255, 255, 0); border: 3px solid #CD7F32">
            <div class="card-body rounded p-5 bg-dark" style="color: #CD7F32">
                <h3 class="fw-bold">{{ $b_lists['name'] }}</h3>
                <p>Genre &emsp;: {{ $b_lists['genre'] }}</p>
                <p>Release &nbsp;: {{ $b_lists['release'] }}</p>
            </div>
        </div>
    </div>
@endif

@endsection
