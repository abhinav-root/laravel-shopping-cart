<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LogoutController;

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

Route::get('/login', [LoginController::class, 'show']);
Route::post('/login', [LoginController::class, 'login']);

Route::get('/signup', [SignupController::class, 'show']);
Route::post('/signup', [SignupController::class, 'signup']);



Route::get('/products/laptops', [ProductController::class, 'laptop']);

Route::group(['middleware'=>['customAuth']], function() {
    Route::get('/dashboard', [DashboardController::class, 'show']);
    Route::get('/logout', [LogoutController::class, 'index']);
    Route::get('/products/laptops', [ProductController::class, 'laptop']);
    Route::get('/products/smartphones', [ProductController::class, 'smartphone']);

});