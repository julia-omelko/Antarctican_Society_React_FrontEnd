<?php

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\EventsController;
// use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [WelcomeController::class, 'index']);

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('welcome', WelcomeController::class)
    //Get and Post
    ->only(['index', 'store'])
    ->middleware(['auth', 'verified']);

//EVENTS
Route::resource('events', EventsController::class)
    ->only(['index', 'create', 'store', 'show', 'edit', 'update', 'destroy']);
// Route::resource('events', 'App\Http\Controllers\EventsController');

// Route::get('events/{event}', 'App\Http\Controllers\EventsController@show');

// Route::get('events/{event}/edit', 'App\Http\Controllers\EventsController@edit');

//USERS
// Route::resource('users', 'App\Http\Controllers\UsersController');

// Route::get('users/{user}', 'App\Http\Controllers\UsersController@show');

// Route::get('users/{user}/edit', 'App\Http\Controllers\UsersController@edit');

// Auth::routes();

require __DIR__.'/auth.php';
