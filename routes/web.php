<?php

use App\Http\Controllers\Events\AboutController;
use App\Http\Controllers\Events\ContactsController;
use App\Http\Controllers\Events\DestroyController;
use App\Http\Controllers\Events\MainController;
use App\Http\Controllers\Events\UpdateController;
use App\Http\Controllers\Events\EditController;
use App\Http\Controllers\Events\ShowController;
use App\Http\Controllers\Events\StoreController;
use App\Http\Controllers\Events\CreateController;
use App\Http\Controllers\Events\IndexController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\IsAdmin;
Route::get('/', function () {
    return view('welcome');
});
Route::group(['namespace' => 'App\Http\Controllers\Events', 'middleware' => [IsAdmin::class]], function () {
    Route::get('/events', IndexController::class)->name('events.index');
    Route::get('/events/create', CreateController::class)->name('events.create');
    Route::post('/events', StoreController::class)->name('events.store');
    Route::get('/events/{event}', ShowController::class)->name('events.show');
    Route::get('/events/{event}/edit', EditController::class)->name('events.edit');
    Route::patch('/events/{event}', UpdateController::class)->name('events.update');
    Route::delete('/events/{event}', DestroyController::class)->name('events.destroy');
});

//маршруты, доступные для всех пользователей
Route::group(['namespace' => 'App\Http\Controllers\Events'], function () {
    Route::get('/main', \App\Http\Controllers\Events\MainController::class)->name('events.main');
    Route::get('/about', \App\Http\Controllers\Events\AboutController::class)->name('events.about');
    Route::get('/contacts', \App\Http\Controllers\Events\ContactsController::class)->name('events.contacts');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
