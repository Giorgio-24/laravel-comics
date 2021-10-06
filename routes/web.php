<?php

use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    $nav_links = config('header_nav');
    return view('home', compact('nav_links'));
})->name('home');
