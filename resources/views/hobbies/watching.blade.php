@extends('master')

@section('title', 'Hobbies - Watching')
@section('content')

<div id="hob-container" class="d-flex p-5 justify-content-evenly">
    @foreach ($moviesInfo as $minfo)
        @if ($minfo['genre'] == 'Fantasy')
            <a href="watching/details/{{ $minfo['name'] }}" class="m-3 d-flex w-25 h-50 rounded text-black text-decoration-none">
                <div id="fantasy-list" class="pt-3 d-flex flex-column text-center rounded" style="border: 3px solid gold">
                    <img class="w-75 m-auto" src="{{ asset('assets/hobbies/' . $minfo['image']) }}" alt="{{ $minfo['name'] }}">
                    <div class="short-desc mt-4">
                        <h5 class="fw-bold">{{ $minfo['name'] }}</h5>
                    </div>
                </div>
            </a>
        @elseif ($minfo['genre'] == 'Sci-Fi')
            <a href="watching/details/{{ $minfo['name'] }}" class="m-3 d-flex w-25 h-50 rounded text-black text-decoration-none">
                <div id="scifi-list" class="pt-3 d-flex flex-column text-center rounded" style="border: 3px solid silver">
                    <img class="w-75 m-auto" src="{{ asset('assets/hobbies/' . $minfo['image']) }}" alt="{{ $minfo['name'] }}">
                    <div class="short-desc mt-4">
                        <h5 class="fw-bold">{{ $minfo['name'] }}</h5>
                    </div>
                </div>
            </a>
        @elseif ($minfo['genre'] == 'Comedy')
            <a href="watching/details/{{ $minfo['name'] }}" class="m-3 d-flex w-25 h-50 rounded text-black text-decoration-none">
                <div id="comedy-list" class="pt-3 d-flex flex-column text-center rounded" style="border: 3px solid #CD7F32">
                    <img class="w-75 m-auto" src="{{ asset('assets/hobbies/' . $minfo['image']) }}" alt="{{ $minfo['name'] }}">
                    <div class="short-desc mt-4">
                        <h5 class="fw-bold">{{ $minfo['name'] }}</h5>
                    </div>
                </div>
            </a>
        @endif
    @endforeach
</div>

@endsection
