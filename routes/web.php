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
    return view('login');
});

Route::post('/', 'UsuarioController@checkIn');

Route::get('/home', function(){
	return view('dashboard');
});

Route::get('/cliente', 'ClienteController@show');
Route::get('/cliente/new', 'ClienteController@showAdd');
Route::post('/cliente/save', 'ClienteController@add');
Route::get('/cliente/del/{id}', 'ClienteController@remove');
Route::get('/cliente/edit/{id}', 'ClienteController@showUpdate');
Route::post('/cliente/edit/{id}', 'ClienteController@update');
