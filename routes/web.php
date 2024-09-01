<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginWithGoogleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('auth/login', function () {
    return view('auth/login');
});

Route::get("auth/google", [
  LoginWithGoogleController::class,
  "redirectToGoogle",
]);

Route::get("auth/google/callback", [
  LoginWithGoogleController::class,
  "handleGoogleCallback",
]);