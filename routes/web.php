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

Route::get('/about', function() {
    $menu = json_decode(file_get_contents(storage_path('data/data.json')), true);
    return view('pages.about', ['data' => $menu]);
})->name('about');

Route::get('/about/gallery', function() {
    $menu = json_decode(file_get_contents(storage_path('data/data.json')), true);
    return view('pages.gallery', ['data' => $menu]);
})->name('gallery');

Route::get('/blog', function() {
    $menu = json_decode(file_get_contents(storage_path('data/data.json')), true);
    return view('pages.blog', ['data' => $menu]);
})->name('blog');

Route::get('/blog/details', function() {
    return view('pages.blog-details');
})->name('blog-details');

Route::get('/contact', function() {
    $menu = json_decode(file_get_contents(storage_path('data/data.json')), true);
    return view('pages.contact', ['data' => $menu]);
})->name('contact');