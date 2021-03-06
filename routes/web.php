<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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

Route::get('/', "App\\Http\\Controllers\\HomeController@index");

Route::get('/registrarse', "App\Http\Controllers\UserController@registerView");
Route::post("/registrarse", "App\Http\Controllers\UserController@store");

Route::get('/login', "App\Http\Controllers\UserController@loginView");
Route::post('/login', "App\Http\Controllers\UserController@login");

Route::get('/home', static function () {
    $title = "Home";

    return view('platform.home', compact("title"));
});

Route::get('/retos', "App\\Http\\Controllers\\ChallengeController@create");
Route::post("/retos", "App\\Http\\Controllers\\ChallengeController@store");

Route::get('/logout', static function () {
    Session::flush();
    Auth::logout();
    return redirect('login');
});
