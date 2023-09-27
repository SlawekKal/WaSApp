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
});

Route::get('/nowakuweta', function () {
    return view('nowakuweta');
});

Route::get('/nowadostawa', function () {
    return view('nowadostawa');
});

Route::get('/kuwety', function () {
    return view('kuwety');
});
Route::get('/dostawyarch', function () {
    return view('dostawyarch');
});