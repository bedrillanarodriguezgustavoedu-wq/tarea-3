<?php

use App\Http\Controllers\ContactRequestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::view('/about', 'about')->name('about');
Route::view('/privacy', 'privacy')->name('privacy');
Route::post('/contact', ContactRequestController::class)
    ->middleware('throttle:3,10')
    ->name('contact.store');
