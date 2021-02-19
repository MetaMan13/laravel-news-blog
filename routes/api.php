<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
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

Route::get('home', function(){
    // return \App\Models\Post::orderBy('created_at', 'DESC')->get();
    // O MY GOD LARAVEL IS SO GOOD !!!!!!!!!!!!! LOL
    return \App\Models\Post::with([
            'tags',
            'user',
            'likes',
            'comments'
        ])->orderBy('created_at', 'DESC')->get();
});

Route::get('profile', function(){
    return request()->user();
})->middleware('auth:api');

Route::post('signin', function(){
    request()->validate([
        'email' => 'required|email',
        'password' => 'required'
    ]);

    $data = request()->only('email', 'password');

    if(!Auth::attempt($data)){
        return [
            'errors' => 'Wrong email or password',
            'user' => null
        ];
    }else{
        return [
            'errors' => null,
            'user' => App\Models\User::where('email', '=', request()->email)->get()
        ];
    }
});