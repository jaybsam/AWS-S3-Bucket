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
});

Route::get('/upload', 'App\Http\Controllers\ImageController@create');
Route::post('/upload', 'App\Http\Controllers\ImageController@store');
Route::get('/upload/{image}', 'App\Http\Controllers\ImageController@show');
