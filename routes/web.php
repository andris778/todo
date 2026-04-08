<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/why', function () {
    return view('why');
});

Route::get('/home', function () {
    return view('why');
});

Route::get('/lore', function () {
    return view('why');
});

Route::get('/information', function () {
    return view('why');
});

Route::get('/calendar', function () {
    return view('why');
});