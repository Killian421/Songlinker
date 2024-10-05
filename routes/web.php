<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongController;

Route::get('/', [SongController::class, 'index'])->name('home');
Route::resource('songs', SongController::class);
Route::post('songs/mark-as-played', [SongController::class, 'markAsPlayed'])->name('songs.markAsPlayed');
Route::get('/', function () {
    return view('home');
})->name('home');
