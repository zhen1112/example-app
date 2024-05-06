<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/index', function () {
    return view('welcome');
});
Route::get('/logout', function () {
    return view('logout');
});
Route::get('/watchs', function () {
    return view('watchs');
});
Route::get('/rentcars', function () {
    return view('rentcars');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/myrent', function () {
    return view('myrent');
});
Route::get('/allcar', function () {
    return view('allcar');
});





