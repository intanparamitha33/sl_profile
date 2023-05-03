@extends('master')

@section('title', 'Hobbies - Music')
@section('content')

<div id="music-container" class="d-flex p-5 justify-content-evenly">
    @foreach ($songsInfo as $sinfo)
        @if ($sinfo['genre'] == 'Pop')
            <a href="music/details/{{ $sinfo['name'] }}" class="m-3 d-flex w-25 h-50 rounded text-black text-decoration-none">
                <div id="pop-list" class="pt-3 d-flex flex-column text-center rounded" style="border: 3px solid gold">
                    <img class="w-75 m-auto" src="{{ asset('assets/hobbies/' . $sinfo['image']) }}" alt="{{ $sinfo['name'] }}">
                    <div class="short-desc mt-4">
                        <h5 class="fw-bold">{{ $sinfo['name'] }}</h5>
                        <p>{{ $sinfo['artist'] }}</p>
                    </div>
                </div>
            </a>
        @elseif ($sinfo['genre'] == 'R & B')
            <a href="music/details/{{ $sinfo['name'] }}" class="m-3 d-flex w-25 h-50 rounded text-black text-decoration-none">
                <div id="rnb-list" class="pt-3 d-flex flex-column text-center rounded" style="border: 3px solid silver">
                    <img class="w-75 m-auto" src="{{ asset('assets/hobbies/' . $sinfo['image']) }}" alt="{{ $sinfo['name'] }}">
                    <div class="short-desc mt-4">
                        <h5 class="fw-bold">{{ $sinfo['name'] }}</h5>
                        <p>{{ $sinfo['artist'] }}</p>
                    </div>
                </div>
            </a>
        @elseif ($sinfo['genre'] == 'Classic')
            <a href="music/details/{{ $sinfo['name'] }}" class="m-3 d-flex w-25 h-50 rounded text-black text-decoration-none">
                <div id="classic-list" class="pt-3 d-flex flex-column text-center rounded" style="border: 3px solid #CD7F32">
                    <img class="w-75 m-auto" src="{{ asset('assets/hobbies/' . $sinfo['image']) }}" alt="{{ $sinfo['name'] }}">
                    <div class="short-desc mt-4">
                        <h5 class="fw-bold">{{ $sinfo['name'] }}</h5>
                        <p>{{ $sinfo['artist'] }}</p>
                    </div>
                </div>
            </a>
        @endif
    @endforeach
</div>

@endsection
