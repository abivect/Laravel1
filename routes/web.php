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
    return view('layouts/main');
});
Route::get('/about2', function () {
    return view('about2', [
        "name" => "fardan abi ghozali",
        "email" => "fardanabi21@gmail.com",
        "gambar" => "asw.jpg"
    ]);
});
Route::get('/nim', function () {
    return ('21.31.0010');
});

Route::get('/blog', function () {
    return view('blog');
});
Route::get('/home', function () {
    return view('home');
});
