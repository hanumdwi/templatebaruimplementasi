<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('show-barang', 'ApiController@show');
Route::get('show-barang/{id}', 'ApiController@show1');
Route::post('input-barang', 'ApiController@insert');
Route::put('update-barang/{id}', 'ApiController@update');