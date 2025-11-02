<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/portfolio', function () {
    return view('pages.portfolio');
})->name('portfolio');

Route::get('/portfolio/web', function () {
    return view('pages.portfolio');
})->name('portfolio.web');

Route::get('/portfolio/design', function () {
    return view('pages.portfolio');
})->name('portfolio.design');
