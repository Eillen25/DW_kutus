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

Route::get('/', 'App\Http\Controllers\PenjualanController@index');
Route::get('/perproduk', 'App\Http\Controllers\PenjualanController@perproduk');
Route::get('/pereseller', 'App\Http\Controllers\PenjualanController@pereseller');
Route::get('/pertanggal', 'App\Http\Controllers\PenjualanController@pertanggal');
Route::get('/restanggal', 'App\Http\Controllers\PenjualanController@restanggal');
Route::get('/prodtanggal', 'App\Http\Controllers\PenjualanController@prodtanggal');
Route::get('/resprod', 'App\Http\Controllers\PenjualanController@resprod');
