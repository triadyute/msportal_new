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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('user', 'UserController@index')->name('user.index')->middleware('auth');
Route::get('user/{user}', 'UserController@show')->name('user.show')->middleware('auth');
Route::post('user', 'UserController@store')->name('user.store')->middleware('auth');

Route::get('company', 'CompanyController@index')->name('company.index')->middleware('auth');