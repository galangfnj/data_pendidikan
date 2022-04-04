<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\LoginController;

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



Route::get('home', function () {
    return view('home1');
});

Route::get('edulevels','App\Http\Controllers\EdulevelController@data');
Route::get('edulevels/add','App\Http\Controllers\EdulevelController@add');
Route::post('edulevels','App\Http\Controllers\EdulevelController@addprocess');
Route::resource('programs', 'App\Http\Controllers\ProgramController');

// route::get('/login','App\Http\Controllers\LoginController@index');
// route::post('/login','App\Http\Controllers\LoginController@authenticate');
Auth::routes();

Route::get('/home','App\Http\Controllers\EdulevelController@data');
