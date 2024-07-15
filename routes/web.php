<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/post/{id?}', function (string $id = null) {
    if ($id) {
        return "<h2>Post id is $id </h2>";
    } else {
        return "<h2>There is no any id exist.</h2>";
    }
})->whereAlpha('id');


Route::get('/post/{id?}', function (string $id = null) {
    if ($id) {
        return "<h2>Post id is $id </h2>";
    } else {
        return "<h2>There is no any id exist.</h2>";
    }
})->whereNumber('id');


Route::get('/post/{id?}', function (string $id = null) {
    if ($id) {
        return "<h2>Post id is $id </h2>";
    } else {
        return "<h2>There is no any id exist.</h2>";
    }
});

// multiple parameter value

Route::get("/post/{id?}/comment/{commentId?}", function (string $id = null, string $commentId = null) {
    if ($id) {
        return "<h2>Post id is $id and comment id = $commentId </h2>";
    } else {
        return "<h2>There is no any id exist.</h2>";
    }
});

Route::get('/post/1', function () {
    return view('post1');
});
