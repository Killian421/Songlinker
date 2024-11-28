<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongController;

// Home route
Route::get('/', function () {
    return view('home');
})->name('home');

// Song-related routes
Route::resource('songs', SongController::class);

// Additional route for marking songs as played
Route::post('songs/mark-as-played', [SongController::class, 'markAsPlayed'])->name('songs.markAsPlayed');
