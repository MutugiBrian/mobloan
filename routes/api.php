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

Route::get('loans','ApisController@allloans');
Route::get('liveloans/{id}','ApisController@liveloans');
Route::get('lenders','ApisController@lenders');
Route::get('lenderloans/{id}','ApisController@lenderloans');
