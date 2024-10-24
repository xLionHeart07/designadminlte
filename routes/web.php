<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('update', function(){
    return view('update');
});

Route::get('d1', function(){
    return view('d1');
});
Route::get('d2', function(){
    return view('d2');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

