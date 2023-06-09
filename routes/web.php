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
    return view('homepage');
});
Route::get('/homepage', function () {
    return view('homepage');
});
Route::get('/product', function () {
    return view('product');
});
Route::get('/detailproduct', function () {
    return view('detailproduct');
});
Route::get('/owner', function () {
    return view('owner');
});
Route::get('/aboutus', function () {
    return view('aboutus');
});