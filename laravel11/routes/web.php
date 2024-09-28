<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about',['nama' => 'ABRAR WUJEDAAN']);
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/resend', function () {
    return view('resend');
});

Route::get('/kalkulator', function () {
    return view('kalkulator');
});

