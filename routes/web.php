<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/tours', function () {
    return view('tours');
});

Route::get('/booking-tours', function () {
    return view('booking-tours');
});

Route::get('/tours-checkout', function () {
    return view('tours-checkout');
});

Route::get('/hotels', function () {
    return view('hotels');
});

Route::get('/booking-hotels', function () {
    return view('booking-hotels');
});

Route::get('/hotels-checkout', function () {
    return view('hotels-checkout');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/post', function () {
    return view('post');
});

Route::get('/contacts', function () {
    return view('contacts');
});


