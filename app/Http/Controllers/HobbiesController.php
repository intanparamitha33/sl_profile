<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HobbiesController extends Controller
{
    // Display list of songs (before full description) on page Music
    public function musicData() {
        $songsInfo = [
            ['name' => 'We Don`t Talk Anymore', 'genre' => 'Pop', 'artist' => 'Charlie Puth, Selena Gomez', 'release' => '2016', 'image' => 'pop_songs.jpg'],
            ['name' => 'Lift Me Up', 'genre' => 'R & B', 'artist' => 'Rihanna', 'release' => '2022', 'image' => 'rnb_songs.png'],
            ['name' => 'Piano Sonata No. 11', 'genre' => 'Classic', 'artist' => 'Wolfgang Amadeus Mozart', 'release' => '1783', 'image' => 'classical_songs.png']
        ];
        return view('hobbies.music', compact('songsInfo'));
    }

    // Display information of selected song (by var name)
    public function musicDetails($name) {
        $songsDetails = [
            ['name' => 'We Don`t Talk Anymore', 'genre' => 'Pop', 'artist' => 'Charlie Puth, Selena Gomez', 'release' => '2016', 'image' => 'pop_songs.jpg'],
            ['name' => 'Lift Me Up', 'genre' => 'R & B', 'artist' => 'Rihanna', 'release' => '2022', 'image' => 'rnb_songs.png'],
            ['name' => 'Piano Sonata No. 11', 'genre' => 'Classic', 'artist' => 'Wolfgang Amadeus Mozart', 'release' => '1783', 'image' => 'classical_songs.png']
        ];

        $s_lists = [];

        foreach ($songsDetails as $sdet) {
            if ($sdet['name'] == $name) {
                $s_lists = $sdet;
            }
        };
        return view('hobbies.details', compact('s_lists'));
    }
}
