<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('stats', function(){
    return[
        'Amar', 'Bla', 'Laravel', 'Vue'
    ];
});

Route::get('profile', function(){
    // return User::where('email', 'amarimamovicv2@gmail.com')->get();
    return request()->user();
})->middleware('auth:api');