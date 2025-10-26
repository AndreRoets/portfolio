<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('home'); // This was 'welcome', I've corrected it to 'home'
});

Route::get('/portfolio', function () {
    return view('portfolio');
});
