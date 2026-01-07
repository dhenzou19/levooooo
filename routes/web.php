<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/aboutpage', function () {
    return view('aboutpage');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/homepage', function () {
    return view('homepage');
});

