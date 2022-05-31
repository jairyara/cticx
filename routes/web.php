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

Route::get('/', function () {
    return view('landing.index');
});

Route::get('/registrarse', "App\Http\Controllers\UserController@registerView");
Route::post("/registrarse", "App\Http\Controllers\UserController@store");

Route::get('/login', "App\Http\Controllers\UserController@loginView");
Route::post('/login', "App\Http\Controllers\UserController@login");

Route::get('/home', function () {
    $title = "Home";
    $user = "Jair Yara";

    return view('platform.home', compact("title", "user"));
});
