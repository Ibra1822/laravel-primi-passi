<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $title = 'Popular Songs';

    $popular = [
        [
           'title' => 'Hayya Hayya (Better Together)',
           'authors' => ' AISHA, Davido e Trinidad Cardona',
           'duration' => '3:06',
           'poster' => 'https://i.scdn.co/image/ab67616d0000b27351f2cf37e1ce1fe25ec927df'
        ],
        [
            'title' => 'Tukoh Taka',
            'authors' => 'Nicki Minaj, Maluma, & Myriam Fares ',
            'duration' => '3:14',
            'poster' => 'https://i0.wp.com/imprintent.org/wp-content/uploads/2022/11/unnamed-67.png?fit=720%2C720&ssl=1'
         ],
         [
            'title' => 'Lift Me Up',
            'authors' => 'Rihanna',
            'duration' => '4:10',
            'poster' => 'https://georgetownvoice.com/wp-content/uploads/2022/11/Lift-Me-Up-Online.png'
         ],

    ];

    return view('home',compact('title','popular'));
});

Route::get('/pop-songs',function(){
    $title = 'Pop Songs';
    $pop_songs = [
        [
            'title' => 'Billie Jean',
            'authors' => 'Michael Jackson',
            'duration' => '4:03',
            'poster' => 'https://m.media-amazon.com/images/I/51IJG7kIFdL._SY445_SX342_QL70_ML2_.jpg'
         ],
         [
            'title' => 'Talking to the Moon',
            'authors' => 'Bruno Mars',
            'duration' => '3:44',
            'poster' => 'https://images.genius.com/48c5b0a22a0addd3dae93c58f39af5dc.1000x1000x1.jpg'
         ],
         [
            'title' => 'Locked Out of Heaven',
            'authors' => 'Bruno Mars',
            'duration' => '3:33',
            'poster' => 'https://static.spin.com/files/121015-bruno-mars.jpg'
         ],
        ];


    return view('pop', compact('title','pop_songs'));
});

Route::get('/rock_songs',function(){
    $title = 'Rock Songs';
    $rock = [
        [
           'title' => 'Numb',
           'authors' => 'Linkin Park',
           'duration' => '3:06',
           'poster' => 'https://i1.sndcdn.com/artworks-000082840509-ty2eem-t500x500.jpg'
        ],
        [
            'title' => 'Wake Me Up When September Ends',
            'authors' => 'Green Day',
            'duration' => '7:12',
            'poster' => 'https://i1.sndcdn.com/artworks-000125052782-qa7utu-t500x500.jpg'
         ],
         [
            'title' => 'Let It Be',
            'authors' => 'The Beatles',
            'duration' => '4:55',
            'poster' => 'https://www.virginradio.it/upload/let_it_be-1588927838534.jpg'
         ],

    ];
    return view('rock',compact('title','rock'));
});
