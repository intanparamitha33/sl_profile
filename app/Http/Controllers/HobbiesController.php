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

    // Display list of books (before full description) on page Reading
    public function readingData() {
        $booksInfo = [
            ['name' => 'Bulan', 'genre' => 'Fantasy', 'release' => 'March 12, 2015', 'desc' => 'Namanya Seli, usianya 15 tahun, kelas sepuluh. Dia sama seperti remaja yang lain. Menyukai hal yang sama, mendengarkan lagu-lagu yang sama, pergi ke gerai fast food, menonton serial drama, film, dan hal-hal yang disukai remaja.

            Tetapi ada sebuah rahasia kecil Seli yang tidak pernah diketahui siapa pun. Sesuatu yang dia simpan sendiri sejak kecil. Sesuatu yang menakjubkan dengan tangannya.

            Namanya Seli. Dan tangannya bisa mengeluarkan petir.', 'image' => 'fantasy_book.jpg'],
            ['name' => 'Pulang', 'genre' => 'Action', 'release' => 'October 1, 2015', 'desc' => '"Aku tahu sekarang, lebih banyak luka di hati bapakku dibanding di tubuhnya. Juga mamakku, lebih banyak tangis di hati Mamak dibanding di matanya."

            Sebuah kisah tentang perjalanan pulang, melalui pertarungan demi pertarungan, untuk memeluk erat semua kebencian dan rasa sakit."', 'image' => 'action_book.jpg'],
            ['name' => 'Hujan', 'genre' => 'Romance', 'release' => 'January 28, 2016', 'desc' => 'Tentang persahabatan
            Tentang cinta
            Tentang perpisahan
            Tentang melupakan
            Tentang hujan', 'image' => 'rom_book.jpg']
        ];
        return view('hobbies.reading', compact('booksInfo'));
    }

    // Display information of selected book (by var name)
    public function readingDetails($name) {
        $bookDetails = [
            ['name' => 'Bulan', 'genre' => 'Fantasy', 'release' => 'March 12, 2015', 'desc' => 'Namanya Seli, usianya 15 tahun, kelas sepuluh. Dia sama seperti remaja yang lain. Menyukai hal yang sama, mendengarkan lagu-lagu yang sama, pergi ke gerai fast food, menonton serial drama, film, dan hal-hal yang disukai remaja.

            Tetapi ada sebuah rahasia kecil Seli yang tidak pernah diketahui siapa pun. Sesuatu yang dia simpan sendiri sejak kecil. Sesuatu yang menakjubkan dengan tangannya.

            Namanya Seli. Dan tangannya bisa mengeluarkan petir.', 'image' => 'fantasy_book.jpg'],
            ['name' => 'Pulang', 'genre' => 'Action', 'release' => 'October 1, 2015', 'desc' => '"Aku tahu sekarang, lebih banyak luka di hati bapakku dibanding di tubuhnya. Juga mamakku, lebih banyak tangis di hati Mamak dibanding di matanya."

            Sebuah kisah tentang perjalanan pulang, melalui pertarungan demi pertarungan, untuk memeluk erat semua kebencian dan rasa sakit."', 'image' => 'action_book.jpg'],
            ['name' => 'Hujan', 'genre' => 'Romance', 'release' => 'January 28, 2016', 'desc' => 'Tentang persahabatan
            Tentang cinta
            Tentang perpisahan
            Tentang melupakan
            Tentang hujan', 'image' => 'rom_book.jpg']
        ];

        $b_lists = [];

        foreach ($bookDetails as $bdet) {
            if ($bdet['name'] == $name) {
                $b_lists = $bdet;
            }
        }
        return view('hobbies.bdetails', compact('b_lists'));
    }
}
