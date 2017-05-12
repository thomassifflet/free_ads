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

Route::get('/', 'IndexController@showIndex');
Auth::routes();

Route::get('/home', 'IndexController@showHome');
Route::resource('users', 'UserController');
Route::resource('annonces', 'AnnoncesController');
Route::get('/annnonces/{annonce}', 'AnnoncesController@show');
Route::get('/annonces/{annonce}/edit', 'AnnoncesController@edit');
Route::post('/annonces/search', 'AnnoncesController@search');
Route::group(['prefix' => 'messages'], function () {
    Route::get('/', ['as' => 'messages', 'uses' => 'MessagesController@index']);
    Route::get('create', ['as' => 'messages.create', 'uses' => 'MessagesController@create']);
    Route::post('/', ['as' => 'messages.store', 'uses' => 'MessagesController@store']);
    Route::get('{id}', ['as' => 'messages.show', 'uses' => 'MessagesController@show']);
    Route::put('{id}', ['as' => 'messages.update', 'uses' => 'MessagesController@update']);
});