<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('primary-pages.home');
})->name('home');





/*

Route::get('/', function () {
    return view('welcome');
});

*/
