@extends('master')

@section('title', 'Hobbies - Watching')
@section('content')

@if ($m_lists['genre'] == 'Fantasy')
    <div id="the-container" class="d-flex">
        <img src="{{ asset('assets/hobbies/' . $m_lists['image']) }}" alt="{{ $m_lists['name'] }}" class="w-25">
        <div class="mov-desc card m-auto w-50 p-4 lh-1 fs-5" style="background-color: rgba(255, 255, 255, 0); border: 3px solid gold">
            <div class="card-body rounded p-5 bg-dark" style="color: gold">
                <h3 class="fw-bold">{{ $m_lists['name'] }}</h3>
                <p>Genre &emsp;: {{ $m_lists['genre'] }}</p>
                <p>Release &nbsp;: {{ $m_lists['release'] }}</p>
                <p>Desc &emsp; &nbsp;: <br> {{ $m_lists['desc'] }}</p>
            </div>
        </div>
    </div>
@elseif ($m_lists['genre'] == 'Sci-Fi')
    <div id="the-container" class="d-flex">
        <img src="{{ asset('assets/hobbies/' . $m_lists['image']) }}" alt="{{ $m_lists['name'] }}" class="w-25">
        <div class="mov-desc card m-auto w-50 p-4 lh-1 fs-5" style="background-color: rgba(255, 255, 255, 0); border: 3px solid silver">
            <div class="card-body rounded p-5 bg-dark" style="color: silver">
                <h3 class="fw-bold">{{ $m_lists['name'] }}</h3>
                <p>Genre &emsp;: {{ $m_lists['genre'] }}</p>
                <p>Release &nbsp;: {{ $m_lists['release'] }}</p>
                <p>Desc &emsp; &nbsp;: <br> {{ $m_lists['desc'] }}</p>
            </div>
        </div>
    </div>
@elseif ($m_lists['genre'] == 'Comedy')
    <div id="the-container" class="d-flex">
        <img src="{{ asset('assets/hobbies/' . $m_lists['image']) }}" alt="{{ $m_lists['name'] }}" class="w-25">
        <div class="mov-desc card m-auto w-50 p-4 lh-1 fs-5" style="background-color: rgba(255, 255, 255, 0); border: 3px solid #CD7F32">
            <div class="card-body rounded p-5 bg-dark" style="color: #CD7F32">
                <h3 class="fw-bold">{{ $m_lists['name'] }}</h3>
                <p>Genre &emsp;: {{ $m_lists['genre'] }}</p>
                <p>Release &nbsp;: {{ $m_lists['release'] }}</p>
                <p>Desc &emsp; &nbsp;: <br> {{ $m_lists['desc'] }}</p>
            </div>
        </div>
    </div>
@endif

@endsection
