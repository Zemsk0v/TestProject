<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace' => 'App\Http\Controllers\Events'], function () {
    Route::get('/events', \App\Http\Controllers\Events\IndexController::class)->name('events.index');
    Route::get('/events/create', \App\Http\Controllers\Events\CreateController::class)->name('events.create');
    Route::post('/events', \App\Http\Controllers\Events\StoreController::class)->name('events.store');
    Route::get('/events/{event}', \App\Http\Controllers\Events\ShowController::class)->name('events.show');
    Route::get('/events/{event}/edit', \App\Http\Controllers\Events\EditController::class)->name('events.edit');
    Route::patch('/events/{event}', \App\Http\Controllers\Events\UpdateController::class)->name('events.update');
    Route::delete('/events/{event}', \App\Http\Controllers\Events\DestroyController::class)->name('events.destroy');




    Route::get('/main', \App\Http\Controllers\Events\MainController::class)->name('events.main');
    Route::get('/about', \App\Http\Controllers\Events\AboutController::class)->name('events.about');
    Route::get('/contacts', \App\Http\Controllers\Events\ContactsController::class)->name('events.contacts');
});
