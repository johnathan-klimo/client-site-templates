<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('primary-pages.home');
})->name('home');

Route::get('/services', function () {
    return view('primary-pages.services');
})->name('services');

Route::get('/food-menus', function () {
    return view('primary-pages.food-menus');
})->name('food-menus');

Route::get('/testimonials', function () {
    return view('primary-pages.testimonials');
})->name('testimonials');

Route::get('/about-us', function () {
  return view('primary-pages.about-us');
})->name('about-us');

Route::get('/faqs', function () {
  return view('primary-pages.faqs');
})->name('faqs');

Route::get('/page-heros', function () {
  return view('primary-pages.page-heros');
})->name('page-heros');

/*

Route::get('/', function () {
    return view('welcome');
});

*/
