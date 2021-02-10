<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'App\Http\Controllers\PostController@index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// IMPROVING ROUTES START

Route::get('/post', 'App\Http\Controllers\PostController@index');
Route::get('/post/create', 'App\Http\Controllers\PostController@create')->middleware(['auth']);
Route::get('/post/edit', 'App\Http\Controllers\PostController@update')->middleware(['auth']);
Route::post('/post/store', 'App\Http\Controllers\PostController@store');
Route::get('/post/{id}', 'App\Http\Controllers\PostController@single');
Route::get('/{tag}', 'App\Http\Controllers\PostController@show');

// IMPROVING ROUTES END