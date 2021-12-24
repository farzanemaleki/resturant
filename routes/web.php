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
    return view('site.landing');
})->name('home');

Route::get('/about-us', function () {
    return view('site.about-us');
})->name('aboutUs');

Route::get('/product-detail', function () {
    return view('site.product-detail');
})->name('productDetail');

Route::get('/shop', function () {
    return view('site.shop');
})->name('shop');

Route::get('/blog', function () {
    return view('site.blog');
})->name('blog');

Route::get('/contact', function () {
    return view('site.contact');
})->name('contact');

Route::get('/register', function () {
    return view('site.register');
})->name('register');

Route::get('/log_in', function () {
    return view('site.login');
})->name('login');

