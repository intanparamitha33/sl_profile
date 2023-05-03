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
        return view('hobbies.mdetails', compact('s_lists'));
    }

    // Display list of movies (before full description) on page Watching
    public function watchingData() {
        $moviesInfo = [
            ['name' => 'Spider-Man', 'genre' => 'Fantasy', 'release' => 'May 22, 2002', 'image' => 'fantasy_mov.jpg'],
            ['name' => 'Jung_E', 'genre' => 'Sci-Fi', 'release' => 'January 20, 2023', 'image' => 'scifi_mov.jpg'],
            ['name' => 'Extreme Job', 'genre' => 'Comedy', 'release' => 'February 20, 2019 (Indonesia)', 'image' => 'comedy_mov.jpg']
        ];
        return view('hobbies.watching', compact('moviesInfo'));
    }

    // Display information of selected movie (by var name)
    public function watchingDetails($name) {
        $movieDetails = [
            ['name' => 'Spider-Man', 'genre' => 'Fantasy', 'desc' => 'Peter Parker`s life changes when he is bitten by a genetically altered spider and gains superpowers. He uses his powers to help people and finds himself facing the Green Goblin, an evil maniac.', 'release' => 'May 22, 2002', 'image' => 'fantasy_mov.jpg'],
            ['name' => 'Jung_E', 'genre' => 'Sci-Fi', 'release' => 'January 20, 2023', 'desc' => 'In a post-apocalyptic near-future, a researcher at an AI lab leads the effort to end a civil war by cloning the brain of a heroic soldier -- her mother.', 'image' => 'scifi_mov.jpg'],
            ['name' => 'Extreme Job', 'genre' => 'Comedy', 'release' => 'February 20, 2019 (Indonesia)', 'desc' => 'Narcotics detectives work under cover in a chicken joint to try and bust a gang of organized criminals. Things take an unexpected turn when their new recipe suddenly transforms the run-down restaurant into the hottest eatery in town.', 'image' => 'comedy_mov.jpg']
        ];

        $m_lists = [];

        foreach ($movieDetails as $mdet) {
            if ($mdet['name'] == $name) {
                $m_lists = $mdet;
            }
        }
        return view('hobbies.wdetails', compact('m_lists'));
    }
}
