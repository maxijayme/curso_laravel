<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/post', function () {
    return ('new post');
});

Route::get('/post/{slug}', function ($slug) {
    return ($slug);
});

Route::get('/buscar', function (Request $request) {
    return ($request->all());
});
