<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group whic\\\\

| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('landing');
});


Route::get('/loans', 'PagesController@loans');
Route::get('/register', 'PagesController@register');
Route::get('/login', 'PagesController@login');
Route::get('/compare', 'PagesController@compare');


Route::post('/settings', 'AdminController@updatesettings');

Route::get('/admin', 'AdminController@home');
Route::get('/manageloans', 'AdminController@manageloans');
Route::get('/settings', 'AdminController@settings');

Route::get('/lender', 'LenderController@home');
Route::get('/createloan', 'LenderController@createloan');
Route::get('/editloan', 'LenderController@editloan');
