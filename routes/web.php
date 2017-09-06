<?php

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
Route::get('/login',['uses'=>'UserController@getLogin']);
Route::post('/authenticate',['uses'=>'UserController@postAuthenticate']);
Route::get('/info',['middleware'=>'info','uses'=>'UserController@getInfo']);
Route::get('/logout','UserController@getLogout');
Route::get('/home', 'HomeController@index')->name('home');