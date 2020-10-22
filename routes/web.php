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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/user', 'UserController@users')->name('users');
Route::post('/user', 'ListsUserController@store')->name('create_users');
Route::get('/users', function(){
    return view('users');
});
Route::get('/lista', 'ListsUserController@index')->name('list_users_by_db');
