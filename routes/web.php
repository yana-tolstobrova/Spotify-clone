<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/songs', function () {
    return view('songs');
});

Route::get('/songs', [SongController::class, 'songIndex']);