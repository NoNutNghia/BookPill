<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [ProductController::class, 'getProductList'])->name('main');

Route::get('/register', function () {
    if (!Auth::check()) {
        return view('pages.auth.register');
    }

    return redirect()->route('main');
})->name('register');

Route::get('/sign-in', [UserController::class, 'index'])->name('sign_in');
Route::post('/sign-in', [UserController::class, 'login'])->name('request_sign_in');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');
Route::get('/reset', [UserController::class, 'resetPassword'])->name('reset');
Route::post('/reset', [UserController::class, 'resetPasswordRequest'])->name('reset.request');
Route::get('/verify', [UserController::class, 'verifyEmail'])->name('verify.email');
Route::get('/reset/password', [UserController::class, 'resetPasswordIndex'])->name('reset.password');

Route::prefix('/account')->name('account.')->group(function () {
    Route::get('profile', function () {
        return view('pages.profile.profile');
    })->name('profile');
});

Route::prefix('/product')->name('product.')->group(function () {
    Route::get('/', [ProductController::class, 'getProductList'])->name('main');
    Route::get('/detail', [ProductController::class, 'getProductDetail'])->name('detail');
    Route::post('/filter', [ProductController::class, 'getProductFilter'])->name('filter');
    Route::post('/title', [ProductController::class, 'getProductTitle'])->name('title');
});

