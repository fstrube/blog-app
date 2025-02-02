<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\PostController::class, 'index'])
    ->name('posts.index');

Route::resource('/posts', App\Http\Controllers\PostController::class)
    ->only('show');

Route::resource('/admin/posts', App\Http\Controllers\PostController::class)
    ->except('index', 'show')
    ->middleware('auth');

Route::get('/admin', App\Http\Controllers\Admin\HomeController::class)
    ->name('admin.home')
    ->middleware('auth');

Route::get('/admin/logout', [Laravel\Fortify\Http\Controllers\AuthenticatedSessionController::class, 'destroy']);
