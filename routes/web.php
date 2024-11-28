<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $menu = json_decode(file_get_contents(storage_path('data/data.json')), true);
    return view('pages.home', ['data' => $menu]);
})->name('home');

Route::get('/menu', function() {
    $menu = json_decode(file_get_contents(storage_path('data/data.json')), true);
    return view('pages.menu', ['data' => $menu]);
})->name('menu');

Route::get('/booking', function() {
    $menu = json_decode(file_get_contents(storage_path('data/data.json')), true);
    return view('pages.booking', ['data' => $menu]);
})->name('booking');