<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', "App\\Http\\Controllers\\HomeController@index");

Route::get('/registrarse', "App\Http\Controllers\UserController@registerView");
Route::post("/registrarse", "App\Http\Controllers\UserController@store");

Route::get('/login', "App\Http\Controllers\UserController@loginView");
Route::post('/login', "App\Http\Controllers\UserController@login");

Route::get('/home', function () {
    $title = "Home";
    $user = "Jair Yara";

    return view('platform.home', compact("title", "user"));
});

Route::get('/retos', "App\\Http\\Controllers\\ChallengeController@create");
Route::post("/retos", "App\\Http\\Controllers\\ChallengeController@store");

Route::get('/logout', static function () {
    Auth::logout();
    redirect("/");
});
