<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HistoriController;
use App\Models\Histori;

Route::get('/', function () {
    return view('home');
});

Route::get('/index', function () {
    return view('index');
});
Route::get('/index', function () {
    $historis = Histori::all();
    return view('index', ['historis' => $historis]);
});
Route::get('/create', function () {
    return view('create');
});

Route::post('/create', [HistoriController::class, 'store']);

