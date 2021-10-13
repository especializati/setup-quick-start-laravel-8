<?php

use Illuminate\Support\Facades\Route;

// Example Routes Admin
Route::prefix('admin')
        //->middleware(['auth'])
        ->as('admin.')
        ->group(function () {
            Route::view('/', 'admin.pages.home.index')->name('home');
        });

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
