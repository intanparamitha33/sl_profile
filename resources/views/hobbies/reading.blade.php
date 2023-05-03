@extends('master')

@section('title', 'Hobbies - Reading')
@section('content')

<div id="hob-container" class="d-flex p-5 justify-content-evenly">
    @foreach ($booksInfo as $binfo)
        @if ($binfo['genre'] == 'Fantasy')
            <a href="reading/details/{{ $binfo['name'] }}" class="m-3 d-flex w-25 h-50 rounded text-black text-decoration-none">
                <div id="fantasy-list" class="pt-3 d-flex flex-column text-center rounded" style="border: 3px solid gold">
                    <img class="w-75 m-auto" src="{{ asset('assets/hobbies/' . $binfo['image']) }}" alt="{{ $binfo['name'] }}">
                    <div class="short-desc mt-4">
                        <h5 class="fw-bold">{{ $binfo['name'] }}</h5>
                    </div>
                </div>
            </a>
        @elseif ($binfo['genre'] == 'Action')
            <a href="reading/details/{{ $binfo['name'] }}" class="m-3 d-flex w-25 h-50 rounded text-black text-decoration-none">
                <div id="action-list" class="pt-3 d-flex flex-column text-center rounded" style="border: 3px solid silver">
                    <img class="w-75 m-auto" src="{{ asset('assets/hobbies/' . $binfo['image']) }}" alt="{{ $binfo['name'] }}">
                    <div class="short-desc mt-4">
                        <h5 class="fw-bold">{{ $binfo['name'] }}</h5>
                    </div>
                </div>
            </a>
        @elseif ($binfo['genre'] == 'Romance')
            <a href="reading/details/{{ $binfo['name'] }}" class="m-3 d-flex w-25 h-50 rounded text-black text-decoration-none">
                <div id="rom-list" class="pt-3 d-flex flex-column text-center rounded" style="border: 3px solid #CD7F32">
                    <img class="w-75 m-auto" src="{{ asset('assets/hobbies/' . $binfo['image']) }}" alt="{{ $binfo['name'] }}">
                    <div class="short-desc mt-4">
                        <h5 class="fw-bold">{{ $binfo['name'] }}</h5>
                    </div>
                </div>
            </a>
        @endif
    @endforeach
</div>

@endsection
