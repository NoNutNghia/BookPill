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
    return view('pages.product.main');
});

Route::get('/register', function () {
    return view('pages.auth.register');
})->name('register');

Route::get('/sign-in', function () {
    return view('pages.auth.sign_in');
})->name('sign_in');
