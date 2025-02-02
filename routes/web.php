<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/posts', App\Http\Controllers\PostController::class)
    ->only('index', 'show');

Route::resource('/admin/posts', App\Http\Controllers\PostController::class)
    ->except('index', 'show')
    ->middleware('auth');

Route::get('/admin', App\Http\Controllers\Admin\HomeController::class);

Route::get('/admin/logout', [Laravel\Fortify\Http\Controllers\AuthenticatedSessionController::class, 'destroy']);
