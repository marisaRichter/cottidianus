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

Route::group(['prefix' => 'comportamentos', 'where'=>['id'=>'[0-9]+']], function() {
	Route::get('', ['as' => 'comportamentos', 'uses'=>'ComportamentosController@index']);
	Route::get('create', ['as' => 'comportamentos.create', 'uses'=>'ComportamentosController@create']);
	Route::get('{id}/delete', ['as' => 'comportamentos.delete', 'uses'=>'ComportamentosController@delete']);
	Route::get('{id}/edit', ['as' => 'comportamentos.edit', 'uses'=>'ComportamentosController@edit']);
	Route::put('{id}/update', ['as' => 'comportamentos.update', 'uses'=>'ComportamentosController@update']);
	Route::post('store', ['as' => 'comportamentos.store', 'uses'=>'ComportamentosController@store']);
});

