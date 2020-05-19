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
Route::post('login', [ 'as' => 'login', 'uses' => 'PagesController@login']);
Route::get('/', 'PagesController@index');
Route::get('/logout', 'PagesController@logout');


Route::post('/register', 'PagesController@postregister');
Route::post('/login', 'PagesController@postlogin');

Route::get('/verify/{link}', 'PagesController@verify');
Route::get('/loans', 'PagesController@loans');
Route::get('/register', 'PagesController@register');
Route::get('/register/success/{email}', 'PagesController@registersuccess');
Route::get('/login', 'PagesController@login');
Route::get('/compare/{id}', 'PagesController@compare');


Route::post('/settings', 'AdminController@updatesettings');
Route::post('/createloantype', 'AdminController@createloantype');
Route::post('/updateloantype', 'AdminController@updateloantype');
Route::post('/deletetype/{id}', 'AdminController@deleteloantype');
Route::post('/deleteloan/{id}', 'AdminController@deleteloan');
Route::post('/deletelender/{id}', 'AdminController@deletelender');

Route::get('/admin', 'AdminController@home');
Route::get('/manageloans', 'AdminController@manageloans');
Route::get('/settings', 'AdminController@settings');


Route::post('/createloan', 'LenderController@postloan');
Route::post('/editloan', 'LenderController@posteditloan');

Route::get('/lender', 'LenderController@home');
Route::get('/createloan', 'LenderController@createloan');
Route::get('/editloan/{id}', 'LenderController@editloan');
