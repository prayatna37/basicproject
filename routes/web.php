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
Route::get('/add','PlayersController@index');
Route::post('/addplayer','PlayersController@store');
Route::get('/show','PlayersController@show');
route::DELETE('/show/{id}/delete', 'PlayersController@destroy')->name('player.destroy');
Route::get('/show/{playerid}/edit','PlayersController@details');
Route::PUT('/show/{playerid}/editform','PlayersController@update')->name('player.update');
