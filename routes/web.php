<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homeBeforeLogin');
});

Route::get('/home', function () {
    return view('home');
});
