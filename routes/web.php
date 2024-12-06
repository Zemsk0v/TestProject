<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace' => 'App\Http\Controllers\Events'], function () {
    Route::get('/events', \App\Http\Controllers\Events\IndexController::class)->name('event.index');
    Route::get('/main', \App\Http\Controllers\Events\MainController::class)->name('event.main');
});
