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
    return view('welcome');
})->middleware('auth');

Route::resource('users', 'UserController')->middleware('auth');

/*
Así no habría que poner ->middelware('auth) al final de cada ruta y queda el código más limpio.
Route::middleware(['auth'])->group(function () {
    Route::view('/', 'welcome');
    Route::resource('users', 'UserController');
}

*/

