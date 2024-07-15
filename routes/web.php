<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/text', function () {
    return view('about');
});

Route::get('/post', function () {
    return view("post");
});

Route::get('/product', function () {
    return view("product");
})->name('mypost');

Route::redirect("/about", "/text", 301);

// page not found page here
Route::fallback(function () {
    return "<h1> Page not found here </h1>";
});
