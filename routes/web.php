<?php

use Illuminate\Support\Facades\Route;

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
})->name('welcome_route');

Route::get('about', function () {
    return view('about');
})->name('about_route');

Route::get('cart', function () {
    return view('cart');
})->name('cart_route');

Route::get('contact', function () {
    return view('contact');
})->name('contact_route');

Route::get('market', function () {
    return view('market');
})->name('market_route');
