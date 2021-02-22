<?php

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

Route::redirect('/', '/users');

Route::get('/about', function () {
    return Inertia::render('About', [
        'foo' => 'bar',
    ]);
});

Route::get('/contact', function () {
    return Inertia::render('Contact', [
        'foo' => 'bar',
    ]);
});

Route::get('/users', 'App\Http\Controllers\InertiaTestController@index')->name('users.index');
Route::get('/users/create', 'App\Http\Controllers\InertiaTestController@create')->name('users.create');
Route::post('/users', 'App\Http\Controllers\InertiaTestController@store')->name('users.store');
Route::get('/users/{user}/edit', 'App\Http\Controllers\InertiaTestController@edit')->name('users.edit');
Route::patch('/users/{user}', 'App\Http\Controllers\InertiaTestController@update')->name('users.update');
Route::delete('/users/{user}', 'App\Http\Controllers\InertiaTestController@destroy')->name('users.destroy');

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('inertia-test', 'App\Http\Controllers\App\Http\Controllers\InertiaTestController@index');


// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
