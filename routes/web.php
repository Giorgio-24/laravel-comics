<?php

use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    $nav_links = config('header_nav');
    var_dump($nav_links);
    return view('home', compact('nav_links'));
})->name('home');
